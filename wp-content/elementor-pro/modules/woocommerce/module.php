<?php
namespace ElementorPro\Modules\Woocommerce;

use ElementorPro\Base\Module_Base;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Module extends Module_Base {

	public function get_name() {
		return 'woocommerce';
	}

	public function get_widgets() {
		return [
			'Products',
			'Add_To_Cart',
			'Elements',
			'Categories',
		];
	}

	public function add_product_post_class( $classes ) {
		$classes[] = 'product';

		return $classes;
	}

	public function add_products_post_class_filter() {
		add_filter( 'post_class', [ $this, 'add_product_post_class' ] );
	}

	public function remove_products_post_class_filter() {
		remove_filter( 'post_class', [ $this, 'add_product_post_class' ] );
	}
}
