<!--
	# 
	# MODULE DESCRIPTION:
	# esempio_30.html
	# 
	# 
	# AUTHORS:
	# Author Name		Raffaele Ficcadenti
	# Author email		raffaele.ficcadenti@gmail.com
	# 
	# 
	# HISTORY:
	# -[Date]-      -[Who]-               -[What]-
	# 06-10-2016    Ficcadenti Raffaele         
	# -
	#
-->
<?php
	date_default_timezone_set('UTC');
	print("<br>");

	if( (include("../assets/lib/my_lib.php")) == 'success' ) 
	{
		println("Include \"my_lib.php\" ok. !!!!");
		println();
	}
	else
	{
		include("../assets/lib/my_lib_test.php");
	}

	function printH($h,$str)
	{
		print("<$h>$str</$h>"); // funzione definita dall'utente
	}

	function capitolo($str) /* utilizzo di variabili statiche */
	{
		static $num_capitolo = 0;
		$num_capitolo++;
		printH("h1","$num_capitolo. $str");
		return $num_capitolo;
	}

	function paragrafo($str,$cap) /* utilizzo di variabili statiche */
	{
		static $num_paragrafo = 0;
		$num_paragrafo++;
		printH("h2","$cap.$num_paragrafo. $str");
	}

	function stampaErrorre($type,$str)
	{
		echo "<font color=\"red\">$type : $str </font><br>";
	}
	function str_bool($val)
	{
		$str="false";
		if($val>0) $str="true";
		return $str;
	}

	println("<strong>Codice sorgente: </strong>".$_SERVER["PHP_SELF"]);
	println();

?>

<hmtl>
	<head>
		<title>sorgente: esempio_30.html</title>
		<!-- Sezione per i CSS -->
		<!-- load default.css -->
		<?php
			include ("../assets/css/default.css");
		?>
	</head>
	<body>
		<?php
			date_default_timezone_set('Europe/Rome');

			showEnvironment();
			println();
			
			$secondi=2*60*60;
			$t=time();

			println("GMT time stamp=".($t-$secondi));
			println("Local time stamp=".($t));
			println();

			$date_info=getdate($t);

			foreach ($date_info as $key => $value) 
			{
				println("$key=>$value");
			}

			print("<hr>");
			println("Data di oggi: $date_info[mday]/$date_info[mon]/$date_info[year]");
			println();
			println(date("j \o\\f F Y, \a\\t g.i a",$t));
			print("<hr>");

			$t=mktime(11,0,0,8,18,2014);
			println("mktime stamp=".($t));
			println();

			$date_info=getdate($t);

			foreach ($date_info as $key => $value) 
			{
				println("$key=>$value");
			}

			print("<hr>");
			println("Data: $date_info[mday]/$date_info[mon]/$date_info[year]");
			println();
			println(date("j \o\\f F Y, \a\\t g.i a",$t));

			print("<hr>");

			$giorno=7;
			$mese=10;
			$anno=2016;
			println("checkdate($mese,$giorno,$anno) = ".str_bool(checkdate($mese,$giorno,$anno)));
		?>
		
		<?php
			$num_capitolo=capitolo("More info");
		?>
		<a href="http://php.net/manual/en/function.date.php" target="_blank">PHP date()</a><br>

	</body>
</hmtl>