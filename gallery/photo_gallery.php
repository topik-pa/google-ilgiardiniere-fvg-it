<?php
$titolo_pagina = "Giulio Modotti (perito agrario) - Giardiniere, esegue lavori di giardinaggio e trattamenti fitosanitari - Gallery";
$pagina = "gallery";
$cod_pagina = "gallery";
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
					<h1>Giardiniere a Udine, Trieste ed in tutto il Friuli-Venezia Giulia - Gallery dei miei lavori</h1>
				</section>		
				
				<section id="mainContent">

					<div id="img_gallery">
					
						<!--<a href="gallery.php?img=35&pagina=img_gallery"><img class="classe_immagini" alt="Una immagine dei miei lavori" src="img/35ico.jpg" /><a>
						-->
						
						<a href="/img/img_gallery_1.jpg"><img class="content-image" id="img-1-<?php echo $cod_pagina; ?>" src="/img/img_gallery_1_ico.jpg"/></a>
						<a href="/img/img_gallery_2.jpg"><img class="content-image" id="img-2-<?php echo $cod_pagina; ?>" src="/img/img_gallery_2_ico.jpg"/></a>
						<a href="/img/img_gallery_3.jpg"><img class="content-image" id="img-3-<?php echo $cod_pagina; ?>" src="/img/img_gallery_3_ico.jpg"/></a>
						<a href="/img/img_gallery_4.jpg"><img class="content-image" id="img-4-<?php echo $cod_pagina; ?>" src="/img/img_gallery_4_ico.jpg"/></a>
						<a href="/img/img_gallery_5.jpg"><img class="content-image" id="img-5-<?php echo $cod_pagina; ?>" src="/img/img_gallery_5_ico.jpg"/></a>
						<a href="/img/img_gallery_6.jpg"><img class="content-image" id="img-6-<?php echo $cod_pagina; ?>" src="/img/img_gallery_6_ico.jpg"/></a>
						<a href="/img/img_gallery_7.jpg"><img class="content-image" id="img-7-<?php echo $cod_pagina; ?>" src="/img/img_gallery_7_ico.jpg"/></a>
						<a href="/img/img_gallery_8.jpg"><img class="content-image" id="img-8-<?php echo $cod_pagina; ?>" src="/img/img_gallery_8_ico.jpg"/></a>
						<a href="/img/img_gallery_9.jpg"><img class="content-image" id="img-9-<?php echo $cod_pagina; ?>" src="/img/img_gallery_9_ico.jpg"/></a>
						<a href="/img/img_gallery_10.jpg"><img class="content-image" id="img-10-<?php echo $cod_pagina; ?>" src="/img/img_gallery_10_ico.jpg"/></a>
						<a href="/img/img_gallery_11.jpg"><img class="content-image" id="img-11-<?php echo $cod_pagina; ?>" src="/img/img_gallery_11_ico.jpg"/></a>
						<a href="/img/img_gallery_12.jpg"><img class="content-image" id="img-12-<?php echo $cod_pagina; ?>" src="/img/img_gallery_12_ico.jpg"/></a>
						<a href="/img/img_gallery_13.jpg"><img class="content-image" id="img-13-<?php echo $cod_pagina; ?>" src="/img/img_gallery_13_ico.jpg"/></a>
						<a href="/img/img_gallery_14.jpg"><img class="content-image" id="img-14-<?php echo $cod_pagina; ?>" src="/img/img_gallery_14_ico.jpg"/></a>
						<a href="/img/img_gallery_15.jpg"><img class="content-image" id="img-15-<?php echo $cod_pagina; ?>" src="/img/img_gallery_15_ico.jpg"/></a>
					
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