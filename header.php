<?php 
	include_once 'classes/product.php';
	include_once 'classes/category.php';
?>
<?php 
	$prod = new product();
	$cat = new category();

?>

<!doctype html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en"><!--<![endif]-->
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?= isset($pageTitle) ? $pageTitle : "GIÀY B.STORE - Hệ thống giày thể thao chính hãng"?></title>
        <?php if (function_exists('customPageHeader')){
      		customPageHeader();
    	}?>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
		
		<!-- FONTS
		============================================ -->	
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'> 
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,400italic&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
				
		<!-- animate CSS
		============================================ -->
        <link rel="stylesheet" href="css/animate.css">		
		
		<!-- FANCYBOX CSS
		============================================ -->			
        <link rel="stylesheet" href="css/jquery.fancybox.css">	
		
		<!-- BXSLIDER CSS
		============================================ -->			
        <link rel="stylesheet" href="css/jquery.bxslider.css">			
				
		<!-- MEANMENU CSS
		============================================ -->			
        <link rel="stylesheet" href="css/meanmenu.min.css">	
		
		<!-- JQUERY-UI-SLIDER CSS
		============================================ -->			
        <link rel="stylesheet" href="css/jquery-ui-slider.css">		
		
		<!-- NIVO SLIDER CSS
		============================================ -->			
        <link rel="stylesheet" href="css/nivo-slider.css">
		
		<!-- OWL CAROUSEL CSS 	
		============================================ -->	
        <link rel="stylesheet" href="css/owl.carousel.css">
		
		<!-- OWL CAROUSEL THEME CSS 	
		============================================ -->	
         <link rel="stylesheet" href="css/owl.theme.css">
		
		<!-- BOOTSTRAP CSS 
		============================================ -->	
        <link rel="stylesheet" href="css/bootstrap.min.css">
		
		<!-- FONT AWESOME CSS 
		============================================ -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		
		<!-- NORMALIZE CSS 
		============================================ -->
        <link rel="stylesheet" href="css/normalize.css">
		
		<!-- MAIN CSS 
		============================================ -->
        <link rel="stylesheet" href="css/main.css">
		
		<!-- STYLE CSS 
		============================================ -->
        <link rel="stylesheet" href="style.css">
		
		<!-- RESPONSIVE CSS 
		============================================ -->
        <link rel="stylesheet" href="css/responsive.css">
		
		<!-- IE CSS 
		============================================ -->
        <link rel="stylesheet" href="css/ie.css">
		
		<!-- MODERNIZR JS 
		============================================ -->
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
		
		<!-- HEADER-TOP START -->
		<div class="header-top">
			<div class="container">
				<div class="row">
					<!-- HEADER-LEFT-MENU START -->
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="header-left-menu">
							<div class="welcome-info">
								 CHÀO MỪNG ĐẾN VỚI <span>B.STORE</span>
							</div>
							<!--<div class="currenty-converter">
								<form method="post" action="#" id="currency-set">
									<div class="current-currency">
										<span class="cur-label">Currency : </span><strong>USD</strong>
									</div>
									<ul class="currency-list currency-toogle">
										<li>
											<a title="Dollar (USD)" href="#">Dollar (USD)</a>
										</li>
										<li>
										<a title="Euro (EUR)" href="#">Euro (EUR)</a>
										</li>
									</ul>
								</form>									
							</div>
							<div class="selected-language">
								<div class="current-lang">
									<span class="current-lang-label">Language : </span><strong>English</strong>
								</div>
								<ul class="languages-choose language-toogle">
									<li>
										<a href="#" title="English">
											<span>English</span>
										</a>
									</li>
									<li>
										<a href="#" title="Français (French)">
											<span>Français</span>
										</a>
									</li>
								</ul>										
							</div> -->
						</div>
					</div>
					<!-- HEADER-LEFT-MENU END -->
					<!-- HEADER-RIGHT-MENU START -->
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="header-right-menu">
							<nav>
								<ul class="list-inline">
									<li><a href="checkout.php">KIỂM TRA ĐƠN HÀNG</a></li>
									<li><a href="wishlist.php">DANH SÁCH YÊU THÍCH</a></li>
									<li><a href="my-account.php">TÀI KHOẢN CỦA TÔI</a></li>
									<li><a href="cart.php">GIỎ HÀNG</a></li>
									<li><a href="registration.php">ĐĂNG NHẬP</a></li>
								</ul>									
							</nav>
						</div>
					</div>
					<!-- HEADER-RIGHT-MENU END -->
				</div>
			</div>
		</div>
		<!-- HEADER-TOP END -->
		<!-- HEADER-MIDDLE START -->
		<section class="header-middle">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<!-- LOGO START -->
						<div class="logo">
							<a href="index.php"><img src="img/logo.png" alt="bstore logo" /></a>
						</div>
						<!-- LOGO END -->
						<!-- HEADER-RIGHT-CALLUS START -->
						<div class="header-right-callus">
							<h3>HOTLINE</h3>
							<span>0123-456-789</span>
						</div>
						<!-- HEADER-RIGHT-CALLUS END -->
						<!-- CATEGORYS-PRODUCT-SEARCH START -->
						<div class="categorys-product-search">
							<form action="#" method="get" class="search-form-cat">
								<div class="search-product form-group">
									<select name="catsearch" class="cat-search">
										<option value="">Thương hiệu</option>
										<!--
										<option value="2">--Women</option>
										<option value="3">---T-Shirts</option>
										<option value="4">--Men</option>
										<option value="5">----Shoose</option>
										<option value="6">--Dress</option>
										<option value="7">----Tops</option>
										<option value="8">---Casual</option>
										<option value="9">--Evening</option>
										<option value="10">--Summer</option>
										<option value="11">---sports</option>
										<option value="12">--day</option>
										<option value="13">--evening</option>
										<option value="14">-----Blouse</option>
										<option value="15">--handba</option>
										<option value="16">--phone</option>
										<option value="17">-house</option>
										<option value="18">--Beauty</option>
										<option value="19">--health</option>
										<option value="20">---clothing</option>
										<option value="21">---kids</option>
										<option value="22">--Dresse</option>
										<option value="22">---Casual</option>
										<option value="23">--day</option>
										<option value="24">--evening</option>
										<option value="24">---Blouse</option>
										<option value="25">-handb</option>
										<option value="66">--phone</option>
										<option value="27">---house</option>	
										-->								
									</select>
									<input type="text" class="form-control search-form" name="s" placeholder="Tìm kiếm... " />
									<button class="search-button" value="Search" name="s" type="submit">
										<i class="fa fa-search"></i>
									</button>									 
								</div>
							</form>
						</div>
						<!-- CATEGORYS-PRODUCT-SEARCH END -->
					</div>
				</div>
			</div>
		</section>
		<!-- HEADER-MIDDLE END -->
		<!-- MAIN-MENU-AREA START -->
		<header class="main-menu-area">
			<div class="container">
				<div class="row">
					<!-- SHOPPING-CART START -->
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 pull-right shopingcartarea">
						<div class="shopping-cart-out pull-right">
							<div class="shopping-cart">
								<a class="shop-link" href="cart.php" title="View my shopping cart">
									<i class="fa fa-shopping-cart cart-icon"></i>
									<b>GIỎ HÀNG</b>
									<span class="ajax-cart-quantity">1</span>
								</a>
								<div class="shipping-cart-overly">
									<div class="shipping-item">
										<span class="cross-icon"><i class="fa fa-times-circle"></i></span>
										<div class="shipping-item-image">
											<a href="#"><img src="img/shopping-image1.png" alt="shopping image" /></a>
										</div>
										<div class="shipping-item-text">
											<span>1 <span class="pro-quan-x">x</span> <a href="#" class="pro-cat">AIR FORCE 1 SHADOW AQUA PINK</a></span>
											<span class="pro-quality"><a href="#">Size: 41</a></span>
											<p>4,500,000 VND</p>
										</div>
									</div>
									<!--<div class="shipping-item">
										<span class="cross-icon"><i class="fa fa-times-circle"></i></span>
										<div class="shipping-item-image">
											<a href="#"><img src="img/shopping-image21.png" alt="shopping image" /></a>
										</div>
										<div class="shipping-item-text">
											<span>1 <span class="pro-quan-x">x</span> <a href="#" class="pro-cat">ADIDAS CONTINENTAL 80 BLACK RED</a></span>
											<span class="pro-quality"><a href="#">Size: 40</a></span>
											<p>2,290,000 VND</p>
										</div>
									</div>-->
									<div class="shipping-total-bill">
										<div class="cart-prices">
											<span class="shipping-cost">0 VND</span>
											<span>Phí vận chuyển</span>
										</div>
										<div class="total-shipping-prices">
											<span class="shipping-total">4,500,000 VND</span>
											<span>Tổng thanh toán</span>
										</div>										
									</div>
									<div class="shipping-checkout-btn">
										<a href="checkout.php">TIẾP TỤC <i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>	
					<!-- SHOPPING-CART END -->
					<!-- MAINMENU START -->
					<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 no-padding-right menuarea">
						<div class="mainmenu">
							<nav>
								<ul class="list-inline mega-menu">
									<li class="active"><a href="index.php">TRANG CHỦ</a>

										<!-- DROPDOWN MENU START -->
									<!--	
										<div class="home-var-menu">
											<ul class="home-menu">
												<li><a href="index.php">Home variation 1</a></li>
												<li><a href="index-2.html">Home variation 2</a></li>
											</ul>												
										</div>
									-->
										<!-- DROPDOWN MENU END -->
									</li>

									<?php 
										$catTitle = $cat->show_categoryLimit5();
										if ($catTitle){
											while ($resultCatTitle = $catTitle->fetch_assoc()){
											
									?>
									<li>
										<a href="shop-gird.php?maLoai=<?php echo $resultCatTitle['maLoai']; ?>">GIÀY <?php echo $resultCatTitle['tenLoai']; ?></a>
										
									</li>
									<?php 
										}
									}
									?>

									<li><a href="#">KHÁC</a>

										<!-- DRODOWN-MEGA-MENU START -->
										<div class="drodown-mega-menu" style="min-width: 230px;left: unset;">
											<!-- <div class="left-mega col-xs-6"> -->
												<div class="mega-menu-list">
													<!--<a class="mega-menu-title" href="shop-gird.php">TOPS</a>-->
													<ul>
														<?php 
															$catTitleOther = $cat->show_categoryOthers();
															if ($catTitleOther){
																while ($resultCatTitleOther = $catTitleOther->fetch_assoc()){
																	
														?>
														<li><a href="shop-gird.php?maLoai=<?php echo $resultCatTitleOther['maLoai']; ?>">GIÀY <?php echo $resultCatTitleOther['tenLoai']; ?></a>
														</li>
														<?php 
															}
														}
														?>
													</ul>
												</div>
											<!-- </div> -->
											<!-- <div class="right-mega col-xs-6">
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="shop-gird.php">Prodect</a>
													
												</div>
											</div> -->
										</div>
										<!-- DRODOWN-MEGA-MENU END -->
									</li>


										<!--<li><a href="about-us.php">About us</a></li>-->
								</ul>
							</nav>
						</div>
					</div>
					<!-- MAINMENU END -->
				<div class="row">
					<!-- MOBILE MENU START -->
					<div class="col-sm-12 mobile-menu-area">
						<div class="mobile-menu hidden-md hidden-lg" id="mob-menu">
							<span class="mobile-menu-title">MENU</span>
							<nav>
								<ul>
									<!--<li><a href="index.php">TRANG CHỦ</a>
										<ul>
											<li><a href="index.php">Home variation 1</a></li>
											<li><a href="index-2.html">Home variation 2</a></li>
										</ul>														
									</li>-->					
									<?php 
										$catTitle = $cat->show_categoryLimit5();
										if ($catTitle){
											while ($resultCatTitle = $catTitle->fetch_assoc()){
											
									?>
									<li>
										<a href="shop-gird.php?maLoai=<?php echo $resultCatTitle['maLoai']; ?>">GIÀY <?php echo $resultCatTitle['tenLoai']; ?></a>
										
									</li>
									<?php 
										}
									}
									?>

									<li><a href="#">KHÁC</a>
		
													<ul>
														<?php 
															$catTitleOther = $cat->show_categoryOthers();
															if ($catTitleOther){
																while ($resultCatTitleOther = $catTitleOther->fetch_assoc()){
																	
														?>
														<li><a href="shop-gird.php?maLoai=<?php echo $resultCatTitleOther['maLoai']; ?>">GIÀY <?php echo $resultCatTitleOther['tenLoai']; ?></a>
														</li>
														<?php 
															}
														}
														?>
													</ul>
											
										</div>
									</li>
								</ul>
							</nav>
						</div>						
					</div>
					<!-- MOBILE MENU END -->
				</div>
			</div>
		</header>
		<!-- MAIN-MENU-AREA END -->