<?php
	$pageTitle = "GIÀY ADIDAS | GIÀY B.STORE - Hệ thống giày thể thao chính hãng";
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
							<span>Giày ADIDAS</span>
						</div>
						<!-- BSTORE-BREADCRUMB END -->
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<!-- PRODUCT-LEFT-SIDEBAR START -->
						<div class="product-left-sidebar">
							<h2 class="left-title pro-g-page-title">MỤC LỤC</h2>
							<!-- SINGLE SIDEBAR ENABLED FILTERS START -->
							<div class="product-single-sidebar">
								<span class="sidebar-title">LOẠI ĐÃ LỌC:</span>
								<ul class="filtering-menu">
									<li>
										Thương hiệu: Giày ADIDAS
										<a href="#"><i class="fa fa-remove"></i></a>
									</li>
									<li>
										Tình trạng hàng: Còn hàng
										<a href="#"><i class="fa fa-remove"></i></a>
									</li>
								</ul>
							</div>
							<!-- SINGLE SIDEBAR ENABLED FILTERS END -->
							<!-- SINGLE SIDEBAR CATEGORIES START -->
							<div class="product-single-sidebar">
								<span class="sidebar-title">THƯƠNG HIỆU</span>
								<ul>
									<li>
										<label class="cheker">
											<input type="checkbox" name="categories"/>
											<span></span>
										</label>
										<a href="#"> Giày ADIDAS<span> (12)</span></a>
									</li>
									<li>
										<label class="cheker">
											<input type="checkbox" name="categories"/>
											<span></span>
										</label>
										<a href="#">Giày NIKE<span> (13)</span></a>
									</li>
									<li>
										<label class="cheker">
											<input type="checkbox" name="categories"/>
											<span></span>
										</label>
										<a href="#">Giày CONVERSE<span> (15)</span></a>
									</li>
									<li>
										<label class="cheker">
											<input type="checkbox" name="categories"/>
											<span></span>
										</label>
										<a href="#">Giày VANS<span> (10)</span></a>
									</li>
								</ul>
							</div>
							<!-- SINGLE SIDEBAR CATEGORIES END -->
							<!-- SINGLE SIDEBAR AVAILABILITY START -->
							<div class="product-single-sidebar">
								<span class="sidebar-title">Tình trạng hàng</span>
								<ul>
									<li>
										<label class="cheker">
											<input type="checkbox" name="availability"/>
											<span></span>
										</label>
										<a href="#">Còn hàng<span> (17)</span></a>
									</li>
								</ul>
							</div>
							<!-- SINGLE SIDEBAR AVAILABILITY END -->
							<!-- SINGLE SIDEBAR CONDITION START -->
							<div class="product-single-sidebar">
								<span class="sidebar-title">Điều kiện</span>
								<ul>
									<li>
										<label class="cheker">
											<input type="checkbox" name="condition"/>
											<span></span>
										</label>
										<a href="#">Mới<span> (17)</span></a>
									</li>
									<li>
										<label class="cheker">
											<input type="checkbox" name="condition"/>
											<span></span>
										</label>
										<a href="#">Khuyễn mãi<span> (13)</span></a>
									</li>
								</ul>
							</div>
							<!-- SINGLE SIDEBAR CONDITION END -->
							<!-- SINGLE SIDEBAR MANUFACTURER START -->
							<div class="product-single-sidebar">
								<span class="sidebar-title">Nhà cung cấp</span>
								<ul>
									<li>
										<label class="cheker">
											<input type="checkbox" name="manufacturer"/>
											<span></span>
										</label>
										<a href="#">Tiki<span> (13)</span></a>
									</li>
									<li>
										<label class="cheker">
											<input type="checkbox" name="manufacturer"/>
											<span></span>
										</label>
										<a href="#">Shopee<span> (13)</span></a>
									</li>
								</ul>
							</div>
							<!-- SINGLE SIDEBAR MANUFACTURER END -->
							<!-- SINGLE SIDEBAR PRICE START -->
							<div class="product-single-sidebar">
								<span class="sidebar-title">Giá</span>
								<ul>
									<li> 
										<label><strong>Khoảng giá:</strong><input type="text" id="slidevalue" style="width: 65%;" /></label>
									</li>
									<li>
										<div id="price-range"></div>	
									</li>
								</ul>
							</div>
							<!-- SINGLE SIDEBAR PRICE END -->
							<!-- SINGLE SIDEBAR SIZE START -->
							<div class="product-single-sidebar">
								<span class="sidebar-title">Size</span>
								<ul>
									<li>
										<label class="cheker">
											<input type="checkbox" name="size"/>
											<span></span>
										</label>
										<a href="#">38<span> (10)</span></a>
									</li>
									<li>
										<label class="cheker">
											<input type="checkbox" name="size"/>
											<span></span>
										</label>
										<a href="#">39<span> (10)</span></a>
									</li>
									<li>
										<label class="cheker">
											<input type="checkbox" name="size"/>
											<span></span>
										</label>
										<a href="#">40<span> (10)</span></a>
									</li>
									<li>
										<label class="cheker">
											<input type="checkbox" name="size"/>
											<span></span>
										</label>
										<a href="#">41<span> (10)</span></a>
									</li>
								</ul>
							</div>
							<!-- SINGLE SIDEBAR SIZE END -->
							<!-- SINGLE SIDEBAR COLOR START -->
							<div class="product-single-sidebar">
								<span class="sidebar-title">Màu</span>
								<ul class="product-color-var">
									<li>
										<i class="fa fa-square color-beige"></i>
										<a href="#">Be<span> (1)</span></a>
									</li>
									<li>
										<i class="fa fa-square color-white"></i>
										<a href="#">Trắng<span> (2)</span></a>
									</li>	
									<li>
										<i class="fa fa-square color-black"></i>
										<a href="#">Đen<span> (2)</span></a>
									</li>									
									<li>
										<i class="fa fa-square color-orange"></i>
										<a href="#">Cam<span> (5)</span></a>
									</li>
									<li>
										<i class="fa fa-square color-blue"></i>
										<a href="#">Xanh dương<span> (8)</span></a>
									</li>
									<li>
										<i class="fa fa-square color-green"></i>
										<a href="#">Xanh lá<span> (3)</span></a>
									</li>
									<li>
										<i class="fa fa-square color-yellow"></i>
										<a href="#">Vàng<span> (4)</span></a>
									</li>
									<li>
										<i class="fa fa-square color-pink"></i>
										<a href="#">Hồng<span> (6)</span></a>
									</li>
								</ul>
							</div>
							<!-- SINGLE SIDEBAR COLOR END -->
							
						</div>
						<!-- PRODUCT-LEFT-SIDEBAR END -->
						<!-- SINGLE SIDEBAR TAG START -->
						<div class="product-left-sidebar">
							<h2 class="left-title">Tags </h2>
							<div class="category-tag">
								<a href="#">Adidas</a>
								<a href="#">Nike</a>
								<a href="#">Converse</a>
								<a href="#">Vans</a>
								<a href="#">Bitis</a>
								<a href="#">Newbalance</a>
								<a href="#">Asics</a>
							</div>
						</div>
						<!-- SINGLE SIDEBAR TAG END -->
					</div>
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
						<div class="right-all-product">
							<!-- PRODUCT-CATEGORY-HEADER START -->
							<div class="product-category-header">
								<div class="category-header-image">
									<img src="img/category-header1.png" alt="category-header" />
									<!--
									<div class="category-header-text">
										<h2>Women </h2>
										<strong>You will find here all woman fashion collections.</strong>
										<p>This category includes all the basics of your wardrobe and much more:</p> <p>shoes, accessories, printed t-shirts, feminine dresses, women's jeans!</p>
									</div>
									-->
								</div>
							</div>
							<!-- PRODUCT-CATEGORY-HEADER END -->
							<div class="product-category-title">
								<!-- PRODUCT-CATEGORY-TITLE START -->
								<h1>
									<span class="cat-name"> Giày ADIDAS</span>
									<span class="count-product">Có 17 sản phẩm.</span>
								</h1>
								<!-- PRODUCT-CATEGORY-TITLE END -->
							</div>
							<div class="product-shooting-area">
								<div class="product-shooting-bar">
									<!-- SHOORT-BY START -->
									<div class="shoort-by">
										<label for="productShort">Sắp xếp theo</label>
										<div class="short-select-option">
											<select name="sortby" id="productShort">
												<option value="">--</option>
												<option value="">Giá: Thấp nhất trước</option>
												<option value="">Giá: Cao nhất trước</option>
												<option value="">Tên sản phẩm: A đến Z</option>
												<option value="">Tên sản phẩm: Z đến A</option>
												<option value="">Còn hàng</option>
											</select>												
										</div>
									</div>
									<!-- SHOORT-BY END -->
									<!-- SHOW-PAGE START -->									
									<div class="show-page">
										<label for="perPage">Hiển thị</label>
										<div class="s-page-select-option">
											<select name="show" id="perPage">
												<option value="">11</option>
												<option value="">12</option>
											</select>													
										</div>
										<span>sản phẩm trên một trang</span>										
									</div>
									<!-- SHOW-PAGE END -->
									<!-- VIEW-SYSTEAM START -->									
									<div class="view-systeam">
										<label for="perPage">Xem dạng:</label>
										<ul>
											<li><a href="shop-gird.php"><i class="fa fa-th-large"></i></a><br />Lưới</li>
											<li class="active"><a href="shop-list.php"><i class="fa fa-th-list"></i></a><br />Danh sách</li>
										</ul>
									</div>
									<!-- VIEW-SYSTEAM END -->
								</div>
								<!-- PRODUCT-SHOOTING-RESULT START -->
								<div class="product-shooting-result">
									<form action="#">
										<button class="btn compare-button">
											SO SÁNH (<span class="compare-value">1</span>)
											<i class="fa fa-chevron-right"></i>
										</button>
									</form>
									<div class="showing-item">
										<span>Đang hiển thị 1 - 8 trên 17 sản phẩm.</span>
									</div>
									<div class="showing-next-prev">
										<ul class="pagination-bar">
											<li class="disabled">
												<a href="#" ><i class="fa fa-chevron-left"></i>Trang trước</a>
											</li>
											<li class="active">
												<span><a class="pagi-num" href="#">1</a></span>
											</li>
											<li>
												<span><a class="pagi-num" href="#">2</a></span>
											</li>
											<li>
												<a href="#" >Trang sau<i class="fa fa-chevron-right"></i></a>
											</li>
										</ul>
										<form action="#">
											<button class="btn showall-button">Hiển thị tất cả</button>
										</form>
									</div>
								</div>
								<!-- PRODUCT-SHOOTING-RESULT END -->
							</div>
						</div>
						<!-- ALL GATEGORY-PRODUCT START -->
						<div class="all-gategory-product">
							<div class="row">
								<ul class="gategory-product">
									<!-- SINGLE ITEM START -->
									<li class="cat-product-list">
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
											<div class="single-product-item">
												<div class="product-image">
													<a href="single-product.php"><img src="img/product/sale/02.jpg" alt="product-image" /></a>
													<a href="single-product.php" class="new-mark-box">Mới</a>
												</div>
											</div>
										</div>
										<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
											<div class="list-view-content">
												<div class="single-product-item">
													<div class="product-info">
														<div class="customar-comments-box">
															<a href="single-product.php"> ADIDAS ALPHABOOST PARLEY BLACK</a>
															<div class="rating-box">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-half-empty"></i>
															</div>
															<div class="review-box">
																<span>1 Đánh giá</span>
															</div>
														</div>
														<div class="product-datails">
															<p>Adidas Shoes là một trong những thương hiệu giày hàng đầu thế giới về loại giày sneaker với nhiều tính năng phù hợp cho cả nam và nữ tại Việt Nam. </p>
														</div>
														<div class="price-box">
															<span class="price">2,590,000 VND</span>
														</div>
													</div>
													<div class="overlay-content-list">
														<ul>
															<li><a href="#" title="Add to cart" class="add-cart-text">THÊM VÀO GIỎ HÀNG</a></li>
															<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
															<li><a href="#" title="Add to compare"><i class="fa fa-retweet"></i></a></li>
															<li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
														</ul>
													</div>												
												</div>														
											</div>
										</div>
									</li>
									<!-- SINGLE ITEM END -->
									<!-- SINGLE ITEM START -->
									<li class="cat-product-list">
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
											<div class="single-product-item">
												<div class="product-image">
													<a href="single-product.php"><img src="img/product/sale/02.jpg" alt="product-image" /></a>
													<a href="single-product.php" class="new-mark-box">Mới</a>
												</div>
											</div>
										</div>
										<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
											<div class="list-view-content">
												<div class="single-product-item">
													<div class="product-info">
														<div class="customar-comments-box">
															<a href="single-product.php"> ADIDAS ALPHABOOST PARLEY BLACK</a>
															<div class="rating-box">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-half-empty"></i>
															</div>
															<div class="review-box">
																<span>1 Đánh giá</span>
															</div>
														</div>
														<div class="product-datails">
															<p>Adidas Shoes là một trong những thương hiệu giày hàng đầu thế giới về loại giày sneaker với nhiều tính năng phù hợp cho cả nam và nữ tại Việt Nam. </p>
														</div>
														<div class="price-box">
															<span class="price">2,590,000 VND</span>
														</div>
													</div>
													<div class="overlay-content-list">
														<ul>
															<li><a href="#" title="Add to cart" class="add-cart-text">THÊM VÀO GIỎ HÀNG</a></li>
															<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
															<li><a href="#" title="Add to compare"><i class="fa fa-retweet"></i></a></li>
															<li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
														</ul>
													</div>												
												</div>														
											</div>
										</div>
									</li>
									<!-- SINGLE ITEM END -->
									<!-- SINGLE ITEM START -->
									<li class="cat-product-list">
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
											<div class="single-product-item">
												<div class="product-image">
													<a href="single-product.php"><img src="img/product/sale/02.jpg" alt="product-image" /></a>
													<a href="single-product.php" class="new-mark-box">Mới</a>
												</div>
											</div>
										</div>
										<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
											<div class="list-view-content">
												<div class="single-product-item">
													<div class="product-info">
														<div class="customar-comments-box">
															<a href="single-product.php"> ADIDAS ALPHABOOST PARLEY BLACK</a>
															<div class="rating-box">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-half-empty"></i>
															</div>
															<div class="review-box">
																<span>1 Đánh giá</span>
															</div>
														</div>
														<div class="product-datails">
															<p>Adidas Shoes là một trong những thương hiệu giày hàng đầu thế giới về loại giày sneaker với nhiều tính năng phù hợp cho cả nam và nữ tại Việt Nam. </p>
														</div>
														<div class="price-box">
															<span class="price">2,590,000 VND</span>
														</div>
													</div>
													<div class="overlay-content-list">
														<ul>
															<li><a href="#" title="Add to cart" class="add-cart-text">THÊM VÀO GIỎ HÀNG</a></li>
															<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
															<li><a href="#" title="Add to compare"><i class="fa fa-retweet"></i></a></li>
															<li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
														</ul>
													</div>												
												</div>														
											</div>
										</div>
									</li>
									<!-- SINGLE ITEM END -->
									<!-- SINGLE ITEM START -->
									<li class="cat-product-list">
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
											<div class="single-product-item">
												<div class="product-image">
													<a href="single-product.php"><img src="img/product/sale/02.jpg" alt="product-image" /></a>
													<a href="single-product.php" class="new-mark-box">Mới</a>
												</div>
											</div>
										</div>
										<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
											<div class="list-view-content">
												<div class="single-product-item">
													<div class="product-info">
														<div class="customar-comments-box">
															<a href="single-product.php"> ADIDAS ALPHABOOST PARLEY BLACK</a>
															<div class="rating-box">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-half-empty"></i>
															</div>
															<div class="review-box">
																<span>1 Đánh giá</span>
															</div>
														</div>
														<div class="product-datails">
															<p>Adidas Shoes là một trong những thương hiệu giày hàng đầu thế giới về loại giày sneaker với nhiều tính năng phù hợp cho cả nam và nữ tại Việt Nam. </p>
														</div>
														<div class="price-box">
															<span class="price">2,590,000 VND</span>
														</div>
													</div>
													<div class="overlay-content-list">
														<ul>
															<li><a href="#" title="Add to cart" class="add-cart-text">THÊM VÀO GIỎ HÀNG</a></li>
															<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
															<li><a href="#" title="Add to compare"><i class="fa fa-retweet"></i></a></li>
															<li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
														</ul>
													</div>												
												</div>														
											</div>
										</div>
									</li>
									<!-- SINGLE ITEM END -->
									<!-- SINGLE ITEM START -->										
									<li class="cat-product-list">
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
											<div class="single-product-item">
												<div class="product-image">
													<a href="single-product.php"><img src="img/product/sale/04.jpg" alt="product-image" /></a>
													<a href="single-product.php" class="new-mark-box"></a>
												</div>
											</div>
										</div>
										<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
											<div class="list-view-content">
												<div class="single-product-item">
													<div class="product-info">
														<div class="customar-comments-box">
															<a href="single-product.php">ADIDAS CONTINENTAL 80 BLACK RED </a>
															<div class="rating-box">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-half-empty"></i>
																<i class="fa fa-star-half-empty"></i>
															</div>
															<div class="review-box">
																<span>1 Đánh giá</span>
															</div>
														</div>
														<div class="product-datails">
															<p>Adidas Shoes là một trong những thương hiệu giày hàng đầu thế giới về loại giày sneaker với nhiều tính năng phù hợp cho cả nam và nữ tại Việt Nam. </p>
														</div>
														<div class="price-box">
															<span class="price">2,290,000 VND</span>
															
														</div>
													</div>
													<div class="overlay-content-list">
														<ul>
															<li><a href="#" title="Add to cart" class="add-cart-text">THÊM VÀO GIỎ HÀNG</a></li>
															<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
															<li><a href="#" title="Add to compare"><i class="fa fa-retweet"></i></a></li>
															<li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
														</ul>
													</div>												
												</div>														
											</div>
										</div>
									</li>
									<!-- SINGLE ITEM END -->
									<!-- SINGLE ITEM START -->										
									<li class="cat-product-list">
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
											<div class="single-product-item">
												<div class="product-image">
													<a href="single-product.php"><img src="img/product/sale/04.jpg" alt="product-image" /></a>
													<a href="single-product.php" class="new-mark-box"></a>
												</div>
											</div>
										</div>
										<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
											<div class="list-view-content">
												<div class="single-product-item">
													<div class="product-info">
														<div class="customar-comments-box">
															<a href="single-product.php">ADIDAS CONTINENTAL 80 BLACK RED </a>
															<div class="rating-box">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-half-empty"></i>
																<i class="fa fa-star-half-empty"></i>
															</div>
															<div class="review-box">
																<span>1 Đánh giá</span>
															</div>
														</div>
														<div class="product-datails">
															<p>Adidas Shoes là một trong những thương hiệu giày hàng đầu thế giới về loại giày sneaker với nhiều tính năng phù hợp cho cả nam và nữ tại Việt Nam. </p>
														</div>
														<div class="price-box">
															<span class="price">2,290,000 VND</span>
															
														</div>
													</div>
													<div class="overlay-content-list">
														<ul>
															<li><a href="#" title="Add to cart" class="add-cart-text">THÊM VÀO GIỎ HÀNG</a></li>
															<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
															<li><a href="#" title="Add to compare"><i class="fa fa-retweet"></i></a></li>
															<li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
														</ul>
													</div>												
												</div>														
											</div>
										</div>
									</li>
									<!-- SINGLE ITEM END -->
									<!-- SINGLE ITEM START -->										
									<li class="cat-product-list">
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
											<div class="single-product-item">
												<div class="product-image">
													<a href="single-product.php"><img src="img/product/sale/04.jpg" alt="product-image" /></a>
													<a href="single-product.php" class="new-mark-box"></a>
												</div>
											</div>
										</div>
										<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
											<div class="list-view-content">
												<div class="single-product-item">
													<div class="product-info">
														<div class="customar-comments-box">
															<a href="single-product.php">ADIDAS CONTINENTAL 80 BLACK RED </a>
															<div class="rating-box">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-half-empty"></i>
																<i class="fa fa-star-half-empty"></i>
															</div>
															<div class="review-box">
																<span>1 Đánh giá</span>
															</div>
														</div>
														<div class="product-datails">
															<p>Adidas Shoes là một trong những thương hiệu giày hàng đầu thế giới về loại giày sneaker với nhiều tính năng phù hợp cho cả nam và nữ tại Việt Nam. </p>
														</div>
														<div class="price-box">
															<span class="price">2,290,000 VND</span>
															
														</div>
													</div>
													<div class="overlay-content-list">
														<ul>
															<li><a href="#" title="Add to cart" class="add-cart-text">THÊM VÀO GIỎ HÀNG</a></li>
															<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
															<li><a href="#" title="Add to compare"><i class="fa fa-retweet"></i></a></li>
															<li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
														</ul>
													</div>												
												</div>														
											</div>
										</div>
									</li>
									<!-- SINGLE ITEM END -->
									<!-- SINGLE ITEM START -->										
									<li class="cat-product-list">
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
											<div class="single-product-item">
												<div class="product-image">
													<a href="single-product.php"><img src="img/product/sale/04.jpg" alt="product-image" /></a>
													<a href="single-product.php" class="new-mark-box"></a>
												</div>
											</div>
										</div>
										<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
											<div class="list-view-content">
												<div class="single-product-item">
													<div class="product-info">
														<div class="customar-comments-box">
															<a href="single-product.php">ADIDAS CONTINENTAL 80 BLACK RED </a>
															<div class="rating-box">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-half-empty"></i>
																<i class="fa fa-star-half-empty"></i>
															</div>
															<div class="review-box">
																<span>1 Đánh giá</span>
															</div>
														</div>
														<div class="product-datails">
															<p>Adidas Shoes là một trong những thương hiệu giày hàng đầu thế giới về loại giày sneaker với nhiều tính năng phù hợp cho cả nam và nữ tại Việt Nam. </p>
														</div>
														<div class="price-box">
															<span class="price">2,290,000 VND</span>
															
														</div>
													</div>
													<div class="overlay-content-list">
														<ul>
															<li><a href="#" title="Add to cart" class="add-cart-text">THÊM VÀO GIỎ HÀNG</a></li>
															<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
															<li><a href="#" title="Add to compare"><i class="fa fa-retweet"></i></a></li>
															<li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
														</ul>
													</div>												
												</div>														
											</div>
										</div>
									</li>
									<!-- SINGLE ITEM END -->
																	
								</ul>
							</div>
						</div>
						<!-- ALL GATEGORY-PRODUCT END -->
						<!-- PRODUCT-SHOOTING-RESULT START -->
						<div class="product-shooting-result product-shooting-result-border">
							<form action="#">
								<button class="btn compare-button">
									SO SÁNH (<strong class="compare-value">1</strong>)
									<i class="fa fa-chevron-right"></i>
								</button>
							</form>
							<div class="showing-item">
								<span>Đang hiển thị 1 - 8 trên 17 sản phẩm</span>
							</div>
							<div class="showing-next-prev">
								<ul class="pagination-bar">
									<li class="disabled">
										<a href="#" ><i class="fa fa-chevron-left"></i>Previous</a>
									</li>
									<li class="active">
										<span><a class="pagi-num" href="#">1</a></span>
									</li>
									<li>
										<span><a class="pagi-num" href="#">2</a></span>
									</li>
									<li>
										<a href="#" >Next<i class="fa fa-chevron-right"></i></a>
									</li>
								</ul>
								<form action="#">
									<button class="btn showall-button">Show all</button>
								</form>
							</div>
						</div>
						<!-- PRODUCT-SHOOTING-RESULT END -->
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