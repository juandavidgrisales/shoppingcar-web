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
			<h1>Muchas gracias por su compra.</h1>
			<h2>Su pedido ha sido redimido.</h2>
			<br><a class="btn btn-primary" href="index.php">Volver al Home</a>
			<br></br>
		</div>
	</section><!--/form-->

<?php	
	include('footer.php');
?>