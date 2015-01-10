<?php
$titolo_pagina = "Giardiniere per movimento terra e semina terreni con fresatura radici e livellatura";
$pagina = "movimento_terra";
$cod_pagina = "mts";
?>

<?php include('../includes/doctype.php'); ?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
	
	<?php include('../includes/headT.php'); ?>
	
	<body class="<?php echo $cod_pagina; ?>">
			
		<div id="container">
		
			<?php include('../includes/top_row.php'); ?>
					
			<header id="header"> 
				<?php include('../includes/pageHeader.php'); ?>
				<?php include('../includes/menu.php'); ?>			
			</header>		
			
			<main>
				<section class="main-title">
					<h1>Giardiniere Udine e in tutto il Friuli per movimento terra e semina terreni con fresatura radici e livellatura</h1>
				</section>
								
				<section id="mainContent" class="content">						
					<p>
						Semine autunno-primaverili delle migliori semenze erbacee reperibili sul mercato quali festuche e loietti.<br/>
						<strong>Fresatura e livellatura terreni</strong> per mezzo di <strong>interra sassi</strong> su piccole e grandi superfici.<br/>
						Un interra sassi &egrave; un macchinario innovativo che permette la lavorazione del terreno eliminando tutti i sassi e lasciando un risultato ottimale del letto di semina.<br/>
						Possibilit&agrave; di importo o esporto terra vagliata: &egrave; possibile apportare terra di buona qualit&agrave; nei terreni di scarsa qualit&agrave;.
					</p>
					<div class="img-container">
						<img src="/img/movimento_terra_semine.jpg" class="content-image" id="img-1-<?php echo $cod_pagina; ?>"/>
					</div>
				</section>
				
				<section id="keywords">
					Keywords: movimento, terra, semine, fresatura, livellatura, terreni, Udine, Trieste, Friuli
				</section>
				
			</main>
	
			<footer id="footer">
				<?php include('../includes/footer.php'); ?>
			</footer>				
			
		</div>	
		
		<?php include('../includes/statCounter.php'); ?>
	</body>
</html>