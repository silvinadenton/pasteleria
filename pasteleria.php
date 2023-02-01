<!DOCTYPE html>
<html>
<head>
	<title>La pasteleria de mamá</title>

	<meta charset="utf-8">
<link rel="stylesheet" href="css/galeria.css" type="text/css" media="screen" />
  <script type="text/javascript">var _siteRoot='pasteleria.php',_root='pasteleria.php';</script>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/scripts.js"></script>
 


<link rel="stylesheet" href="css/lightbox.min.css">
 <link rel="stylesheet" type="text/css" href="estilo_pasteleria.css"/>
<link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Dekko&display=swap" rel="stylesheet">
  <meta name="viewport"content="width=device-width,initial-scale=1">
 
</head>
 <body>
 <header>

	 <div id="toldo"></div>
		
		                     <nav id="botonera_superior">
				              <ul>
                             <li><a href="#">INICIO</a></li>
		                     <li><a href="#muffins">MUFFINS</a></li>
		                     <li><a href="#pasteles">PASTELES</a></li>
		                     <li><a href="#galletitas">GALLETITAS</a></li>
		                     <li><a href="#budines">BUDINES</a></li>
		                     <li><a href="#contacto">CONTACTO</a></li>
	                            </ul>
		                        </nav>
		                        </header>

                               <section id="home">
	
	                           <div id="imagen_muffins"></div>

	                            <article id= "muffins"><p><h2>MUFFINS</h2></p>
		<P> También conocido en otros países en idioma español como panquecito o
		     magdalena es un producto de repostería elaborado con pan dulce y otros
		      ingredientes.</P><P><h2>VARIEDADES</h2></P> 
		 <p>*Vainilla
            *Vaivilla con chispas de chocolate
            *Naranja
            *Limon
            *Carrot cake
            *Chocolate
            *Marmolado</p>
			</article>

	        <div id="imagen_pasteles">


	</div>

	         <article id= "pasteles"><p><h2>PASTELES</h2></p>
		    <p> Si queres recorrer los sabores de tu infancia,conocer nuevas
		     propuetas,y quedar bien con amigos y familia, te ofresco esta selección 
		     de pasteles y tarta ,todas elavoradas con productos de primera calidad.</p>
		     <p><h2>VARIEDADES</h2></p>
		     <p>
		       * Lemon pie
               * Marquise de chocolate y frutos rojos
               * Rogel
               * Red velvet
               *Tarta de Manzanas
               *Pastafrola
               *Ricota</p>



	</article>
	<div id="imagen_galletitas"></div>
	<article id= "galletitas"><p><h2>GALLETITAS</h2></p>
		    <p>Nada mas rico que galletitas recien hechas</p>
			<p><h2>VARIEDADES</h2></p>
			<p>*Avena con pasas de uva
               *Avena con nueces
               *Avena con chispas de chocolate
               *Manteca
               *Miel
               *Chocolate y almendras</p>
           


    </article>
	</article>
	<div id="imagen_budines"></div>
	<article id= "budines"><p><h2>BUDINES</h2></p>
 <p> Para acompañar el mate,nada`mejor que budines hùmedos y esponjosos.</p>
           <p><h2>VARIEDADES</h2></p>
           <P>*Vainilla
             *Vaivilla con chispas de chocolate
             *Naranja
             *Limon
             *Carrot cake
             *Chocolate
             *Marmolado</P>
	</article>

	
 <div id="precios"></div> 
 <article id="precios"><p><h2> Precios</h2></p></article>
 <nav id="botonera_precios"><ul>
		
  <li><a href="pasteleria.php?id=muffins#botonera_precios">MUFFINS</a></li>
  <li><a href="pasteleria.php?id=pasteles#botonera_precios">PASTELES</a></li>
  <li><a href="pasteleria.php?id=galletitas#botonera_precios">GALLETITAS</a></li>
  <li><a href="pasteleria.php?id=budines#botonera_precios">BUDINES</a></li></ul>
  </nav>
  <div id="contenido_precios">

	<?php 
	if (isset($_GET['id']))
			{
		 	
         switch ($_GET['id']) {

	     case 'muffins':
		  $titulo='Muffins';
		  $contenido='Precios por unidad $80';
		  $imagen='proyecto_pasteleria/mufarandano.jpg';
		

		 break;
	     case 'pasteles':
		 $titulo='PASTELES';
		 $contenido='Rogel $700';
		 $imagen='proyecto_pasteleria/rogelgrande.jpg';

		 break;
		 case 'galletitas':
	     $titulo='GALLETITAS';
		 $contenido='Galletitas de avena $200 el 1/4';
		 $imagen='proyecto_pasteleria/chispas.jpg';
			break;
	     case 'budines':
		 $titulo='BUDINES';
		 $contenido='Budines $300';
		 $imagen='proyecto_pasteleria/budinlimon.jpg';
		 break;
		 
         }
}
     ?>

     <!-- </div> -->
       <div id="imagen_precios">

       	     <img src="https://silvinadentonacebal.000webhostapp.com/<?php echo $imagen;?>">

       </div>

	   <article id="texto_botonera_precios">
 
		<?php 
          error_reporting(0);
	     echo "<h2>$titulo</h2>";
	     echo "<p>$contenido<p>";


	     ?>


	   </article></div>

      </section>

   <footer>
 
     <nav id="botonera_inferior">

     <ul><li><a href="https://www.facebook.com"><img class="icono_botonera" 
     	src="https://silvinadentonacebal.000webhostapp.com/proyecto_pasteleria/facebok.jpg"></a></li>
	<li><a href="https://www.instagram.com"><img class="icono_botonera"
	 src="https://silvinadentonacebal.000webhostapp.com/proyecto_pasteleria/instagram.jpg"></a></li>
	<li><a href="https://twitter.com"><img class="icono_botonera" 
		src="https://silvinadentonacebal.000webhostapp.com/proyecto_pasteleria/twitter.jpg"></a></li>	
	</ul>	
		
    </nav> 
     <section id= "contacto">
     	<h2>Contacto</h2>
     	<form method="post"action="enviar_mensaje.php">
     		<input type="text" name="nombre"placeholder="Nombre">
     		<input type="text" name="apellido"placeholder="Apellido">
     		<input type="email" name="correo"placeholder="Correo Electronico">
     		<textarea name="mensaje_o_pedido"placeholder="Mensaje o Pedidos" rows="8">
     			
     		</textarea>
     		 <input type="submit" value="Enviar Mensaje o Pedido" >



     	</form>
	 
</section>
<section id= "enviado">
	<h3>Mensaje enviado!</h3>
	 <!--/top-->
  <div id="header"><div class="wrap">
   <div id="slide-holder">
<div id="slide-runner">
    <a href=""><img id="slide-img-1" src="marquese.jpg" class="slide" alt="" /></a>
    <a href=""><img id="slide-img-2" src="rogelgrande.jpg" class="slide" alt="" /></a>
    <a href=""><img id="slide-img-3" src="frolacorazon.jpg" class="slide" alt="" /></a>
    <a href=""><img id="slide-img-4" src="REDVELVET.jpg" class="slide" alt="" /></a>
     
    <div id="slide-controls">
     <p id="slide-client" class="text"><strong> </strong><span></span></p>
     <p id="slide-desc" class="text"></p>
     <p id="slide-nav"></p>
    </div>
</div>
	
	<!--content featured gallery here -->
   </div>
   <script type="text/javascript">
    if(!window.slider) var slider={};slider.data=[{"id":"slide-img-1","client":"Torta","desc":"Marquese"},{"id":"slide-img-2","client":"Torta","desc":"Rogel"},{"id":"slide-img-3","client":"Torta","desc":"Pastafrola"},{"id":"slide-img-4","client":"Torta","desc":"RED VELVET"}];
   </script>

</section>

</footer>
<script src="js/lightbox-plus-jquery.min.js"></script>
</body>
</html>
