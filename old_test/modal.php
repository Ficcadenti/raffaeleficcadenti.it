<!-- 
**************************************************************************
  (c) Raffaele Ficcadenti 
  Maggio 2016
  raffaele.ficcadenti@gmail.com

  File:   index.php
  Descr:  Classe template per home page. Include le varie sezioni.
************************************************************************** 
-->
<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" ><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" ><!--<![endif]-->
<html lang="it">
<?php
      include("components/linguaggio/it.php");
?>

 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Raffaele Ficcadenti Home Page</title>
  
  <!-- load stylesheet -->
  <?php
      /*echo file_get_contents("components/stylesheet.html");*/
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
        "message":<?php echo '"'.$COOKIE_MSG_STR.'"' ?>,
        "dismiss":<?php echo '"'.$COOKIE_BUTTON_STR.'"' ?>,
        "learnMore":<?php echo '"'.$COOKIE_READ_INFO_STR.'"' ?>,
        "link":<?php echo '"'.$local_host.'components/cookiepolicy.php"'?>,
        "theme":"light-bottom"
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
    
<div class="container">
    
   <header>
    <nav id="menu" class="dl-menuwrapper">
    <a href="#" class="menu-toggle dl-trigger"><i class="fa fa-reorder"></i></a>
      <ul class="dl-menu">
        <li>
         <a href="#home" class="scroll"><i class="fa fa-home"></i>Home</a>
        </li>
        <li><a href="#profile" class="scroll"><i class="fa fa-user"></i>Profile</a></li>
      </ul>
    </nav>

  </header>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>
<br /><br /><br /><br /><br /><br /><br />
    <br /><br /><br /><br /><br /><br /><br />
    <br /><br /><br /><br /><br /><br /><br />
    <br /><br /><br /><br /><br /><br /><br />
    <br /><br /><br /><br /><br /><br /><br />
    <br /><br /><br /><br /><br /><br /><br />
    <br /><br /><br /><br /><br /><br /><br />
    <br /><br /><br /><br /><br /><br /><br />
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div> 

    
    <!-- load scripts -->
    <?php
      $from_page="index";
      include ("components/scripts.php");
    ?>  

    <!-- go to top -->
    <a href="#0" class="cd-top">Top</a>
 </body>

</html>
