<!-- Pagina: Contatti -->
<!-- Autore: Marco Pavan - pavan.marco@email.it -->
<!-- Data: 28 sett 2010 -->
<?php
//Imposto due variabili di uso generale
$titolo_pagina = "Giardinaggio e manutenzione giardino a Udine (Friuli-Venezia Giulia)";
$pagina = "contatti";
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
					<h3>Contatti</h3>
					<p><br /><br />Opero nella zona di Udine ed in tutta la regione Friuli Venezia Giulia. <br />Contattami, per fissare un appuntamento o per richiedere maggiorni informazioni, al seguente recapito telefonico.</p>
					<p><br /><br /><strong>Giulio Modotti</strong></p>	
						<p>Cell: <strong class="tel">+39 340 1733526</strong></p><br />
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
				<!-- Una tabella -->
				
				<!-- Footer della pagina-->	
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