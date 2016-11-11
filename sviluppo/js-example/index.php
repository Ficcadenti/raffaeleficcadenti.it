<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//IT" 
http://www.w3.org/TR/html4/frameset.dtd>

<?php
	$path_sviluppo="../sviluppo/js-example/";
?>
<html>
	<head>
		<title>Corso PHP</title>
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
		<h2><strong> Repository per Lezioni/esempi Java Script </strong></h2>
		(c) 09/2016 - Raffaele Ficcadenti (raffaele.ficcadenti@gmail.com) <br>
		Ho cercato di raccogliere in questo repository, le basi della programmazione Java Script.
		Per ogni correzione o suggerimento, non esitate a scrivermi.
		Buon 'coding'.
		Raffaele.
		<p>
			<b>Prima di partire</b><br><br>
			Per gli esempi che utilizzano chiamate a MySQL dovrete installare il database di esempio con le relative tabelle,<br>
			ovviamente deve essere presente un'installazione di MySQL, e dovete conoscere la password di root.<br><br>
			Lanciare da riga di comando:<br><br>
				mysql -u <strong>root</strong> -p{<strong>password</strong>} -h {<strong>nomehost</strong>} < <strong>php-example.sql</strong><br><br>
			Lo script <strong>js-example.sql</strong> lo trovate versionato sotto la directory dumpdb.
		</p>
		<ul>
			<li><strong>LEZIONE N. 0</strong> - Per iniziare.
				<ul>
					<br>
					<li><b><a href="<?php echo $path_sviluppo?>Lazione-00 - Per iniziare/esempio_01.html" target="_blank">esempio_01.html</a></b>: Introduzione.</li>
					<li><b><a href="<?php echo $path_sviluppo?>Lazione-00 - Per iniziare/esempio_02.html" target="_blank">esempio_02.html</a></b>: L'oggetto String.</li>
					<br>
				</ul>
			</li>
		</ul>
	</body>
</html>