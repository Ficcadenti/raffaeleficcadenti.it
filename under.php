<!-- 
**************************************************************************
  (c) Raffaele Ficcadenti 
  Maggio 2016
  raffaele.ficcadenti@gmail.com

  File:   under.php
  Descr:  Classe temporanea per lavori in corso :)    
************************************************************************** 
-->
<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" ><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" ><!--<![endif]-->
<html lang="it">

 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Raffaele Ficcadenti Lavori in corso</title>
  
  <!-- load stylesheet -->
  <?php
      $from_page="index";
      include ("components/stylesheet.php");
  ?>

  <?php
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
        require("components/linguaggio/{$lang}.php");
  ?>


  <!-- respond.js per IE8 -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->

  <!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
  <script type="text/javascript">
      window.cookieconsent_options = {
        "message":  <?php echo '"'.$COOKIE_MSG_STR.'"' ?>,
        "dismiss":  <?php echo '"'.$COOKIE_BUTTON_STR.'"' ?>,
        "learnMore":<?php echo '"'.$COOKIE_READ_INFO_STR.'"' ?>,
        "link":     <?php echo '"'.$local_host.'components/cookiepolicy.php"'?>,
        "theme":    "light-bottom"
      };
  </script>
  <!-- End Cookie Consent plugin -->

 </head>

 <body class="main">
    <!-- top link -->
    <a href="#0" class="cd-top">Top</a>

    <!-- header (navigation bar & menu) -->
    <?php
      include("components/header.php");
    ?>

    <!-- slider -->
    <?php
      include("components/slider.php");
    ?>   

    <br><br>
   
    <!-- Contenuti (griglia) -->
    <div class="container">

      <!-- under costruction -->
      <?php
        include("components/undercostruction.php");
      ?>

      
      <br><br><br><br>
      <br><br><br><br>

    </div> <!-- /div container -->

    <!-- footer -->
    <?php
      include("components/footer_slim.php");
    ?>

    <!-- load scripts -->
    <?php
      $from_page="index";
      include ("components/scripts.php");
    ?>  

    <!-- go to top -->
    <a href="#0" class="cd-top">Top</a>
 </body>

</html>
