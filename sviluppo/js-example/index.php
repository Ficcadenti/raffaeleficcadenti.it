<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//IT" 
http://www.w3.org/TR/html4/frameset.dtd>

<?php
	$path_sviluppo="../sviluppo/js-example/";
?>

<html>
	<head>
		<title>Corso ECMAScript® (JavaScript)</title>
		<link rel="icon" href="./assets/media/favicon.png">
		<style>
			@import url('https://fonts.googleapis.com/css?family=Architects+Daughter');
			.disabled {
				pointer-events: none;
				cursor: default;
			}
			body {
			    background-image: url(../media/sfondo8.jpg);
			    background-repeat: no-repeat ;
			    background-attachment: fixed;
			    background-position: center; 
			    background-size: cover;
			    margin-bottom: 60px;
			    font-family: 'Architects Daughter', cursive;
			}
		</style>
		</style>
	</head>
	<body>
		<h2><strong> Repository per lezioni/esempi ECMAScript® (JavaScript) </strong></h2>
		(c) 09/2016 - Raffaele Ficcadenti (raffaele.ficcadenti@gmail.com) <br>
		Ho cercato di raccogliere in questo repository, le basi della programmazione ECMAScript® (JavaScript).
		Per ogni correzione o suggerimento, non esitate a scrivermi.
		Buon 'coding'.
		Raffaele.
		<!--
		<p>
			<b>Prima di partire</b><br><br>
			Per gli esempi che utilizzano chiamate a MySQL dovrete installare il database di esempio con le relative tabelle,<br>
			ovviamente deve essere presente un'installazione di MySQL, e dovete conoscere la password di root.<br><br>
			Lanciare da riga di comando:<br><br>
				mysql -u <strong>root</strong> -p{<strong>password</strong>} -h {<strong>nomehost</strong>} < <strong>js-example.sql</strong><br><br>
			Lo script <strong>js-example.sql</strong> lo trovate versionato sotto la directory dumpdb.
		</p>
		-->
		<ul>
			<li><strong>LEZIONE N. 0</strong> - Per iniziare.
				<ul>
					<br>
					<li><b><a href="<?php echo $path_sviluppo?>Lazione-00 - Per iniziare/esempio_01.html" target="_blank">esempio_01.html</a></b>: Introduzione.</li>
					<li><b><a href="<?php echo $path_sviluppo?>Lazione-00 - Per iniziare/esempio_02.html" target="_blank">esempio_02.html</a></b>: L'oggetto String.</li>
					<li><b><a href="<?php echo $path_sviluppo?>Lazione-00 - Per iniziare/esempio_03.html" target="_blank">esempio_03.html</a></b>: Operatori.</li>
					<br>
				</ul>
			</li>

			<li><strong>LEZIONE N. 1</strong> - Struttura di un programma.
				<ul>
					<br>
					<li><b><a href="<?php echo $path_sviluppo?>Lezione-01 - Struttura di un programma/esempio_04.html" target="_blank">esempio_04.html</a></b>: Esempio.</li>
					<br>
				</ul>
			</li>

			<li><strong>LEZIONE N. 2</strong> - Funzioni.
				<ul>
					<br>
					<li><b><a href="<?php echo $path_sviluppo?>Lezione-02 - Funzioni/esempio_05.html" target="_blank">esempio_05.html</a></b>: Esempio.</li>
					<br>
				</ul>
			</li>

			<li><strong>LEZIONE N. 3</strong> - Strutture Dati (Oggetti e Array).
				<ul>
					<br>
					<li><b><a href="<?php echo $path_sviluppo?>Lezione-03 - Strutture dati (Oggetti e Array)/esempio_06.html" target="_blank">esempio_06.html</a></b>: Oggetti.</li>
					<li><b><a href="<?php echo $path_sviluppo?>Lezione-03 - Strutture dati (Oggetti e Array)/esempio_07.html" target="_blank">esempio_07.html</a></b>: Correlazioni.</li>
					<li><b><a href="<?php echo $path_sviluppo?>Lezione-03 - Strutture dati (Oggetti e Array)/esempio_08.html" target="_blank">esempio_08.html</a></b>: Array.</li>
					<li><b><a href="<?php echo $path_sviluppo?>Lezione-03 - Strutture dati (Oggetti e Array)/esempio_09.html" target="_blank">esempio_09.html</a></b>: Oggetto arguments.</li>
					<li><b><a href="<?php echo $path_sviluppo?>Lezione-03 - Strutture dati (Oggetti e Array)/esempio_10.html" target="_blank">esempio_10.html</a></b>: Oggetto Math.</li>
					<li><b><a href="<?php echo $path_sviluppo?>Lezione-03 - Strutture dati (Oggetti e Array)/esempio_11.html" target="_blank">esempio_11.html</a></b>: Esercizi.</li>
					<li><b><a href="<?php echo $path_sviluppo?>Lezione-03 - Strutture dati (Oggetti e Array)/esempio_12.html" target="_blank">esempio_12.html</a></b>: Esercizi: albero binario.</li>
					<br>
				</ul>
			</li>

			<li><strong>LEZIONE N. 4</strong> - Funzioni di ordine superiore.
				<ul>
					<br>
					<li><b><a href="<?php echo $path_sviluppo?>Lezione-04 - Funzioni di ordine superiore/esempio_13.html" target="_blank">esempio_13.html</a></b>: Esempio.</li>
					<li><b><a href="<?php echo $path_sviluppo?>Lezione-04 - Funzioni di ordine superiore/esempio_14.html" target="_blank">esempio_14.html</a></b>: JSON.</li>
					<li><b><a href="<?php echo $path_sviluppo?>Lezione-04 - Funzioni di ordine superiore/esempio_15.html" target="_blank">esempio_15.html</a></b>: Oggetto this.</li>
					<li><b><a href="<?php echo $path_sviluppo?>Lezione-04 - Funzioni di ordine superiore/esempio_16.html" target="_blank">esempio_16.html</a></b>: Esercizi.</li>
					<br>
				</ul>
			</li>

			<li><strong>LEZIONE N. 5</strong> - Vita segrata degli oggetti.
				<ul>
					<br>
					<li><b><a href="<?php echo $path_sviluppo?>Lezione-05 - Vita segreta degli oggetti/esempio_17.html" target="_blank">esempio_17.html</a></b>: Protptipi.</li>
					<li><b><a href="<?php echo $path_sviluppo?>Lezione-05 - Vita segreta degli oggetti/esempio_18.html" target="_blank">esempio_18.html</a></b>: Costruttori.</li>
					<li><b><a href="<?php echo $path_sviluppo?>Lezione-05 - Vita segreta degli oggetti/esempio_19.html" target="_blank">esempio_19.html</a></b>: ECMAScript 6 - Definire un oggetto con 'class'.</li>
					<li><b><a href="<?php echo $path_sviluppo?>Lezione-05 - Vita segreta degli oggetti/esempio_20.html" target="_blank">esempio_20.html</a></b>: Reflection.</li>
					<li><b><a href="<?php echo $path_sviluppo?>Lezione-05 - Vita segreta degli oggetti/esempio_21.html" target="_blank">esempio_21.html</a></b>: Serializzare oggetti.</li>
					<li><b><a href="<?php echo $path_sviluppo?>Lezione-05 - Vita segreta degli oggetti/esempio_22.html" target="_blank">esempio_22.html</a></b>: Esercizi.</li>
					<br>
				</ul>
			</li>

			<li><strong>LEZIONE N. 6</strong> - Gestione degli errori.
				<ul>
					<br>
					<li><b><a href="<?php echo $path_sviluppo?>Lezione-06 - Gestione degli errori/esempio_23.html" target="_blank">esempio_23.html</a></b>: Eccezioni.</li>
					<li><b><a href="<?php echo $path_sviluppo?>Lezione-06 - Gestione degli errori/esempio_23a.html" target="_blank">esempio_23a.html</a></b>: Usiamo strict.</li>
					<li><b><a href="<?php echo $path_sviluppo?>Lezione-06 - Gestione degli errori/esempio_23b.html" target="_blank">esempio_23b.html</a></b>: Asserzioni.</li>
					<li><b><a href="<?php echo $path_sviluppo?>Lezione-06 - Gestione degli errori/esempio_23c.html" target="_blank">esempio_23c.html</a></b>: Esercizi.</li>
					<br>
				</ul>
			</li>

			<li><strong>LEZIONE N. 7</strong> - Vita Elettronica.
				<ul>
					<br>
					<li><b><a href="<?php echo $path_sviluppo?>Lezione-07 - Vita elettronica/esempio_24.html" target="_blank">esempio_24.html</a></b>: Esempio.</li>
					<br>
				</ul>
			</li>

			<li><strong>LEZIONE N. 8</strong> - Espressioni regolari.
				<ul>
					<br>
					<li><b><a href="<?php echo $path_sviluppo?>Lezione-08 - Espressioni regolari/esempio_25.html" target="_blank">esempio_25.html</a></b>: Iniziamo.</li>
					<li><b><a href="<?php echo $path_sviluppo?>Lezione-08 - Espressioni regolari/esempio_26.html" target="_blank">esempio_26.html</a></b>: Modificatori.</li>
					<li><b><a href="<?php echo $path_sviluppo?>Lezione-08 - Espressioni regolari/esempio_27.html" target="_blank">esempio_27.html</a></b>: Analizzare un file INI.</li>
					<li><b><a href="<?php echo $path_sviluppo?>Lezione-08 - Espressioni regolari/esempio_28.html" target="_blank">esempio_28.html</a></b>: Esercizi.</li>
					<br>
				</ul>
			</li>

			<li><strong>LEZIONE N. 9</strong> - Moduli.
				<ul>
					<br>
					<li><b><a href="<?php echo $path_sviluppo?>Lezione-09 - Moduli/esempio_29.html" target="_blank">esempio_29.html</a></b>: Esempio.</li>
					<br>
				</ul>
			</li>

		</ul>
	</body>
</html>