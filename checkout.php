<?php
	include('session.php');
	include('header.php');
	if($_SERVER["REQUEST_METHOD"] == "POST") {
	    // username and password sent from form 
	    $cedula =$_SESSION['login_user'];
	    $date = new DateTime("NOW");
		$sql = "UPDATE shopping_user SET payoff='1', payoff_date='{$date->format('Y-m-d H:i:s')}'  WHERE identification_number='$cedula'";

		if ($db->query($sql) === TRUE) {
		    echo "Record updated successfully";

		    $name       = $login_session;
		    $id    = $user_check;

		    $email_from = 'ventas@arotexconfecciones.com';
		    $email_to1 = 'jeffgavi@hotmail.com';
		    $email_to2 = 'ccedotacionesdevestuario@gmail.com';
		    $email_to3 = 'javier.aranzalez@hotmail.com';

		    $body = 'Cédula: ' . $id . "\n\n" . 'Nombre: ' . $name . "\n\n" . 'Evento: El beneficiario reclamo su pedido con éxito';

		    $success1 = @mail($email_to1, $subject, $body, 'From: <'.$email_from.'>');
		    $success2 = @mail($email_to2, $subject, $body, 'From: <'.$email_from.'>');
		    $success3 = @mail($email_to3, $subject, $body, 'From: <'.$email_from.'>');
		    header("location: delivered.php");
		} else {
		    echo "Error updating record: " . $db->error;
		}
	}
?>
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="index.php">Home</a></li>
				  <li><a href="product-details.php">Tienda</a></li>
				  <li class="second-bread"><a href="cart.php">Carrito</a></li>
				  <li class="active"><b>Checkout</b></li>
				</ol>
			</div><!--/breadcrums-->

			<div class="review-payment">
				<h2>Datos de entrega</h2>
			</div>

			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-6">
						<div class="shopper-info">
							<p>Información del beneficiario</p>
							<form action = "" method = "post">
								<input type="text" name="city" placeholder="Ciudad *" required>
								<br></br>
								<input type="text" name="address" placeholder="Dirección *" required>
								<input type="text" name="phone_number" placeholder="Telefono *" required>
								<p>* Campos obligatorios.</p>
								<a class="btn btn-primary" href="cart.php">Volver</a>
								<button type="submit" class="btn btn-primary">Confirmar</button>
							</form>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="order-message">
							<p>Notas sobre el envío</p>
							<textarea name="message"  placeholder="Notas acerca de su orden, Notas especiales para la entrega" rows="5"></textarea>
						</div>	
					</div>					
				</div>
			</div>
			

		</div>
	</section> <!--/#cart_items-->

<?php
	include('footer.php');
?>