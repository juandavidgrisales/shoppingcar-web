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
				  <li><a href="#">Home</a></li>
				  <li class="second-bread"><a href="#">Carrito</a></li>
				  <li class="active">Checkout</li>
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
								<select name="city" >
									<option>-- Ciudad --</option>
									<option>Bogotá</option>
									<option>Ibague</option>
									<option>Monteria</option>
									<option>Valledupar</option>
									<option>Melgar</option>
								</select>
								<br></br>
								<input type="text" name="address" placeholder="Dirección *">
								<input type="text" name="phone_number" placeholder="Telefono">

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