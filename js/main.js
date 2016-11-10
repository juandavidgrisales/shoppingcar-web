function Articulo(prenda, max, actual) {
  this.prenda = prenda;
  this.max = max;
  this.actual = actual;
}

var camila = { "cedula": "38228444", 
			   "productos" : [new Articulo("Sastre formal De Dos (2) Piezas", 1, 0), 
			   				  new Articulo("Blusa formal manga larga", 1, 0)]};
var camilo = { "cedula": "14225334", 
			   "productos" : [new Articulo("Vestido formal de dos (2) piezas gama alta", 1, 0), 
			   				  new Articulo("Camisa formal manga larga", 1, 0),
			   				  new Articulo("Corbata", 1, 0)]};

var andrea = { "cedula": "38228555", 
			   "productos" : [new Articulo("Diseño Clasico y de Moda", 1, 0)]};

var orlando = { "cedula": "14256834", 
			    "productos" : [new Articulo("Diseño Clasico y de Moda", 1, 0)]};

var paulina = { "cedula": "38555333", 
			   "productos" : [new Articulo("Sastre formal De Dos (2) Piezas", 1, 0), 
			   				  new Articulo("Blusa formal manga larga", 1, 0)]};

var pablo = { "cedula": "93367444", 
			   "productos" : [new Articulo("Vestido formal de dos (2) piezas gama alta", 1, 0), 
			   				  new Articulo("Camisa formal manga larga", 1, 0),
			   				  new Articulo("Corbata", 1, 0)]};

var laura = { "cedula": "38665333", 
			  "productos" : [new Articulo("Diseño Clasico y de Moda", 1, 0)]};

var alex = { "cedula": "95367342", 
			 "productos" : [new Articulo("Diseño Clasico y de Moda", 1, 0)]};




function imageChange (number){
	$("#div-img1").removeClass("active");
	$("#div-img2").removeClass("active");
	$("#div-img3").removeClass("active");
	$("#div-img4").removeClass("active");
	$("#div-img"+number).addClass("active");
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

$('#sl2').slider();

var RGBChange = function() {
$('#RGB').css('background', 'rgb('+r.getValue()+','+g.getValue()+','+b.getValue()+')')

};	

		

/*scroll to top*/



$(document).ready(function(){

	$(function () {

		$.scrollUp({

	        scrollName: 'scrollUp', // Element ID

	        scrollDistance: 300, // Distance from top/bottom before showing element (px)

	        scrollFrom: 'top', // 'top' or 'bottom'

	        scrollSpeed: 300, // Speed back to top (ms)

	        easingType: 'linear', // Scroll to top easing (see http://easings.net/)

	        animation: 'fade', // Fade, slide, none

	        animationSpeed: 200, // Animation in speed (ms)

	        scrollTrigger: false, // Set a custom triggering element. Can be an HTML string or jQuery object

					//scrollTarget: false, // Set a custom target element for scrolling to the top

	        scrollText: '<i class="fa fa-angle-up"></i>', // Text for element, can contain HTML

	        scrollTitle: false, // Set a custom <a> title if required.

	        scrollImg: false, // Set true to use image

	        activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'

	        zIndex: 2147483647 // Z-Index for the overlay

		});

	});

});



