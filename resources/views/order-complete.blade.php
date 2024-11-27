<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sweet Shop</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="{{route('home')}}">Sweet Shop</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
                            <ul>
                                <li><a href={{route('home')}}>Головна</a></li>
                                <li class="has-dropdown active">
                                    <a href={{route('shop')}}>Магазин</a>

                                </li>

                                <li><a href={{route('about')}}>Про нас</a></li>
                                <li><a href={{route('contact')}}>Контакти</a></li>
                                <li><a href="   {{ route('basket') }}"><i class="icon-shopping-cart"></i> Кошик [0]</a></li>
                            </ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero" class="breadcrumbs">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/cover-img-1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Замофленя оформленно</h1>
				   					<h2 class="bread"><span><a href={{route('home')}}>Головна</a></span> <span><a href={{route('basket')}}>Кошик</a></span> <span>Оформлення</span></h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div class="colorlib-shop">
			<div class="container">
				<div class="row row-pb-lg">
					<div class="col-md-10 col-md-offset-1">
						<div class="process-wrap">
							<div class="process text-center active">
								<p><span>01</span></p>
								<h3>Кошик</h3>
							</div>
							<div class="process text-center active">
								<p><span>02</span></p>
								<h3>Оформлення</h3>
							</div>
							<div class="process text-center">
								<p><span>03</span></p>
								<h3>Замовлення оформлено</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<span class="icon"><i class="icon-shopping-cart"></i></span>
						<h2>Дякуємо за покуку! Замовлення оформлено. Менеджер з вами зв'яжется для уточнення деталей замовлення. Очікуйте дзвінка</h2>
						<p>
							<a href="{{route('home')}}"class="btn btn-primary">Головна</a>
							<a href="{{route('shop')}}"class="btn btn-primary btn-outline">Продовжити покупки</a>
						</p>
					</div>
				</div>
			</div>
		</div>




        <footer id="colorlib-footer" role="contentinfo">
            <div class="container">
                <div class="row row-pb-md">
                    <div class="col-md-3 colorlib-widget">
                        <h4>Про магазин</h4>
                        <p>
                            Наш магазин кондитерських виробів – це місце, де мрії про солодке стають реальністю. Ми пропонуємо широкий асортимент свіжих тортів, тістечок, печива та інших десертів, виготовлених з натуральних інгредієнтів за найкращими рецептами. </p>

                    </div>

                    <div class="col-md-3 colorlib-widget">
                        <h4>Інформація</h4>
                        <p>
                        <ul class="colorlib-footer-links">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Контакти</a></li>

                        </ul>
                        </p>
                    </div>


                    <div class="col-md-3 ">
                        <h4>Адресса</h4>
                        <ul class="colorlib-footer-links">
                            <li>Шевчешка 23 а, <br> Київ</li>
                            <li><a href="tel://1234567920">+ 1235 2355 98</a></li>
                            <li><a href="mailto:support@sweetshop.com">support@sweetshop.com</a></li>
                            <li><a href="#">sweetshop.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	</script>

	</body>
</html>

