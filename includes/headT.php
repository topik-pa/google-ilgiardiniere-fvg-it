<head>
	<title><?php echo $titolo_pagina; ?></title>
	
	<meta name="author" content="Marco Pavan" />
	<meta http-equiv="Content-Type" content="application/xhtml+xml" />
	<meta name="robots" content="index,follow" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<?php
		switch($pagina) {
			
			case 'home':
					echo '<meta name="keywords" content="modotti, giardiniere, giardinaggio, abbattimento alberi, fresatura radici, udine, trieste, friuli, codroipo, tavagnacco" />';
					echo "\n";
					echo '<meta name="description" content="Giardiniere per abbattimento tecnico alberi con fresatura radici a Udine a Trieste ed in tutto il Friuli-Venezia Giulia. Giulio Modotti opera anche a Codroipo, Tavagnacco" />';
					echo "\n";
					echo '<meta name="subject" content="Il giardiniere Giulio Modotti opera nella provincia di Udine e Trieste ed in tutto il Friuli per lavori di giardinaggio. Manutenzione alberature stradali, raccolta legname, piattaforma aerea, trasporto con gru, lottizzazioni boschive" />';
					echo "\n";
			break;

			case 'manutenzione_terreni':
					echo '<meta name="keywords" content=" manutenzione, terreni, cura, eliminazione, arbusti, sterpaglie, stoppie, frasche, cespugli, siepi, residui di coltivazione, detriti" />';
					echo "\n";
					echo '<meta name="description" content="Manutenzione e cura di terreni e giardini a Udine e Trieste. Eliminazione arbusti e sterpaglie." />';
					echo "\n";
					echo '<meta name="subject" content="Giulio Modotti: Manutenzione e cura di terreni e giardini a Udine e Trieste. Eliminazione arbusti e sterpaglie." />';
					echo "\n";
			break;

			case 'potature_tecniche':
					echo '<meta name="keywords" content="abbattimenti, potature, alberi, piante, fresatura, radici" />';
					echo "\n";
					echo '<meta name="description" content="Abbattimenti e potature tecniche di alberi e piante con fresatura radici" />';
					echo "\n";
					echo '<meta name="subject" content="Giulio Modotti: abbattimenti e potature tecniche di alberi e piante con fresatura radici" />';
					echo "\n";
			break;

			case 'movimento_terra':
					echo '<meta name="keywords" content="movimento, terra, semine, fresatura, livellatura, terreni, Udine, Trieste, Friuli" />';
					echo "\n";
					echo '<meta name="description" content="Giardiniere per movimento terra e semina terreni con fresatura radici e livellatura" />';
					echo "\n";
					echo '<meta name="subject" content="Giulio Modotti: giardiniere per movimento terra e semina terreni con fresatura radici e livellatura" />';
					echo "\n";
			break;				
			
			case 'giardiniere_privati':
					echo '<meta name="keywords" content="giardiniere, udine, friuli, manutenzione, verde, alberi, piante, giardino, prato, siepi, potature, abbattimento, alberi, consulenza, giardinaggio" />';
					echo "\n";
					echo '<meta name="description" content="Giardiniere per la manutenzione del alberi, piante, giardino, prato e tutto il vostro verde" />';
					echo "\n";
					echo '<meta name="subject" content="Giulio Modotti: giardiniere per la manutenzione del alberi, piante, giardino, prato e tutto il vostro verde" />';
					echo "\n";
			break;

			case 'giardiniere_enti_pubblici':
					echo '<meta name="keywords" content="Giardiniere, udine, trieste, enti pubblici, comuni, amministrazioni pubbliche" />';
					echo "\n";
					echo '<meta name="description" content="Giardiniere a Udine e Trieste per gli enti pubblici, comuni, amministrazioni pubbliche" />';
					echo "\n";
					echo '<meta name="subject" content="Giardiniere per gli enti pubblici, comuni, amministrazioni pubbliche" />';
					echo "\n";
			break;
			
			case 'giardiniere_trieste':
					echo '<meta name="keywords" content="giardiniere, Trieste, giardinaggio, provincia triestina, Gorizia, Udine" />';
					echo "\n";
					echo '<meta name="description" content="Giardiniere a Trieste. Giardinaggio nella provincia triestina, di Gorizia e di Udine" />';
					echo "\n";
					echo '<meta name="subject" content="Giardiniere a Trieste. Giardinaggio nella provincia triestina, di Gorizia e di Udine" />';
					echo "\n";
			break;

			case 'contatti':
					echo '<meta name="keywords" content="Giardinaggio, manutenzione giardino, Udine, Friuli-Venezia Giulia, contatti, email, telefono" />';
					echo "\n";
					echo '<meta name="description" content="Giardinaggio e manutenzione giardino a Udine (Friuli-Venezia Giulia) - Contattami" />';
					echo "\n";
					echo '<meta name="subject" content="Giardinaggio e manutenzione giardino a Udine (Friuli-Venezia Giulia) - Contattami" />';
					echo "\n";
			break;			
			
			default: //gallery - 
					echo '<meta name="keywords" content="giardiniere, udine, friuli, perito agrario, potature, siepi, alberi, manutenzione, giardino, siepi, alberi, fiori, consulenza, fitosanitaria" />';
					echo "\n";
					echo '<meta name="description" content="Giardiniere a Udine in Friuli. Giulio Modotti (perito agrario) esegue lavori di potatura, eliminazione processionaria e manutenzione di alberi, fiori, siepi, e di tutto il giardino. Chiama per avere un preventivo gratuito." />';
					echo "\n";
					echo '<meta name="subject" content="Giulio Modotti: perito agrario che esegue lavori di giardinaggio a Udine ed in tutto il Friuli. Trattamenti fitosanitari, eliminazione processionaria, manutenzione e consulenza di giardini, siepi, alberi e fiori." />';
					echo "\n";
			break;
		}
	?>

	<meta http-equiv="Content-Script-Type" content="text/javascript" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<link rel="shortcut icon" href="/img/favicon.png"  />

	<script src="/javascript/jquery-2.1.1.min.js" type="text/javascript"></script>

	<link rel="stylesheet" type="text/css" href="/style/style.css" />
	
	<!-- bxSlider Javascript file -->
	<script src="/javascript/jquery.bxslider.min.js"></script>
	<!-- bxSlider CSS file -->
	<link href="/style/jquery.bxslider.css" rel="stylesheet" />
	
	<script src="/javascript/site.js"></script>
	
	<!-- Regole aggiuntive per browser Microsoft -->
	<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="/style/stile-ie.css" />
	<![endif]-->
	
</head>