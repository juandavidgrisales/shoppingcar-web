<?php
	include('header.php');

	session_destroy();
?>
	<section id="delivered"><!--form-->
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Despacho</li>
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