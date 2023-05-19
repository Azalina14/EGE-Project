<!DOCTYPE HTML>
<!--
	uBeasa by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com
-->
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>uBeasa &mdash; Free HTML5 Template by freshdesignweb.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freshdesignweb.com" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freshdesignweb.com" />

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

	<!-- <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet"> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="css/flexslider.css">
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
		
	<div class="ubea-loader"></div>
	
	<div id="page">
	<nav class="ubea-nav" role="navigation">
		<div class="ubea-container">
			<div class="row">
				<div class="col-sm-2 col-xs-12">
					<div id="ubea-logo"><a href="index.html">uBeasa <em>.</em></a></div>
				</div>
				<div class="col-xs-10 text-right menu-1 main-nav">
					<ul>
						<li class="active"><a href="#" data-nav-section="home">Главная страница</a></li>
						<li><a href="#" data-nav-section="services">Разделы</a></li>
						<li><a href="#" data-nav-section="portfolio">Акция</a></li>
                        <li><a href="#" data-nav-section="about">О нас</a></li>
						<li><a href="#" data-nav-section="contact">Наши контакты</a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>

	<div id="ubea-hero" class="js-fullheight"  data-section="home">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(images/img_bg_2.jpg);">
		   		<div class="overlay"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>Подготовка к ЕГЭ по истории.</h2>
		   					<p><a href="tasks" class="btn btn-primary btn-lg">Get started</a></p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/img_bg_3.jpg);">
		   		<div class="overlay"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>Поступи в ВУЗ мечты.</h2>
		   					<p><a href="tasks" class="btn btn-primary btn-lg">Get started</a></p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</div>

	<div class="ubea-section-overflow">

		<div class="ubea-section" id="ubea-services" data-section="services">
			<div class="ubea-container">
				<div class="row">
					<div class="col-md-6">
						<div class="ubea-heading">
							<h2 class="ubea-left">Разделы</h2>
							<p>Причинно-следственные связи.</p>
						</div>
					</div>
				</div>
				<div class="row">
							<div class="col-md-12">
								<div class="feature-left">
									<span class="icon">
										<i class="icon-umbrella"></i>
									</span>
									<div class="feature-copy">
										<h3> Причинно-следственные связи </h3>
										<p> связь между историческими событиями (процессами, явлениями), при которой одно событие (процесс, явление), называемое причиной, при наличии определенных исторических условий порождает другое событие (процесс, явление), называемое следствием. </p>. </p>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="feature-left">
									<span class="icon">
										<i class="icon-monitor"></i>
									</span>
									<div class="feature-copy">
										<h3>Исторические личности </h3>
										<div class='characters-container' style='margin-top: 25px;'>
                                            <?php
                                                $con = mysqli_connect("localhost", "root", "", "DB");
                                                mysqli_set_charset($con, "utf8");

                                                if ($con == false) {
                                                    echo ("Ошибка подключения: " . mysqli_connect_error());
                                                }
                                                else {
                                                    $sql = "SELECT id, name, image, description FROM data";
                                                    $result = mysqli_query($con, $sql);
                                                    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

                                                    foreach ($rows as $row) {
                                                        echo (
                                                                " <div class='character' style='margin: 10px auto'>
                                                                <h4>{$row['name']}</h4>
                                                                <img src='{$row['image']}' height='400px' style='margin: auto'/>
                                                                <p style='margin-top: 25px;'>
                                                                {$row['description']}
                                                                </p>
                                                                </div>"
                                                        );
                                                    }
                                                }
                                            ?>
                                        </div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="feature-left">
									<span class="icon">
										<i class="icon-pencil"></i>
									</span>
									<div class="feature-copy">
										<h3>КАРТЫ</h3>
										<p> Сборник карт для ЕГЭ по истории</p>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="feature-left">
									<span class="icon">
										<i class="icon-cog"></i>
									</span>
									<div class="feature-copy">
										<h3>ПОНЯТИЯ
										</h3>
										<p>Словарь терминов ЕГЭ по истории. В списке представлены исторические понятия, необходимые для подготовки к ЕГЭ по истории, в частности, термины, которые нужно знать для успешного выполнения задания 18 ЕГЭ. </p>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="feature-left">
									<span class="icon">
										<i class="icon-layers"></i>
									</span>
									<div class="feature-copy">
										<h3>КУЛЬТУРА</h3>
										<p>Здесь представлена вся культура с XI по XXI вв для ЕГЭ </p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="ubea-section" id="ubea-portfolio" data-section="portfolio">
			<div class="ubea-container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center ubea-heading">
						<h2>Наши ученики</h2>
						<p> Пишут ЕГЭ на 80+, 90+,100 баллов</p>
					</div>
				</div>
				
		</div>
        
		<div class="ubea-section" id="ubea-faq" data-section="faq">
			<div class="ubea-container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center ubea-heading">
						<h2>Получай по акции 2 предмета по сумме одной</h2>
						<p> Оставь заявку и мы напишем ВАМ</p>
					</div>
				</div>
				
				

					</div>
				</div>
			</div>
		</div>

	</div>
    
    <div id="ubea-blog" data-section="about">
		<div class="ubea-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center ubea-heading">
					<h2>О нас</h2>
					<p> Мы выпускники педагогического факультета по направлению история и обществознание.</p> </p>
				</div>
			</div>
	    </div>
    </div>
      
	<div id="ubea-contact" data-section="contact" class="ubea-cover ubea-cover-xs" style="background-image:url(images/img_bg_2.jpg);">
		<div class="overlay"></div>
		<div class="ubea-container">
			<div class="row text-center">
				<div class="display-t">
					<div class="display-tc">
						<div class="col-md-12">
							<h3>Если у вас есть вопросы, пишите на мою почту <a href="#">sadazalin@gmail.com</a></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

