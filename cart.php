<?php
	include('session.php');
	include('header.php');
?>
	<script type="text/javascript">
		
		var names = ['camila', 'camilo', 'andrea', 'orlando', 'paulina', 'pablo', 'laura', 'alex'];

		$(window).load(function() {
	      showCart();
		});

		function showCart() {
			for (let i = 0; i < names.length ; i++) {
				showProducts(<?php echo $user_check;?>, names[i]);
			}
		}

		function quitar() {
			for (let i = 0; i < names.length ; i++) {
				removeProduct(<?php echo $user_check;?>, names[i]);
			}
		}

		function removeProduct(cedula, personName) {
			if (sessionStorage.getItem(personName) != null) {
				let person = JSON.parse(sessionStorage.getItem(personName));
				console.log(person);
				if(cedula==person["cedula"]){
					for (let i = 0; i < person["productos"].length; i++ ) {
						if (person["productos"][i].actual > 0) {
							person["productos"][i].actual -= 1;
							sessionStorage.setItem(personName, JSON.stringify(person));
						}
						if (person["productos"][i].actual == 0)
							$("#"+getImageURL(person["productos"][i].prenda, cedula)).hide();
					}
				}
			}
		}

		function showProducts (cedula, personName) {
			if (sessionStorage.getItem(personName) != null) {
				let person = JSON.parse(sessionStorage.getItem(personName));
				if(cedula==person["cedula"]){
					for (let i = 0; i < person["productos"].length; i++ ) {
						if (person["productos"][i].actual > 0)
							$("#"+getImageURL(person["productos"][i].prenda, cedula)).removeAttr( "hidden" );
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

		function checkout () {
			let person = getPerson(<?php echo $user_check;?>);
			let flag = true;
			for (let i = 0; i < person["productos"].length; i++ ) {
				if (person["productos"][i].actual < person["productos"][i].max)
					flag = false;
					
			}
			if (flag) {
				window.location = "checkout.php";
			} else {
				alert("Recuerde que para redimir su pedido debe añadir todos los productos que se le han asignado");
			} 
			
		}

		function getPerson (cedula) {
			for (let i = 0; i < names.length ; i++) {
				if (sessionStorage.getItem(names[i]) != null) {
					return JSON.parse(sessionStorage.getItem(names[i]));
				}
			}
		}


		
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
						<tr id="sastreformal2piezas" hidden>
							<td class="cart_product">
								<a href=""><img src="images/product-details/sastreformal2piezas/miniaturas/View1.jpg" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Sastre formal De Dos (2) Piezas</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">1</p>
							</td>
							<td class="cart_update">
								<a class="cart_quantity_update" href="product-details.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="javascript:quitar();"><i class="fa fa-times"></i></a>
							</td>
						</tr>

						<tr id="blusaformalmangalarga" hidden>
							<td class="cart_product">
								<a href=""><img src="images/product-details/blusaformalmangalarga/miniaturas/View1.jpg" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Blusa formal manga larga</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">1</p>
							</td>
							<td class="cart_update">
								<a class="cart_quantity_update" href="product-details.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="javascript:quitar();"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<tr id="vestidoformalhombre" hidden>
							<td class="cart_product">
								<a href=""><img src="images/product-details/vestidoformalhombre/miniaturas/View1.jpg" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Vestido formal de dos (2) piezas gama alta</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">1</p>
							</td>
							<td class="cart_update">
								<a class="cart_quantity_update" href="product-details.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="javascript:quitar();"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<tr id="camisaformalmangalarga" hidden>
							<td class="cart_product">
								<a href=""><img src="images/product-details/camisaformalmangalarga/miniaturas/View1.jpg" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Camisa formal manga larga</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">1</p>
							</td>
							<td class="cart_update">
								<a class="cart_quantity_update" href="product-details.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="javascript:quitar();"><i class="fa fa-times"></i></a>
							</td>
						</tr>

						<tr id="corbatas" hidden>
							<td class="cart_product">
								<a href=""><img src="images/product-details/corbatas/miniaturas/View1.jpg" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Corbata</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">1</p>
							</td>
							<td class="cart_update">
								<a class="cart_quantity_update" href="product-details.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="javascript:quitar();"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<tr id="disenoclasicohombre" hidden>
							<td class="cart_product">
								<a href=""><img src="images/product-details/disenoclasicohombre/miniaturas/View1.jpg" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Diseño Clasico y de Moda</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">1</p>
							</td>
							<td class="cart_update">
								<a class="cart_quantity_update" href="product-details.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="javascript:quitar();"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<tr id="disenoclasicomujer" hidden>
							<td class="cart_product">
								<a href=""><img src="images/product-details/disenoclasicomujer/miniaturas/View1.jpg" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Diseño Clasico y de Moda</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">1</p>
							</td>
							<td class="cart_update">
								<a class="cart_quantity_update" href="product-details.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="javascript:quitar();"><i class="fa fa-times"></i></a>
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
							<a class="btn btn-default check_out" href="javascript:checkout();">Confirmar</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

<?php
	include('footer.php');
?>