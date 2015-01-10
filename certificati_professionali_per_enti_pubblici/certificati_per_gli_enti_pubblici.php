<?php
$titolo_pagina = "Giardiniere per gli enti pubblici, comuni, amministrazioni pubbliche";
$pagina = "giardiniere_enti_pubblici";
$cod_pagina = "gep";
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
					<h1>Giardiniere per gli enti pubblici, comuni, amministrazioni pubbliche</h1>
				</section>
				
				<section id="mainContent">											
					<!--<a href="/img/primo_soccorso.jpg"><img title="Corso di formazione teorico-pratico di primo soccorso" src="/img/primo_soccorso.jpg" class="content-image" id="img-1-<?php echo $cod_pagina; ?>"/></a>
					<a href="/img/prevenzione_sicurezza.jpg"><img title="Attestato di partecipazione al corso Prevenzione e sicurezza negli ambienti lavorativi" src="/img/prevenzione_sicurezza.jpg" class="content-image" id="img-2-<?php echo $cod_pagina; ?>"/></a>-->
					
					<div id="update-section">
						SEZIONE IN AGGIORNAMENTO
					</div>
					
					<div id="certificati">
						Su richiesta si fornisce il DURC entro 5 giorni. <br/><br/>
						Iscrizione al MEPA<br/><br/>
						In possesso di assicurazione civile contro terzi.
					</div>
					
					<div class="clear"/>
				</section>
			</main>
		
			<footer id="footer">
				<?php include('../includes/footer.php'); ?>
			</footer>				
			
		</div>	
		
		<?php include('../includes/statCounter.php'); ?>
		
	</body>
</html>