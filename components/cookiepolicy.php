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
  <title>Raffaele Ficcadenti Home Page</title>
  
  <!-- load stylesheet -->
  <?php
      /*echo file_get_contents("components/stylesheet.html");*/
      $from_page="cookie";
      include ("../components/stylesheet.php");
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
        require("../components/linguaggio/{$lang}.php");
  ?>

  <!-- respond.js per IE8 -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->
  
 </head>

 <body>
   <!-- top link -->
    <a href="#0" class="cd-top">Top</a>

    <!-- header (navigation bar & menu) -->
    <?php
      include ("../components/header.php");
    ?>

<br><br><br><br>

<!--
<section>
  <nav>
    <div class="breadcrumb pull-left">
      <a href="#" class="active">Browse</a>
      <a href="#">Compare</a>
      <a href="#">Order Confirmation</a>
      <a href="#">Checkout</a>
    </div>
  </nav>
</section>
-->
    <!-- Contenuti (griglia) -->
    <div class="container">
      <section id="cookieinfo">
        <div class="row">
          <div class="col-sm-12 panel-carousel">

            <?php
              if($lang=='it')
              {
                  echo file_get_contents("../components/linguaggio/cookiepolicy_it.html");
              }
              else if($lang=='en')
              {
                  echo file_get_contents("../components/linguaggio/cookiepolicy_en.html"); 
              }
            ?>

          </div><!-- /.col-sm-12 -->
        </div><!-- /.row -->
      </section><!-- /section cookieinfo -->
      

    </div> <!-- /div container -->

    <br><br><br><br><br>
   <!-- footer -->
    <?php
      include("../components/footer_slim.php");
    ?>

    <!-- load scripts -->
    <?php
      $from_page="cookie";
      include ("../components/scripts.php");
    ?>  

 </body>

</html>