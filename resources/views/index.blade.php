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

<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
<link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

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
								<li class="active"><a href={{route('home')}}>Головна</a></li>
								<li class="has-dropdown">
									<a href= {{route('shop')}}>Магазин</a>
								</li>
								<li><a href={{route('about')}}>Про нас</a></li>
								<li><a href={{route('contact')}}>Контакти</a></li>
								<li><a href={{route('basket')}}><i class="icon-shopping-cart"></i>

                                        Кошик [{{$productsCount}}]

                                    </a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/img_bg_1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
					   					<h1 class="head-1">Смачні</h1>
					   					<h2 class="head-2"> Креативні.</h2>
					   					<h2 class="head-3">Десерти</h2>
					   					<p class="category"><span>Від українських майстрів.</span></p>
					   					<p><a href={{route('shop')}} class="btn btn-primary">Спробувати зараз</a></p>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
					   					<h1 class="head-1">Великі</h1>
					   					<h2 class="head-2">Знижки</h2>
					   					<h2 class="head-3">45%</h2>
					   					<p class="category"><span>На весільні торти</span></p>
					   					<p><a href={{route('shop')}} class="btn btn-primary">Спробувати зараз</a></p>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_3.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
					   					<h1 class="head-1">Нові</h1>
					   					<h2 class="head-2">Вироби</h2>
					   					<h2 class="head-3">знижка 30% </h2>
					   					<p class="category"><span>На всі нові вироби</span></p>
					   					<p><a href={{route('shop')}} class="btn btn-primary">Спробувати зараз</a></p>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		<div id="colorlib-featured-product">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<a href={{route('shop')}} class="f-product-1" style="background-image: url(images/item-1.jpg);">
							<div class="desc">
								<h2>Варіанти<br>для <br>всіх</h2>
							</div>
						</a>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-6">
								<a href={{route('shop')}} class="f-product-2" style="background-image: url(images/item-2.jpg);">
									<div class="desc">
										<h2>Нові <br>Вироби
									</div>
								</a>
							</div>
							<div class="col-md-6">
								<a href={{route('shop')}} class="f-product-2" style="background-image: url(images/item-4.jpg);">
									<div class="desc">
										<h2>Знижка <br>20% <br></h2>
									</div>
								</a>
							</div>
							<div class="col-md-12">
								<a href={{route('shop')}} class="f-product-2" style="background-image: url(images/item-3.jpg);">
									<div class="desc">
										<h2>Смачні <br>капкейки</h2>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="colorlib-shop">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
						<h2><span>Нові вироби</span></h2>
						<p>Спробуйте наші нові унікальні та смачні вироби, виготовлені з любов'ю та майстерністю! Розкрийте нові смаки разом з нами!</p>
					</div>
				</div>
				<div class="row">
                    @foreach($products as $product)
                        @if($product->created_at > now()->subDays(7))

					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url('{{ asset('storage/' . $product->image) }}')">
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>

										<span><a href={{ route('product', [$product->category->group->slug, $product->category->slug, $product->slug]) }}><i ></i></a></span>


									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href={{ route('product', [$product->category->group->slug, $product->category->slug, $product->slug]) }}> {{$product->name}}</a></h3>
								<p class="price"><span>{{$product->price}}.00 грн</span></p>
							</div>
						</div>
					</div>
                        @endif
                    @endforeach

				</div>
			</div>
		</div>
		<div id="colorlib-intro" class="colorlib-intro" style="background-image: url(images/cover-img-1.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="intro-desc">
							<div class="text-salebox">
								<div class="text-lefts">
									<div class="sale-box">
										<div class="sale-box-top">
											<h2 class="number">45</h2>
											<span class="sup-1">%</span>
											<span class="sup-2">Off</span>
										</div>
										<h2 class="text-sale">Sale</h2>
									</div>
								</div>
								<div class="text-rights">
									<h3 class="title">Поспішай!</h3>
									<p>Тільки сьогодні спробуйте нані найкращі кондитерські вироби</p>
									<p><a href="shop.html" class="btn btn-primary">Купити</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-shop">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
						<h2><span>Наші вироби</span></h2>
						<p>Солодка мрія будь-якого гурмана! Погляньте на наш вишуканий асортимент крафтових кондитерських виробів. Від ручної роботи шоколадних десертів до неймовірних макаронс - ми маємо все для задоволення вашого солодкого запиту!</p>
					</div>
				</div>
				<div class="row">
                    @foreach($products as $product)
                        <div class="col-md-3 text-center">
                            <div class="product-entry">
                                <div class="product-img" style="background-image: url('{{ asset('storage/' . $product->image) }}')">
                                    @if($product->created_at > now()->subDays(7))
                                        <p class="tag"><span class="new" >New</span></p>
                                    @endif


                                </div>
                                <div class="desc">
                                    <h3><a href="{{ route('product', [$product->category->group->slug, $product->category->slug, $product->slug]) }}"> {{$product->name}}  </a></h3>
                                    <p class="price"><span> {{$product->price}} грн</span></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
				</div>
			</div>
		</div>

		<div id="colorlib-testimony" class="colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
						<h2><span>Відгуки задоволених покупців</span></h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="owl-carousel2">
							<div class="item">
								<div class="testimony text-center">
									<span class="img-user" style="background-image: url(images/person1.jpg);"></span>
									<span class="user">Анна</span>

									<blockquote>
										<p> Моя нова залежність - це ваші кондитерські вироби! Смак і якість просто вражають. Дякую вам за такий незабутній досвід!</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony text-center">
									<span class="img-user" style="background-image: url(images/person2.jpg);"></span>
									<span class="user">Петро</span>

									<blockquote>
										<p>Неймовірна якість і бездоганний смак! Замовляю вже не вперше і залишаюсь задоволеним кожного разу.</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony text-center">
									<span class="img-user" style="background-image: url(images/person3.jpg);"></span>
									<span class="user">Оксана</span>

									<blockquote>
										<p>Наша сім'я в захваті від цих кондитерських шедеврів! Дякуємо за можливість насолоджуватися такими чудовими смаками!</p>
									</blockquote>
								</div>
							</div>
						</div>
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

	</body>
</html>

