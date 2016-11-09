<?php
include('session.php');
include('header.php');
?>
<script type="text/javascript">
	/*$("#img1-mini").click(function(){
	});*/
	function imageChange (number){
		$("#div-img1").removeClass("active");
		$("#div-img2").removeClass("active");
		$("#div-img3").removeClass("active");
		$("#div-img4").removeClass("active");
		$("#div-img"+number).addClass("active");
	}

	function changeTittle (folder) {
		if (folder == "sastreformal2piezas") return "Sastre formal De Dos (2) Piezas";
		if (folder == "blusaformalmangalarga") return "Blusa formal manga larga";
		if (folder == "vestidoformalhombre") return "Vestido formal de dos (2) piezas gama alta";
		if (folder == "camisaformalmangalarga") return "Camisa formal manga larga";
		if (folder == "corbatas") return "Corbata";
		if (folder == "disenoclasicomujer" || folder == "disenoclasicohombre" ) return "Diseño Clasico y de Moda";
	}

	function changeClothes (folder) {
		$("#img1").attr("src","images/product-details/"+folder+"/grandes/View1.jpg");
		$("#img2").attr("src","images/product-details/"+folder+"/grandes/View2.jpg");
		$("#img3").attr("src","images/product-details/"+folder+"/grandes/View3.jpg");
		$("#img4").attr("src","images/product-details/"+folder+"/grandes/View4.jpg");
		$("#img1-mini").attr("src","images/product-details/"+folder+"/miniaturas/View1.jpg");
		$("#img2-mini").attr("src","images/product-details/"+folder+"/miniaturas/View2.jpg");
		$("#img3-mini").attr("src","images/product-details/"+folder+"/miniaturas/View3.jpg");
		$("#img4-mini").attr("src","images/product-details/"+folder+"/miniaturas/View4.jpg");
		$("#product-description").text(changeTittle(folder));
		
	}

	function addToCart(cedula) {
		addToCartByPerson(cedula, camila, 'camila');
		addToCartByPerson(cedula, camilo, 'camilo');
		addToCartByPerson(cedula, andrea, 'andrea');
		addToCartByPerson(cedula, orlando, 'orlando');
		addToCartByPerson(cedula, paulina, 'paulina');
		addToCartByPerson(cedula, laura, 'laura');
		addToCartByPerson(cedula, alex, 'alex');
		addToCartByPerson(cedula, pablo, 'pablo');
	}

	function addToCartByPerson (cedula, person, personName){
		if(cedula==person["cedula"]){

			if (sessionStorage.getItem(personName) != null) {
			  person = JSON.parse(sessionStorage.getItem(personName));
			}

			for (let i = 0; i < person["productos"].length; i++ ) {
				if ($("#product-description").text() == person["productos"][i].prenda) {
					let temp = person["productos"][i].actual + parseInt($("#cant-prod").val());
					if (temp <= person["productos"][i].max) {
						person["productos"][i].actual = temp;
						sessionStorage.setItem(personName, JSON.stringify(person));

					} else {
						alert("Usted no puede agregar mas unidades de este producto a su carrito");
					}
				}
			}
		}
	}
</script>


	<section>

		<div class="container">

			<div class="breadcrumbs">
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Productos</li>
				</ol>
			</div>

			<div class="row">

				<div class="col-sm-3">
					<div class="left-sidebar">

						<h2>Segmentos</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<?php
							if ($user_check=='38228444' || $user_check=='38555333') {
							?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Ropa Dama
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a id="dama-ropa1" href="javascript:changeClothes('sastreformal2piezas');">-Sastre formal de dos (2) piezas</a></li>
											<li><a id="dama-ropa2" href="javascript:changeClothes('blusaformalmangalarga');">-Blusa formal manga larga</a></li>
										</ul>
									</div>
								</div>
							</div>
							<?php
							}
							if ($user_check=='14225334' || $user_check=='93367444') {
							?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Ropa Caballero
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="javascript:changeClothes('vestidoformalhombre');">-Vestido formal de dos (2) piezas gama alta</a></li>
											<li><a href="javascript:changeClothes('camisaformalmangalarga');">-Camisa formal manga larga</a></li>
											<li><a href="javascript:changeClothes('corbatas');">-Corbata</a></li>
										</ul>
									</div>
								</div>
							</div>
							<?php
							}
							if ($user_check=='38665333' || $user_check=='38555333') {
							?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Calzado Dama
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="javascript:changeClothes('disenoclasicomujer');">-Diseño Clasico y de Moda</a></li>
										</ul>
									</div>
								</div>
							</div>
							<?php
							}
							if ($user_check=='14256834' || $user_check=='95367342') {
							?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens2">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Calzado Caballero
										</a>
									</h4>
								</div>
								<div id="womens2" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="javascript:changeClothes('disenoclasicohombre');">-Diseño Clasico y de Moda</a></li>
										</ul>
									</div>
								</div>
							</div>
							<?php
							}
							?>
						</div><!--/category-products-->

					</div>
				</div>


				<div class="col-sm-9 padding-right">

					<div class="product-details"><!--product-details-->

						<div class="col-sm-5">
							<div id="similar-product" class="carousel slide" data-ride="carousel">

								<div class="carousel-inner">
									<div id="div-img1" class="item active">
										<img id="img1" src="images/product-details/sastreformal2piezas/grandes/View1.jpg" alt="" />
									</div>

									<div id="div-img2" class="item">
										<img id="img2" src="images/product-details/sastreformal2piezas/grandes/View2.jpg" alt="" />
									</div>

									<div id="div-img3" class="item">
										<img id="img3" src="images/product-details/sastreformal2piezas/grandes/View2.jpg" alt="" />
									</div>

									<div id="div-img4" class="item">
										<img id="img4" src="images/product-details/sastreformal2piezas/grandes/View4.jpg" alt="" />
									</div>
								</div>

								<!-- Controls -->

								<a class="left item-control" href="#similar-product" data-slide="prev">

									<i class="fa fa-angle-left"></i>

								</a>

								<a class="right item-control" href="#similar-product" data-slide="next">

									<i class="fa fa-angle-right"></i>

								</a>
							</div>

							<div id="similar-product" data-ride="carousel">

								<!-- Wrapper for slides -->

								<div class="carousel-inner">

									<div class="item active">

										<a href="javascript:imageChange(1);"><img id="img1-mini" src="images/product-details/sastreformal2piezas/miniaturas/View1.jpg" alt=""></a>

										<a href="javascript:imageChange(2);"><img id="img2-mini" src="images/product-details/sastreformal2piezas/miniaturas/View2.jpg" alt=""></a>

										<a href="javascript:imageChange(3);"><img id="img3-mini" src="images/product-details/sastreformal2piezas/miniaturas/View3.jpg" alt=""></a>

										<a href="javascript:imageChange(4);"><img id="img4-mini" src="images/product-details/sastreformal2piezas/miniaturas/View4.jpg" alt=""></a>

									</div>
								</div>

							</div>
						</div>

						<div class="col-sm-7">

							<div class="product-information"><!--/product-information-->

								<!--<img src="images/product-details/new.jpg" class="newarrival" alt="" />-->

								<h2 id="product-description">Sastre formal De Dos (2) Piezas</h2>

								<p>Web ID: 1089772</p>

								<!--<img src="images/product-details/rating.png" alt="" />-->

								<span>

									<!--<span>US $59</span>-->

									<label>Cantidad:</label>

									<input id="cant-prod" type="text" value="1" />

									<button type="button" class="btn btn-fefault cart" onclick="addToCart(<?php echo $user_check;?>);">

										<i class="fa fa-shopping-cart"></i>

										Agregar al Carrito

									</button>


								</span>

								<p><b>Disponible:</b> En Stock</p>


								<p><b>Talla</b></p>
								<select class="col-sm-3" name="color">
								    <option value="S">XS</option>
								    <option value="S">S</option>
								    <option value="M">M</option>
								    <option value="L">L</option>
								    <option value="XL">XL</option>
								    <option value="2XL">2XL</option>
								    <option value="3XL">3XL</option>
								</select>

								<button type="button" class="btn btn-fefault cart" onclick="window.location='cart.php';">
									<i class="fa fa-shopping-cart"></i>Ver Carrito
								</button>

								<br></br>
								<p><b>Color</b></p>
								<select class="col-sm-3" name="color">
									<option value="cafe">Café</option>
									<option value="Negro">Negro</option>
									<option value="Vinotinto">Vinotinto</option>
									<option value="Azul">Azul</option>
								</select>

							</div><!--/product-information-->


						</div>

					</div><!--/product-details-->

						

					<div class="category-tab shop-details-tab"><!--category-tab-->

						<div class="col-sm-12">

							<ul class="nav nav-tabs">

								<!--<li><a href="#details" data-toggle="tab">Details</a></li>

								<li><a href="#companyprofile" data-toggle="tab">Company Profile</a></li>

								<li><a href="#tag" data-toggle="tab">Tag</a></li>-->

								<li class="active"><a href="#reviews" data-toggle="tab">Detalles</a></li>

							</ul>

						</div>

						<div class="tab-content">

							<!--<div class="tab-pane fade" id="details" >

								<div class="col-sm-3">

									<div class="product-image-wrapper">

										<div class="single-products">

											<div class="productinfo text-center">

												<img src="images/home/gallery1.jpg" alt="" />

												<h2>$56</h2>

												<p>Easy Polo Black Edition</p>

												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>

											</div>

										</div>

									</div>

								</div>

								<div class="col-sm-3">

									<div class="product-image-wrapper">

										<div class="single-products">

											<div class="productinfo text-center">

												<img src="images/home/gallery2.jpg" alt="" />

												<h2>$56</h2>

												<p>Easy Polo Black Edition</p>

												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>

											</div>

										</div>

									</div>

								</div>

								<div class="col-sm-3">

									<div class="product-image-wrapper">

										<div class="single-products">

											<div class="productinfo text-center">

												<img src="images/home/gallery3.jpg" alt="" />

												<h2>$56</h2>

												<p>Easy Polo Black Edition</p>

												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>

											</div>

										</div>

									</div>

								</div>

								<div class="col-sm-3">

									<div class="product-image-wrapper">

										<div class="single-products">

											<div class="productinfo text-center">

												<img src="images/home/gallery4.jpg" alt="" />

												<h2>$56</h2>

												<p>Easy Polo Black Edition</p>

												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>

											</div>

										</div>

									</div>

								</div>

							</div>

							

							<div class="tab-pane fade" id="companyprofile" >

								<div class="col-sm-3">

									<div class="product-image-wrapper">

										<div class="single-products">

											<div class="productinfo text-center">

												<img src="images/home/gallery1.jpg" alt="" />

												<h2>$56</h2>

												<p>Easy Polo Black Edition</p>

												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>

											</div>

										</div>

									</div>

								</div>

								<div class="col-sm-3">

									<div class="product-image-wrapper">

										<div class="single-products">

											<div class="productinfo text-center">

												<img src="images/home/gallery3.jpg" alt="" />

												<h2>$56</h2>

												<p>Easy Polo Black Edition</p>

												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>

											</div>

										</div>

									</div>

								</div>

								<div class="col-sm-3">

									<div class="product-image-wrapper">

										<div class="single-products">

											<div class="productinfo text-center">

												<img src="images/home/gallery2.jpg" alt="" />

												<h2>$56</h2>

												<p>Easy Polo Black Edition</p>

												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>

											</div>

										</div>

									</div>

								</div>

								<div class="col-sm-3">

									<div class="product-image-wrapper">

										<div class="single-products">

											<div class="productinfo text-center">

												<img src="images/home/gallery4.jpg" alt="" />

												<h2>$56</h2>

												<p>Easy Polo Black Edition</p>

												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>

											</div>

										</div>

									</div>

								</div>

							</div>

							

							<div class="tab-pane fade" id="tag" >

								<div class="col-sm-3">

									<div class="product-image-wrapper">

										<div class="single-products">

											<div class="productinfo text-center">

												<img src="images/home/gallery1.jpg" alt="" />

												<h2>$56</h2>

												<p>Easy Polo Black Edition</p>

												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>

											</div>

										</div>

									</div>

								</div>

								<div class="col-sm-3">

									<div class="product-image-wrapper">

										<div class="single-products">

											<div class="productinfo text-center">

												<img src="images/home/gallery2.jpg" alt="" />

												<h2>$56</h2>

												<p>Easy Polo Black Edition</p>

												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>

											</div>

										</div>

									</div>

								</div>

								<div class="col-sm-3">

									<div class="product-image-wrapper">

										<div class="single-products">

											<div class="productinfo text-center">

												<img src="images/home/gallery3.jpg" alt="" />

												<h2>$56</h2>

												<p>Easy Polo Black Edition</p>

												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>

											</div>

										</div>

									</div>

								</div>

								<div class="col-sm-3">

									<div class="product-image-wrapper">

										<div class="single-products">

											<div class="productinfo text-center">

												<img src="images/home/gallery4.jpg" alt="" />

												<h2>$56</h2>

												<p>Easy Polo Black Edition</p>

												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>

											</div>

										</div>

									</div>

								</div>

							</div>-->

							

							<div class="tab-pane fade active in" id="reviews" >

								<div class="col-sm-12">

									<ul>

										<li><i class="fa fa-user"></i>Arotex Confecciones</a></li>

										<li><i class="fa fa-clock-o"></i>Utima Actualización 12:41 PM</a></li>

										<li><i class="fa fa-calendar-o"></i>03 OCT 2016</a></li>

									</ul>

									<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

									<!--<p><b>Write Your Review</b></p>-->

									<img src="images/product-details/tallas1.jpg" alt="" />

									<img src="images/product-details/tallas2.jpg" alt="" />

									<!--<form action="#">

										<span>

											<input type="text" placeholder="Your Name"/>

											<input type="email" placeholder="Email Address"/>

										</span>

										<textarea name="" ></textarea>

										<b>Rating: </b> <img src="images/product-details/rating.png" alt="" />

										<button type="button" class="btn btn-default pull-right">

											Submit

										</button>

									</form>-->

								</div>

							</div>

							

						</div>

					</div><!--/category-tab-->

				</div>

			</div>

		</div>

	</section>

<?php
include('footer.php');
?>	