<?php
//Imposto due variabili di uso generale
$titolo_pagina = "Giardiniere per gli enti pubblici, comuni, amministrazioni, uffici pubblici";
$pagina = "giardiniere_enti_pubblici";
?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/doctype.php'); ?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
	
	<!-- Inserimento del tag head -->
	<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/headT.php'); ?>
	
	<body class="giardiniere_enti_pubblici">	
			
		<div id="container">
			
			<div id="header"> 
				<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/titoloELogo.php'); ?>
				<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/menu.php'); ?>			
			</div>			
			
			<div id="mainContent">						
				<p>
					<a href="gallery.php?pagina=giardiniere_per_gli_enti_pubblici&amp;img=1"><img id="foto1" alt="Giardiniere a Udine e in Friuli: attestato primo soccorso" src="img/1ico.jpg" /></a>
					<a href="gallery.php?pagina=giardiniere_per_gli_enti_pubblici&amp;img=2"><img id="foto2" alt="Giardiniere a Udine e in Friuli: attestato prevenzione e sicurezza negli ambienti lavorativi" src="img/2ico.jpg" /></a>
				</p>
			</div>
			
			<div id="footer">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/footer.php'); ?>
			</div>				
			
		</div>	
		
		<!-- Inserimento codice StatCounter -->
		<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/statCounter.php'); ?>
		<!-- Fine codice StatCounter -->
	</body>
</html>
<!--fine home page -->