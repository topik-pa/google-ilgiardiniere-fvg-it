<!-- Tag head -->
		<!-- Autore: Marco Pavan - pavan.marco@email.it -->
		<!-- Data: 28 sett 2010 -->		
		<!-- Titolo pagina -->
		<title><?php echo $titolo_pagina; ?></title> <!-- il titolo della pagina viene impostato dinamicamente -->

		<!-- Autore e tipologia contenuto -->
		<meta name="author" content="Marco Pavan" />
		<meta http-equiv="Content-Type" content="application/xhtml+xml" />

		<!-- Metatag -->
		<meta name="msvalidate.01" content="000000000000000000000" />
		<meta name="robots" content="index,follow" />
		
		<!-- Inserimento metatag specifici per pagina -->
		<?php
			switch($pagina) {
				case 'processionaria':
						echo '<meta name="keywords" content="processionaria,  malattie, piante, pino, quercia, processionarie, endoterapia" />';
						echo "\n";		
						echo '<meta name="description" content="La processionaria (malattie delle piante): tipologia di insetto, cosa fa, come riconoscerla, come debellarla." />';
						echo "\n";
						echo '<meta name="subject" content="Giulio Modotti: perito agrario che esegue lavori di giardinaggio a Udine ed in tutto il Friuli. Trattamenti fitosanitari, eliminazione processionaria, cura malattie delle piante, manutenzione e consulenza di giardini, siepi, alberi e fiori. Pagina sulla processionaria" />';
						echo "\n";
				break;
				
				case 'home':
						echo '<meta name="keywords" content="giardiniere, udine, friuli, manutenzione, verde, alberi, piante, giardino, prato, siepi, potature, abbattimento, alberi, consulenza, giardinaggio, trattorino, trinciatura sterpaglia, boschette ,cura terreni abbandonati, movimentazione terra e ghiaia" />';
						echo "\n";
						echo '<meta name="description" content="Giardiniere a Udine. Manutenzione verde, giardini, siepi, prati e piante da giardino. Potatura e abbattimento alberi. Opero in tutto il Friuli." />';
						echo "\n";
						echo '<meta name="subject" content="Il giardiniere Giulio opera a Udine ed in tutto il Friuli per lavori di giardinaggio, manutenzione giardini, manutenzione siepi, manutenzione alberi, manutenzione piante, manutenzione prati, potatura alberi, potatura siepi, abbattimento alberi" />';
						echo "\n";
				break;
				
				case 'manutenzione_terreni':
						echo '<meta name="keywords" content="manutenzione, terreni, cura, eliminazione, arbusti, sterpaglie, stoppie, frasche, cespugli, siepi, residui di coltivazione, detriti" />';
						echo "\n";
						echo '<meta name="description" content="Manutenzione e cura terreni da sterpaglie, stoppie, siepi, cespugli, arbusti e detriti. Giardiniere a Udine e provincia" />';
						echo "\n";
						echo '<meta name="subject" content="Il giardiniere Giulio opera a Udine ed in tutto il Friuli per lavori di manutenzione e cura terreni da sterpaglie, stoppie, siepi, cespugli, arbusti e detriti." />';
						echo "\n";
				break;				
				
				default:
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
		<link rel="shortcut icon" href="img/favicon.png"  />

		<!-- JavaScript -->
		<script type="text/javascript" src="/javascript/script.js"></script>
		<script type="text/javascript">
			var bookmarkurl="http://www.tuosito.it";
			var bookmarktitle="Descrizione Tuo Sito";
			function preferiti(){
				if (document.all)
					window.external.AddFavorite(bookmarkurl,bookmarktitle)
			}
		</script>

		<!-- Regole di stile -->
		<!--<link rel="stylesheet" type="text/css" href="/style/stile.css" media="screen" title="stile" />-->
		<link rel="stylesheet" type="text/css" href="./style/stile1.css" title="stile_1"/>
		<!--<link rel="stylesheet" type="text/css" href="/style/stile2.css" title="stile_2"/>-->
		
		<!-- Regole aggiuntive per browser Microsoft -->
		<!--[if IE]>
		<link rel="stylesheet" type="text/css" href="/style/stile-ie.css" />
		<![endif]-->
		
		<!-- Regole di stile specifiche per ogni pagina -->
		<style type="text/css"><?php 
				switch($pagina) {
					case 'home':
						echo 'h1 { color: black; } #home {font-weight: bold;}';
					break;
					case 'chi_siamo':
						echo 'h1 { color: fuchsia; } #chi_sono {font-weight: bold;}';
					break;
					case 'manutenzione_terreni':
						echo 'h1 { color: aqua; } #manutenzione_terreni {font-weight: bold;}';
					break;
					case 'gallery':
						echo 'h1 { color: blue; } #gallery {font-weight: bold;}';
					break;					
					case 'contatti':
						echo 'h1 { color: gray; } #contatti {font-weight: bold;}';
					break;
					case 'contatti':
						echo 'h1 { color: green; }';
					break;
					case 'il_luogo':
						echo 'h1 { color: lime; }';
					break;
					case 'mappa':
						echo 'h1 { color: maroon; }';
					break;
					case 'news':
						echo 'h1 { color: navy; }';
					break;
					case 'siti_partner':
						echo 'h1 { color: olive; }';
					break;
					default:
						echo '';
					break;
						}
				?>
		</style>
		<!-- fine tag head -->
