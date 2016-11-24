<?php
	include('session.php');
	include('header.php');

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$sql1 = "UPDATE shopping_user SET payoff='1' WHERE payoff='0' and Role_id = '2'";
		$result1 = mysqli_query($db,$sql1);
	}

	$sql = "SELECT identification_number FROM shopping_user WHERE Role_id = '2' and payoff = '1'";
	$result = mysqli_query($db,$sql);

	$cedulas = array();
	while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
		$cedulas[] = $row['identification_number'];
	}
?>

	<script type="text/javascript">
		
		var names = ['camila', 'camilo', 'andrea', 'orlando', 'paulina', 'pablo', 'laura', 'alex'];
		var cedulas = <?php echo json_encode($cedulas); ?>;

		$(window).load(function() {
	      	mostrarRedimidos();
		});

		function mostrarRedimidos() {
			for (let i = 0; i < cedulas.length ; i++) {
				$('#'+cedulas[i]).removeAttr( "hidden" );
			}
		}

		function compra () {
			alert("Este usuario no esta autorizado para hacer compras empresariales.");
		}
	</script>

	<section id="cart_items">
		<div class="container">
			<div>
				<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center"><strong>Supervisor Empresa Colombia Compra EFiciente</strong></h2> 
				</div>			 		
			</div>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="quantity">Cedula</td>
							<td class="image">Nombres</td>
							<td class="description">Producto(s)</td>
							<td>Redimido S/N</td>
							<td>Despachado</td>
						</tr>
					</thead>
					<tbody>
						<tr id="38228444" hidden >
							<td class="cart_total">
								<p class="cart_total_price">38'228.444</p>
							</td>
							<td class="cart_product">
								<p>Camila Pataquiva</p>
							</td>
							<td class="cart_description">
							<ul style="padding-left:0;">
								<li>Sastre formal De Dos (2) Piezas x 1 Unidades</li>
								<li>Blusa formal manga larga x 1 unidades</li>
							</ul>
							</td>
							<td class="cart_update">
								<p>SI</p>
							</td>
							<td class="cart_delete">
								<p>NO</p>
							</td>
						</tr>

						<tr id="14225334" hidden >
							<td class="cart_total">
								<p class="cart_total_price">14'225.334</p>
							</td>
							<td class="cart_product">
								<p>Camilo Pataquiva</p>
							</td>
							<td class="cart_description">
								<ul style="padding-left:0;">
									<li>Vestido formal de dos (2) piezas gama alta</li>
									<li>Camisa formal manga larga</li>
									<li>Corbata</li>
								</ul>
							</td>
							<td class="cart_update">
								<p>SI</p>
							</td>
							<td class="cart_delete">
								<p>NO</p>
							</td>
						</tr>

						<tr id="38555333" hidden >
							<td class="cart_total">
								<p class="cart_total_price">38'555.333</p>
							</td>
							<td class="cart_product">
								<p>Paulina Pataquiva</p>
							</td>
							<td class="cart_description">
								<ul style="padding-left:0;">
									<li>Sastre formal De Dos (2) Piezas x 1 Unidades</li>
									<li>Blusa formal manga larga x 1 unidades</li>
								</ul>
							</td>
							<td class="cart_update">
								<p>SI</p>
							</td>
							<td class="cart_delete">
								<p>NO</p>
							</td>
						</tr>

						<tr id="93367444" hidden >
							<td class="cart_total">
								<p class="cart_total_price">93'367.444</p>
							</td>
							<td class="cart_product">
								<p>Pablo Pataquiva</p>
							</td>
							<td class="cart_description">
								<ul style="padding-left:0;">
									<li>Vestido formal de dos (2) piezas gama alta</li>
									<li>Camisa formal manga larga</li>
									<li>Corbata</li>
								</ul>
							</td>
							<td class="cart_update">
								<p>SI</p>
							</td>
							<td class="cart_delete">
								<p>NO</p>
							</td>
						</tr>

						<tr id="38228555" hidden >
							<td class="cart_total">
								<p class="cart_total_price">38'228.555</p>
							</td>
							<td class="cart_product">
								<p>Andrea Pataquiva</p>
							</td>
							<td class="cart_description">
								<ul style="padding-left:0;">
									<li>Diseño Clasico y de Moda</li>
								</ul>
							</td>
							<td class="cart_update">
								<p>SI</p>
							</td>
							<td class="cart_delete">
								<p>NO</p>
							</td>
						</tr>

						<tr id="14256834" hidden >
							<td class="cart_total">
								<p class="cart_total_price">14'256.834</p>
							</td>
							<td class="cart_product">
								<p>Orlando Pataquiva</p>
							</td>
							<td class="cart_description">
								<ul style="padding-left:0;">
									<li>Diseño Clasico y de Moda</li>
								</ul>
							</td>
							<td class="cart_update">
								<p>SI</p>
							</td>
							<td class="cart_delete">
								<p>NO</p>
							</td>
						</tr>

						<tr id="38665333" hidden >
							<td class="cart_total">
								<p class="cart_total_price">38'665.333</p>
							</td>
							<td class="cart_product">
								<p>Laura Pataquiva</p>
							</td>
							<td class="cart_description">
								<ul style="padding-left:0;">
									<li>Diseño Clasico y de Moda</li>
								</ul>
							</td>
							<td class="cart_update">
								<p>SI</p>
							</td>
							<td class="cart_delete">
								<p>NO</p>
							</td>
						</tr>

						<tr id="95367342" hidden >
							<td class="cart_total">
								<p class="cart_total_price">95'367.342</p>
							</td>
							<td class="cart_product">
								<p>Alex Pataquiva</p>
							</td>
							<td class="cart_description">
								<ul style="padding-left:0;">
									<li>Diseño Clasico y de Moda</li>
								</ul>
							</td>
							<td class="cart_update">
								<p>SI</p>
							</td>
							<td class="cart_delete">
								<p>NO</p>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="total_area">
						<form action = "" method = "post">
							<button type="submit" class="btn btn-default">Hacer compra empresarial</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

<?php
	include('footer.php');
?>