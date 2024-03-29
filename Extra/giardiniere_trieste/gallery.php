<!-- gallery.php -->
<!-- Image gallery dinamica (o quasi...) -->
<!-- Autore: Marco Pavan - pavan.marco@email.it-->
<!-- Data: 22 sett 2010 -->
<?php
//Impostazione delle variabili principali
$pagina = $_GET[pagina];	//pagina di provenienza
$img = $_GET[img];		//immagine da visualizzare
$numero_immagini = 2;		//numero totale delle immagini nella pagina (da impostare ad ogni pagina)

if($pagina=="index") {		//la pagina index.php risiede nella cartella principale (non in una sottocartella): deve essere trattata diversamente dalle altre
	$torna = "index.php"; 
}
else {
	$torna = $pagina . ".php";
}
$next = "\"gallery.php?pagina=" . $pagina . "&img=" . ($img+1) . "\"";		//percorso del link per l'immagine successiva
$prev = "\"gallery.php?pagina=" . $pagina . "&img=" . ($img-1) . "\"";		//percorso del link per l'immagine precedente
$percorso_img = "img/" . $img . ".jpg";		//percorso della immagine all'interno della sottocartella
?>

<!-- La pagina da visualizzare -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
<title>Giardiniere Udine _ Friuli - Gallery</title>
<meta name="author" content="Marco Pavan" />
<meta http-equiv="Content-Type" content="application/xhtml+xml" />
<meta name="keywords" content="giardiniere, udine, friuli" />
<meta name="description" content="Giardiniere a Udine, in Friuli. Foto gallery del sito Web" />
<meta name="subject" content="Galleria fotografica del sito Web di Giulio Modotti, giardiniere a Udine - Friuli" />
<style type="text/css">
body {
	background-color: #FFFBDF;
	font-family: sans-serif;
	margin: 2em 4em 2em 4em; 
	}
h1 {
	text-align: center;
	}
#img {
	text-align: center;
	}
#torna {
	text-align: center;
	}
#prox {
	float: right;
	}
#prev {
	float: left;
	}
img {
	border: none;
}	
</style>
</head>
<body>
<h1>Gallery sito web - Il giardiniere Udine</h1>
<!-- Giardiniere a Udine, in Friuli. Manutenzione verde -->
<p id="torna"><a href="<?php echo $torna;?>" title="Il giardiniere a Udine - Friuli: torna alla pagina iniziale">Torna indietro</a></p>
<?php 
if(($img+1)<=$numero_immagini) {	//Se non si tratta dell'ultima immagine, mostro il link per visualizzare l'immagine successiva
	echo '<p id="prox"><a href=' . $next . 'title="Il giardiniere a Udine - Friuli: vai alla immagine successiva">Successiva &gt;&gt;</a></p>';
}
else {
}
if(($img-1)>0) {
	echo '<p id="prev"><a href=' . $prev . 'title="Il giardiniere a Udine - Friuli: vai alla immagine precedente">&lt;&lt; Precedente</a></p>';	//Se non si tratta della prima immagine, mostro il link per visualizzare l'immagine precedente
}
else {
}
?>
<p id="img"><a title="Il giardiniere a Udine - Friuli: vai alla prossima immagine" href=<?php if(($img+1)<=$numero_immagini) echo $next;?>><img src="<?php echo $percorso_img;?>" alt="Giardiniere Giulio Modotti a Udine - Friuli: lavori di manutenzione verde in un giardino privato" /></p>
</body>
</html>