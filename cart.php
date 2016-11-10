<?php
	include('session.php');
	include('header.php');
?>
	<script type="text/javascript">
		function showCart() {
			let names = ['camila', 'camilo'];
			for (let i = 0; i < names.length ; i++) {
				showProducts(<?php echo $user_check;?>, names[i]);
			}
			
			
		}

		function showProducts (cedula, personName) {
			if (sessionStorage.getItem(personName) != null) {
				let person = JSON.parse(sessionStorage.getItem(personName));
				console.log(person);
				if(cedula==person["cedula"]){
					for (let i = 0; i < person["productos"].length; i++ ) {
						console.log(person["productos"][i].prenda);
						console.log(person["productos"][i].actual);
						console.log(person["productos"][i].max);
						console.log('actualizo2')
						$('#product-table tbody').append('<tr> <td>HOLA HOLA HOLA </td></tr>');
						/*$('#product-table').append(
							'<tr>'+
								'<td class="cart_product">'+
									'<a href=""><img src="images/cart/one.png" alt=""></a>'+
								'</td>'+
								'<td class="cart_description">'+
									'<h4><a href="">Colorblock Scuba</a></h4>'+
									'<p>Web ID: 1089772</p>'+
								'</td>'+
								'<td class="cart_total">'+
									'<p class="cart_total_price">1</p>'+
								'</td>'+
								'<td class="cart_update">'+
									'<a class="cart_quantity_update" href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>'+
								'</td>'+
								'<td class="cart_delete">'+
									'<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>'+
								'</td>'+
							'</tr>'
						);*/
					}
				}
			}
			
		}

		function getImageURL (ClotheName, cedula) {
			if (ClotheName == "Sastre formal De Dos (2) Piezas") return "sastreformal2piezas";
			if (ClotheName == "Blusa formal manga larga") return "blusaformalmangalarga";
			if (ClotheName == "Vestido formal de dos (2) piezas gama alta") return "vestidoformalhombre";
			if (ClotheName == "Camisa formal manga larga") return "camisaformalmangalarga";
			if (ClotheName == "Corbata") return "corbatas";
			if (ClotheName == "Diseño Clasico y de Moda" && 
				(cedula == "38228444" || 
					cedula == "38228555" || 
						cedula == "38555333" || 
							cedula == "38665333") ) 
				return "disenoclasicomujer";
			if (ClotheName == "Diseño Clasico y de Moda" && 
				(cedula == "14225334" || 
					cedula == "14256834" || 
						cedula == "93367444" || 
							cedula == "95367342") ) 
				return "disenoclasicohombre";
		}
		showCart();
	</script>

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="index.php">Home</a></li>
				  <li class="second-bread"><a href="product-details.php">Tienda</a></li>
				  <li class="active"><b>Carrito</b></li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table id="product-table" class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description">Descripción</td>
							<td class="quantity">Cantidad</td>
							<td>Editar</td>
							<td>Quitar</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/one.png" alt=""></a>
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
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>Confirmación del pedido</h3>
				<p>A continuación confirme el pedido e ingrese su información de entrega o vuelva a la tienda para seguir disfrutando de sus compras</p>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="total_area">
							<a class="btn btn-default update" href="product-details.php">Volver</a>
							<a class="btn btn-default check_out" href="checkout.php">Confirmar</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

<?php
	include('footer.php');
?>