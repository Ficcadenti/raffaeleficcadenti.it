<!-- 
  (c) Raffaele Ficcadenti 
  Novembre 2016
  raffaele.ficcadenti@gmail.com
-->
<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="it" ><![endif]-->
<!--[if gt IE 8]><html class="no-js" lang="it"><![endif]-->
<html lang="it">

 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Raffaele Ficcadenti Corso </title>

  <!-- load stylesheet -->
  <?php
      $from_page="corso_js";
      include ("./stylesheet.php");
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

        # Recupero il valore di from_ref
        if (isset($_GET['from_ref'])) 
        {
            $from_ref = $_GET['from_ref'];
            # Se la variabile lang è nulla viene selezionata di default
            # la lingua italiana (it)
            if ($from_ref == FALSE)
            {
                $from_ref = "undefined";
            }
        }
        else
        {
            $from_ref = "undefined";
        }

        # Includo il file di linguaggio interessato
        require("./linguaggio/{$lang}.php");
  ?>


  <!-- respond.js per IE8 -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->
 </head>

 <body class="main">
    <!-- top link -->
    <a href="#0" class="cd-top">Top</a>

    <!-- header (navigation bar & menu) -->
    <?php
      include("./header.php");
    ?>    

    <!-- Contenuti (griglia) -->
    <div class="container">
      <section id="github-php-example">
        <div class="row">
          <div class="col-sm-12 panel-carousel">

            <h2><a href="https://github.com/Ficcadenti/js-example" target="_blank">Repository GIT - ECMAScript® (JavaScript) Example</a></h2>

          </div><!-- /.col-sm-12 -->
        </div><!-- /.row -->
      </section><!-- /section github-php-example -->

      <section id="corso_php">
        <div class="row">
          <div class="col-sm-12 panel-carousel">
            <?php
                  include("../sviluppo/js-example/index.php");
            ?>  
          </div><!-- /.col-sm-12 -->
        </div><!-- /.row -->
      </section><!-- /section paginavuota -->
    </div> <!-- /div container -->

    <br><br><br><br>
    <br><br>

    <!-- footer -->
    <?php
      include("./footer_slim.php");
    ?>

    <!-- load scripts -->
    <?php
      $from_page="paginavuota";
      include ("./scripts.php");
    ?>   

    <!-- go to top -->
    <a href="#0" class="cd-top">Top</a>
 </body>

</html>
