<?php
namespace Elementor\App\Modules\KitLibrary;

use Elementor\Core\Admin\Menu\Interfaces\Admin_Menu_Item;
use Elementor\TemplateLibrary\Source_Local;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Kit_Library_Menu_Item implements Admin_Menu_Item {

	public function is_visible() {
		return true;
	}

	public function get_parent_slug() {
		return Source_Local::ADMIN_MENU_SLUG;
	}

	public function get_label() {
		return esc_html__( 'Website Templates', 'elementor' );
	}

	public function get_capability() {
		return 'manage_options';
	}
}
