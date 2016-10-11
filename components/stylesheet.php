<!-- 
  (c) Raffaele Ficcadenti 
  Maggio 2016
  raffaele.ficcadenti@gmail.com
-->
<?php

	/*
	$_host_global      = "./";
	$_host_admin       = "../";
	$_host_cookie      = "../";
	$_host_paginavuota = "../";
	*/

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
	else if (strpos($from_page, 'corso_php') !== false) 
	{
	    	$local_host="../";
	}
	else /* DEFAULT */
	{
		$local_host="./";
	}
	
	include ($local_host."config/configure.php");

	$_stylesheet=file_get_contents($local_host."components/stylesheet.html");
	$_stylesheet=str_replace("#_host", $local_host , $_stylesheet); 

	echo $_stylesheet;
?>