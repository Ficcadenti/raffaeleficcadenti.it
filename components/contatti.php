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
          <a href="#" class="active">Contatti</a>
        </div>
      </nav>
    </section>
    -->
    <!-- Contenuti (griglia) -->
    <div class="container panel-carousel">
        <div class="row">
          <div class="col-md-12">
              <small><i></i>Add alerts if form ok... success, else error.</i></small>
          <div class="alert alert-success">
              <strong><span class="glyphicon glyphicon-send"></span> Success! Message sent. (If form ok!)</strong>
          </div>   
          <div class="alert alert-danger">
              <span class="glyphicon glyphicon-alert"></span><strong> Error! Please check the inputs. (If form error!)</strong></div>
          </div>
          
          <form role="form" action="" method="post" >
              <div class="col-lg-6">

                  <div class="well well-sm">
                      <strong><i class="glyphicon glyphicon-ok form-control-feedback"></i> Required Field</strong>
                  </div>
                  
                  <div class="form-group">
                      <label for="InputName">Il tuo nome:</label><span style="color:red;font-weight:bold"> *<span class="question"><p>Inserisci il tuo nome.</p></span>
                      <div class="input-group">
                          <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
                              <span class="input-group-addon">
                                  <i class="glyphicon glyphicon-ok form-control-feedback"></i>
                              </span>
                        </div>
                  </div>

                  <div class="form-group">
                      <label for="InputName">Il tuo cognome:</label><span style="color:red;font-weight:bold"> *</span><span class="question"><p>Inserisci il tuo Cognome.</p></span>
                      <div class="input-group">
                          <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
                              <span class="input-group-addon">
                                  <i class="glyphicon glyphicon-ok form-control-feedback"></i>
                              </span>
                        </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="InputEmail">La tua e-mail</label></label><span style="color:red;font-weight:bold"> *</span><span class="question"><p>Inserisci la tua e-mail, la usero solo per rispondere alle tue richieste.</p></span>
                    <div class="input-group">
                      <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Enter Email" required  >
                      <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
                  </div>

                  <div class="form-group">
                    <label for="InputMessage">Oggetto</label></label><span style="color:red;font-weight:bold"> *</span><span class="question"><p>Seleziona l'area tematica di tuo interesse.</p></span>
                    <div class="input-group">
                      <input type="oggetto" class="form-control" id="InputOggetto" name="InputOggetto" placeholder="Enter Oggetto" required  >
                      <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
                  </div>
                  
                  <div class="form-group">
                    <label for="InputMessage">Message</label></label><span style="color:red;font-weight:bold"> *</span><span class="question"><p>Inserisci la tua richiesta.</p></span>
                    <div class="input-group">
                      <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>
                      <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
                  </div>
                  
                  <div class="form-group">
                    <label for="InputReal">What is 4+3? (Simple Spam Checker)</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="InputReal" id="InputReal" required>
                      <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
                  </div>
                  
                  <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
              </div>
          </form>
          
          <hr class="featurette-divider hidden-lg">
          
          <div class="col-lg-5 col-md-push-1">
            <address>
            <h3>Raffaele Ficcadenti</h3>
            <p class="lead">
                <a href="#">The Pentagon<br>
                Washington, DC 20301</a>
                <br>
                Phone: XXX-XXX-XXXX
                <br>
            </p>
            </address>
          </div> <!-- /div col-lg-5 -->

        </div> <!-- /div rov -->
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