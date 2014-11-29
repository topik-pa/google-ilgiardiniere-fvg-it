<?php
//Imposto due variabili di uso generale
$titolo_pagina = "Giardiniere per movimento terra e semina terreni con fresatura radici e livellatura";
$pagina = "movimento_terra";
?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/doctype.php'); ?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
	
	<!-- Inserimento del tag head -->
	<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/headT.php'); ?>
	
	<body class="home">	
			
		<div id="container">
		
			
			<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/top_row.php'); ?>
					
			<header id="header"> 
				<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/pageHeader.php'); ?>
				<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/menu.php'); ?>			
			</header>		
			
			<main>
				<section class="main-title">
					<h1>Giardiniere Giulio Modotti: giardinaggio a Udine, Trieste ed in tutto il Friuli-Venezia Giulia</h1>
				</section>
				
				
				<div id="mainContent">						
					<h3>Movimento terra e semine</h3>
					<p>
						Semine autunno-primaverili delle migliori semenze erbacee reperibili sul mercato quali festuche e loietti.<br/>
						Fresatura e livellatura terreni per mezzo di interra sassi su piccole e grandi superfici.<br/>
						Un interra sassi &egrave; un macchinario innovativo che permette la lavorazione del terreno eliminando tutti i sassi e lasciando un risultato ottimale del letto di semina.<br/>
						Possibilit&agrave; di importo o esporto terra vagliata: &egrave; possibile apportare terra di buona qualit&agrave; nei terreni di scarsa qualit&agrave;.
					</p>
					<img src="img/1ico.JPG?ver=3"/>
					
					<p> 
					<a class="torna_in_alto" href="#supportingText">Torna in alto</a>
					</p>
				</div>

			</main>

			
			<footer id="footer">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/footer.php'); ?>
			</footer>				
			
		</div>	
		
		<!-- Inserimento codice StatCounter -->
		<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/statCounter.php'); ?>
		<!-- Fine codice StatCounter -->
	</body>
</html>
<!--fine home page -->