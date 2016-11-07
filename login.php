<?php
	ob_start();
	session_start();
	include("header.php");
	include("config.php");

	if($_SERVER["REQUEST_METHOD"] == "POST") {
	      // username and password sent from form 

		$myusername = mysqli_real_escape_string($db,$_POST['identification_number']);
		$mypassword = mysqli_real_escape_string($db,$_POST['password']); 

		$sql = "SELECT id FROM shopping_user WHERE identification_number = '$myusername' and password = '$mypassword'";
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$active = $row['active'];

		$count = mysqli_num_rows($result);

	      // If result matched $myusername and $mypassword, table row must be 1 row

		if($count == 1) {
			$_SESSION['login_user'] = $myusername;

			header("location: shop.php");
		}else {
			$error = "Your Login Name or Password is invalid";
		}
	}
?>
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action = "" method = "post">
							<input type="text" name="identification_number" placeholder="Cédula" />
							<input type="password" name="password" placeholder="password" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
<?php
	include('footer.php');
	ob_end_flush();
?>