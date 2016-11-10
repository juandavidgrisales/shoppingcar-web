<?php
	include('session.php');
	include('header.php');
?>
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
							<td class="image">Nombre</td>
							<td class="description">Apellido</td>
							<td class="quantity">Cedula</td>
							<td>Redimido S/N</td>
							<td>Despachado</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="cart_product">
								<h4>Camila</h4>
							</td>
							<td class="cart_description">
								<h4>Pataquiva</h4>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">38'228.444</p>
							</td>
							<td class="cart_update">
								<p>SI</p>
							</td>
							<td class="cart_delete">
								<p>NO</p>
							</td>
						</tr>

						<tr>
							<td class="cart_product">
								<h4>Camilo</h4>
							</td>
							<td class="cart_description">
								<h4>Pataquiva</h4>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">14'225.334</p>
							</td>
							<td class="cart_update">
								<p>SI</p>
							</td>
							<td class="cart_delete">
								<p>NO</p>
							</td>
						</tr>

						<tr>
							<td class="cart_product">
								<h4>Paulina</h4>
							</td>
							<td class="cart_description">
								<h4>Pataquiva</h4>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">38'555.333</p>
							</td>
							<td class="cart_update">
								<p>SI</p>
							</td>
							<td class="cart_delete">
								<p>NO</p>
							</td>
						</tr>

						<tr>
							<td class="cart_product">
								<h4>Pablo</h4>
							</td>
							<td class="cart_description">
								<h4>Pataquiva</h4>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">93'367.444</p>
							</td>
							<td class="cart_update">
								<p>SI</p>
							</td>
							<td class="cart_delete">
								<p>NO</p>
							</td>
						</tr>

						<tr>
							<td class="cart_product">
								<h4>Andrea</h4>
							</td>
							<td class="cart_description">
								<h4>Pataquiva</h4>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">38'228.555</p>
							</td>
							<td class="cart_update">
								<p>SI</p>
							</td>
							<td class="cart_delete">
								<p>NO</p>
							</td>
						</tr>

						<tr>
							<td class="cart_product">
								<h4>Orlando</h4>
							</td>
							<td class="cart_description">
								<h4>Pataquiva</h4>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">14'256.834</p>
							</td>
							<td class="cart_update">
								<p>SI</p>
							</td>
							<td class="cart_delete">
								<p>NO</p>
							</td>
						</tr>

						<tr>
							<td class="cart_product">
								<h4>Laura</h4>
							</td>
							<td class="cart_description">
								<h4>Pataquiva</h4>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">38'665.333</p>
							</td>
							<td class="cart_update">
								<p>SI</p>
							</td>
							<td class="cart_delete">
								<p>NO</p>
							</td>
						</tr>

						<tr>
							<td class="cart_product">
								<h4>Alex</h4>
							</td>
							<td class="cart_description">
								<h4>Pataquiva</h4>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">95'367.342</p>
							</td>
							<td class="cart_update">
								<p>SI</p>
							</td>
							<td class="cart_delete">
								<p>NO</p>
							</td>
						</tr>

						<!--<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/two.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Colorblock Scuba</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">1</p>
							</td>
							<td class="cart_update">
								<a class="cart_quantity_update" href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/three.png" alt=""></a>
							</td>
							<td class="cart_quantity">
								<h4><a href="">Colorblock Scuba</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">1</p>
							</td>
							<td class="cart_update">
								<a class="cart_quantity_update" href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>-->
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
							<a class="btn btn-default check_out" href="#">Hacer compra empresarial</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

<?php
	include('footer.php');
?>