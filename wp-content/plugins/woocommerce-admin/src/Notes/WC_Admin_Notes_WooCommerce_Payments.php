<?php
/**
 * WooCommerce Admin WooCommerce Payments Note Provider.
 *
 * Adds a note to the merchant's inbox showing the benefits of the WooCommerce Payments.
 *
 * @package WooCommerce Admin
 */

namespace Automattic\WooCommerce\Admin\Notes;

defined( 'ABSPATH' ) || exit;

/**
 * WC_Admin_Notes_WooCommerce_Payments
 */
class WC_Admin_Notes_WooCommerce_Payments {
	/**
	 * Note traits.
	 */
	use NoteTraits;

	/**
	 * Name of the note for use in the database.
	 */
	const NOTE_NAME = 'wc-admin-woocommerce-payments';

	/**
	 * Name of the note for use in the database.
	 */
	const PLUGIN_SLUG = 'woocommerce-payments';

	/**
	 * Name of the note for use in the database.
	 */
	const PLUGIN_FILE = 'woocommerce-payments/woocommerce-payments.php';

	/**
	 * Attach hooks.
	 */
	public function __construct() {
		add_action( 'woocommerce_note_action_install-now', array( $this, 'install' ) );
		add_action( 'wc-admin-woocommerce-payments_add_note', array( $this, 'add_note' ) );
	}

	/**
	 * Maybe add a note on WooCommerce Payments for US based sites older than a week without the plugin installed.
	 */
	public static function possibly_add_note() {
		if ( ! self::wc_admin_active_for( WEEK_IN_SECONDS ) || 'US' !== WC()->countries->get_base_country() ) {
			return;
		}

		$data_store = \WC_Data_Store::load( 'admin-note' );

		// We already have this note? Then mark the note as actioned.
		$note_ids = $data_store->get_notes_with_name( self::NOTE_NAME );
		if ( ! empty( $note_ids ) ) {

			$note_id = array_pop( $note_ids );
			$note    = WC_Admin_Notes::get_note( $note_id );

			// If the WooCommerce Payments plugin was installed after the note was created, make sure it's marked as actioned.
			if ( self::is_installed() && WC_Admin_Note::E_WC_ADMIN_NOTE_ACTIONED !== $note->get_status() ) {
				$note->set_status( WC_Admin_Note::E_WC_ADMIN_NOTE_ACTIONED );
				$note->save();
			}

			return;
		}

		$current_date = new \DateTime();
		$publish_date = new \DateTime( '2020-04-14' );

		if ( $current_date >= $publish_date ) {

			$note = self::get_note();
			if ( self::can_be_added() ) {
				$note->save();
			}

			return;

		} else {

			$hook_name = sprintf( '%s_add_note', self::NOTE_NAME );

			if ( ! WC()->queue()->get_next( $hook_name ) ) {
				WC()->queue()->schedule_single( $publish_date->getTimestamp(), $hook_name );
			}
		}
	}

	/**
	 * Add a note about WooCommerce Payments.
	 */
	public static function get_note() {
		$note = new WC_Admin_Note();
		$note->set_title( __( 'Try the new way to get paid', 'woocommerce-admin' ) );
		$note->set_content( __( 'Securely accept credit and debit cards on your site. Manage transactions without leaving your WordPress dashboard. Only with WooCommerce Payments.', 'woocommerce-admin' ) );
		$note->set_content_data( (object) array() );
		$note->set_type( WC_Admin_Note::E_WC_ADMIN_NOTE_MARKETING );
		$note->set_name( self::NOTE_NAME );
		$note->set_source( 'woocommerce-admin' );
		$note->add_action( 'learn-more', __( 'Learn more', 'woocommerce-admin' ), 'https://woocommerce.com/payments/', WC_Admin_Note::E_WC_ADMIN_NOTE_UNACTIONED );
		$note->add_action( 'install-now', __( 'Install now', 'woocommerce-admin' ), false, WC_Admin_Note::E_WC_ADMIN_NOTE_ACTIONED, true );

		// Create the note as "actioned" if the plugin is already installed.
		if ( self::is_installed() ) {
			$note->set_status( WC_Admin_Note::E_WC_ADMIN_NOTE_ACTIONED );
		}
		return $note;
	}


	/**
	 * Check if the WooCommerce Payments plugin is active or installed.
	 */
	protected static function is_installed() {
		if ( defined( 'WC_Payments' ) ) {
			return true;
		}
		include_once ABSPATH . '/wp-admin/includes/plugin.php';
		return 0 === validate_plugin( self::PLUGIN_FILE );
	}

	/**
	 * Install WooCommerce Payments when note is actioned.
	 *
	 * @param WC_Admin_Note $note Note being acted upon.
	 */
	public function install( $note ) {
		if ( self::NOTE_NAME === $note->get_name() && current_user_can( 'install_plugins' ) ) {
			$install_request = array( 'plugins' => self::PLUGIN_SLUG );
			$installer       = new \Automattic\WooCommerce\Admin\API\Plugins();
			$result          = $installer->install_plugins( $install_request );

			if ( is_wp_error( $result ) ) {
				return;
			}

			$activate_request = array( 'plugins' => self::PLUGIN_SLUG );
			$installer->activate_plugins( $activate_request );
		}
	}
}
