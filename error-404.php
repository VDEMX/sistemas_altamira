<?php $active_page="Inicio"; ?>
<?php include("includes/head.php"); ?>
 		<title><?php echo "$sitio"?> | Error 404</title>
 		<meta name="description" content="Página de error 404">
		<meta name="keywords" content="página, error, 404, VDE">
 		<meta name="robots" content="noindex, nofollow">
 	</head>
 	
 <body>
 <section id="container">
 	
 	<?php include("includes/header.php"); ?>
 	
 	<section id="e404" class="content active">
		<div class="box">
			
		</div>
		<div class="cover_pan"></div>
		<h2>Lo sentimos, pero no encontramos la página que está buscando</h2>
		<p>Usted puede ir a la página de <a href="<?php echo "$url"?>">inicio</a> de nuestro sitio</p>
	</section>

 	
 	<?php include("includes/footer.php"); ?>