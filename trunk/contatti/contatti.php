<?php
//Imposto due variabili di uso generale
$titolo_pagina = "Giardinaggio e manutenzione giardino a Udine (Friuli-Venezia Giulia)";
$pagina = "contatti";
?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/doctype.php'); ?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
	
	<!-- Inserimento del tag head -->
	<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/headT.php'); ?>
	
	<body class="contatti">	
			
		<div id="container">
			
			<div id="header"> 
				<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/titoloELogo.php'); ?>
				<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/menu.php'); ?>			
			</div>			
			
			<div id="mainContent">						
				<h3>Contatti</h3>
				<p><br /><br />Opero nella zona di Udine ed in tutta la regione Friuli Venezia Giulia. <br />Contattami, per fissare un appuntamento o per richiedere maggiorni informazioni, al seguente recapito telefonico.</p>
				<p><br /><br /><strong>Giulio Modotti</strong></p>	
				<p>Cell: <strong class="tel">+39 340 1733526</strong></p><br />
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