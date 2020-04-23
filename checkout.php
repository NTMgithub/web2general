<?php
	$pageTitle = "THANH TOÁN | GIÀY B.STORE - Hệ thống giày thể thao chính hãng";
	function customPageHeader(){?>
		<title>$pageTitle</title>
	<?php }

	include 'header.php';
?>
		<!-- MAIN-CONTENT-SECTION START -->
		<section class="main-content-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<!-- BSTORE-BREADCRUMB START -->
						<div class="bstore-breadcrumb">
							<a href="index.php">TRANG CHỦ</a>
							<span><i class="fa fa-caret-right"></i></span>
							<span>Phương thức thanh toán</span>
						</div>
						<!-- BSTORE-BREADCRUMB END -->
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h2 class="page-title">Chọn một phương thức thanh toán <span class="shop-pro-item">Giỏ hàng bao gồm: 1 sản phẩm </span></h2>
					</div>	
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<!-- SHOPING-CART-MENU START -->
						<div class="shoping-cart-menu">
							<ul class="step">
								<li class="step-todo first step-done">
									<span><a href="cart.php">01. GIỎ HÀNG</a></span>
								</li>
								<li class="step-todo second step-done">
									<span><a href="checkout-signin.php">02. ĐĂNG NHẬP</a></span>
								</li>
								<li class="step-todo third step-done">
									<span><a href="checkout-address.php">03. ĐỊA CHỈ</a></span>
								</li>
								<li class="step-todo four step-done">
									<span><a href="checkout-shipping.php">04. VẬN CHUYỂN</a></span>
								</li>
								<li class="step-current last" id="step_end">
									<span>05. THANH TOÁN</span>
								</li>
							</ul>									
						</div>
						<!-- SHOPING-CART-MENU END -->
						<!-- CART TABLE_BLOCK START -->
						<div class="table-responsive">
							<!-- TABLE START -->
							<table class="table table-bordered" id="cart-summary">
								<!-- TABLE HEADER START -->
								<thead>
									<tr>
										<th class="cart-product">Sản phẩm</th>
										<th class="cart-description">Miêu tả sản phẩm</th>
										<th class="cart-availability text-center">Tình trạng hàng</th>
										<th class="cart-unit text-right">Đơn giá</th>
										<th class="cart_quantity text-center">Số lượng</th>
										<th class="cart-total text-right">Tổng</th>
									</tr>
								</thead>
								<!-- TABLE HEADER END -->
								<!-- TABLE BODY START -->
								<tbody>
									<!-- SINGLE CART_ITEM START -->
									<tr>
										<td class="cart-product">
											<a href="#">
												<img alt="Faded" src="img/product/cart-image1.png">
											</a>
										</td>
										<td class="cart-description">
											<p class="product-name"><a href="#">AIR FORCE 1 SHADOW AQUA PINK</a></p>
											<small>SKU : demo_1</small>
											<small><a href="#">Size : 41, Màu : Aqua Pink</a></small>
										</td>
										<td class="cart-avail">
											<span class="label label-success">Còn hàng</span>
										</td>
										<td class="cart-unit">
											<ul class="price text-right">
												<li class="price">4,500,000 VND</li>
											</ul>
										</td>
										<td class="cart_quantity text-center">
											<span>1</span>
										</td>
										<td class="cart-total">
											<span class="price">4,500,000 VND</span>
										</td>
									</tr>
									<!-- SINGLE CART_ITEM END -->
								</tbody>
								<!-- TABLE BODY END -->
								<!-- TABLE FOOTER START -->
								<tfoot>
									<tr>
										<td class="text-right" colspan="4">Tạm tính</td>
										<td class="price" colspan="2">4,500,000 VND</td>
									</tr>
									<tr>
										<td class="text-right" colspan="4">Chi phí gói quà</td>
										<td class="price" colspan="2">0 VND</td>
									</tr>
									<tr>
										<td class="text-right" colspan="4">Phí vận chuyển</td>
										<td class="price" colspan="2">0 VND</td>
									</tr>
									<tr>
										<td class="text-right" colspan="4">Khuyễn mãi</td>
										<td class="price" colspan="2">0 VND</td>
									</tr>
									<tr>
										<td class="total-price-container text-right" colspan="4">
											<span>Tổng thanh toán</span>
										</td>
										<td id="total-price-container" class="price" colspan="2">
											<span id="total-price">4,500,000 VND</span>
										</td>
									</tr>
								</tfoot>
								<!-- TABLE FOOTER END -->								
							</table>
							<!-- TABLE END -->
						</div>
						<!-- CART TABLE_BLOCK END -->
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<!-- FOUR-PAYMENT-METHOD START -->
						<div class="four-payment-method">
							<!-- SINGLE-PAYMENT-METHOD START -->
							<div class="single-payment-method payment-method-one">
								<a href="#">CHUYỂN KHOẢN NGÂN HÀNG<span></span><i class="fa fa-chevron-right"></i></a>
							</div>
							<!-- SINGLE-PAYMENT-METHOD END -->
							<!-- SINGLE-PAYMENT-METHOD START -->							
							<div class="single-payment-method payment-method-three">
								<a href="#">THANH TOÁN BẰNG PAYPAL<span></span><i class="fa fa-chevron-right"></i></a>
							</div>
							<!-- SINGLE-PAYMENT-METHOD END -->
							<!-- SINGLE-PAYMENT-METHOD START -->							
							<div class="single-payment-method payment-method-four">
								<a href="#">THANH TOÁN BẰNG MASTERCARD<span></span><i class="fa fa-chevron-right"></i></a>
							</div>	
							<!-- SINGLE-PAYMENT-METHOD END -->		
							<!-- SINGLE-PAYMENT-METHOD START -->							
							<div class="single-payment-method payment-method-two" style="background: rgba(0, 0, 0, 0) url('img/cod1.png') no-repeat scroll 12px 15px;">
								<a href="#">THANH TOÁN KHI NHẬN HÀNG (COD)<span></span><i class="fa fa-chevron-right"></i></a>
							</div>	
							<!-- SINGLE-PAYMENT-METHOD END -->						
						</div>
						<!-- FOUR-PAYMENT-METHOD END -->
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<!-- RETURNE-CONTINUE-SHOP START -->
						<div class="returne-continue-shop">
							<a href="index.php" class="continueshoping"><i class="fa fa-chevron-left"></i>Tiếp tục mua sắm</a>
						</div>	
						<!-- RETURNE-CONTINUE-SHOP END -->								
					</div>
				</div>
			</div>
		</section>
		<!-- MAIN-CONTENT-SECTION END -->
<?php
	include 'footer.php';
?>
		<!-- JS 
		===============================================-->
		<!-- jquery js -->
		<script src="js/vendor/jquery-1.11.3.min.js"></script>
		
		<!-- fancybox js -->
        <script src="js/jquery.fancybox.js"></script>
		
		<!-- bxslider js -->
        <script src="js/jquery.bxslider.min.js"></script>
		
		<!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
		
		<!-- owl carousel js -->
        <script src="js/owl.carousel.min.js"></script>
		
		<!-- nivo slider js -->
        <script src="js/jquery.nivo.slider.js"></script>
		
		<!-- jqueryui js -->
        <script src="js/jqueryui.js"></script>
		
		<!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
		
		<!-- wow js -->
        <script src="js/wow.js"></script>		
		<script>
			new WOW().init();
		</script>

		<!-- Google Map js -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>	
		<script>
			function initialize() {
			  var mapOptions = {
				zoom: 8,
				scrollwheel: false,
				center: new google.maps.LatLng(35.149868, -90.046678)
			  };
			  var map = new google.maps.Map(document.getElementById('googleMap'),
				  mapOptions);
			  var marker = new google.maps.Marker({
				position: map.getCenter(),
				map: map
			  });

			}
			google.maps.event.addDomListener(window, 'load', initialize);				
		</script>
		<!-- main js -->
        <script src="js/main.js"></script>
    </body>

</html>