<?php
	$pageTitle = "GIỎ HÀNG | GIÀY B.STORE - Hệ thống giày thể thao chính hãng";
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
							<span><i class="fa fa-caret-right	"></i></span>
							<span>GIỎ HÀNG CỦA BẠN</span>
						</div>
						<!-- BSTORE-BREADCRUMB END -->
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<!-- SHOPPING-CART SUMMARY START -->
						<h2 class="page-title">GIỎ HÀNG<span class="shop-pro-item">Giỏ hàng bao gồm: 1 sản phẩm</span></h2>
						<!-- SHOPPING-CART SUMMARY END -->
					</div>	
					
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<!-- SHOPING-CART-MENU START -->
						<div class="shoping-cart-menu">
							<ul class="step">
								<li class="step-current first">
									<span>01. GIỎ HÀNG</span>
								</li>
								<li class="step-todo second">
									<span>02. ĐĂNG NHẬP</span>
								</li>
								<li class="step-todo third">
									<span>03. ĐỊA CHỈ</span>
								</li>
								<li class="step-todo four">
									<span>04. VẬN CHUYỂN</span>
								</li>
								<li class="step-todo last" id="step_end">
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
										<th class="cart-avail text-center">Tình trạng hàng</th>
										<th class="cart-unit text-right">Đơn giá</th>
										<th class="cart_quantity text-center">Số lượng</th>
										<th class="cart-delete">&nbsp;</th>
										<th class="cart-total text-right">Tổng</th>
									</tr>
								</thead>
								<!-- TABLE HEADER END -->
								<!-- TABLE BODY START -->
								<tbody>	
									<!-- SINGLE CART_ITEM START -->
									<tr>
										<td class="cart-product">
											<a href="#"><img alt="Blouse" src="img/product/cart-image1.png"></a>
										</td>
										<td class="cart-description">
											<p class="product-name"><a href="#">AIR FORCE 1 SHADOW AQUA PINK</a></p>
											<small>SKU : demo_1</small>
											<small><a href="#">Size : 41, Màu : Aqua Pink</a></small>
										</td>
										<td class="cart-avail"><span class="label label-success">Còn hàng</span></td>
										<td class="cart-unit">
											<ul class="price text-right">
												<li class="price">4,500,000 VND</li>
											</ul>
										</td>
										<td class="cart_quantity text-center">
											<div class="cart-plus-minus-button">
												<input class="cart-plus-minus" type="text" name="qtybutton" value="1">
											</div>
										</td>
										<td class="cart-delete text-center">
											<span>
												<a href="#" class="cart_quantity_delete" title="Delete"><i class="fa fa-trash-o"></i></a>
											</span>
										</td>
										<td class="cart-total">
											<span class="price">4,500,000 VND</span>
										</td>
									</tr>
									<!-- SINGLE CART_ITEM END -->
									
									<!-- SINGLE CART_ITEM START -->
									<!--
									<tr>
										<td class="cart-product">
											<a href="#"><img alt="Blouse" src="img/product/cart-image2.jpg"></a>
										</td>
										<td class="cart-description">
											<p class="product-name"><a href="#">Blouse</a></p>
											<small>SKU : demo_2</small>
											<small><a href="#">Size : S, Color : Black</a></small>
										</td>
										<td class="cart-avail"><span class="label label-success">In stock</span></td>
										<td class="cart-unit">
											<ul class="price text-right">
												<li class="price special-price">$24.00</li>
												<li class="price-percent-reduction small">&nbsp;-3%&nbsp;</li>
												<li class="old-price">$27.00</li>
											</ul>
										</td>
										<td class="cart_quantity text-center">
											<div class="cart-plus-minus-button">
												<input class="cart-plus-minus" type="text" name="qtybutton" value="0">
											</div>
										</td>
										<td class="cart-delete text-center">
											<a href="#" class="cart_quantity_delete" title="Delete"><i class="fa fa-trash-o"></i></a>
										</td>
										<td class="cart-total">
											<span class="price">$22.95</span>
										</td>
									</tr> -->
									<!-- SINGLE CART_ITEM END -->
									<!-- SINGLE CART_ITEM START -->
									<!--
									<tr>
										<td class="cart-product">
											<a href="#"><img alt="Blouse" src="img/product/cart-image3.jpg"></a>
										</td>
										<td class="cart-description">
											<p class="product-name"><a href="#">Printed Summer Dress</a></p>
											<small>SKU : demo_5</small>
											<small><a href="#">Size : M, Color : Blue</a></small>
										</td>
										<td class="cart-avail"><span class="label label-success">In stock</span></td>
										<td class="cart-unit">
											<ul class="price text-right">
												<li class="price special-price">$30.45</li>
												<li class="price-percent-reduction small">&nbsp;-7.05%&nbsp;</li>
												<li class="old-price">$37.50</li>
											</ul>
										</td>
										<td class="cart_quantity text-center">
											<div class="cart-plus-minus-button">
												<input class="cart-plus-minus" type="text" name="qtybutton" value="0">
											</div>
										</td>
										<td class="cart-delete text-center">
											<a href="#" class="cart_quantity_delete" title="Delete"><i class="fa fa-trash-o"></i></a>
										</td>
										<td class="cart-total">
											<span class="price">$30.45</span>
										</td>
									</tr> -->
									<!-- SINGLE CART_ITEM END --> 
								</tbody>
								<!-- TABLE BODY END -->
								<!-- TABLE FOOTER START -->
								<tfoot>										
									<tr class="cart-total-price">
										<td class="cart_voucher" colspan="3" rowspan="4"></td>
										<td class="text-right" colspan="3">Tạm tính (Đã bao gồm thuế.v.v.)</td>
										<td id="total_product" class="price" colspan="1">4,500,000 VND</td>
									</tr>
									<tr>
										<td class="text-right" colspan="3">Phí vận chuyển</td>
										<td id="total_shipping" class="price" colspan="1">0 VND</td>
									</tr>
									<tr>
										<td class="text-right" colspan="3">Khuyến mãi</td>
										<td class="price" colspan="1">0 VND</td>
									</tr>
									<tr>
										<td class="total-price-container text-right" colspan="3">
											<span>Tổng thanh toán</span>
										</td>
										<td id="total-price-container" class="price" colspan="1">
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
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="first_item primari-box mycartaddress-info">
							<!-- SINGLE ADDRESS START -->
							<ul class="address">
								<li>
									<h3 class="page-subheading box-subheading">
										Địa chỉ giao hàng
									</h3>
								</li>
								<li><span class="address_name">BootExperts</span></li>
								<li><span class="address_company">Web development Company</span></li>
								<li><span class="address_address1">Bonossri</span></li>
								<li><span class="address_address2">D-Block</span></li>
								<li><span class="">Rampura</span></li>
								<li><span class="">Dhaka</span></li>
								<li><span class="address_phone">+880 1735161598</span></li>
								<li><span class="address_phone_mobile">+880 1975161598</span></li>
							</ul>	
							<!-- SINGLE ADDRESS END -->
						</div>						
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="second_item primari-box mycartaddress-info">
							<!-- SINGLE ADDRESS START -->
							<ul class="address">
								<li>
									<h3 class="page-subheading box-subheading">
										Địa chỉ hóa đơn
									</h3>
								</li>
								<li><span class="address_name">BootExperts</span></li>
								<li><span class="address_company">Web development Company</span></li>
								<li><span class="address_address1">Dhaka</span></li>
								<li><span class="address_address2">Bonossri</span></li>
								<li><span class="">Dhaka-1205</span></li>
								<li><span class="">Rampura</span></li>
								<li><span class="address_phone">+880 1735161598</span></li>
								<li><span class="address_phone_mobile">+880 1975161598</span></li>
							</ul>	
							<!-- SINGLE ADDRESS END -->
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<!-- RETURNE-CONTINUE-SHOP START -->
						<div class="returne-continue-shop">
							<a href="index.php" class="continueshoping"><i class="fa fa-chevron-left"></i>Tiếp tục mua sắm</a>
							<a href="checkout-signin.php" class="procedtocheckout">Tiếp tục đơn hàng<i class="fa fa-chevron-right"></i></a>
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
		<!--===============================================-->
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