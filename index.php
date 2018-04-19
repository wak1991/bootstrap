<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mobilachka</title>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:700,400&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
	<header>
		
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container">
				<a class="navbar-brand" href="#"><img src="img/logo.jpg" alt=""></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Главная<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">О компании</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Новости</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Покупателям</a>
						</li>
					</ul>
					<form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="search" placeholder="Поиск" aria-label="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Найти</button>
					</form>
				</div>
			</div> <!-- /.container -->
		</nav>
		<div class="slider">
			<img src="img/slider.jpg" alt="">
		</div>
	</header>
	<section class="slogan">
		<div class="container">
			<h1>Интернет-магазин электроники</h1>
		</div>
	</section>
	<section class="content">
		<div class="container">
			<div class="products-row clearfix">
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="product">
							<div class="product-img">
								<a href="#"><img src="img/goods1.jpg" alt="goods1"></a>
							</div> <!-- /.product-img -->
							<p class="product-title">
								<a href="#">Apple iPhone X 64GB</a>
							</p>
							<p class="product-desc">
								Apple iOS, экран 5.8" AMOLED (1125x2436)
							</p>
							<div class="product-buy">
								<p class="product-price">
									Цена: $10.00
								</p>
								<a href="#" class="btn">В корзину</a>
							</div> <!-- /.product-by -->
						</div> <!-- /.product -->
					</div> <!-- /.col-sm-3 -->
					<div class="col-lg-3 col-md-6">
						<div class="product">
							<div class="product-img">
								<a href="#"><img src="img/goods2.jpg" alt="goods2"></a>
							</div> <!-- /.product-img -->
							<p class="product-title">
								<a href="#">Lenovo Tab 2 A10-70F</a>
							</p>
							<p class="product-desc">
								10.1" IPS (1920x1200), Android, ОЗУ 2 ГБ, флэш-память 16 ГБ
							</p>
							<div class="product-buy">
								<p class="product-price">
									Цена: $20.00
								</p>
								<a href="#" class="btn">В корзину</a>
							</div> <!-- /.product-by -->
						</div> <!-- /.product -->
					</div> <!-- /.col-sm-3 -->
					<div class="col-lg-3 col-md-6">
						<div class="product">
							<div class="product-img">
								<a href="#"><img src="img/goods3.jpg" alt="goods3"></a>
							</div> <!-- /.product-img -->
							<p class="product-title">
								<a href="#">Acer Aspire ES1-533-P8B8</a>
							</p>
							<p class="product-desc">
								15.6" 1366 x 768, Intel Pentium N4200 1100 МГц
							</p>
							<div class="product-buy">
								<p class="product-price">
									Цена: $99.00
								</p>
								<a href="#" class="btn">В корзину</a>
							</div> <!-- /.product-by -->
						</div> <!-- /.product -->
					</div> <!-- /.col-sm-3 -->
					<div class="col-lg-3 col-md-6">
						<div class="product">
							<div class="product-img">
								<a href="#"><img src="img/goods4.jpg" alt="goods4"></a>
							</div> <!-- /.product-img -->
							<p class="product-title">
								<a href="#">Canon EOS 750D</a>
							</p>
							<p class="product-desc">
								зеркальная камера, матрица APS-C (1.6 crop) 24.2 Мп
							</p>
							<div class="product-buy">
								<p class="product-price">
									Цена: $78.00
								</p>
								<a href="#" class="btn">В корзину</a>
							</div> <!-- /.product-by -->
						</div> <!-- /.product -->
					</div> <!-- /.col-sm-3 -->
				</div> <!-- /.row -->
			</div> <!-- /.products-row clearfix -->
		</div> <!-- /.container -->
	</section>

	<section class="bottom-content">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h3>Заказать звонок</h3>
				</div>
				<div class="col-md-8">
					<form class="form-inline" action="" method="post" id="ajax_form">
						<div class="row">
							<div class="form-group col-sm-4">
								<input type="text" name="name" class="form-control" placeholder="Ваше имя">
							</div>
							<div class="form-group col-sm-4">
								<input type="email" name="email" class="form-control" placeholder="Ваш email">
							</div>
							<div class="form-group col-sm-4">
								<button type="submit" class="btn btn-default" id="btn">Заказать</button>
							</div>
						</div>
					</form>
					<div id="result_form"><div>
					</div>
				</div>
			</div>
		</section>

		<footer>
			<div class="footer-menu">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<ul>
								<li><a href="#">Главная</a></li>
								<li><a href="#">Каталог</a></li>
							</ul>
						</div>
						<div class="col-lg-3 col-md-6">
							<ul>
								<li><a href="#">Покупателям</a></li>
								<li><a href="#">Новости</a></li>
							</ul>
						</div>
						<div class="col-lg-3 col-md-6">
							<ul>
								<li><a href="#">О компании</a></li>
								<li><a href="#">Контакты</a></li>
							</ul>
						</div>
						<div class="col-lg-3 col-md-6">
							<ul>
								<li><a href="#">Магазины</a></li>
								<li><a href="#">Отзывы</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<script src="js/ajax.js"></script>
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
		<script src="js/bootstrap.min.js"></script>
	</body>
	</html>