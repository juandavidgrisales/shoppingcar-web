<?php
	include("header.php");
	include("config.php");

	if($_SERVER["REQUEST_METHOD"] == "POST") {
	      // username and password sent from form 

		$myusername = mysqli_real_escape_string($db,$_POST['identification_number']);
		$mypassword = mysqli_real_escape_string($db,$_POST['password']); 

		$sql = "SELECT id, payoff, Role_id FROM shopping_user WHERE identification_number = '$myusername' and password = '$mypassword'";
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$payoff = $row['payoff'];
		$role = $row['Role_id'];

		$count = mysqli_num_rows($result);

	      // If result matched $myusername and $mypassword, table row must be 1 row

		if($count == 1) {
			if ($payoff != '1') {
				$_SESSION['login_user'] = $myusername;
				if ($role == '2') 
					header("location: product-details.php");
				else 
					header("location: supervisor.php");
			} else {
				header("location: delivered-warning.php");
			}
		}else {
			$error = "Your Login Name or Password is invalid";
		}
	}
?>
	<section id="form" style="margin-top: 0px;"><!--form-->
			<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active"><b>Inicia sesión</b></li>
				</ol>
			</div>
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Por favor ingrese sus credenciales</h2>
						<form action = "" method = "post">
							<input type="text" name="identification_number" placeholder="Cédula" />
							<input type="password" name="password" placeholder="Contraseña" />
							<!--<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>-->
							<button type="submit" class="btn btn-default">Ingresar</button>
						</form>
						<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
<?php
	include('footer.php');
?>