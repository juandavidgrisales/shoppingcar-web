<?php
	include('header.php');

	session_destroy();
?>

	<section id="delivered"><!--form-->
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="index.php">Home</a></li>
				  <li><a href="product-details.php">Tienda</a></li>
				  <li><a href="cart.php">Carrito</a></li>
				  <li class="second-bread"><a href="checkout.php">Checkout</a></li>
				  <li class="active"><b>Despacho</b></li>
				</ol>
			</div>
			<h1>Su pedido ya ha sido redimido.</h1>
			<h4>Si tiene dudas o inquietudes, no dude en contactarnos en el siguiente boton.</h4>
			<a class="btn btn-primary" href="contact-us.php">Contactenos</a>
			<br></br>
		</div>
	</section><!--/form-->

<?php	
	include('footer.php');
?>