<?php
include 'includes/header.php';
include_once( './controller/product_controller.php');
// include_once __DIR__.'/controller/cart_controller.php';

?>

<body>
	<!-- <a href="offer.html"><img src="images/download.png" class="img-head" alt=""></a> -->
	<!---->
	<?php include 'includes/topbanner.php'; ?>
	<div data-vide-bg="video/video">
		<div class="container">
			<div class="banner-info">
				<h3>It is a long established fact that a reader will be distracted by
					the readable </h3>
				<div class="search-form">
					<form action="#" method="post">
						<input type="text" placeholder="Search..." name="Search...">
						<input type="submit" value=" ">
					</form>
				</div>
			</div>
		</div>
	</div>

	<script>
		window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')
	</script>
	<script src="js/jquery.vide.min.js"></script>

	<!--content-->
	<div class="content-top ">
		<div class="container ">
			<div class="spec ">
				<h3>Special Offers</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>
			<div class="tab-head ">
				<nav class="nav-sidebar">
					<ul class="nav tabs ">
						<li class="active"><a href="#tab1" data-toggle="tab">Staples</a></li>
						<li class=""><a href="#tab2" data-toggle="tab">Snacks</a></li>
						<li class=""><a href="#tab3" data-toggle="tab">Fruits & Vegetables</a></li>
						<li class=""><a href="#tab4" data-toggle="tab">Breakfast & Cereal</a></li>
					</ul>
				</nav>
				<div class=" tab-content tab-content-t ">
					<div class="tab-pane active text-style" id="tab1">
						<div class=" con-w3l">
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
										<img src="images/of.png" class="img-responsive" alt="">
										<div class="offer">
											<p><span>Offer</span></p>
										</div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">Moong</a>(1 kg)</h6>
										</div>
										<div class="mid-2">
											<p><label>$2.00</label><em class="item_price">$1.50</em></p>
											<div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="add">
											<button class="btn btn-danger my-cart-btn my-cart-b " data-id="1" data-name="Moong" data-summary="summary 1" data-price="1.50" data-quantity="1" data-image="images/of.png">Add to Cart</button>
										</div>

									</div>
								</div>
							</div>
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal2" class="offer-img">
										<img src="images/of1.png" class="img-responsive" alt="">
										<div class="offer">
											<p><span>Offer</span></p>
										</div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">Sunflower Oil</a>(5 kg)</h6>
										</div>
										<div class="mid-2">
											<p><label>$10.00</label><em class="item_price">$9.00</em></p>
											<div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="add">
											<button class="btn btn-danger my-cart-btn my-cart-b" data-id="2" data-name="Sunflower Oil" data-summary="summary 2" data-price="9.00" data-quantity="1" data-image="images/of1.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal3" class="offer-img">
										<img src="images/of2.png" class="img-responsive" alt="">
										<div class="offer">
											<p><span>Offer</span></p>
										</div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">Kabuli Chana</a>(1 kg)</h6>
										</div>
										<div class="mid-2">
											<p><label>$3.00</label><em class="item_price">$2.00</em></p>
											<div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="add">
											<button class="btn btn-danger my-cart-btn my-cart-b" data-id="3" data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00" data-quantity="1" data-image="images/of2.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal4" class="offer-img">
										<img src="images/of3.png" class="img-responsive" alt="">
										<div class="offer">
											<p><span>Offer</span></p>
										</div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">Soya Chunks</a>(1 kg)</h6>
										</div>
										<div class="mid-2">
											<p><label>$4.00</label><em class="item_price">$3.50</em></p>
											<div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="add">
											<button class="btn btn-danger my-cart-btn my-cart-b" data-id="4" data-name="Soya Chunks" data-summary="summary 4" data-price="3.50" data-quantity="1" data-image="images/of3.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="tab-pane  text-style" id="tab2">
						<div class=" con-w3l">
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal5" class="offer-img">
										<img src="images/of4.png" class="img-responsive" alt="">
										<div class="offer">
											<p><span>Offer</span></p>
										</div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">Lays</a>(100 g)</h6>
										</div>
										<div class="mid-2">
											<p><label>$1.00</label><em class="item_price">$0.70</em></p>
											<div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="add">
											<button class="btn btn-danger my-cart-btn my-cart-b" data-id="5" data-name="Lays" data-summary="summary 5" data-price="0.70" data-quantity="1" data-image="images/of4.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal6" class="offer-img">
										<img src="images/of5.png" class="img-responsive" alt="">
										<div class="offer">
											<p><span>Offer</span></p>
										</div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">Kurkure</a>(100 g)</h6>
										</div>
										<div class="mid-2">
											<p><label>$1.00</label><em class="item_price">$0.70</em></p>
											<div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="add">
											<button class="btn btn-danger my-cart-btn my-cart-b" data-id="6" data-name="Kurkure" data-summary="summary 6" data-price="0.70" data-quantity="1" data-image="images/of5.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal7" class="offer-img">
										<img src="images/of6.png" class="img-responsive" alt="">
										<div class="offer">
											<p><span>Offer</span></p>
										</div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">Popcorn</a>(250 g)</h6>
										</div>
										<div class="mid-2">
											<p><label>$2.00</label><em class="item_price">$1.00</em></p>
											<div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="add">
											<button class="btn btn-danger my-cart-btn my-cart-b" data-id="7" data-name="Popcorn" data-summary="summary 7" data-price="1.00" data-quantity="1" data-image="images/of6.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal8" class="offer-img">
										<img src="images/of7.png" class="img-responsive" alt="">
										<div class="offer">
											<p><span>Offer</span></p>
										</div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">Nuts</a>(250 g)</h6>
										</div>
										<div class="mid-2">
											<p><label>$4.00</label><em class="item_price">$3.50</em></p>
											<div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="add">
											<button class="btn btn-danger my-cart-btn my-cart-b" data-id="8" data-name="Nuts" data-summary="summary 8" data-price="3.50" data-quantity="1" data-image="images/of7.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="tab-pane  text-style" id="tab3">
						<div class=" con-w3l">
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal9" class="offer-img">
										<img src="images/of8.png" class="img-responsive" alt="">
										<div class="offer">
											<p><span>Offer</span></p>
										</div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">Banana</a>(6 pcs)</h6>
										</div>
										<div class="mid-2">
											<p><label>$2.00</label><em class="item_price">$1.50</em></p>
											<div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="add">
											<button class="btn btn-danger my-cart-btn my-cart-b" data-id="9" data-name="Banana" data-summary="summary 9" data-price="1.50" data-quantity="1" data-image="images/of8.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal10" class="offer-img">
										<img src="images/of9.png" class="img-responsive" alt="">
										<div class="offer">
											<p><span>Offer</span></p>
										</div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">Onion</a>(1 kg)</h6>
										</div>
										<div class="mid-2">
											<p><label>$1.00</label><em class="item_price">$0.70</em></p>
											<div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="add">
											<button class="btn btn-danger my-cart-btn my-cart-b" data-id="10" data-name="Onion" data-summary="summary 10" data-price="0.70" data-quantity="1" data-image="images/of9.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal11" class="offer-img">
										<img src="images/of10.png" class="img-responsive" alt="">
										<div class="offer">
											<p><span>Offer</span></p>
										</div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html"> Bitter Gourd</a>(1 kg)</h6>
										</div>
										<div class="mid-2">
											<p><label>$2.00</label><em class="item_price">$1.00</em></p>
											<div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="add">
											<button class="btn btn-danger my-cart-btn my-cart-b" data-id="11" data-name="Bitter Gourd" data-summary="summary 11" data-price="1.00" data-quantity="1" data-image="images/of10.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal12" class="offer-img">
										<img src="images/of11.png" class="img-responsive" alt="">
										<div class="offer">
											<p><span>Offer</span></p>
										</div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">Apples</a>(1 kg)</h6>
										</div>
										<div class="mid-2">
											<p><label>$4.00</label><em class="item_price">$3.50</em></p>
											<div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="add">
											<button class="btn btn-danger my-cart-btn my-cart-b" data-id="12" data-name="Apples" data-summary="summary 12" data-price="3.50" data-quantity="1" data-image="images/of11.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="tab-pane text-style" id="tab4">
						<div class=" con-w3l">
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal13" class="offer-img">
										<img src="images/of12.png" class="img-responsive" alt="">
										<div class="offer">
											<p><span>Offer</span></p>
										</div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">Honey</a>(500 g)</h6>
										</div>
										<div class="mid-2">
											<p><label>$7.00</label><em class="item_price">$6.00</em></p>
											<div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="add">
											<button class="btn btn-danger my-cart-btn my-cart-b" data-id="13" data-name="Honey" data-summary="summary 13" data-price="6.00" data-quantity="1" data-image="images/of12.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 m-wthree">
								<div class="col-m ">
									<a href="#" data-toggle="modal" data-target="#myModal14" class="offer-img">
										<img src="images/of13.png" class="img-responsive" alt="">
										<div class="offer">
											<p><span>Offer</span></p>
										</div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">Chocos</a>(250 g)</h6>
										</div>
										<div class="mid-2">
											<p><label>$5.00</label><em class="item_price">$4.50</em></p>
											<div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="add">
											<button class="btn btn-danger my-cart-btn my-cart-b" data-id="14" data-name="Chocos" data-summary="summary 14" data-price="4.50" data-quantity="1" data-image="images/of13.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 m-wthree">
								<div class="col-m ">
									<a href="#" data-toggle="modal" data-target="#myModal15" class="offer-img">
										<img src="images/of14.png" class="img-responsive" alt="">
										<div class="offer">
											<p><span>Offer</span></p>
										</div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">Oats</a>(1 kg)</h6>
										</div>
										<div class="mid-2">
											<p><label>$4.00</label><em class="item_price">$3.50</em></p>
											<div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="add">
											<button class="btn btn-danger my-cart-btn my-cart-b" data-id="15" data-name="Oats" data-summary="summary 15" data-price="3.50" data-quantity="1" data-image="images/of14.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal16" class="offer-img">
										<img src="images/of15.png" class="img-responsive" alt="">
										<div class="offer">
											<p><span>Offer</span></p>
										</div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">Bread</a>(500 g)</h6>
										</div>
										<div class="mid-2">
											<p><label>$1.00</label><em class="item_price">$0.80</em></p>
											<div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="add">
											<button class="btn btn-danger my-cart-btn my-cart-b" data-id="16" data-name="Bread" data-summary="summary 16" data-price="0.80" data-quantity="1" data-image="images/of15.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	</div>

	<!--content-->
	<div class="content-mid">
		<div class="container">

			<div class="col-md-4 m-w3ls">
				<div class="col-md1 ">
					<a href="kitchen.html">
						<img src="images/co1.jpg" class="img-responsive img" alt="">
						<div class="big-sa">
							<h6>New Collections</h6>
							<h3>Season<span>ing </span></h3>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority </p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4 m-w3ls1">
				<div class="col-md ">
					<a href="hold.html">
						<img src="images/co.jpg" class="img-responsive img" alt="">
						<div class="big-sale">
							<div class="big-sale1">
								<h3>Big <span>Sale</span></h3>
								<p>It is a long established fact that a reader </p>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4 m-w3ls">
				<div class="col-md2 ">
					<a href="kitchen.html">
						<img src="images/co2.jpg" class="img-responsive img1" alt="">
						<div class="big-sale2">
							<h3>Cooking <span>Oil</span></h3>
							<p>It is a long established fact that a reader </p>
						</div>
					</a>
				</div>
				<div class="col-md3 ">
					<a href="hold.html">
						<img src="images/co3.jpg" class="img-responsive img1" alt="">
						<div class="big-sale3">
							<h3>Vegeta<span>bles</span></h3>
							<p>It is a long established fact that a reader </p>
						</div>
					</a>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!--content-->
	<!-- Carousel
    ================================================== -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<a href="kitchen.html"> <img class="first-slide" src="images/ba.jpg" alt="First slide"></a>

			</div>
			<div class="item">
				<a href="care.html"> <img class="second-slide " src="images/ba1.jpg" alt="Second slide"></a>

			</div>
			<div class="item">
				<a href="hold.html"><img class="third-slide " src="images/ba2.jpg" alt="Third slide"></a>

			</div>
		</div>

	</div><!-- /.carousel -->

	<!--content-->
	<div class="product">
		<div class="container">
			<div class="spec ">
				<h3>Special Offers</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>
			<div class=" con-w3l">


				<?= (new productController())->displaySpecialOffers(); ?>

			</div>
		</div>
	</div>
	<?php include 'includes/footer.php'; ?>
	<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- //smooth scrolling -->
	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<script type='text/javascript' src="js/jquery.mycart.js"></script>
	<script type="text/javascript">
		$(function() {

			var goToCartIcon = function($addTocartBtn) {
				var $cartIcon = $(".my-cart-icon");
				var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({
					"position": "fixed",
					"z-index": "999"
				});
				$addTocartBtn.prepend($image);
				var position = $cartIcon.position();
				$image.animate({
					top: position.top,
					left: position.left
				}, 500, "linear", function() {
					$image.remove();
				});
			}

			$('.my-cart-btn').myCart({
				classCartIcon: 'my-cart-icon',
				classCartBadge: 'my-cart-badge',
				affixCartIcon: true,
				checkoutCart: function(products) {
					$.each(products, function() {
						console.log(this);
					});
				},
				clickOnAddToCart: function($addTocart) {
					goToCartIcon($addTocart);
				},
				getDiscountPrice: function(products) {
					var total = 0;
					$.each(products, function() {
						total += this.quantity * this.price;
					});
					return total * 1;
				}
			});

		});
	</script>

	<!-- product -->
	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Moong(1 kg)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$2.00</del>$1.50</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="1" data-name="Moong" data-summary="summary 1" data-price="1.50" data-quantity="1" data-image="images/of.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of1.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Sunflower Oil(5 kg)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$10.00</del>$9.00</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="2" data-name="Sunflower Oil" data-summary="summary 2" data-price="9.00" data-quantity="1" data-image="images/of1.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of2.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Kabuli Chana(1 kg)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$3.00</del>$2.00</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="3" data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00" data-quantity="1" data-image="images/of2.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of3.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Soya Chunks(1 kg)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$4.00</del>$3.50</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="4" data-name="Soya Chunks" data-summary="summary 4" data-price="3.50" data-quantity="1" data-image="images/of3.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of4.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Lays(100 g)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$1.00</del>$0.70</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="5" data-name="Lays" data-summary="summary 5" data-price="0.70" data-quantity="1" data-image="images/of4.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of5.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Kurkure(100 g)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$1.00</del>$0.70</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="6" data-name="Kurkure" data-summary="summary 6" data-price="0.70" data-quantity="1" data-image="images/of5.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of6.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Popcorn(250 g)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$2.00</del>$1.00</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="7" data-name="Popcorn" data-summary="summary 7" data-price="1.00" data-quantity="1" data-image="images/of6.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of7.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Nuts(250 g)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$4.00</del>$3.50</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="8" data-name="Nuts" data-summary="summary 8" data-price="3.50" data-quantity="1" data-image="images/of7.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of8.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Banana(6 pcs)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$2.00</del>$1.50</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="9" data-name="Banana" data-summary="summary 9" data-price="1.50" data-quantity="1" data-image="images/of8.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of9.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Onion(1 kg)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$1.00</del>$0.70</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="10" data-name="Onion" data-summary="summary 10" data-price="0.70" data-quantity="1" data-image="images/of9.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of10.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Bitter Gourd(1 kg)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$2.00</del>$1.00</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="11" data-name="Bitter Gourd" data-summary="summary 11" data-price="1.00" data-quantity="1" data-image="images/of10.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of11.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Apples(1 kg)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$4.00</del>$3.50</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="12" data-name="Apples" data-summary="summary 12" data-price="3.50" data-quantity="1" data-image="images/of11.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of12.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Honey(500 g)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$7.00</del>$6.00</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="13" data-name="Honey" data-summary="summary 13" data-price="6.00" data-quantity="1" data-image="images/of12.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal14" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of13.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Chocos(250 g)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$5.00</del>$4.50</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="14" data-name="Chocos" data-summary="summary 14" data-price="4.50" data-quantity="1" data-image="images/of13.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal15" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of14.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Oats(1 kg)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$4.00</del>$3.50</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="15" data-name="Oats" data-summary="summary 15" data-price="3.50" data-quantity="1" data-image="images/of14.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal16" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of15.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Bread(500 g)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$1.00</del>$0.80</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="16" data-name="Bread" data-summary="summary 16" data-price="0.80" data-quantity="1" data-image="images/of15.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal17" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of16.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Moisturiser(500 g)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$1.00</del>$0.80</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="17" data-name="Moisturiser" data-summary="summary 17" data-price="0.80" data-quantity="1" data-image="images/of16.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal18" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of17.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Lady Finger(250 g)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$1.00</del>$0.80</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="18" data-name="Lady Finger" data-summary="summary 18" data-price="0.80" data-quantity="1" data-image="images/of17.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal19" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of18.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Satin Ribbon Red(1 pc)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$1.00</del>$0.80</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="19" data-name="Satin Ribbon Red" data-summary="summary 19" data-price="0.80" data-quantity="1" data-image="images/of18.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal20" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of19.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Grapes(500 g)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$1.00</del>$0.80</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="20" data-name="Grapes" data-summary="summary 20" data-price="0.80" data-quantity="1" data-image="images/of19.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal21" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of20.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Clips(1 pack)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$1.00</del>$0.80</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="21" data-name="Clips" data-summary="summary 21" data-price="0.80" data-quantity="1" data-image="images/of20.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal22" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of21.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Conditioner</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$1.00</del>$0.80</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="22" data-name="Conditioner" data-summary="summary 22" data-price="0.80" data-quantity="1" data-image="images/of21.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal23" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of22.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Cleaner(250 kg)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$1.00</del>$0.80</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="23" data-name="Cleaner" data-summary="summary 23" data-price="0.80" data-quantity="1" data-image="images/of22.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal24" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of23.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Gel(150 g)</h3>
						<p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$1.00</del>$0.80</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="24" data-name="Gel" data-summary="summary 24" data-price="0.80" data-quantity="1" data-image="images/of23.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
	<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
	<script src="js/cart_ajax.js"></script>

</body>

</html>