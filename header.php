<?php
	ob_start();
	session_start();
	if(isset($_SESSION['Role_id'])){
      $role_id = $_SESSION['Role_id'];
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta charset="charset=ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Juan David Grisales Garzón">
    <meta name="author" content="Jefferson Eliecer Gaviria Aranzalez">
    <title>Home | Arotex</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <script src="js/jquery.js"></script>
</head><!--/head-->

<body>
	<script type="text/javascript">
		function logout () {
			sessionStorage.removeItem('camila');
			sessionStorage.removeItem('camilo');
			sessionStorage.removeItem('andrea');
			sessionStorage.removeItem('orlando');
			sessionStorage.removeItem('paulina');
			sessionStorage.removeItem('laura');
			sessionStorage.removeItem('alex');
			sessionStorage.removeItem('pablo');
			window.location = "logout.php";
		}
	</script>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a><i class="fa fa-phone"></i> +57 320 273 81 51 </a></li>
								<li><a><i class="fa fa-envelope"></i> ventas@arotexconfecciones.com - NIT 14.223.251-0</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/home/logo.png" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<?php
								if ($role_id != "1") {
								?>
								<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Carrito</a></li>
								<?php
								}
								?>
								<?php
									if (!isset($_SESSION['login_user'])){
										echo '<li><a href="login.php"><i class="fa fa-lock"></i> Inicia sesión</a>';
									} else {
										echo '<li><a href="javascript:logout();"><i class="fa fa-lock"></i> Cerrar Sesión</a>';
									}
								?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Home</a></li>
								<?php
								if ($role_id != "1") {
								?>
								<li class="dropdown"><a href="#">Colombia Compra Eficiente<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="product-details.php">Tienda</a></li>
									</ul>
                                </li>
                                <?php
                            	} else {
                                ?>
                                <li><a href="supervisor.php">Supervisión</a></li>
                                <?php
                            	}
                            	?>
								<li><a href="guia-uso.php">Guia uso</a></li>
								<li><a href="politica-devolucion.php">Politica devolución</a></li>		
								<li><a href="mapa-virtual.php">Mapa virtual</a></li>
								<li><a href="contact-us.php">Contacto</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->