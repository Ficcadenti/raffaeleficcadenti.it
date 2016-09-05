<!-- 
  (c) Raffaele Ficcadenti 
  Maggio 2016
  raffaele.ficcadenti@gmail.com
-->
<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" ><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" ><!--<![endif]-->
<html>

 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Raffaele Ficcadenti Administrator</title>
  
  <!-- load stylesheet -->
  <?php
      $from_page="admin";
      include ("../components/stylesheet.php");
      include ("../config/configure.php");
      
      # Recupero il valore di lang
      if (isset($_GET['lang'])) 
      {
          $lang = $_GET['lang'];
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
      require("../components/linguaggio/{$lang}.php");

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
  
  ?>

  

  <!-- respond.js per IE8 -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->
  <style type="text/css">
    div#main { height: 150px; width:400px; margin-right:auto; margin-left:auto; margin-top: 5%; text-align: center;} 
    .header-sezione
    {
      display: none;
    }
  </style>

 </head>

 <body>
   
    <!-- header (navigation bar & menu) -->
    <?php
      include($local_host."/components/header.php");
    ?>

    <div id="main">
  
        <div class="alert alert-success" role="alert" >
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <span class="sr-only"></span>
            <p>
                <?php echo $ADMIN_BODY_STR; ?>
            </p>
            <p>
                <?php echo $ADMIN_NAVIGA_STR; ?>
            </p>
            <span><a href='mailto:raffaele.ficcadenti@gmail.com'><?php echo $ADMIN_SCRIVIMI_STR; ?></a></span>

            <!-- qrcode -->
            <?php
              include($local_host."/components/qrcode.php");
            ?>

            <br><br><br>
        </div>

    </div> <!-- /div main -->

   
    <!-- load scripts -->
    <?php
      $from_page="admin";
      include ($local_host."/components/scripts.php");
    ?>  

 </body>

</html>
