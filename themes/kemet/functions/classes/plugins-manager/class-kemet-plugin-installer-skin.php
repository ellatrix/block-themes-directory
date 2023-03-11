<?php
/**
 * Kemet_Plugin_Installer_Skin
 *
 * @package Kemet Addons
 */

use Symfony\Component\Console\Output\OutputInterface;

if ( ! class_exists( 'Kemet_Plugin_Installer_Skin' ) ) {

	/**
	 * Kemet Panel
	 *
	 * @since 1.0.0
	 */
	class Kemet_Plugin_Installer_Skin extends Plugin_Installer_Skin {
		public function header() {
		}

		public function footer() {
		}

		public function feedback( $string, ...$args ) {
		}

		public function before() {
		}

		public function after() {
		}

		protected function decrement_update_count( $type ) {
		}

		public function bulk_header() {
		}

		public function bulk_footer() {
		}

		public function error( $errors ) {
		}
	}
}
