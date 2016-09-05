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

              <ul class="media-list">
                <li class="media">
                 <a href="http://www.apache.org" target="_blank"><img class="media-object pull-left img-thumbnail img-responsive" hspace="15" width="200" height="40" src="../media/link/apache.png"></a>
                 <div class="media-body">
                 <h5 class="media-heading"><span><strong>Apache HTTP Server</strong></span></h5>
                 <p>Apache HTTP Server, o più comunemente Apache, è il nome della piattaforma server Web sviluppata dalla Apache Software Foundation.
È la piattaforma server Web modulare più diffusa, in grado di operare su una grande varietà di sistemi operativi, tra cui UNIX/Linux, Microsoft Windows e OpenVMS.
La base di partenza per applicazioni WEB.</p>    
                 </div>
                </li>

                <li class="media">
                 <a href="http://www.php.net" target="_blank"><img class="media-object pull-left img-thumbnail img-responsive" hspace="15" width="200" height="40" src="../media/link/php.png" ></a>
                 <div class="media-body">
                 <h5 class="media-heading"><span> <strong>PHP</strong></span></h5>
                 <p>PHP (acronimo ricorsivo di "PHP: Hypertext Preprocessor", preprocessore di ipertesti; originariamente acronimo di "Personal Home Page") è un linguaggio di scripting interpretato, originariamente concepito per la programmazione di pagine web dinamiche. 
L'interprete PHP è un software libero distribuito sotto la PHP License. Attualmente è principalmente utilizzato per sviluppare applicazioni web lato server, 
ma può essere usato anche per scrivere script a riga di comando o applicazioni stand-alone con interfaccia grafica.</p>    
                 </div>
                </li>

                <li class="media">
                 <a href="http://www.mysql.it" target="_blank"><img class="media-object pull-left img-thumbnail img-responsive" hspace="15" width="200" height="40" src="../media/link/mysql.png" ></a>
                 <div class="media-body">
                 <h5 class="media-heading"><span> <strong>MySQL</strong></span></h5>
                 <p>MySQL o Oracle MySQL è un Relational database management system (RDBMS) composto da un client a riga di comando e un server. 
Entrambi i software sono disponibili sia per sistemi Unix e Unix-like che per Windows; le piattaforme principali di riferimento sono Linux e Oracle Solaris.
I sistemi e i linguaggi di programmazione che supportano MySQL sono molto numerosi: ODBC, Java, Mono, .NET, PHP, Python e molti altri.</p>    
                 </div>
                </li>

                <li class="media">
                 <a href="http://www.mysql.it" target="_blank"><img class="media-object pull-left img-thumbnail img-responsive" hspace="15" width="150" height="40" src="../media/link/mongodb.png" ></a>
                 <div class="media-body">
                 <h5 class="media-heading"><span> <strong>MongoDB</strong></span></h5>
                 <p></p>    
                 </div>
                </li>

                <li class="media">
                 <a href="http://www.getbootstrap.com/" target="_blank"><img class="media-object pull-left img-thumbnail img-responsive" hspace="15" width="150" height="150" src="../media/link/bootstrap.png" ></a>
                 <div class="media-body">
                 <h5 class="media-heading"><span> <strong>Bootstrap</strong></span></h5>
                 <p>Bootstrap è una raccolta di strumenti liberi per la creazione di siti e applicazioni per il Web. Essa contiene modelli di progettazione basati su HTML e CSS, 
sia per la tipografia, che per le varie componenti dell'interfaccia, come moduli, pulsanti e navigazione, così come alcune estensioni opzionali di JavaScript.</p>    
                 </div>
                </li>

                <li class="media">
                 <a href="https://www.java.com" target="_blank"><img class="media-object pull-left img-thumbnail img-responsive" hspace="15" width="150" height="150" src="../media/link/java.jpg" ></a>
                 <div class="media-body">
                 <h5 class="media-heading"><span> <strong>Java</strong></span></h5>
                 <p>In informatica Java è un linguaggio di programmazione orientato agli oggetti a tipizzazione statica, 
specificatamente progettato per essere il più possibile indipendente dalla piattaforma di esecuzione.</p>    
                 </div>
                </li>

                <li class="media">
                 <a href="https://www.java.com" target="_blank"><img class="media-object pull-left img-thumbnail img-responsive" hspace="15" width="150" height="150" src="../media/link/javascript.png" ></a>
                 <div class="media-body">
                 <h5 class="media-heading"><span> <strong>JavaScript</strong></span></h5>
                 <p></p>    
                 </div>
                </li>

                <li class="media">
                 <a href="https://www.java.com" target="_blank"><img class="media-object pull-left img-thumbnail img-responsive" hspace="15" width="150" height="150" src="../media/link/jquery.png" ></a>
                 <div class="media-body">
                 <h5 class="media-heading"><span> <strong>jQuery</strong></span></h5>
                 <p></p>    
                 </div>
                </li>

              </ul>

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