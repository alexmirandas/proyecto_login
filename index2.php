<!DOCTYPE html>

<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Proyecto Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Joseph Godoy">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
	<?php
	include("include/cabecera.php");
	?>
</div>
</header>

  <!-- Navbar
    ================================================== -->
<?php

include("include/menu.php");

?>
<!-- ======================================================================================================================== -->

<div id="myCarousel" class="carousel slide homCar">
		<div class="carousel-inner" style="border-top:18px solid #222; border-bottom:1px solid #222; border-radius:4px;">
		  <div class="item active">
			<img src="images/21.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Calidad</h4>
				  <p>
				   Nuestros productos son de la mas alta calidad. Usted tendra la certeza de que compra los mejores pructos del mercado.
				  </p>
			</div>
		  </div>
		  <div class="item">
			<img src="images/22.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Precio</h4>
				  <p>
				  Tenemos los precios mas bajos en todos nuestros productos. Compare y compre...!!!
				  </p>
			</div>
		  </div>
		  <div class="item">
			<img src="images/23.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Originalidad</h4>
				  <p>
				  Todo nuestro catalogo es 100% original, usted no encontrara nuestros modelos en otras tiendas.
				  </p>
			</div>
		  </div>
		</div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
</div>
<h3>Todos nuestros productos</h3>
<div class="row" style="text-align:center">
			<div class="span2">
				<div class="well well-small">
					<h4>Corbatas</h4>
					<img src="images/1.jpg" alt="#" style="min-height:250px; min-width:100%"/>
					<P>Precio $25.00<br>Colores: Varios<br>Disponibilidad: 100 Pzas.</P>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Camisas</h4>
					<img src="images/2.jpg" alt="#" style="min-height:250px; min-width:100%"/>
					<P>Precio $450.00<br>Colores: Varios<br>Disponibilidad: 100 Pzas.</P>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>P. de vestir</h4>
					<img src="images/3.jpg" alt="#" style="min-height:250px; min-width:100%"/>
					<P>Precio $300.00<br>Colores: Varios<br>Disponibilidad: 100 Pzas.</P>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>P. Casuales</h4>
					<img src="images/4.jpg" alt="#" style="min-height:250px; min-width:100%"/>
					<P>Precio $320.00<br>Colores: Varios<br>Disponibilidad: 100 Pzas.</P>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Botas</h4>
					<img src="images/5.jpg" alt="#" style="min-height:250px; min-width:100%"/>
					<P>Precio $500.00<br>Colores: Varios<br>Disponibilidad: 100 Pzas.</P>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Zapatos</h4>
					<img src="images/6.jpg" alt="#" style="min-height:250px; min-width:100%"/>
					<P>Precio $400.00<br>Colores: Varios<br>Disponibilidad: 100 Pzas.</P>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Tenis</h4>
					<img src="images/7.jpg" alt="#" style="min-height:250px; min-width:100%"/>
					<a href="al.php"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Elehancia</h4>
					<img src="images/8.jpg" alt="#" style="min-height:250px; min-width:100%"/>
					<a href="te.php"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Reloj</h4>
					<img src="images/9.jpg" alt="#" style="min-height:250px; min-width:100%"/>
					<a href="fi.php"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Mas relojes</h4>
					<img src="images/10.jpg" alt="#" style="min-height:250px; min-width:100%"/>
					<a href="fp.php"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Once</h4>
					<img src="images/11.jpg" alt="#" style="min-height:250px; min-width:100%"/>
					<a href="fm.php"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Doce</h4>
					<img src="images/12.jpg" alt="#" style="min-height:250px; min-width:100%"/>
					<a href="md.php"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Trece</h4>
					<img src="images/13.jpg" alt="#" style="min-height:250px; min-width:100%"/>
					<a href="al.php"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Catorce</h4>
					<img src="images/14.jpg" alt="#" style="min-height:250px; min-width:100%"/>
					<a href="te.php"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Quince</h4>
					<img src="images/15.jpg" alt="#" style="min-height:250px; min-width:100%"/>
					<a href="fi.php"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Diesiseis</h4>
					<img src="images/16.jpg" alt="#" style="min-height:250px; min-width:100%"/>
					<a href="fp.php"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Diesisiete</h4>
					<img src="images/17.jpg" alt="#" style="min-height:250px; min-width:100%"/>
					<a href="fm.php"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Diesiocho</h4>
					<img src="images/18.jpg" alt="#" style="min-height:250px; min-width:100%"/>
					<a href="md.php"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Diesinueve</h4>
					<img src="images/19.jpg" alt="#" style="min-height:250px; min-width:100%"/>
					<a href="md.php"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Veinte</h4>
					<img src="images/20.jpg" alt="#" style="min-height:250px; min-width:100%"/>
					<a href="md.php"><small>Ver detalles</small></a>
				</div>
			</div>
	
			<div class="span12">
				<div class="well well-small">
					<h4 >Naaaaaa</h4>
					<a href="edf.php"><small>Ver detalles</small></a>
				</div>
			</div>
</div>
<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
<p>&copy; Copyright -- Alejandro I. Miranda Sánchez --<br/><br/></p>
 </footer>
</div><!-- /container -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>