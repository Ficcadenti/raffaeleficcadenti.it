<?php
  /*
  (c) Raffaele Ficcadenti 
  Maggio 2016
  raffaele.ficcadenti@gmail.com

  File:   result_db.php
  Descr:  Classe contenente per la connessione mysql al db per la visualizazione delle statistiche.
  */

      include ("../config/configure.php");
      $eccellente = 0;
      $buono = 0;
      $migliorabile = 0;
      $brutto = 0;
      $nocomment = 0;
      $tot = 0;
      $value = null;


      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) 
      {
          die("Connection failed: " . $conn->connect_error);
      }

      $sql = "SELECT eccellente, buono, migliorabile, brutto, nocomment FROM t_statistiche";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) 
      {
          // output data of each row
          while($row = $result->fetch_assoc()) 
          {

              $eccellente = $row["eccellente"];
              $buono = $row["buono"];
              $migliorabile = $row["migliorabile"];
              $brutto = $row["brutto"];
              $nocomment = $row["nocomment"];

              $tot=$eccellente+$buono+$migliorabile+$brutto+$nocomment;

              if($tot!=0)
              {
                  $eccellente=($eccellente /$tot)*100;
                  $buono=($buono /$tot)*100;
                  $migliorabile=($migliorabile /$tot)*100;
                  $brutto=($brutto /$tot)*100;
                  $nocomment=($nocomment /$tot)*100;  
              }
              $value = array(	'eccellente' => ($eccellente), 
              					'buono' => ($buono), 
              					'migliorabile' => ($migliorabile),
              					'brutto' => ($brutto),
              					'nocomment' => ($nocomment),
              					'tot' => ($tot));
          }
      }
      else 
      {
          echo "DB non defined!!!!!";
      }

	    echo json_encode($value,JSON_PRETTY_PRINT);

      $conn->close();
      
?>