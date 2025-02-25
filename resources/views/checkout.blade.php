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
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
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
							<div id="colorlib-logo"><a href={{route('home')}}>Sweet Shop</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
                            <ul>
                                <li><a href={{route('home')}}>Головна</a></li>
                                <li class="has-dropdown active">
                                    <a href={{route('shop')}}>Магазин</a>

                                </li>

                                <li><a href={{route('about')}}>Про нас</a></li>
                                <li><a href={{route('contact')}}>Контакти</a></li>
                                <li><a href="   {{ route('basket') }}"><i class="icon-shopping-cart"></i> Кошик [{{$productsCount}}]</a></li>
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
				   					<h1>Оформлення</h1>
				   					<h2 class="bread"><span><a href={{route('home')}}>Головна</a></span> <span><a href={{route('shop')}}>Магазин</a></span> <span>Оформлення</span></h2>
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
				<div class="row row-pb-md">
					<div class="col-md-10 col-md-offset-1">
						<div class="process-wrap">
							<div class="process text-center active">
								<p><span>01</span></p>
								<h3>Кошик</h3>
							</div>
							<div class="process text-center active">
								<p><span>02</span></p>
								<h3>CОформлення замовлення</h3>
							</div>
							<div class="process text-center">
								<p><span>03</span></p>
								<h3>Завершення</h3>
							</div>
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="col-md-7">
                        <form method="post" action="{{ route('order.complete') }}" class="colorlib-form">
                            @csrf
                            <h2>Деталі замовлення</h2>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="fname">Ім'я</label>
                                    <input type="text" name="name" id="fname" class="form-control" placeholder="Ім'я">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="lname">Прізвище</label>
                                    <input type="text" name="surname" id="lname" class="form-control" placeholder="Прізвище">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="adress">Адреса</label>
                                    <input type="text" name="adress" id="adress" class="form-control" placeholder="Введіть адресу">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="towncity">Місто</label>
                                    <input type="text" name="town" id="towncity" class="form-control" placeholder="Місто">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="stateprovince">Область</label>
                                    <input type="text" name="oblast" id="stateprovince" class="form-control" placeholder="Область">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="zippostalcode">Почтовий індекс</label>
                                    <input type="text" name="postalcode" id="zippostalcode" class="form-control" placeholder="Почтовий індекс">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Емейл</label>
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Eмейл">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phone">Номер телефону</label>
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Номер телефону">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Розмістити замовлення</button>

                        </form>
                        <a href="{{ $checkout_session->url }}" class="btn btn-primary" style="margin-top: 15px;">Оплата картой</a>
                    </div>
                    <div class="col-md-5">
                        <div class="cart-detail">
                            <h2>Деталі</h2>
                            <ul>
                                <li>
                                    <span>Попередня ціна</span> <span>${{ number_format($fullPrice, 2) }}</span>
                                    <ul>
                                        @if($order && $order->products)
                                            @foreach($order->products as $product)
                                                <li><span>{{ $product->pivot->count }} x {{ $product->name }}</span> <span>${{ number_format($product->getPriceForCount(), 2) }}</span></li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </li>
                                <li><span>Знижка</span> <span>${{ $order && $order->coupon ? $order->getFullPrice() * ($order->coupon->discountInPercent / 100) : '0.00' }}</span></li>
                                <li><span>Всього</span> <span>${{ $order ? $order->getFullPrice() - ($order->coupon ? $order->getFullPrice() * ($order->coupon->discountInPercent / 100) : 0) : '0.00' }}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
			</div>
		</div>




        <div class="colorlib-shop">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
                        <h2><span>Наші нові вироби</span></h2>
                        <p>Хочемо запропонувати наші нові вироби</p>
                    </div>
                </div>
                <div class="row">
                    @foreach($products as $productCycle)
                        @if($productCycle->created_at > now()->subDays(7))


                            <div class="col-md-3 text-center">
                                <div class="product-entry">
                                    <div class="product-img" style="background-image: url('{{ asset('storage/' . $productCycle->image) }}')">
                                        <p class="tag"><span class="new">New</span></p>

                                    </div>
                                    <div class="desc">
                                        <h3><a href="{{ route('product', [$productCycle->category->group->slug, $productCycle->category->slug, $productCycle->slug]) }}">{{$productCycle->name}}</a></h3>
                                        <p class="price"><span>${{$productCycle->price}}.00</span></p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

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
    <script src="https://js.stripe.com/v3/"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</script>

	</body>
</html>

