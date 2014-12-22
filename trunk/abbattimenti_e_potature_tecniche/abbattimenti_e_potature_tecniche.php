<?php
$titolo_pagina = "Abbattimenti e potature tecniche di alberi e piante con fresatura radici";
$pagina = "potature_tecniche";
$cod_pagina = "pt";
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
					<h1>Abbattimenti e potature tecniche di alberi e piante con fresatura radici</h1>
				</section>
				
				
				<section id="mainContent" class="content">						
					<p>
						Molte persone si offrono di abbattere o potare alberi, molto spesso, per&ograve;, i lavori sono fatti da personale non qualificato che sopravvaluta la sua capacit&agrave; e che lavora in condizioni poco sicure e con molta superficialit&agrave;. <strong>L&apos;azienda porta a termine il lavoro in maniera professionale, nel rispetto di tutti gli standard di sicurezza previsti dalle normative vigenti</strong> e nel minor tempo possibile. Tutto questo grazie alla passione e all&apos;esperienza pluriennale coltivata nel tempo. 
						<br/>Utilizziamo macchinari che abbattono di gran lunga i tempi di lavorazioni e ne semplificano l&apos;esecuzione.    
					</p>	

					<div class="img-container">
						<img src="/img/abbattimenti_potature_fresatura_radici.jpg" class="content-image" id="img-1-<?php echo $cod_pagina; ?>"/>
						<img src="/img/abbattimenti_potature_fresatura_radici_2.jpg" class="content-image" id="img-2-<?php echo $cod_pagina; ?>"/>
					</div>
				</section>

			</main>
	
			<footer id="footer">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/footer.php'); ?>
			</footer>				
			
		</div>	
		
		<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/statCounter.php'); ?>
		
	</body>
</html>