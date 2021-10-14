<?php
class Kpoint_Setting{
	
	public static $instance;
	private $settings;
	public static function instance(){
		if(!Kpoint_Setting::$instance){
			Kpoint_Setting::$instance = new Kpoint_Setting();
		}
		return Kpoint_Setting::$instance;
	}
	private function __construct (){
		add_action('admin_menu', array($this, 'register_settings_page'));
		add_action('admin_init', array($this, 'options_init'));
		add_action('wp_ajax_kpoint_update_user_point', array($this, 'update_user_point'));
	}

	function update_user_point(){
		if(!current_user_can('administrator')){
			echo "Bạn không đủ quyền để truy cập tính năng này!";
			die();
		}

		$user_id =  isset($_POST['user_id']) ? intval($_POST['user_id']) : 0;
		$new_amount = isset($_POST['new_amount']) ? floatval($_POST['new_amount']) : "not_ok";
		$note = isset($_POST['note']) ? sanitize_text_field($_POST['note']) : "";
		$nonce = isset($_POST['nonce']) ? sanitize_text_field($_POST['nonce']) : "";


		if( !wp_verify_nonce($nonce, 'edit_point_' . $user_id)) {
			wp_send_json(array(
				'status' => 'fail',
				'message' => "Lược chỉnh sửa hết hạn. Vui lòng tải lại trang"
			));
		  	wp_die();
		}

		if($user_id == 0 || $new_amount === "not_ok"){
			
			wp_send_json(array(
				'status' => 'fail',
				'message' => "thông tin không hợp lệ"
			));
			die();
		}

		$user_point = new KPoint($user_id);
		$current_amount = $user_point->get_balance();
		$change_value = floatval($new_amount) - $current_amount;

		if($change_value >= 0){
			$note .= ". Tăng " .KPoint::get_display_balance($change_value) . ' bởi admin';
			$user_point->increse_point(abs($change_value), "admin", date("d-m-y H:i:s"), $note);
		}else{
			$note .= ". Giảm " . KPoint::get_display_balance($change_value) . ' bởi admin';
			$user_point->decrese_point(abs($change_value), "admin", date("d-m-y H:i:s"), $note);
		}

		wp_send_json(array(
			'status' => 'done',
			'message' => $user_point->display_balance()
		));
		

		die();
	}

	function options_init() {
		register_setting(KPOINT_SETTING_KEY_GROUP,KPOINT_SETTING_OPTION_KEY);
	}

	function register_settings_page() {

		$page = add_submenu_page('options-general.php', 
			KPOINT_PLUGIN_TITLE, 
			KPOINT_PLUGIN_TITLE, 
			'manage_options', 
			KPOINT_PLUGIN_SLUG,
			array($this, 'settings_page')
		);
	}

	public function create_product_buy_point($name, $price, $point){
		$post = array(		    
		    'post_content' => '',
		    'post_status' => "publish",
		    'post_title' => $name ? $name : "Nạp " . KPoint::get_display_balance($point),
		    'post_parent' => '',
		    'post_type' => "product",
		);
		$post_id = wp_insert_post( $post );
		
		if($post_id){
			$product = wc_get_product($post_id);
			$product->set_regular_price($price);
			$product->save();
		    update_post_meta($post_id, 'keypoint_amount', $point);
		    $terms = array( 'exclude-from-search', 'exclude-from-catalog' ); // for hidden..
			wp_set_post_terms( $post_id, $terms, 'product_visibility', false );
		}
		return $post_id;

	}
	public function get_settings(){
		//delete_option('ssa_settings');
		$buy_products = $this->get_products_to_buy();
		$default_options = array(
								  'point_unit_name' => 'Điểm K-Point',
								  'rate_currency_to_point' => 1000,
								  'products_to_buy' => $buy_products,
								  'free_point_register' => 0,
								  'gif_point_when_buy' => 0,
								  'gif_point_type' => 'percent',
								  'gif_point_max_order' => 0,
								  'gif_point_min_order' => 200000,
								);
		if(!get_option(KPOINT_SETTING_OPTION_KEY)) { // Doesn't exist -> set defaults
			

			add_option(KPOINT_SETTING_OPTION_KEY,$default_options);
		}

		$current_options = get_option(KPOINT_SETTING_OPTION_KEY);
		$this->settings = array_merge($default_options, $current_options);
		$this->settings['products_to_buy'] = $buy_products;
		return $this->settings;
	}
	public function get_setting($name){
		if(isset($this->settings[$name])) return $this->settings[$name];
		return null;
	}

	public function get_products_to_buy($fields = 'ids'){
		return get_posts(array(
			'post_type' => 'product',
			'post_status' => 'publish',
			'posts_per_page' => -1,	
			'meta_key' => 'keypoint_amount',
			'fields' => $fields
			)
		);
	}

	function settings_page() { 
		if(!current_user_can('administrator')){
			echo "you can not access this page!";
			return;
		}
		
		$buy_point_link = admin_url('options-general.php?page='.KPOINT_PLUGIN_SLUG.'&tab=buy_point');
		$users_tab_link = admin_url('options-general.php?page='.KPOINT_PLUGIN_SLUG.'&tab=users');
		$config_tab_link = admin_url('options-general.php?page='.KPOINT_PLUGIN_SLUG);
		$current_tab = isset($_GET['tab']) ? sanitize_text_field($_GET['tab']) : '';
		

		if(isset($_POST['them_menh_gia'])){
			
			$product_name = isset($_POST['product_name']) ? sanitize_text_field($_POST['product_name']) : '';
			
			$product_price = isset($_POST['product_price']) ? intval($_POST['product_price']) : '';
			$product_point = isset($_POST['product_point']) ? intval($_POST['product_point']) : '';

			if(!$product_price || !$product_point){
				echo '<p style="color:red">vui lòng nhập đầy đủ thông tin</p>';
			}else{
				$this->create_product_buy_point($product_name, $product_price, $product_point);
				echo '<p style="color:green">đã thêm mệnh giá mới thành công!</p>';
			}
		}

		if(isset($_GET['thankyou'])){
			echo '<p style="color:green">Cám ơn bạn. Chúng tôi ghi nhận góp ý của bạn.</p>';
		}
		?>


		<div class="wrap" style="margin-top: 32px">	
			<h1><?php echo KPOINT_PLUGIN_TITLE;  ?> <span class="version">v<?php echo KPOINT_VERSION;?></span></h1>
			<div class="tab">
			<a href="<?php echo $config_tab_link;?>" class="<?php echo $current_tab == '' ? 'active': '' ;?>">Cấu hình chung</a> |
			<a href="<?php echo $users_tab_link; ?>" class="<?php echo $current_tab == 'users' ? 'active': '' ;?>">Quản lý point</a> |
			<a href="<?php echo $buy_point_link; ?>"class="<?php echo $current_tab == 'buy_point' ? 'active': '' ;?>">Mua Điểm</a> 
			
		</div>

			
		<?php

		$tab = isset($_GET['tab']) ? sanitize_text_field($_GET['tab']): '';
		switch ($tab) {
			case 'buy_point':
				$this->buy_point();
				break;
			case 'users':
				$this->users_tab();
				break;
			default:
				$this->general_config_tab();
				break;
		}

		?>
		<br>
		<div id="gopy">
			<hr>
			<br>
			<form method="POST" action="http://mecode.pro/">
				<textarea rows="3" cols="100" placeholder="Bạn cần thêm tính năng gì? Chúng tôi đang nâng cấp K-POINT" name="request_detail"></textarea>
				<input type="hidden" name="plugin_name" value="kpoint">
				<input type="hidden" name="current_page" value="<?php echo home_url($_SERVER['REQUEST_URI']) ?>">
				<input type="hidden" name="action" value="send_custom_function_request">
				<p>
					<input type="submit" value="GỬI" name="">
				</p>
			</form>
			
		</div>
		<?php

	}

	function users_tab(){
		$all_users = get_users( );
		
		?>
		<br><br>
		<table class="wp-list-table widefat fixed striped posts">
			<tr>
				<th>User ID</th>
				<th>User Name</th>
				<th>Balance</th>
			</tr>
			<?php foreach ( $all_users as $user) : $user_point = new KPoint($user->ID) ?>
				<tr>
					<td><?php echo $user->ID  ?></td>
					<td><?php echo esc_html( $user->display_name ) ?> </td>
					<td>
						<div class="view-edit-wrapper" id="kp_user_id<?php echo  $user->ID; ?>">
						<div class="kp-view">
							<div class="kp-value">
								<?php  echo $user_point->display_balance(); ?>
							</div>
							
							<span class="dashicons dashicons-edit kp_edit_user_point" data-user_id="<?php echo  $user->ID; ?>"></span>
						</div>
						<div class="kp-edit" >
							<input type="number" name="kp_new_value" value="<?php echo $user_point->get_balance(); ?>">
							<input type="text" name="kp_update_note" placeholder="ghi chú cho user">
							<?php wp_nonce_field('edit_point_' . $user->ID); ?>
							<button class="kp_update_user_point_btn" data-user_id="<?php echo  $user->ID; ?>">
								<span class='dashicons dashicons-saved'></span>
							</button>
							<br>
							<p class="error"></p>

						</div>
						</div>
						
							
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
		<style type="text/css">
			input[name="kp_new_value"]{
			width: 80px;
			}

			.kp_update_user_point_btn{
			height: 30px;
			position: relative;
			bottom:3px;
			}

			.kp-edit{
			display: none;
			}

			.kp_edit_user_point{
			cursor: pointer;

			}

			.kp_edit_user_point:hover{
			font-weight: 700;
			}

			.view-edit-wrapper.editing .kp-view{
			display: none;
			}

			.view-edit-wrapper.editing .kp-edit{
			display: block;
			}

			.kp-edit .error{
			color: red;
			}
		</style>
		<script type="text/javascript">
			jQuery(document).ready(function(){
				jQuery('.kp_edit_user_point').click(function(){
				    var user_id = jQuery(this).data('user_id');
				    jQuery('#kp_user_id'+user_id).addClass('editing');
				});


				jQuery('.kp_update_user_point_btn').click(function(){
					var user_id = jQuery(this).data('user_id');
					var new_amount = jQuery('#kp_user_id'+user_id + ' input[name="kp_new_value"]').val();
					var note = jQuery('#kp_user_id'+user_id + ' input[name="kp_update_note"]').val();
					var nonce = jQuery('#kp_user_id'+user_id + ' input[name="_wpnonce"]').val();
					//kpoint_update_user_point
					var data = {
						new_amount : new_amount,
						nonce : nonce,
						note: note,
						user_id: user_id,
						action: 'kpoint_update_user_point'
					};
					jQuery.post(ajaxurl, data, function(res){
						if(res.status == 'done'){
							jQuery('#kp_user_id'+user_id + ' .kp-view .kp-value').text(res.message);
							jQuery('#kp_user_id'+user_id).removeClass('editing');
							jQuery('#kp_user_id'+user_id + ' .error').text("");
						}else{
							jQuery('#kp_user_id'+user_id + ' .error').text(res.message);
						}
					});
				});
			});


		</script>
		<?php

	}

	function buy_point(){
		$products_buy = $this->get_products_to_buy('all');
		$sample_price = 1000;
		$sample_point = $sample_price * $this->settings['rate_currency_to_point']; 
		?>
			<div>
				<form method="post" action="" class="kpoint-container">					
					<p>
						Tên Sản Phẩm
					</p>
					<p>
						<input type="text" name="product_name" placeholder="Nạp <?php echo KPoint::get_display_balance($sample_point); ?>" value="">	
					</p>
					<p>
						Số Tiền
					</p>
					<p>
						<input type="text" name="product_price" placeholder="<?php echo $sample_price; ?>" value="">	
					</p>
					<p>
						Số <?php echo KPOINT_UNIT_NAME; ?>
					</p>
					<p>
						<input type="text" name="product_point" placeholder="<?php echo $sample_point; ?>" value="">	
					</p>

					
					<input type="submit" value="Thêm Mệnh Giá Nạp" name="them_menh_gia">	
				</form>
				<hr>
				<h3 scope="row">Các mệnh giá nạp</h3>
		    	<div class="activated">
		    		<ul>
		        	<?php foreach ($products_buy as $post_product) :
		        		$product = wc_get_product($post_product->ID);
		        		$price = $product->get_price_html();
		        		$point = get_post_meta($post_product->ID,'keypoint_amount', true);
		        	?>
	        			<li>
	        				<a 
	        				href="<?php echo get_edit_post_link($post_product->ID);?>" title ="bấm để chỉnh sửa sản phẩm" target="blank"> 
	        				<?php echo $post_product->post_title; ?> : 
	        				Giá <?php echo $price;?> - <?php echo KPoint::get_display_balance($point); ?>
	        					
	        				</a>
	        			</li>
	        		<?php endforeach; ?>
	        		</ul>
		        </div>
			</div>
		<?php

	}

	function general_config_tab(){
		
		
			?>
			<div>
				<form method="post" action="options.php" class="kpoint-container">
					<?php settings_fields(KPOINT_SETTING_KEY_GROUP); ?>
					
					<table class="form-table">
				    	<tr valign="top">
							<th scope="row">Đơn Vị Điểm</th>
					    	<td class="activated">
					        	<input id="activated" name="<?php echo KPOINT_SETTING_OPTION_KEY; ?>[point_unit_name]" type="text" value="<?php echo $this->settings['point_unit_name']; ?>" />  &nbsp; &nbsp; <br>
					        	<i>Điểm, Xèng, Ngân Lượng, Xu, Mana ...</i>

					        </td>
					    </tr>
					    <tr valign="top">
							<th scope="row">Tỉ giá </th>
					    	<td class="activated">
					        	<input id="activated" name="<?php echo KPOINT_SETTING_OPTION_KEY; ?>[rate_currency_to_point]" type="text" value="<?php echo $this->settings['rate_currency_to_point']; ?>" />  &nbsp; &nbsp; <br>
					        	<i><?php echo wc_price(1) ?> tiền tệ đổi được bao nhiêu <?php echo KPOINT_UNIT_NAME; ?></i>

					        </td>
					    </tr>

					    <tr valign="top">
							<th scope="row"><?php echo KPOINT_UNIT_NAME; ?> tặng khi tạo tài khoản </th>
					    	<td class="activated">
					        	<input id="activated" name="<?php echo KPOINT_SETTING_OPTION_KEY; ?>[free_point_register]" type="text" value="<?php echo $this->settings['free_point_register']; ?>" />  &nbsp; &nbsp; <br>
					        	<i>để 0 để không tặng khi đăng ký tài khoản</i>

					        </td>
					    </tr>

					    <tr valign="top">
							<th scope="row"><?php echo KPOINT_UNIT_NAME; ?> tặng khi mua hàng </th>
					    	<td class="activated">
					        	<input id="activated" name="<?php echo KPOINT_SETTING_OPTION_KEY; ?>[gif_point_when_buy]" type="text" value="<?php echo $this->settings['gif_point_when_buy']; ?>" />  
					        	<select name="<?php echo KPOINT_SETTING_OPTION_KEY; ?>[gif_point_type]">
					        		<option <?php  selected('percent', $this->settings['gif_point_type']) ?> value="percent">% Đơn Hàng</option>
					        		<option <?php  selected('fixed', $this->settings['gif_point_type']) ?> value="fixed">Cố định</option>
					        	</select>
					        	<br><i>để 0 để không tặng khi mua hàng</i>&nbsp; &nbsp;
					        	<hr>

					        	Tối thiểu  <br><input id="activated" name="<?php echo KPOINT_SETTING_OPTION_KEY; ?>[gif_point_min_order]" type="text" value="<?php echo $this->settings['gif_point_min_order']; ?>" /> <i>để 0 để không ràng buột</i>
					        	<br>Tối đa <br>
					        	<input id="activated" name="<?php echo KPOINT_SETTING_OPTION_KEY; ?>[gif_point_max_order]" type="text" value="<?php echo $this->settings['gif_point_max_order']; ?>" />
					        	<i>để 0 để không ràng buột</i>

					        </td>
					    </tr>
					</table>
					<input type="submit" value="Cập Nhật" name="">	
				</form>
			</div>
		<?php
	}



}