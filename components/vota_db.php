<!-- 
**************************************************************************
  (c) Raffaele Ficcadenti 
  Maggio 2016
  raffaele.ficcadenti@gmail.com

  File:		voto_db.php
  Descr:    
************************************************************************** 
-->
<?php
    include ("../config/configure.php");

	$eccellente = 0;
	$buono = 0;
	$migliorabile = 0;
	$brutto = 0;
	$nocomment = 0;
	$tot = 0;
	
	if ( isset($_POST["eccellente"]) )
	{
		$eccellente = $_POST["eccellente"];
	}
	else
	{
		$eccellente=0;
	}

	if ( isset($_POST["migliorabile"]) )
	{
		$migliorabile = $_POST["migliorabile"];
	}
	else
	{
		$migliorabile=0;
	}

	if ( isset($_POST["buono"]) )
	{
		$buono = $_POST["buono"];
	}
	else
	{
		$buono=0;
	}

	if ( isset($_POST["brutto"]) )
	{
		$brutto = $_POST["brutto"];
	}
	else
	{
		$brutto=0;
	}

	if ( isset($_POST["nocomment"]) )
	{
		$nocomment = $_POST["nocomment"];
	}
	else
	{
		$nocomment=0;
	}
	
	if (isset($_POST['lang'])) 
    {
        $lang = $_POST['lang'];
        # Se la variabile lang è nulla viene selezionata di default
        # la lingua italiana (it)
        if ($lang == FALSE)
        {
            $lang = "it";
        }
    }
    else
    {
        $lang = "it";
    }
    # Includo il file di linguaggio interessato
    require("./linguaggio/{$lang}.php");

      
	// Create connection
	$conn = new mysqli($dbservername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) 
	{
		die($VOTO_ERR1 . $conn->connect_error);
	}
	else
	{
 		$query="update t_statistiche set eccellente=eccellente+$eccellente,buono=buono+$buono,migliorabile=migliorabile+$migliorabile,brutto=brutto+$brutto,nocomment=nocomment+$nocomment";

		$st=$conn->stmt_init();

		if($st->prepare($query))
		{
			$st->execute();
			echo $VOTO_OK;
		}
		else
		{
			$eccellente = 0;
			$buono = 0;
			$migliorabile = 0;
			$brutto = 0;
			$nocomment = 0;
			$tot = 0;
		}

	}
      
?>