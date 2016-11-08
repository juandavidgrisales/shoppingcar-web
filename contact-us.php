<?php
	include('header.php');
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$status = 'Gracias por contactarnos, atenderemos su solicitud tan pronto como sea posible.';
		$send = 1;


	    $name       = @trim(stripslashes($_POST['name'])); 
	    $email      = @trim(stripslashes($_POST['email'])); 
	    $subject    = @trim(stripslashes($_POST['subject'])); 
	    $message    = @trim(stripslashes($_POST['message'])); 

	    $email_from = $email;
	    $email_to = 'javier.aranzalez@hotmail.com';//replace with your email

	    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

	    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

	}
?>
	 
	 <div id="contact-page" class="container">
	 	<div class="breadcrumbs">
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Contacto</li>
			</ol>
		</div>
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center"><strong>Contactenos</strong></h2> 
				</div>			 		
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Estar en contacto</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" required="required" placeholder="Nombre">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="subject" class="form-control" required="required" placeholder="Asunto">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Escribe tu mensaje aquí"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Enviar">
				            </div>
				        </form>
				        <?php
				        	if ($send == 1)
				        		echo "<p>".$status."</p>";
				        ?>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Información de contacto</h2>
	    				<address>
	    					<p>Arotex Confecciones.</p>
							<p>Carrera 11 No. 34A - 92 Oficina 402, Ibagué - Colombia</p>
							<p>Ibagué, Colombia</p>
							<p>Telefono: +57 320 273 8151</p>
							<p>Email: ventas@aerotexconfecciones.com</p>
	    				</address>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
	
<?php	
	include('footer.php');
?>