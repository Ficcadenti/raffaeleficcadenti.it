<!-- 
  (c) Raffaele Ficcadenti 
  Maggio 2016
  raffaele.ficcadenti@gmail.com
-->
<?php

	if (strpos($from_page, 'cookie') !== false) 
	{
	    	$local_host="../";
	}
	else if (strpos($from_page, 'admin') !== false) 
	{
	    	$local_host="../";
	}
	else if (strpos($from_page, 'index') !== false) 
	{
	    	$local_host="./";
	}
	else if (strpos($from_page, 'paginavuota') !== false) 
	{
	    	$local_host="../";
	}

	$_scripts=file_get_contents($local_host."components/scripts.html");
	$_scripts=str_replace("#_host", $local_host , $_scripts); 

	include ($local_host."config/configure.php");

	if (strpos($from_page, 'cookie') !== false) 
	{
	    	$_scripts=str_replace("cookieconsent.min.js", "none.js" , $_scripts); 
	}
	else if (strpos($from_page, 'admin') !== false) 
	{
	    	$_scripts=str_replace("cookieconsent.min.js", "none.js" , $_scripts); 
	}
	


	echo $_scripts;
?>
