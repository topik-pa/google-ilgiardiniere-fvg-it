<?php
$titolo_pagina = "Giardiniere per gli enti pubblici, comuni, amministrazioni pubbliche";
$pagina = "giardiniere_enti_pubblici";
$cod_pagina = "gep";
?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/doctype.php'); ?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
	
	<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/headT.php'); ?>
	
	<body class="<?php echo $cod_pagina; ?>">	
			
		<div id="container">
			
			<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/top_row.php'); ?>
					
			<header id="header"> 
				<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/pageHeader.php'); ?>
				<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/menu.php'); ?>			
			</header>		
			
			<main>
				<section class="main-title">
					<h1>Giardiniere per gli enti pubblici, comuni, amministrazioni pubbliche</h1>
				</section>
				
				
				<section id="mainContent">						
					<!--<a href="gallery.php?pagina=giardiniere_per_gli_enti_pubblici&amp;img=1"><img id="foto1" alt="Giardiniere a Udine e in Friuli: attestato primo soccorso" src="img/1ico.jpg" /></a>
					<a href="gallery.php?pagina=giardiniere_per_gli_enti_pubblici&amp;img=2"><img id="foto2" alt="Giardiniere a Udine e in Friuli: attestato prevenzione e sicurezza negli ambienti lavorativi" src="img/2ico.jpg" /></a>-->
					
					<img src="/img/primo_soccorso.jpg" class="content-image" id="img-1-<?php echo $cod_pagina; ?>"/>
					<img src="/img/prevenzione_sicurezza.jpg" class="content-image" id="img-2-<?php echo $cod_pagina; ?>"/>
					<div class="clear"/>
				</section>
			</main>
		
			<footer id="footer">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/footer.php'); ?>
			</footer>				
			
		</div>	
		
		<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/statCounter.php'); ?>
		
	</body>
</html>