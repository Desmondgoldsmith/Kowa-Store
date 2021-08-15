<?php include 'includes/header.php';
require_once('./controller/product_controller.php');
?>

<?php
// use id in url to search product and display on single.php page
$product_id = isset($_GET['product_id']) ? $_GET['product_id'] : null;

$one_product = (new productController())->getOneProduct($product_id);



?>

<body>
	<!-- <a href="offer.html"><img src="images/download.png" class="img-head" alt=""></a> -->
	<!---->
	<?php include 'includes/topbanner.php'; ?>
	<!--banner-->
	<div class="banner-top">
		<div class="container">
			<h3>
				<<?= $one_product[0]['product_title'] ?> /h3>
					<h4><a href="#index.html">Home</a><label>/</label><?= $one_product[0]['product_title'] ?></h4>
					<div class="clearfix"> </div>
		</div>
	</div>
	<div class="single">
		<div class="container">
			<div class="single-top-main">
				<div class="col-md-5 single-top">
					<div class="single-w3agile">

						<div id="picture-frame">
							<img src="<?= $one_product[0]['product_image'] ?>" alt="product_image" class="img-responsive" />
						</div>
						<script src="js/jquery.zoomtoo.js"></script>
						<script>
							$(function() {
								$("#picture-frame").zoomToo({
									magnify: 1
								});
							});
						</script>



					</div>
				</div>
				<div class="col-md-7 single-top-left ">
					<div class="single-right">
						<h3><?= $one_product[0]['product_title'] ?></h3>


						<div class="pr-single">
							<p class="reduced ">GH¢ <?= $one_product[0]['product_price'] ?>.00</p>
						</div>
						<div class="block block-w3">
							<div class="starbox small ghosting"> </div>
						</div>
						<p class="in-pa"><?= $one_product[0]['product_desc'] ?></p>

						<ul class="social-top">
							<li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
							<li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
							<li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
							<li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
						</ul>
						<div class="add add-3">
							<button class="btn btn-danger my-cart-btn my-cart-b">Add to Cart</button>
						</div>



						<div class="clearfix"> </div>
					</div>


				</div>
				<div class="clearfix"> </div>
			</div>


		</div>
	</div>
	<!---->
	<!-- <div class="content-top offer-w3agile">
		<div class="container ">
			<div class="spec ">
				<h3>Special Offers</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>
			<div class=" con-w3l wthree-of">


				<div class="col-md-3 pro-1">
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
				<div class="col-md-3 pro-1">
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
				<div class="col-md-3 pro-1">
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
								<button class="btn btn-danger my-cart-btn my-cart-b" data-id="7" data-name="product 1" data-summary="summary 1" data-price="1.00" data-quantity="1" data-image="images/of6.png">Add to Cart</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 pro-1">
					<div class="col-m">
						<a href="#" data-toggle="modal" data-target="#myModal8" class="offer-img">
							<img src="images/of7.png" class="img-responsive" alt="">
							<div class="offer">
								<p><span>Offer</span></p>
							</div>
						</a>
						<div class="mid-1">
							<div class="women">
								<h6><a href="single.html"> Nuts</a>(250 g)</h6>
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

				<div class="col-md-3 pro-1">
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
				<div class="col-md-3 pro-1">
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
				<div class="col-md-3 pro-1">
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
				<div class="col-md-3 pro-1">
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

				<div class="col-md-3 pro-1">
					<div class="col-m">
						<a href="#" data-toggle="modal" data-target="#myModal13" class="offer-img">
							<img src="images/of12.png" class="img-responsive" alt="">
							<div class="offer">
								<p><span>Offer</span></p>
							</div>
						</a>
						<div class="mid-1">
							<div class="women">
								<h6><a href="single.html">Honey</a>(500g)</h6>
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
				<div class="col-md-3 pro-1">
					<div class="col-m">
						<a href="#" data-toggle="modal" data-target="#myModal14" class="offer-img">
							<img src="images/of13.png" class="img-responsive" alt="">
							<div class="offer">
								<p><span>Offer</span></p>
							</div>
						</a>
						<div class="mid-1">
							<div class="women">
								<h6><a href="single.html">Chocos</a>(250g)</h6>
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
				<div class="col-md-3 pro-1">
					<div class="col-m">
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
				<div class="col-md-3 pro-1">
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
	</div> -->
	<!--footer-->
	<?php include 'includes/footer.php'; ?>
	<!-- //footer-->

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
</body>

</html>