<!--
	# 
	# MODULE DESCRIPTION:
	# esempio_36.html
	# 
	# 
	# AUTHORS:
	# Author Name		Raffaele Ficcadenti
	# Author email		raffaele.ficcadenti@gmail.com
	# 
	# 
	# HISTORY:
	# -[Date]-      -[Who]-               -[What]-
	# 13-10-2016    Ficcadenti Raffaele         
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

	$PARAMS=array();
	
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$PARAMS=$_GET;
	}
	else if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$PARAMS=$_POST;
	}

	println("<strong>Codice sorgente: </strong>".$_SERVER["PHP_SELF"]);
	println();

	function stampaArray($str_serach,$str,$arr)
	{
		printf("Stringa di partenza : %s<br>",$str);
		printf("Espressione regolare: %s<br>",$str_serach);
		printf("Risultato: <br>");
		foreach ($arr as $key => $value) 
		{
			printf("-------------------------------<br>");
			if(is_array($value))
			{
				foreach ($value as $key1 => $value1) 
				{
					printf("Elemento[%d][%d] => %s<br>",$key,$key1,$value1);		
				}
			}
			else
			{
				printf("Elemento[%d] => %s<br>",$key,$value);
			}
			printf("-------------------------------<br>");
		}
		println();
	}

?>

<hmtl>
	<head>
		<title>sorgente: esempio_36.html</title>
		<!-- Sezione per i CSS -->
		<!-- load default.css -->
		<?php
			include ("../assets/css/default.css");
		?>
	</head>
	<body>
		<?php
			
			$num_capitolo=capitolo("Espressioni regolari PCRE");
			print("<div id=\"m70\">");
			$str="Raffaele aFiccadenti Ficcadenti Ficcadenti";
			
			$arr=array();

			$str_serach="/a.e/";
			preg_match($str_serach,$str,$arr);
			stampaArray($str_serach,$str,$arr);

			$str_serach="/c.d/";
			preg_match($str_serach,$str,$arr);
			stampaArray($str_serach,$str,$arr);

			$str_serach="/R.*i/";
			preg_match($str_serach,$str,$arr);
			stampaArray($str_serach,$str,$arr);

			$str_serach="/R.*?i/";
			preg_match($str_serach,$str,$arr);
			stampaArray($str_serach,$str,$arr);

			$str_serach="/f.+i/";
			preg_match($str_serach,$str,$arr);
			stampaArray($str_serach,$str,$arr);

			$str_serach="/R\w+e/";
			preg_match($str_serach,$str,$arr);
			stampaArray($str_serach,$str,$arr);

			$str_serach="/F\w+i/";
			preg_match($str_serach,$str,$arr);
			stampaArray($str_serach,$str,$arr);

			$str_serach="/\bF\w+i\b/";
			preg_match_all($str_serach,$str,$arr);
			stampaArray($str_serach,$str,$arr);

			$str="Raffaele 14-08-1976, Valeria 21-05-1976, Sofia 26-10-2007";
			$str_serach="/\d+-\d+-\d+/";
			preg_match_all($str_serach,$str,$arr);
			stampaArray($str_serach,$str,$arr);

			
			$str_serach="/(\d+)-(\d+)-(\d+)/";
			preg_match_all($str_serach,$str,$arr);
			stampaArray($str_serach,$str,$arr);

			$str_serach="|(\d+)-(\d+-\d+)|";
			preg_match_all($str_serach,$str,$arr);
			stampaArray($str_serach,$str,$arr);

			$str="Raffaele aFiccadenti Ficcadenti Ficcadenti";
			$str_serach="/\bF\w+i\b/";
			$t=preg_replace($str_serach,"FICCADENI",$str);
			printf("Replace '%s' in '%s'<br>",$str,$t);
			print("</div>");
			
			$num_capitolo=capitolo("info");
		?>

		<a href="http://localhost/php-example/Lezione-16%20-%20Le%20espressioni%20regolari/PCRE1.php" target="_blank">PCRE tabella n1</a><br>
		<a href="http://localhost/php-example/Lezione-16%20-%20Le%20espressioni%20regolari/PCRE2.php" target="_blank">PCRE tabella n2</a><br>
		<a href="http://php.net/manual/en/function.preg-match.php" target="_blank">preg_match()</a><br>
		<a href="http://www.w3schools.com/php/" target="_blank">w3schools<span class="dotcom">.com</span></a><br>
	</body>
</hmtl>