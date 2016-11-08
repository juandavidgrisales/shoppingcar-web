<?php
	include('header.php');

	session_destroy();
?>

	<section id="delivered"><!--form-->
		<div class="container">
			<h1>Muchas gracias por su compra</h1>
			<h2>Su pedido ha sido enviado y redimido</h2>
			<a class="btn btn-primary" href="index.php">Volver al Home</a>
		</div>
	</section><!--/form-->

<?php	
	include('footer.php');
?>