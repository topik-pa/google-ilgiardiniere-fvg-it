<!-- Altra pagina di riserva -->
<!-- Autore: Marco Pavan - pavan.marco@email.it -->
<!-- Data: 28 sett 2010 -->
<?php
//Imposto due variabili di uso generale
$titolo_pagina = "Template - Altra pagina";
$pagina = "altra";
?>

<!-- Dichiarazione del DOCTYPE -->
<?php include('../includes/doctype.php'); ?>

<!-- Corpo del documento -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it">
	<head>
		<!-- Inserimento del tag head -->
		<?php include('../includes/tag_head.php'); ?>
	</head>
	<body>	
		<!-- Link per raggiungere direttamente il contenuto principale saltando le voci del menù -->
		<p id="vaiAlCorpoCentrale"><a href="#supportingText">Vai al contenuto principale</a></p>	
		<!-- Wrapper del contenuto della pagina -->
		<div id="container">
			<!-- Introduzione -->
			<div id="intro"> 
				<!-- Header della pagina -->					
				<?php include('../includes/tag_div_pageHeader.php'); ?>
				<!-- Fine header della pagina -->
				<!-- Breve riassunto degli argomenti o spazio per avvisi -->				
				<div id="quickSummary">		

				</div>
				<!-- Fine riassunto degli argomenti o avvisi -->
				<!-- Breve preambolo -->
				<div id="preamble"> 

				</div>				
				<!-- Fine preamble -->
				<!-- Menu orizzontale -->			
				<?php include('../includes/tag_div_menu_orizzontale.php'); ?>			
				<!-- Fine menu orizzontale -->
				<!-- Breadcrums della pagina (modifica manuale) e search engine interno-->
				<div id="breadcrums_searchEngine">

				</div>			
				<!-- Fine breadcrums_searchEngine -->
			</div>			
			<!-- Fine div intro -->
			
			<!-- Testo principale del documento -->
			<div id="supportingText">
				<!--Inclusione della funzione stampa di printFriendly -->	
				<?php include('../includes/print_friendly.php'); ?>
				<!-- Fine print friendly -->	
				<!-- Indice argomenti del corpo centrale -->
				<div id="indiceCorpoCentrale">
	    				
	  			</div>				
				<!-- Fine div indiceCorpoCentrale -->
				<!-- Primo paragrafo -->
				<div id="explanation">
					<h3>Benvenuti</h3>
					<p>Fusce vel nibh et ante rutrum suscipit at nec lacus. Donec rutrum congue nunc vitae vehicula. Nam vitae feugiat enim. In laoreet, libero quis luctus sollicitudin, ligula sapien commodo ligula, in malesuada nisl est nec neque. In dapibus sem a ligula lacinia egestas. Aliquam suscipit gravida pulvinar. Cras at tortor dolor.<br /><br />
					Cras at tortor dolor. Sed rhoncus leo sed sem convallis viverra. Nam et justo justo, sed posuere nibh. Aliquam a diam neque, laoreet fringilla odio.
					</p>
					<h3><span>Titolo 1</span></h3>
					<p class="p1">
					<span>Paragrafo 1<br />
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ullamcorper orci eget sem dignissim nec ultrices ligula elementum. Donec justo nisi, vulputate non luctus eu, laoreet in nulla. Donec eros massa, accumsan vel auctor accumsan, pretium at odio. Sed rutrum iaculis nisl id viverra. Phasellus lorem turpis, suscipit eget elementum id, feugiat bibendum erat. Nullam ornare mauris vitae lacus commodo convallis. Etiam in orci ligula. Proin vel elit quis mi tincidunt malesuada malesuada vitae nisl. Aenean gravida tincidunt diam, vel ornare velit dignissim sit amet. Praesent urna metus, convallis nec commodo egestas, posuere non mauris. Pellentesque ac tellus non ligula sagittis vulputate. 
					</span>
					</p>
					<p class="p2">
					<span>Paragrafo 2<br />
					Maecenas in eros quam, a cursus ante. Cras sem elit, sodales ut rhoncus vel, fermentum vel elit. Sed ac facilisis elit. Cras ut metus sapien, congue hendrerit quam. Fusce vel nibh et ante rutrum suscipit at nec lacus. Donec rutrum congue nunc vitae vehicula. Nam vitae feugiat enim. In laoreet, libero quis luctus sollicitudin, ligula sapien commodo ligula, in malesuada nisl est nec neque. In dapibus sem a ligula lacinia egestas. Aliquam suscipit gravida pulvinar. Cras at tortor dolor. Sed rhoncus leo sed sem convallis viverra. Nam et justo justo, sed posuere nibh. Aliquam a diam neque, laoreet fringilla odio. Aliquam sit amet enim elementum libero molestie suscipit. Morbi eu diam nunc, nec vulputate elit. Vivamus pulvinar diam in dolor condimentum dictum. Mauris vel risus id eros facilisis rutrum quis at orci. Integer sapien orci, hendrerit non accumsan quis, mollis vel nibh. Cras ac scelerisque lorem.<br />
					<a class="torna_in_alto" href="#supportingText">Torna in alto</a>
					</span>
					</p>
				</div>				
				<!-- Fine div explanation -->
				<!-- Secondo paragrafo -->
				<div id="participation">	
					
				</div>				
				<!-- Fine div participation -->
				<!-- Terzo paragrafo -->
				<div id="benefits">		
					
				</div>				
				<!-- Fine div benefits -->
				<!-- Quarto paragrafo -->
				<div id="requirements">		
					
				</div>				
				<!-- Fine div requirements -->

				<?php include('../includes/tag_div_footer.php'); ?>
				<!-- Fine footer -->
			</div>				
			<!-- Fine div supportingText -->
			<!-- LinkList (menu di navigazione) -->
			<div id="linkList">
				<!-- Menu di navigazione 1 -->
				<?php include('../includes/tag_div_Navigation1.php'); ?>	
				<!-- LinkList2 (menu2) -->		
				<div id="linkList2">	
					
				</div>	
				<!-- Fine div linkList2 (menu2) -->
			</div>	
			<!-- Fine div linkList (menu) -->
		</div>			
		<!-- Fine div container -->
		<!-- Sezioni div extra per immagini, toolbox etc...
		<div id="extraDiv1"><span></span></div><div id="extraDiv2"><span></span></div><div id="extraDiv3"><span></span></div>
		<div id="extraDiv4"><span></span></div><div id="extraDiv5"><span></span></div><div id="extraDiv6"><span></span></div>
		-->
		<!-- Inserimento codice StatCounter -->
		<?php include('../includes/statCounterCode.php'); ?>
		<!-- Fine codice StatCounter -->
	</body>
</html>
<!--fine home page -->