<?php

//buying kpoint

class WooKPoint{

	//add product => checkout => completed => add point
	//quy doi tien => kpoint

	// dung point mua hang

	
	public static $instance;
	public static function instance(){
		if(!WooKPoint::$instance){
			WooKPoint::$instance = new WooKPoint();
		}
		return WooKPoint::$instance;
	}
	private function __construct (){
		add_filter( 'woocommerce_product_data_tabs', array($this,'custom_product_tabs') );
		//add_filter( 'woocommerce_product_data_tabs', array('WooKPoint','options_product_tab_content' ));
		add_action( 'woocommerce_product_data_panels', array($this,'options_product_tab_content' ));
		add_action( 'woocommerce_process_product_meta_simple', array($this,'save_option_fields'  ));
		add_action( 'woocommerce_process_product_meta_variable', array($this,'save_option_fields'  ));

		
		add_action('woocommerce_order_status_cancelled', array($this,'handle_order_status_changed'), 10,1);
		add_action('woocommerce_order_status_refunded', array($this,'handle_order_status_changed'), 10,1);
		add_action('woocommerce_order_status_failed', array($this,'handle_order_status_changed'), 10,1);
		add_action('woocommerce_order_status_completed', array($this,'handle_order_status_changed'), 10,1);

		add_filter( 'woocommerce_add_cart_item_data', array($this,'check_and_clear_cart'), 10,  3);

	}
	function check_and_clear_cart( $cart_item_data, $product_id, $variation_id ){
		global $woocommerce;
		if(isset($_GET['reset_cart'])){
			$woocommerce->cart->empty_cart();	
		}   
	    
	    return $cart_item_data;
	}

	function handle_order_status_changed($order_id){
		$order = new WC_ORDER($order_id);
		$order_items = $order->get_items();
		
		$user = $order->get_user();
		if(!$user) return;
		$user_id = $order->get_user_id();
		if(!$user_id) return;

		foreach ($order_items as $item) {
			$product = $item->get_product();
			$quantity = $item->get_quantity();
			$point_amount = get_post_meta($product->get_id(), 'keypoint_amount', true);
			if($point_amount){
				if($order->has_status( 'completed' )){
					$kpoint = new KPoint($user_id);
					$note = sprintf('%s đã được tăng %s %s.', $user->user_login, number_format($point_amount * $quantity, 0,',','.'), KPOINT_UNIT_NAME );
					$kpoint->increse_point($point_amount * $quantity, "woocommerce", $order_id, $note);
					$order->add_order_note($note);
					
				}else{
					$kpoint = new KPoint($user_id);
					$note = sprintf('%s đã bị trừ %s %s', $user->user_login, number_format($point_amount * $quantity, 0,',','.'), KPOINT_UNIT_NAME );
					$kpoint->increse_point($point_amount * $quantity, "woocommerce", $order_id, $note);
					$order->add_order_note($note);			
				}
			}
		}

		

		
	}

	public function options_product_tab_content() {

		global $post;
		
		// Note the 'id' attribute needs to match the 'target' parameter set above
		?><div id='kpoint_options' class='panel woocommerce_options_panel'><?php

			?><div class='options_group'><?php

				woocommerce_wp_text_input( array(
					'id'				=> 'keypoint_amount',
					'label'				=> __( 'Điểm '.KPOINT_UNIT_NAME.' tương ứng', 'woocommerce' ),
					'desc_tip'			=> false,
					'description'		=> __( 'Khi mua sản phẩm sẽ đổi ra điểm '.KPOINT_UNIT_NAME.' tương ứng. Để trống để không đổi thành điểm', 'woocommerce' ),
					'type' 				=> 'number',
					'custom_attributes'	=> array(
						'min'	=> '0',
						'step'	=> '1000',
					),
				) );

			?></div>

		</div><?php

	}

	public function save_option_fields( $post_id ) {
		
		$keypoint_amount = isset( $_POST['keypoint_amount'] ) ? intval($_POST['keypoint_amount']) : 0;
		if($keypoint_amount){
			update_post_meta( $post_id, 'keypoint_amount', $keypoint_amount );	
		}
		
	}
	public function custom_product_tabs( $tabs) {

		$tabs['kpoint'] = array(
			'label'		=> __( 'K-Point', 'woocommerce' ),
			'target'	=> 'kpoint_options',
			'class'		=> array(   ),//'show_if_simple', 'show_if_variable'
		);

		return $tabs;

	}
	
}

WooKPoint::instance();
