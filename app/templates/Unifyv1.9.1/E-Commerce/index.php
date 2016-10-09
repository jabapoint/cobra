<?php
	ini_set('display_errors','On');
	error_reporting('E_ALL');

	$root = $_SERVER['DOCUMENT_ROOT'];
	$unify = '/app/templates/Unifyv1.9.1/E-Commerce';

//	class Request {
//	// ...
//		private $params;
//		private $cookies;
//		public function __construct() {
//			$this->domain = $_SERVER['HTTP_HOST'];
//			$this->path = explode('?', $_SERVER['REQUEST_URI'])[0];
//			$this->method = $_SERVER['REQUEST_METHOD'];
//			$this->params = new FilteredMap(
//					array_merge($_POST, $_GET)
//			);
//			$this->cookies = new FilteredMap($_COOKIE);
//		}
//	// ...
//		public function getParams() {
////			if (class_exists(FilteredMap))
//
//			return $this->params;
//		}
//
//		public function getCookies() {
//			return $this->cookies;
//		}
//	}

	//exit;
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>Shop UI | Unify - Responsive Website Template</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Web Fonts -->
	<link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,800&amp;subset=cyrillic,latin'>

	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="<?php echo $unify; ?>/assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $unify; ?>/assets/css/shop.style.css">

	<!-- CSS Header and Footer -->
	<link rel="stylesheet" href="<?php echo $unify; ?>/assets/css/headers/header-v5.css">
	<link rel="stylesheet" href="<?php echo $unify; ?>/assets/css/footers/footer-v4.css">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="<?php echo $unify; ?>/assets/plugins/animate.css">
	<link rel="stylesheet" href="<?php echo $unify; ?>/assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="<?php echo $unify; ?>/assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo $unify; ?>/assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="<?php echo $unify; ?>/assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo $unify; ?>/assets/plugins/revolution-slider/rs-plugin/css/settings.css">

	<!-- CSS Theme -->
	<!--<link rel="stylesheet" href="<?php echo $unify; ?>/assets/css/theme-colors/default.css" id="style_color">-->
  <link rel="stylesheet" href="<?php echo $unify; ?>/assets/css/theme-colors/brown.css"/>

	<!-- CSS Customization -->
	<link rel="stylesheet" href="<?php echo $unify; ?>/assets/css/custom.css">
</head>

<body class="header-fixed">

	<div class="wrapper">
		<!--=== Header v5 ===-->
		<div class="header-v5 header-static">
			<!-- Topbar v3 -->
			<div class="topbar-v3">
				<div class="search-open">
					<div class="container">
						<input type="text" class="form-control" placeholder="Search">
						<div class="search-close"><i class="icon-close"></i></div>
					</div>
				</div>

				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<!-- Topbar Navigation -->
							<ul class="left-topbar">
								<li>
									<a>Валюта (RUR)</a>
									<ul class="currency">
										<li class="active">
											<a href="#">RUR <i class="fa fa-check"></i></a>
										</li>
										<li><a href="#">Euro</a></li>
										<li><a href="#">Dollar</a></li>
									</ul>
								</li>
								<li>
									<a title="Язык"> Русский (RUS)</a>
									<ul class="language">
										<li class="active">
											<a href="#">English (EN)<i class="fa fa-check"></i></a>
										</li>
										<li><a href="#">Русский (RUS)</a></li>
									</ul>
								</li>
							</ul><!--/end left-topbar-->
						</div>
						<div class="col-sm-6">
							<ul class="list-inline right-topbar pull-right">
<!--								<li><a href="#">Account</a></li>-->
<!--								<li><a href="shop-ui-add-to-cart.html">Wishlist (0)</a></li>-->
								<li><a href="shop-ui-login.html">Вход</a> | <a href="shop-ui-register.html">Регистрация</a></li>
								<li><i class="search fa fa-search search-button"></i></li>
							</ul>
						</div>
					</div>
				</div><!--/container-->
			</div>
			<!-- End Topbar v3 -->

			<!-- Navbar -->
			<div class="navbar navbar-default mega-menu" role="navigation">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.html">
							<img id="logo-header" src="<?php echo $unify; ?>/assets/img/logo.png" alt="Logo">
						</a>
					</div>

					<!-- Shopping Cart -->
					<div class="shop-badge badge-icons pull-right">
						<a href="#"><i class="fa fa-shopping-cart"></i></a>
						<span class="badge badge-sea rounded-x">3</span>
						<div class="badge-open">
							<ul class="list-unstyled mCustomScrollbar" data-mcs-theme="minimal-dark">
								<li>
									<img src="<?php echo $unify; ?>/assets/img/thumb/05.jpg" alt="">
									<button type="button" class="close">×</button>
									<div class="overflow-h">
										<span>Black Glasses</span>
										<small>1 x $400.00</small>
									</div>
								</li>
								<li>
									<img src="<?php echo $unify; ?>/assets/img/thumb/02.jpg" alt="">
									<button type="button" class="close">×</button>
									<div class="overflow-h">
										<span>Black Glasses</span>
										<small>1 x $400.00</small>
									</div>
								</li>
								<li>
									<img src="<?php echo $unify; ?>/assets/img/thumb/03.jpg" alt="">
									<button type="button" class="close">×</button>
									<div class="overflow-h">
										<span>Black Glasses</span>
										<small>1 x $400.00</small>
									</div>
								</li>
							</ul>
							<div class="subtotal">
								<div class="overflow-h margin-bottom-10">
									<span>Subtotal</span>
									<span class="pull-right subtotal-cost">$1200.00</span>
								</div>
								<div class="row">
									<div class="col-xs-6">
										<a href="shop-ui-inner.html" class="btn-u btn-brd btn-brd-hover btn-u-sea-shop btn-block">View Cart</a>
									</div>
									<div class="col-xs-6">
										<a href="shop-ui-add-to-cart.html" class="btn-u btn-u-sea-shop btn-block">Checkout</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Shopping Cart -->

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-responsive-collapse">
						<!-- Nav Menu -->
						<ul class="nav navbar-nav">
							<!-- Pages -->
							<li class="dropdown active">
								<a href="javascript:void(0);" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">
									Главная
								</a>
<!--								<ul class="dropdown-menu">-->
<!--									<li class="active"><a href="index.html">Shop UI</a></li>-->
<!--									<li><a href="shop-ui-inner.html">Product Page</a></li>-->
<!--									<li><a href="shop-ui-filter-grid.html">Filter Grid Page</a></li>-->
<!--									<li><a href="shop-ui-filter-list.html">Filter List Page</a></li>-->
<!--									<li><a href="shop-ui-add-to-cart.html">Checkout</a></li>-->
<!--									<li><a href="shop-ui-login.html">Login</a></li>-->
<!--									<li><a href="shop-ui-register.html">Register</a></li>-->
<!--								</ul>-->
							</li>
							<!-- End Pages -->

							<!-- Promotion -->
							<li class="dropdown">
								<a href="javascript:void(0);" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">
									Каталог
								</a>
								<ul class="dropdown-menu">
									<li class="dropdown-submenu">
										<a href="javascript:void(0);">Мужская одежда</a>
										<ul class="dropdown-menu">
											<li><a href="#">Костюмы</a></li>
											<li><a href="#">Джинсы</a></li>
											<li class="dropdown-submenu">
												<a href="#">Обувь</a>
												<ul class="dropdown-menu">
													<li><a href="#">Ботинки</a></li>
													<li><a href="#">Кроссовки</a></li>
													<li><a href="#">Сандалии</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="dropdown-submenu">
										<a href="javascript:void(0);">Женская одежда</a>
										<ul class="dropdown-menu">
											<li><a href="#">Блузки</a></li>
											<li><a href="#">Платья</a></li>
											<li class="dropdown-submenu">
												<a href="#">Обувь</a>
												<ul class="dropdown-menu">
													<li><a href="#">Туфли</a></li>
													<li><a href="#">Сапоги</a></li>
													<li><a href="#">Босоножки</a></li>
												</ul>
											</li>
										</ul>
									</li>
								</ul>
							</li>
							<!-- End Promotion -->

							<!-- Main Demo -->
							<li><a href="../index.html">Акции</a></li>
							<!-- Main Demo -->

							<!-- About company -->
							<li><a href="../index.html">О компании</a></li>
							<!-- About company  -->

							<!-- Contacts -->
							<li><a href="../index.html">Контакты</a></li>
							<!-- Contacts -->
						</ul>
						<!-- End Nav Menu -->
					</div>
				</div>
			</div>
			<!-- End Navbar -->
		</div>
		<!--=== End Header v5 ===-->

		<!--=== Slider ===-->
		<div class="tp-banner-container">
			<div class="tp-banner">
				<ul>
					<!-- SLIDE -->
					<li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 1">
						<!-- MAIN IMAGE -->
						<img src="<?php echo $unify; ?>/assets/img/1.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

						<div class="tp-caption revolution-ch1 sft start"
						data-x="center"
						data-hoffset="0"
						data-y="100"
						data-speed="1500"
						data-start="500"
						data-easing="Back.easeInOut"
						data-endeasing="Power1.easeIn"
						data-endspeed="300">
						The New <br>
						<strong>Collection</strong><br>
						is here
					</div>

					<!-- LAYER -->
					<div class="tp-caption sft"
					data-x="center"
					data-hoffset="0"
					data-y="380"
					data-speed="1600"
					data-start="1800"
					data-easing="Power4.easeOut"
					data-endspeed="300"
					data-endeasing="Power1.easeIn"
					data-captionhidden="off"
					style="z-index: 6">
					<a href="#" class="btn-u btn-brd btn-brd-hover btn-u-light">Shop Now</a>
				</div>
			</li>
			<!-- END SLIDE -->

			<!-- SLIDE -->
			<li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 2">
				<!-- MAIN IMAGE -->
				<img src="<?php echo $unify; ?>/assets/img/5.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

				<div class="tp-caption revolution-ch3 sft start"
				data-x="center"
				data-hoffset="0"
				data-y="140"
				data-speed="1500"
				data-start="500"
				data-easing="Back.easeInOut"
				data-endeasing="Power1.easeIn"
				data-endspeed="300">
				Latest <strong>Fashion</strong> Trends
			</div>

			<!-- LAYER -->
			<div class="tp-caption revolution-ch4 sft"
			data-x="center"
			data-hoffset="-14"
			data-y="210"
			data-speed="1400"
			data-start="2000"
			data-easing="Power4.easeOut"
			data-endspeed="300"
			data-endeasing="Power1.easeIn"
			data-captionhidden="off"
			style="z-index: 6">
			Cras non dui et quam auctor pretium.<br>
			Aenean enim tortr, tempus et iteus m
		</div>

		<!-- LAYER -->
		<div class="tp-caption sft"
		data-x="center"
		data-hoffset="0"
		data-y="300"
		data-speed="1600"
		data-start="1800"
		data-easing="Power4.easeOut"
		data-endspeed="300"
		data-endeasing="Power1.easeIn"
		data-captionhidden="off"
		style="z-index: 6">
		<a href="#" class="btn-u btn-brd btn-brd-hover btn-u-light">Shop Now</a>
	</div>
</li>
<!-- END SLIDE -->

<!-- SLIDE -->
<li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 3">
	<!-- MAIN IMAGE -->
	<img src="<?php echo $unify; ?>/assets/img/3.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="right top" data-bgrepeat="no-repeat">

	<div class="tp-caption revolution-ch3 sft start"
	data-x="right"
	data-hoffset="5"
	data-y="130"
	data-speed="1500"
	data-start="500"
	data-easing="Back.easeInOut"
	data-endeasing="Power1.easeIn"
	data-endspeed="300">
	<strong>Luxury</strong> Watches
</div>

<!-- LAYER -->
<div class="tp-caption revolution-ch4 sft"
data-x="right"
data-hoffset="0"
data-y="210"
data-speed="1400"
data-start="2000"
data-easing="Power4.easeOut"
data-endspeed="300"
data-endeasing="Power1.easeIn"
data-captionhidden="off"
style="z-index: 6">
lectus. Cras non dui et quam auctor.<br>
Aenean enim tortor, tempus et im
</div>

<!-- LAYER -->
<div class="tp-caption sft"
data-x="right"
data-hoffset="0"
data-y="300"
data-speed="1600"
data-start="2800"
data-easing="Power4.easeOut"
data-endspeed="300"
data-endeasing="Power1.easeIn"
data-captionhidden="off"
style="z-index: 6">
<a href="#" class="btn-u btn-brd btn-brd-hover btn-u-light">Shop Now</a>
</div>
</li>
<!-- END SLIDE -->

<!-- SLIDE -->
<li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 4">
	<!-- MAIN IMAGE -->
	<img src="<?php echo $unify; ?>/assets/img/2.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

	<div class="tp-caption revolution-ch1 sft start"
	data-x="center"
	data-hoffset="0"
	data-y="100"
	data-speed="1500"
	data-start="500"
	data-easing="Back.easeInOut"
	data-endeasing="Power1.easeIn"
	data-endspeed="300">
	Girl's Accesories
</div>

<!-- LAYER -->
<div class="tp-caption revolution-ch2 sft"
data-x="center"
data-hoffset="0"
data-y="280"
data-speed="1400"
data-start="2000"
data-easing="Power4.easeOut"
data-endspeed="300"
data-endeasing="Power1.easeIn"
data-captionhidden="off"
style="z-index: 6">
Super Promo
</div>

<!-- LAYER -->
<div class="tp-caption sft"
data-x="center"
data-hoffset="0"
data-y="370"
data-speed="1600"
data-start="2800"
data-easing="Power4.easeOut"
data-endspeed="300"
data-endeasing="Power1.easeIn"
data-captionhidden="off"
style="z-index: 6">
<a href="#" class="btn-u btn-brd btn-brd-hover btn-u-light">View More</a>
<a href="#" class="btn-u btn-brd btn-brd-hover btn-u-light">Shop Now</a>
</div>
</li>
<!-- END SLIDE -->

<!-- SLIDE -->
<li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 5">
	<!-- MAIN IMAGE -->
	<img src="<?php echo $unify; ?>/assets/img/4.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="right top" data-bgrepeat="no-repeat">

	<div class="tp-caption revolution-ch5 sft start"
	data-x="right"
	data-hoffset="5"
	data-y="130"
	data-speed="1500"
	data-start="500"
	data-easing="Back.easeInOut"
	data-endeasing="Power1.easeIn"
	data-endspeed="300">
	<strong>Jeans</strong> Collection
</div>

<!-- LAYER -->
<div class="tp-caption revolution-ch4 sft"
data-x="right"
data-hoffset="-14"
data-y="210"
data-speed="1400"
data-start="2000"
data-easing="Power4.easeOut"
data-endspeed="300"
data-endeasing="Power1.easeIn"
data-captionhidden="off"
style="z-index: 6">
Cras non dui et quam auctor pretium.<br>
Aenean enim tortr, tempus et iteus m
</div>

<!-- LAYER -->
<div class="tp-caption sft"
data-x="right"
data-hoffset="0"
data-y="300"
data-speed="1600"
data-start="2800"
data-easing="Power4.easeOut"
data-endspeed="300"
data-endeasing="Power1.easeIn"
data-captionhidden="off"
style="z-index: 6">
<a href="#" class="btn-u btn-brd btn-brd-hover btn-u-light">Shop Now</a>
</div>
</li>
<!-- END SLIDE -->
</ul>
<div class="tp-bannertimer tp-bottom"></div>
</div>
</div>
<!--=== End Slider ===-->

<!--=== Product Content ===-->
<div class="container content-md">
	<!--=== Illustration v1 ===-->
	<div class="row margin-bottom-60">
		<div class="col-md-6 md-margin-bottom-30">
			<div class="overflow-h">
				<div class="illustration-v1 illustration-img1">
					<div class="illustration-bg">
						<div class="illustration-ads ad-details-v1">
							<h3>NEW YEAR <strong>SALE</strong> 30% - 60% <strong>off</strong></h3>
							<a class="btn-u btn-brd btn-brd-hover btn-u-light" href="#">Shop Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="overflow-h">
				<a class="illustration-v1 illustration-img2" href="#">
					<span class="illustration-bg">
						<span class="illustration-ads ad-details-v2">
							<span class="item-time">Spring 2014</span>
							<span class="item-name">Lacoste</span>
						</span>
					</span>
				</a>
			</div>
		</div>
	</div><!--/end row-->
	<!--=== End Illustration v1 ===-->

	<div class="heading heading-v1 margin-bottom-20">
		<h2>Featured products</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed odio elit, ultrices vel cursus sed, placerat ut leo. Phasellus in magna erat. Etiam gravida convallis augue non tincidunt. Nunc lobortis dapibus neque quis lacinia. Nam dapibus tellus sit amet odio venenatis</p>
	</div>

	<!--=== Illustration v2 ===-->
	<div class="illustration-v2 margin-bottom-60">
		<div class="customNavigation margin-bottom-25">
			<a class="owl-btn prev rounded-x"><i class="fa fa-angle-left"></i></a>
			<a class="owl-btn next rounded-x"><i class="fa fa-angle-right"></i></a>
		</div>

		<ul class="list-inline owl-slider">
			<li class="item">
				<div class="product-img">
					<a href="shop-ui-inner.html"><img class="full-width img-responsive" src="<?php echo $unify; ?>/assets/img/blog/09.jpg" alt=""></a>
					<a class="product-review" href="shop-ui-inner.html">Quick review</a>
					<a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
				</div>
				<div class="product-description product-description-brd">
					<div class="overflow-h margin-bottom-5">
						<div class="pull-left">
							<h4 class="title-price"><a href="shop-ui-inner.html">Double-breasted</a></h4>
							<span class="gender text-uppercase">Men</span>
							<span class="gender">Suits - Blazers</span>
						</div>
						<div class="product-price">
							<span class="title-price">$95.00</span>
						</div>
					</div>
					<ul class="list-inline product-ratings">
						<li><i class="rating-selected fa fa-star"></i></li>
						<li><i class="rating-selected fa fa-star"></i></li>
						<li><i class="rating-selected fa fa-star"></i></li>
						<li><i class="rating fa fa-star"></i></li>
						<li><i class="rating fa fa-star"></i></li>
						<li class="like-icon"><a data-original-title="Add to wishlist" data-toggle="tooltip" data-placement="left" class="tooltips" href="#"><i class="fa fa-heart"></i></a></li>
					</ul>
				</div>
			</li>
			<li class="item">
				<div class="product-img">
					<a href="shop-ui-inner.html"><img class="full-width img-responsive" src="<?php echo $unify; ?>/assets/img/blog/26.jpg" alt=""></a>
					<a class="product-review" href="shop-ui-inner.html">Quick review</a>
					<a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
				</div>
				<div class="product-description product-description-brd">
					<div class="overflow-h margin-bottom-5">
						<div class="pull-left">
							<h4 class="title-price"><a href="shop-ui-inner.html">Double-breasted</a></h4>
							<span class="gender text-uppercase">Women</span>
							<span class="gender">Suits - Blazers</span>
						</div>
						<div class="product-price">
							<span class="title-price">$60.00</span>
							<span class="title-price line-through">$95.00</span>
						</div>
					</div>
					<ul class="list-inline product-ratings">
						<li><i class="rating-selected fa fa-star"></i></li>
						<li><i class="rating-selected fa fa-star"></i></li>
						<li><i class="rating-selected fa fa-star"></i></li>
						<li><i class="rating fa fa-star"></i></li>
						<li><i class="rating fa fa-star"></i></li>
						<li class="like-icon"><a data-original-title="Add to wishlist" data-toggle="tooltip" data-placement="left" class="tooltips" href="#"><i class="fa fa-heart"></i></a></li>
					</ul>
				</div>
			</li>
			<li class="item">
				<div class="product-img">
					<a href="shop-ui-inner.html"><img class="full-width img-responsive" src="<?php echo $unify; ?>/assets/img/blog/11.jpg" alt=""></a>
					<a class="product-review" href="shop-ui-inner.html">Quick review</a>
					<a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
					<div class="shop-rgba-red rgba-banner">Out of stock</div>
				</div>
				<div class="product-description product-description-brd">
					<div class="overflow-h margin-bottom-5">
						<div class="pull-left">
							<h4 class="title-price"><a href="shop-ui-inner.html">Double-breasted</a></h4>
							<span class="gender text-uppercase">Men</span>
							<span class="gender">Suits - Blazers</span>
						</div>
						<div class="product-price">
							<span class="title-price">$95.00</span>
						</div>
					</div>
					<ul class="list-inline product-ratings">
						<li><i class="rating-selected fa fa-star"></i></li>
						<li><i class="rating-selected fa fa-star"></i></li>
						<li><i class="rating-selected fa fa-star"></i></li>
						<li><i class="rating fa fa-star"></i></li>
						<li><i class="rating fa fa-star"></i></li>
						<li class="like-icon"><a data-original-title="Add to wishlist" data-toggle="tooltip" data-placement="left" class="tooltips" href="#"><i class="fa fa-heart"></i></a></li>
					</ul>
				</div>
			</li>
			<li class="item">
				<div class="product-img">
					<a href="shop-ui-inner.html"><img class="full-width img-responsive" src="<?php echo $unify; ?>/assets/img/blog/12.jpg" alt=""></a>
					<a class="product-review" href="shop-ui-inner.html">Quick review</a>
					<a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
					<div class="shop-rgba-dark-green rgba-banner">New</div>
				</div>
				<div class="product-description product-description-brd">
					<div class="overflow-h margin-bottom-5">
						<div class="pull-left">
							<h4 class="title-price"><a href="shop-ui-inner.html">Double-breasted</a></h4>
							<span class="gender text-uppercase">Women</span>
							<span class="gender">Suits - Blazers</span>
						</div>
						<div class="product-price">
							<span class="title-price">$95.00</span>
						</div>
					</div>
					<ul class="list-inline product-ratings">
						<li><i class="rating-selected fa fa-star"></i></li>
						<li><i class="rating-selected fa fa-star"></i></li>
						<li><i class="rating-selected fa fa-star"></i></li>
						<li><i class="rating fa fa-star"></i></li>
						<li><i class="rating fa fa-star"></i></li>
						<li class="like-icon"><a data-original-title="Add to wishlist" data-toggle="tooltip" data-placement="left" class="tooltips" href="#"><i class="fa fa-heart"></i></a></li>
					</ul>
				</div>
			</li>
			<li class="item">
				<div class="product-img">
					<a href="shop-ui-inner.html"><img class="full-width img-responsive" src="<?php echo $unify; ?>/assets/img/blog/10.jpg" alt=""></a>
					<a class="product-review" href="shop-ui-inner.html">Quick review</a>
					<a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
				</div>
				<div class="product-description product-description-brd">
					<div class="overflow-h margin-bottom-5">
						<div class="pull-left">
							<h4 class="title-price"><a href="shop-ui-inner.html">Double-breasted</a></h4>
							<span class="gender text-uppercase">Women</span>
							<span class="gender">Suits - Blazers</span>
						</div>
						<div class="product-price">
							<span class="title-price">$95.00</span>
						</div>
					</div>
					<ul class="list-inline product-ratings">
						<li><i class="rating-selected fa fa-star"></i></li>
						<li><i class="rating-selected fa fa-star"></i></li>
						<li><i class="rating-selected fa fa-star"></i></li>
						<li><i class="rating fa fa-star"></i></li>
						<li><i class="rating fa fa-star"></i></li>
						<li class="like-icon"><a data-original-title="Add to wishlist" data-toggle="tooltip" data-placement="left" class="tooltips" href="#"><i class="fa fa-heart"></i></a></li>
					</ul>
				</div>
			</li>
			<li class="item">
				<div class="product-img">
					<a href="shop-ui-inner.html"><img class="full-width img-responsive" src="<?php echo $unify; ?>/assets/img/blog/11.jpg" alt=""></a>
					<a class="product-review" href="shop-ui-inner.html">Quick review</a>
					<a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
					<div class="shop-rgba-red rgba-banner">Out of stock</div>
				</div>
				<div class="product-description product-description-brd">
					<div class="overflow-h margin-bottom-5">
						<div class="pull-left">
							<h4 class="title-price"><a href="shop-ui-inner.html">Double-breasted</a></h4>
							<span class="gender text-uppercase">Men</span>
							<span class="gender">Suits - Blazers</span>
						</div>
						<div class="product-price">
							<span class="title-price">$95.00</span>
						</div>
					</div>
					<ul class="list-inline product-ratings">
						<li><i class="rating-selected fa fa-star"></i></li>
						<li><i class="rating-selected fa fa-star"></i></li>
						<li><i class="rating-selected fa fa-star"></i></li>
						<li><i class="rating fa fa-star"></i></li>
						<li><i class="rating fa fa-star"></i></li>
						<li class="like-icon"><a data-original-title="Add to wishlist" data-toggle="tooltip" data-placement="left" class="tooltips" href="#"><i class="fa fa-heart"></i></a></li>
					</ul>
				</div>
			</li>
		</ul>
	</div>
	<!--=== End Illustration v2 ===-->

	<!--=== Illustration v3 ===-->
	<div class="row margin-bottom-50">
		<div class="col-md-4 md-margin-bottom-30">
			<div class="overflow-h">
				<a class="illustration-v3 illustration-img1" href="#">
					<span class="illustration-bg">
						<span class="illustration-ads">
							<span class="illustration-v3-category">
								<span class="product-category">Men</span>
								<span class="product-amount">56 Items</span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
		<div class="col-md-4 md-margin-bottom-30">
			<div class="overflow-h">
				<a class="illustration-v3 illustration-img2" href="#">
					<span class="illustration-bg">
						<span class="illustration-ads">
							<span class="illustration-v3-category">
								<span class="product-category">Women</span>
								<span class="product-amount">56 Items</span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
		<div class="col-md-4">
			<div class="overflow-h">
				<a class="illustration-v3 illustration-img3" href="#">
					<span class="illustration-bg">
						<span class="illustration-ads">
							<span class="illustration-v3-category">
								<span class="product-category">Children</span>
								<span class="product-amount">56 Items</span>
							</span>
						</span>
					</span>
				</a>
			</div>
		</div>
	</div>
	<!--=== End Illustration v3 ===-->

	<div class="heading heading-v1 margin-bottom-40">
		<h2>Latest products</h2>
	</div>

	<!--=== Illustration v2 ===-->
	<div class="row illustration-v2">
		<div class="col-md-3 col-sm-6 md-margin-bottom-30">
			<div class="product-img">
				<a href="shop-ui-inner.html"><img class="full-width img-responsive" src="<?php echo $unify; ?>/assets/img/blog/25.jpg" alt=""></a>
				<a class="product-review" href="shop-ui-inner.html">Quick review</a>
				<a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
			</div>
			<div class="product-description product-description-brd">
				<div class="overflow-h margin-bottom-5">
					<div class="pull-left">
						<h4 class="title-price"><a href="shop-ui-inner.html">Double-breasted</a></h4>
						<span class="gender text-uppercase">Woman</span>
						<span class="gender">Suits - Blazers</span>
					</div>
					<div class="product-price">
						<span class="title-price">$95.00</span>
					</div>
				</div>
				<ul class="list-inline product-ratings">
					<li><i class="rating-selected fa fa-star"></i></li>
					<li><i class="rating-selected fa fa-star"></i></li>
					<li><i class="rating-selected fa fa-star"></i></li>
					<li><i class="rating fa fa-star"></i></li>
					<li><i class="rating fa fa-star"></i></li>
					<li class="like-icon"><a data-original-title="Add to wishlist" data-toggle="tooltip" data-placement="left" class="tooltips" href="#"><i class="fa fa-heart"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 md-margin-bottom-30">
			<div class="product-img">
				<a href="shop-ui-inner.html"><img class="full-width img-responsive" src="<?php echo $unify; ?>/assets/img/blog/09.jpg" alt=""></a>
				<a class="product-review" href="shop-ui-inner.html">Quick review</a>
				<a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
			</div>
			<div class="product-description product-description-brd">
				<div class="overflow-h margin-bottom-5">
					<div class="pull-left">
						<h4 class="title-price"><a href="shop-ui-inner.html">Double-breasted</a></h4>
						<span class="gender text-uppercase">Men</span>
						<span class="gender">Suits - Blazers</span>
					</div>
					<div class="product-price">
						<span class="title-price">$60.00</span>
						<span class="title-price line-through">$95.00</span>
					</div>
				</div>
				<ul class="list-inline product-ratings">
					<li><i class="rating-selected fa fa-star"></i></li>
					<li><i class="rating-selected fa fa-star"></i></li>
					<li><i class="rating-selected fa fa-star"></i></li>
					<li><i class="rating fa fa-star"></i></li>
					<li><i class="rating fa fa-star"></i></li>
					<li class="like-icon"><a data-original-title="Add to wishlist" data-toggle="tooltip" data-placement="left" class="tooltips" href="#"><i class="fa fa-heart"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 md-margin-bottom-30">
			<div class="product-img">
				<a href="shop-ui-inner.html"><img class="full-width img-responsive" src="<?php echo $unify; ?>/assets/img/blog/10.jpg" alt=""></a>
				<a class="product-review" href="shop-ui-inner.html">Quick review</a>
				<a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
				<div class="shop-rgba-red rgba-banner">Out of stock</div>
			</div>
			<div class="product-description product-description-brd">
				<div class="overflow-h margin-bottom-5">
					<div class="pull-left">
						<h4 class="title-price"><a href="shop-ui-inner.html">Double-breasted</a></h4>
						<span class="gender text-uppercase">Women</span>
						<span class="gender">Suits - Blazers</span>
					</div>
					<div class="product-price">
						<span class="title-price">$95.00</span>
					</div>
				</div>
				<ul class="list-inline product-ratings">
					<li><i class="rating-selected fa fa-star"></i></li>
					<li><i class="rating-selected fa fa-star"></i></li>
					<li><i class="rating-selected fa fa-star"></i></li>
					<li><i class="rating fa fa-star"></i></li>
					<li><i class="rating fa fa-star"></i></li>
					<li class="like-icon"><a data-original-title="Add to wishlist" data-toggle="tooltip" data-placement="left" class="tooltips" href="#"><i class="fa fa-heart"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 md-margin-bottom-30">
			<div class="product-img">
				<a href="shop-ui-inner.html"><img class="full-width img-responsive" src="<?php echo $unify; ?>/assets/img/blog/11.jpg" alt=""></a>
				<a class="product-review" href="shop-ui-inner.html">Quick review</a>
				<a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
				<div class="shop-rgba-dark-green rgba-banner">New</div>
			</div>
			<div class="product-description product-description-brd">
				<div class="overflow-h margin-bottom-5">
					<div class="pull-left">
						<h4 class="title-price"><a href="shop-ui-inner.html">Double-breasted</a></h4>
						<span class="gender text-uppercase">Men</span>
						<span class="gender">Suits - Blazers</span>
					</div>
					<div class="product-price">
						<span class="title-price">$95.00</span>
					</div>
				</div>
				<ul class="list-inline product-ratings">
					<li><i class="rating-selected fa fa-star"></i></li>
					<li><i class="rating-selected fa fa-star"></i></li>
					<li><i class="rating-selected fa fa-star"></i></li>
					<li><i class="rating fa fa-star"></i></li>
					<li><i class="rating fa fa-star"></i></li>
					<li class="like-icon"><a data-original-title="Add to wishlist" data-toggle="tooltip" data-placement="left" class="tooltips" href="#"><i class="fa fa-heart"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<!--=== End Illustration v2 ===-->
</div>
<!--=== End Product Content ===-->

<!--=== Twitter-Block ===-->
<div class="parallaxBg twitter-block margin-bottom-60">
	<div class="container">
		<div class="heading heading-v1 margin-bottom-20">
			<h2>Latest Tweets</h2>
		</div>

		<div id="carousel-example-generic-v5" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li class="active rounded-x" data-target="#carousel-example-generic-v5" data-slide-to="0"></li>
				<li class="rounded-x" data-target="#carousel-example-generic-v5" data-slide-to="1"></li>
				<li class="rounded-x" data-target="#carousel-example-generic-v5" data-slide-to="2"></li>
			</ol>

			<div class="carousel-inner">
				<div class="item active">
					<p>Unify has reached 10000 plus sales and we just want to thank you to our all customers for being part of the Unify Template success <a href="http://bit.ly/1c0UN3Y">http://bit.ly/1c0UN3Y</a><p>
						<p><a href="https://twitter.com/htmlstream">@htmlstream</a></p>
						<ul class="list-inline twitter-icons">
							<li><a href="#"><i class="fa fa-reply"></i></a></li>
							<li><a href="#"><i class="fa fa-retweet"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
						</ul>
					</div>
					<div class="item">
						<p>the majority have suffered #alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum</p>
						<p><a href="https://twitter.com/htmlstream">@twbootstrap</a></p>
						<ul class="list-inline twitter-icons">
							<li><a href="#"><i class="fa fa-reply"></i></a></li>
							<li><a href="#"><i class="fa fa-retweet"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
						</ul>
					</div>
					<div class="item">
						<p>New 100% Free Stock Photos. Every. Single. Day. Everything you need for your creative projects. <a href="#">http://publicdomainarchive.com</a></p>
						<p><a href="https://twitter.com/htmlstream">@wrapbootstrap</a></p>
						<ul class="list-inline twitter-icons">
							<li><a href="#"><i class="fa fa-reply"></i></a></li>
							<li><a href="#"><i class="fa fa-retweet"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
						</ul>
					</div>
				</div>

				<div class="carousel-arrow">
					<a class="left carousel-control" href="#carousel-example-generic-v5" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic-v5" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!--=== End Twitter-Block ===-->

	<div class="container">
		<!--=== Product Service ===-->
		<div class="row margin-bottom-60">
			<div class="col-md-4 product-service md-margin-bottom-30">
				<div class="product-service-heading">
					<i class="fa fa-truck"></i>
				</div>
				<div class="product-service-in">
					<h3>Free Delivery</h3>
					<p>Integer mattis lacinia felis vel molestie. Ut eu euismod erat, tincidunt pulvinar semper veliUt porta, leo...</p>
					<a href="#">+Read More</a>
				</div>
			</div>
			<div class="col-md-4 product-service md-margin-bottom-30">
				<div class="product-service-heading">
					<i class="icon-earphones-alt"></i>
				</div>
				<div class="product-service-in">
					<h3>Customer Service</h3>
					<p>Integer mattis lacinia felis vel molestie. Ut eu euismod erat, tincidunt pulvinar semper veliUt porta, leo...</p>
					<a href="#">+Read More</a>
				</div>
			</div>
			<div class="col-md-4 product-service">
				<div class="product-service-heading">
					<i class="icon-refresh"></i>
				</div>
				<div class="product-service-in">
					<h3>Free Returns</h3>
					<p>Integer mattis lacinia felis vel molestie. Ut eu euismod erat, tincidunt pulvinar semper veliUt porta, leo...</p>
					<a href="#">+Read More</a>
				</div>
			</div>
		</div><!--/end row-->
		<!--=== End Product Service ===-->

		<!--=== Illustration v4 ===-->
		<div class="row illustration-v4 margin-bottom-40">
			<div class="col-md-4">
				<div class="heading heading-v1 margin-bottom-20">
					<h2>Top Rated</h2>
				</div>
				<div class="thumb-product">
					<img class="thumb-product-img" src="<?php echo $unify; ?>/assets/img/thumb/08.jpg" alt="">
					<div class="thumb-product-in">
						<h4><a href="shop-ui-inner.html">Yuketen</a> – <a href="shop-ui-inner.html">Derby Shoe</a></h4>
						<span class="thumb-product-type">Footwear - Oxfords</span>
					</div>
					<ul class="list-inline overflow-h">
						<li class="thumb-product-price line-through">$75.00</li>
						<li class="thumb-product-price">$65.00</li>
						<li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> | <a href="#"><i class="fa fa-heart"></i></a></li>
					</ul>
				</div>
				<div class="thumb-product">
					<img class="thumb-product-img" src="<?php echo $unify; ?>/assets/img/thumb/09.jpg" alt="">
					<div class="thumb-product-in">
						<h4><a href="shop-ui-inner.html">Yuketen</a> – <a href="shop-ui-inner.html">Derby Shoe</a></h4>
						<span class="thumb-product-type">Footwear - Oxfords</span>
					</div>
					<ul class="list-inline overflow-h">
						<li class="thumb-product-price">$75.00</li>
						<li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> | <a href="#"><i class="fa fa-heart"></i></a></li>
					</ul>
				</div>
				<div class="thumb-product">
					<img class="thumb-product-img" src="<?php echo $unify; ?>/assets/img/thumb/03.jpg" alt="">
					<div class="thumb-product-in">
						<h4><a href="shop-ui-inner.html">Yuketen</a> – <a href="shop-ui-inner.html">Derby Shoe</a></h4>
						<span class="thumb-product-type">Footwear - Oxfords</span>
					</div>
					<ul class="list-inline overflow-h">
						<li class="thumb-product-price">$75.00</li>
						<li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> | <a href="#"><i class="fa fa-heart"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-4">
				<div class="heading heading-v1 margin-bottom-20">
					<h2>Best Sellers</h2>
				</div>
				<div class="thumb-product">
					<img class="thumb-product-img" src="<?php echo $unify; ?>/assets/img/thumb/02.jpg" alt="">
					<div class="thumb-product-in">
						<h4><a href="shop-ui-inner.html">Yuketen</a> – <a href="shop-ui-inner.html">Derby Shoe</a></h4>
						<span class="thumb-product-type">Footwear - Oxfords</span>
					</div>
					<ul class="list-inline overflow-h">
						<li class="thumb-product-price">$75.00</li>
						<li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> | <a href="#"><i class="fa fa-heart"></i></a></li>
					</ul>
				</div>
				<div class="thumb-product">
					<img class="thumb-product-img" src="<?php echo $unify; ?>/assets/img/thumb/10.jpg" alt="">
					<div class="thumb-product-in">
						<h4><a href="shop-ui-inner.html">Yuketen</a> – <a href="shop-ui-inner.html">Derby Shoe</a></h4>
						<span class="thumb-product-type">Footwear - Oxfords</span>
					</div>
					<ul class="list-inline overflow-h">
						<li class="thumb-product-price">$75.00</li>
						<li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> | <a href="#"><i class="fa fa-heart"></i></a></li>
					</ul>
				</div>
				<div class="thumb-product">
					<img class="thumb-product-img" src="<?php echo $unify; ?>/assets/img/thumb/06.jpg" alt="">
					<div class="thumb-product-in">
						<h4><a href="shop-ui-inner.html">Yuketen</a> – <a href="shop-ui-inner.html">Derby Shoe</a></h4>
						<span class="thumb-product-type">Footwear - Oxfords</span>
					</div>
					<ul class="list-inline overflow-h">
						<li class="thumb-product-price line-through">$75.00</li>
						<li class="thumb-product-price">$65.00</li>
						<li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> | <a href="#"><i class="fa fa-heart"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-4 padding">
				<div class="heading heading-v1 margin-bottom-20">
					<h2>Sale Items</h2>
				</div>
				<div class="thumb-product">
					<img class="thumb-product-img" src="<?php echo $unify; ?>/assets/img/thumb/07.jpg" alt="">
					<div class="thumb-product-in">
						<h4><a href="shop-ui-inner.html">Yuketen</a> – <a href="shop-ui-inner.html">Derby Shoe</a></h4>
						<span class="thumb-product-type">Footwear - Oxfords</span>
					</div>
					<ul class="list-inline overflow-h">
						<li class="thumb-product-price line-through">$75.00</li>
						<li class="thumb-product-price">$65.00</li>
						<li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> | <a href="#"><i class="fa fa-heart"></i></a></li>
					</ul>
				</div>
				<div class="thumb-product">
					<img class="thumb-product-img" src="<?php echo $unify; ?>/assets/img/thumb/04.jpg" alt="">
					<div class="thumb-product-in">
						<h4><a href="shop-ui-inner.html">Yuketen</a> – <a href="shop-ui-inner.html">Derby Shoe</a></h4>
						<span class="thumb-product-type">Footwear - Oxfords</span>
					</div>
					<ul class="list-inline overflow-h">
						<li class="thumb-product-price">$75.00</li>
						<li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> | <a href="#"><i class="fa fa-heart"></i></a></li>
					</ul>
				</div>
				<div class="thumb-product">
					<img class="thumb-product-img" src="<?php echo $unify; ?>/assets/img/thumb/05.jpg" alt="">
					<div class="thumb-product-in">
						<h4><a href="shop-ui-inner.html">Yuketen</a> – <a href="shop-ui-inner.html">Derby Shoe</a></h4>
						<span class="thumb-product-type">Footwear - Oxfords</span>
					</div>
					<ul class="list-inline overflow-h">
						<li class="thumb-product-price">$75.00</li>
						<li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> | <a href="#"><i class="fa fa-heart"></i></a></li>
					</ul>
				</div>
			</div>
		</div><!--/end row-->
		<!--=== End Illustration v4 ===-->
	</div><!--/end cotnainer-->

	<!--=== Collection Banner ===-->
	<div class="collection-banner">
		<div class="container">
			<div class="col-md-7 md-margin-bottom-50">
				<h2>Makeup collection</h2>
				<p>Duis in posuere risus. Vivamus sed dignissim tellus. In vehicula justo tempor commodo. <br> Nunc lobortis dapibus neque quis lacinia</p><br>
				<a href="#" class="btn-u btn-brd btn-brd-hover btn-u-light">Shop Now</a>
			</div>
			<div class="col-md-5">
				<div class="overflow-h">
					<span class="percent-numb">50</span>
					<div class="percent-off">
						<span class="discount-percent">%</span>
						<span class="discount-off">off</span>
					</div>
					<div class="new-offers shop-bg-green rounded-x">
						<p>new</p>
						<span>Products</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--=== End Collection Banner ===-->

	<!--=== Sponsors ===-->
	<div class="container content">
		<div class="heading heading-v1 margin-bottom-40">
			<h2>Sponsors</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed odio elit, ultrices vel cursus sed, placerat ut leo. Phasellus in magna erat. Etiam gravida convallis augue non tincidunt. Nunc lobortis dapibus neque quis lacinia. Nam dapibus tellus sit amet odio venenatis</p>
		</div>

		<ul class="list-inline owl-slider-v2">
			<li class="item first-child">
				<img src="<?php echo $unify; ?>/assets/img/clients/07.png" alt="">
			</li>
			<li class="item">
				<img src="<?php echo $unify; ?>/assets/img/clients/08.png" alt="">
			</li>
			<li class="item">
				<img src="<?php echo $unify; ?>/assets/img/clients/10.png" alt="">
			</li>
			<li class="item">
				<img src="<?php echo $unify; ?>/assets/img/clients/11.png" alt="">
			</li>
			<li class="item">
				<img src="<?php echo $unify; ?>/assets/img/clients/09.png" alt="">
			</li>
			<li class="item">
				<img src="<?php echo $unify; ?>/assets/img/clients/12.png" alt="">
			</li>
			<li class="item">
				<img src="<?php echo $unify; ?>/assets/img/clients/07.png" alt="">
			</li>
			<li class="item">
				<img src="<?php echo $unify; ?>/assets/img/clients/08.png" alt="">
			</li>
			<li class="item">
				<img src="<?php echo $unify; ?>/assets/img/clients/09.png" alt="">
			</li>
			<li class="item">
				<img src="<?php echo $unify; ?>/assets/img/clients/10.png" alt="">
			</li>
			<li class="item">
				<img src="<?php echo $unify; ?>/assets/img/clients/11.png" alt="">
			</li>
			<li class="item">
				<img src="<?php echo $unify; ?>/assets/img/clients/12.png" alt="">
			</li>
		</ul><!--/end owl-carousel-->
	</div>
	<!--=== End Sponsors ===-->

	<!--=== Shop Suvbscribe ===-->
	<div class="shop-subscribe">
		<div class="container">
			<div class="row">
				<div class="col-md-8 md-margin-bottom-20">
					<h2>subscribe to our weekly <strong>newsletter</strong></h2>
				</div>
				<div class="col-md-4">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Email your email...">
						<span class="input-group-btn">
							<button class="btn" type="button"><i class="fa fa-envelope-o"></i></button>
						</span>
					</div>
				</div>
			</div>
		</div><!--/end container-->
	</div>
	<!--=== End Shop Suvbscribe ===-->

	<!--=== Footer v4 ===-->
	<div class="footer-v4">
		<div class="footer">
			<div class="container">
				<div class="row">
					<!-- About -->
					<div class="col-md-4 md-margin-bottom-40">
						<a href="index.html"><img class="footer-logo" src="<?php echo $unify; ?>/assets/img/logo-2.png" alt=""></a>
						<p>About Unify dolor sit amet, consectetur adipiscing elit. Maecenas eget nisl id libero tincidunt sodales.</p>
						<br>
						<ul class="list-unstyled address-list margin-bottom-20">
							<li><i class="fa fa-angle-right"></i>California, US, Lorem Lis Street, Orange, 25</li>
							<li><i class="fa fa-angle-right"></i>Phone: 800 123 3456</li>
							<li><i class="fa fa-angle-right"></i>Fax: 800 123 3456</li>
							<li><i class="fa fa-angle-right"></i>Email: info@anybiz.co</li>
						</ul>

						<ul class="list-inline shop-social">
							<li><a href="#"><i class="fb rounded-md fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="tw rounded-md fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="gp rounded-md fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="yt rounded-md fa fa-youtube"></i></a></li>
						</ul>
					</div>
					<!-- End About -->

					<!-- Simple List -->
					<div class="col-md-2 col-sm-3">
						<div class="row">
							<div class="col-sm-12 col-xs-6">
								<h2 class="thumb-headline">Secciones</h2>
								<ul class="list-unstyled simple-list margin-bottom-20">
									<li><a href="#">Ultima Hora</a></li>
									<li><a href="#">Exclusiva</a></li>
									<li><a href="#">Documentos </a></li>
									<li><a href="#">Francisco papa</a></li>
									<li>...</li>
								</ul>
							</div>

							<div class="col-sm-12 col-xs-6">
								<h2 class="thumb-headline">Temas</h2>
								<ul class="list-unstyled simple-list">
									<li><a href="#">Ultima Hora</a></li>
									<li><a href="#">Exclusiva</a></li>
									<li><a href="#">Documentos </a></li>
									<li><a href="#">Francisco papa</a></li>
									<li>...</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-2 col-sm-3">
						<div class="row">
							<div class="col-sm-12 col-xs-6">
								<h2 class="thumb-headline">Utilidades</h2>
								<ul class="list-unstyled simple-list margin-bottom-20">
									<li><a href="#">Ultima Hora</a></li>
									<li><a href="#">Exclusiva</a></li>
									<li><a href="#">Documentos </a></li>
									<li>...</li>
								</ul>
							</div>

							<div class="col-sm-12 col-xs-6">
								<h2 class="thumb-headline">Documentos</h2>
								<ul class="list-unstyled simple-list">
									<li><a href="#">Ultima Hora</a></li>
									<li><a href="#">Exclusiva</a></li>
									<li><a href="#">Documentos </a></li>
									<li><a href="#">Francisco papa</a></li>
									<li>...</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-2 col-sm-3">
						<div class="row">
							<div class="col-sm-12 col-xs-6">
								<h2 class="thumb-headline">Publicidad</h2>
								<ul class="list-unstyled simple-list margin-bottom-20">
									<li><a href="#">Ultima Hora</a></li>
									<li><a href="#">Exclusiva</a></li>
									<li><a href="#">Documentos </a></li>
									<li><a href="#">Francisco papa</a></li>
									<li>...</li>
								</ul>
							</div>

							<div class="col-sm-12 col-xs-6">
								<h2 class="thumb-headline">Contacto</h2>
								<ul class="list-unstyled simple-list">
									<li><a href="#">Ultima Hora</a></li>
									<li><a href="#">Exclusiva</a></li>
									<li><a href="#">Documentos </a></li>
									<li><a href="#">Francisco papa</a></li>
									<li>...</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-2 col-sm-3">
						<div class="row">
							<div class="col-sm-12 col-xs-6">
								<h2 class="thumb-headline">Utilidades</h2>
								<ul class="list-unstyled simple-list margin-bottom-20">
									<li><a href="#">Ultima Hora</a></li>
									<li><a href="#">Exclusiva</a></li>
									<li>...</li>
								</ul>
							</div>

							<div class="col-sm-12 col-xs-6">
								<h2 class="thumb-headline">Documentos</h2>
								<ul class="list-unstyled simple-list">
									<li><a href="#">Ultima Hora</a></li>
									<li><a href="#">Exclusiva</a></li>
									<li>...</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- End Simple List -->
				</div><!--/end row-->
			</div><!--/end continer-->
		</div><!--/footer-->

		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<p>
							<?=date('Y')?> &copy; Store-mastersoftware. Все права защищены.
							<a target="_blank" href="https://twitter.com/htmlstream"><a href="#">Политика конфиденциальности</a>
						</p>
					</div>
					<div class="col-md-6">
						<ul class="list-inline sponsors-icons pull-right">
							<li><i class="fa fa-cc-paypal"></i></li>
							<li><i class="fa fa-cc-visa"></i></li>
							<li><i class="fa fa-cc-mastercard"></i></li>
							<li><i class="fa fa-cc-discover"></i></li>
						</ul>
					</div>
				</div>
			</div>
		</div><!--/copyright-->
	</div>
	<!--=== End Footer v4 ===-->
</div><!--/wrapper-->

<!-- Wait Block -->
<!--<div class="g-popup-wrapper">-->
<!--	<div class="g-popup g-popup--discount2">-->
<!--		<div class="g-popup--discount2-message">-->
<!--			<h3>Хотите 10% скидки?</h3>-->
<!--			<h4>You Are Fabulous!</h4>-->
<!--			<p>Get 10% Off Your Next Purchase! Just Type Email Below!</p>-->
<!---->
<!--			<form action="#" class="sky-form">-->
<!--				<label class="input">-->
<!--					<input type="email" placeholder="Email" class="form-control">-->
<!--				</label>-->
<!--				<label class="input">-->
<!--					<button class="btn btn-default" type="button">Subscribe</button>-->
<!--				</label>-->
<!--			</form>-->
<!--		</div>-->
<!--		<img src="--><?php //echo $unify; ?><!--/assets/img/blog/26.jpg" alt="ALT" width="270">-->
<!--		<a href="javascript:void(0);" class="g-popup__close g-popup--discount2__close"><span class="icon-close" aria-hidden="true"></span></a>-->
<!--	</div>-->
<!--</div>-->
<!-- End Wait Block -->

<!-- JS Global Compulsory -->
<script src="<?php echo $unify; ?>/assets/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo $unify; ?>/assets/plugins/jquery/jquery-migrate.min.js"></script>
<script src="<?php echo $unify; ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script src="<?php echo $unify; ?>/assets/plugins/back-to-top.js"></script>
<script src="<?php echo $unify; ?>/assets/plugins/smoothScroll.js"></script>
<script src="<?php echo $unify; ?>/assets/plugins/jquery.parallax.js"></script>
<script src="<?php echo $unify; ?>/assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
<script src="<?php echo $unify; ?>/assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php echo $unify; ?>/assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo $unify; ?>/assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- JS Customization -->
<script src="<?php echo $unify; ?>/assets/js/custom.js"></script>
<!-- JS Page Level -->
<script src="<?php echo $unify; ?>/assets/js/shop.app.js"></script>
<script src="<?php echo $unify; ?>/assets/js/plugins/owl-carousel.js"></script>
<script src="<?php echo $unify; ?>/assets/js/plugins/revolution-slider.js"></script>
<script src="<?php echo $unify; ?>/assets/js/plugins/style-switcher.js"></script>
<script>
	jQuery(document).ready(function() {
		App.init();
		App.initScrollBar();
		App.initParallaxBg();
		OwlCarousel.initOwlCarousel();
		RevolutionSlider.initRSfullWidth();
		StyleSwitcher.initStyleSwitcher();
	});
</script>
<!--[if lt IE 9]>
	<script src="<?php echo $unify; ?>/assets/plugins/respond.js"></script>
	<script src="<?php echo $unify; ?>/assets/plugins/html5shiv.js"></script>
	<script src="<?php echo $unify; ?>/assets/js/plugins/placeholder-IE-fixes.js"></script>
	<![endif]-->

</body>
</html>
