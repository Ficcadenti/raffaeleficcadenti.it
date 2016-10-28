<!-- 
  (c) Raffaele Ficcadenti 
  Maggio 2016
  raffaele.ficcadenti@gmail.com
-->
<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" ><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" ><!--<![endif]-->
<html lang="it">

 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Raffaele Ficcadenti Corso </title>

  <!-- load stylesheet -->
  <?php
      $from_page="corso_php";
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

            <h2><a href="https://github.com/Ficcadenti/php-example" target="_blank">Repository GIT - PhP Example</a></h2>

          </div><!-- /.col-sm-12 -->
        </div><!-- /.row -->
      </section><!-- /section github-php-example -->

      <section id="corso_php">
        <div class="row">
          <div class="col-sm-12 panel-carousel">

            <h4><strong> Repository per Lezioni/esempi PHP </strong></h2>
            (c) 09/2016 - Raffaele Ficcadenti (raffaele.ficcadenti@gmail.com) <br>
            Ho cercato di raccogliere in questo repository, le basi della programmazione PHP.
            Per ogni correzione o suggerimento, non esitate a scrivermi.
            Buon 'coding'.
            Raffaele.
            
            <ul>
              <li><strong>LEZIONE N. 0</strong> - Per iniziare.
                <ul>
                  <br>
                  <li><b><a href="../sviluppo/php-example/Lazione-00 - Per iniziare/phpinfo.php" target="_blank">phpinfo.php</a></b>: Un semplice script per info sul php installato.</li>
                  <li><b><a href="../sviluppo/php-example/Lazione-00 - Per iniziare/esempio_01.php" target="_blank">esempio_01.php</a></b>: Un semplice script introduttivo.</li>
                  <br>
                </ul>
              </li>
              <li><strong>LEZIONE N. 1</strong> - Elementi fondamentali.
                <ul>
                  <br>
                  <li><b><a href="../sviluppo/php-example/Lezione-01 - Elementi fondamentali/esempio_02.php" target="_blank">esempio_02.php</a></b>: Le variabili assegnazione per valore.</li>
                  <li><b><a href="../sviluppo/php-example/Lezione-01 - Elementi fondamentali/esempio_03.php" target="_blank">esempio_03.php</a></b>: Le variabili assegnazione per riferimento.</li>
                  <li><b><a href="../sviluppo/php-example/Lezione-01 - Elementi fondamentali/esempio_04.php" target="_blank">esempio_04.php</a></b>: Tipi di dato e casting.</li>
                  <li><b><a href="../sviluppo/php-example/Lezione-01 - Elementi fondamentali/esempio_05.php" target="_blank">esempio_05.php</a></b>: Operatori.</li>
                  <li><b><a href="../sviluppo/php-example/Lezione-01 - Elementi fondamentali/esempio_06.php" target="_blank">esempio_06.php</a></b>: Costanti.</li>
                  <li><b><a href="../sviluppo/php-example/Lezione-01 - Elementi fondamentali/esempio_07.php" target="_blank">esempio_07.php</a></b>: Controllo del flusso di elaborazione.</li>
                  <br>
                </ul>
              </li>
              <li><strong>LEZIONE N. 2</strong> - Funzioni.
                <ul>
                  <br>
                  <li><b><a href="../sviluppo/php-example/Lezione-02 - Funzioni/esempio_08.php" target="_blank">esempio_08.php</a></b>: Esempi.</li>
                  <br>
                </ul>
              </li>
              <li><strong>LEZIONE N. 3</strong> - Array.
                <ul>
                  <br>
                  <li><b><a href="../sviluppo/php-example/Lezione-03 - Array/esempio_09.php" target="_blank">esempio_09.php</a></b>: Esempi.</li>
                  <br>
                </ul>
              </li>
              <li><strong>LEZIONE N. 4</strong> - Oggetti e Classi.
                <ul>
                  <br>
                  <li><b><a href="../sviluppo/php-example/Lezione-04 - Ogetti e Classi/esempio_10.php" target="_blank">esempio_10.php</a></b>: Introduzione.</li>
                  <li><b><a href="../sviluppo/php-example/Lezione-04 - Ogetti e Classi/esempio_10a.php" target="_blank">esempio_10a.php</a></b>: Un sempio.</li>
                  <li><b><a href="../sviluppo/php-example/Lezione-04 - Ogetti e Classi/esempio_10b.php" target="_blank">esempio_10b.php</a></b>: Classi ed ereditarietà, un sempio.</li>
                  <li><b><a href="../sviluppo/php-example/Lezione-04 - Ogetti e Classi/esempio_10c.php" target="_blank">esempio_10c.php</a></b>: Attributi e membri statici, costanti, funzioni variabili.</li>
                  <li><b><a href="../sviluppo/php-example/Lezione-04 - Ogetti e Classi/esempio_10d.php" target="_blank">esempio_10d.php</a></b>: Polimorfismo.</li>
                  <li><b><a href="../sviluppo/php-example/Lezione-04 - Ogetti e Classi/esempio_10e.php" target="_blank">esempio_10e.php</a></b>: Oggetti clonati.</li>
                  <li><b><a href="../sviluppo/php-example/Lezione-04 - Ogetti e Classi/esempio_10f.php" target="_blank">esempio_10f.php</a></b>: Classi astratte.</li>
                  <li><b><a href="../sviluppo/php-example/Lezione-04 - Ogetti e Classi/esempio_10g.php" target="_blank">esempio_10g.php</a></b>: Interfacce.</li>
                  <br>
                </ul>
              </li>
              <li><strong>LEZIONE N. 5</strong> - File esterni.
                <ul>
                  <br>
                  <li><b><a href="./Lezione-05 - File esterni/esempio_11.php" target="_blank">esempio_11.php</a></b>: Include & require.</li>
                  <br>
                </ul>
              </li>
              <li><strong>LEZIONE N. 6</strong> - Moduli HTML.
                <ul>
                  <br>
                  <li><b><a href="../sviluppo/php-example/Lezione-06 - Moduli HTML/esempio_12.php" target="_blank">esempio_12.php</a></b>: Variabili globali e ambientali.</li>
                  <li><b><a href="../sviluppo/php-example/Lezione-06 - Moduli HTML/esempio_13.php" target="_blank">esempio_13.php</a></b>: Input utente.</li>
                  <li><b><a href="../sviluppo/php-example/Lezione-06 - Moduli HTML/esempio_14.php" target="_blank">esempio_14.php</a></b>: Unione di codice HTML e PHP in una sola pagina.</li>
                  <li><b><a href="../sviluppo/php-example/Lezione-06 - Moduli HTML/esempio_15.php" target="_blank">esempio_15.php</a></b>: Upload di file sul server.</li>
                  <br>
                </ul>
              </li>
              <li><strong>LEZIONE N. 7</strong> - File.
                <ul>
                  <br>  
                  <li><b><a href="../sviluppo/php-example/Lezione-07 - File, gestione/esempio_16.php" target="_blank">esempio_16.php</a></b>: File, informazioni.</li>
                  <li><b><a href="../sviluppo/php-example/Lezione-07 - File, gestione/esempio_17.php" target="_blank">esempio_17.php</a></b>: File, creazione,eliminazione,lettura e scrittura.</li>
                  <br>
                </ul>
              </li>
              <li><strong>LEZIONE N. 8</strong> - Directory.
                <ul>
                  <br>
                  <li><b><a href="../sviluppo/php-example/Lezione-08 - Directory, gestione/esempio_18.php" target="_blank">esempio_18.php</a></b>: Gestione.</li>
                  <br>
                </ul>
              </li>
              <li><strong>LEZIONE N. 9</strong> - Database DBM.
                <ul>
                  <br>
                  <li><b><a href="../sviluppo/php-example/Lezione-09 - Database DBM/esempio_19.php" target="_blank">esempio_19.php</a></b>: Esempio 1.</li>
                  <li><b><a href="../sviluppo/php-example/Lezione-09 - Database DBM/esempio_20.php" target="_blank">esempio_20.php</a></b>: Esempio 2.</li>
                  <br>
                </ul>
              </li>
              <li><strong>LEZIONE N. 10</strong> - Database MySQLi.
                <ul>
                  <br>
                  <li><b><a href="../sviluppo/php-example/Lezione-10 - Database MySQL/esempio_21.php" target="_blank">esempio_21.php</a></b>: Utilizzo di MySQLi.</li>
                  <li><b><a href="../sviluppo/php-example/Lezione-10 - Database MySQL/esempio_22.php" target="_blank">esempio_22.php</a></b>: Ottenere informazioni su un database.</li>
                  <br>
                </ul>
              </li>
              <li><strong>LEZIONE N. 11</strong> - Apertura al mondo esterno.
                <ul>
                  <br>
                  <li><b><a href="../sviluppo/php-example/Lezione-11 - Apertura al mondo esterno/esempio_23.php" target="_blank">esempio_23.php</a></b>: Introduzione.</li>
                  <li><b><a href="../sviluppo/php-example/Lezione-11 - Apertura al mondo esterno/esempio_24.php" target="_blank">esempio_24.php</a></b>: Stabilire una connessione HTTP.</li>
                  <li><b><a href="../sviluppo/php-example/Lezione-11 - Apertura al mondo esterno/esempio_25.php" target="_blank">esempio_25.php</a></b>: Codici di stato di una connessione HTTP.</li>
                  <li><b><a href="../sviluppo/php-example/Lezione-11 - Apertura al mondo esterno/esempio_26.php" target="_blank">esempio_26.php</a></b>: Stabilire una connessione NNTP.</li>
                  <li><b><a href="../sviluppo/php-example/Lezione-11 - Apertura al mondo esterno/esempio_27.php" target="_blank">esempio_27.php</a></b>: Inviare e-mail.</li>
                  <br>
                </ul>
              </li>
              <li><strong>LEZIONE N. 12</strong> - Immagini dinamiche.
                <ul>
                  <br>
                  <li><b><a href="../sviluppo/php-example/Lezione-12 - Immagini dinamiche, GD Library/esempio_28.php" target="_blank">esempio_28.php</a></b>: GD Library.</li>
                  <li><b><a href="../sviluppo/php-example/Lezione-12 - Immagini dinamiche, GD Library/esempio_29.php" target="_blank">esempio_29.php</a></b>: PHPGraphLib (PHP Graphing Library v2.31).</li>
                  <br>
                </ul>
              </li>
              <li><strong>LEZIONE N. 13</strong> - Date.
                <ul>
                  <br>
                  <li><b><a href="../sviluppo/php-example/Lezione-13 - Le date/esempio_30.php" target="_blank">esempio_30.php</a></b>: Esempio.</li>
                  <li><b><a href="../sviluppo/php-example/Lezione-13 - Le date/esempio_31.php" target="_blank">esempio_31.php</a></b>: Creiamo un calendario.</li>
                  <br>
                </ul>
              </li>
              <li><strong>LEZIONE N. 14</strong> - Tipi di dati, nel dettaglio.
                <ul>
                  <br>
                  <li><b><a href="../sviluppo/php-example/Lezione-14 - I dati nel dettaglio/esempio_32.php" target="_blank">esempio_32.php</a></b>: Il casting.</li>
                  <li><b><a href="../sviluppo/php-example/Lezione-14 - I dati nel dettaglio/esempio_33.php" target="_blank">esempio_33.php</a></b>: Che tipo sei ?</li>
                  <li><b><a href="../sviluppo/php-example/Lezione-14 - I dati nel dettaglio/esempio_34.php" target="_blank">esempio_34.php</a></b>: Ancora su array.</li>
                  <br>
                </ul>
              </li>
              <li><strong>LEZIONE N. 15</strong> - Stringhe.
                <ul>
                  <br>
                  <li><b><a href="../sviluppo/php-example/Lezione-15 - Stringhe/esempio_35.php" target="_blank">esempio_35.php</a></b>: Formattazione.</li>
                  <br>
                </ul>
              </li>
            </ul>
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
