<!-- 
**************************************************************************
  (c) Raffaele Ficcadenti 
  Maggio 2016
  raffaele.ficcadenti@gmail.com

  File:   interessi_competenze.php
  Descr:  
************************************************************************** 
-->

<section id="news">
    <header class="header-sezione">
     <h2><?php echo $IC_STR; ?></h2>
    </header>
    <div class="row">
      <div class="col-sm-5">
        <div id="segnalazioni-carousel" class="carousel slide">
         <div class="carousel-inner">
          <div class="item active">
           <div class="panel-carousel">
            <div class="panel-carousel-heading">
             <h4><?php echo $IC_STORIA_STR; ?></h4>
            </div>
            <div class="panel-carousel-body">
             <p>La mia storia con il mondo degli 0 e 1 inizia molto lontano, cito quest'aneddoto: quando avevo circa 10 anni, venne a casa nostra un rappresentante di una nota enciclopedia (Enciclopedia Universale Rizzoli Larousse), che mio padre all'epoca comprava a fascicoli periodici in edicola,;ci propose di comprare un volume di aggiornamento che parlava di computer, poi ci disse che alla modica cifra di circa 1.000.000 di Lire (circa), all'epoca erano soldini, potevamo prendere in 'omaggio' un personal computer,e li è nata la mia passione</p>  
            </div>
            <div class="panel-carousel-footer">
             <p><a href=<?php echo "'"."./components/paginavuota.php?lang=".$lang."&from_ref=storia'"; ?>><?php echo $IC_LEGGI_TUTTO_STR; ?></a></p> 
            </div>
           </div>
           
          </div>
          <div class="item">
           <div class="panel-carousel">
            <div class="panel-carousel-heading">
             <h4><?php echo $IC_INTERESSI_STR; ?></h4>
            </div>
            <div class="panel-carousel-body">
             <p>...in costrusione...</p>  
            </div>
            <div class="panel-carousel-footer">
             <p><a href=<?php echo "./components/paginavuota/?lang=".$lang."'"; ?>><?php echo $IC_LEGGI_TUTTO_STR; ?></a></p> 
            </div>
           </div>
          </div>
          <div class="item">
           <div class="panel-carousel">
            <div class="panel-carousel-heading">
             <h4><?php echo $IC_SPORT_STR; ?></h4>
            </div>
            <div class="panel-carousel-body">
             <p>...in costrusione...</p>  
            </div>
            <div class="panel-carousel-footer">
             <p><a href="#"><?php echo $IC_LEGGI_TUTTO_STR; ?></a></p> 
            </div>
           </div>
          </div>
           <div class="item">
           <div class="panel-carousel">
            <div class="panel-carousel-heading">
             <h4><?php echo $IC_MUSICA_STR; ?></h4>
            </div>
            <div class="panel-carousel-body">
             <p>...in costrusione...</p>  
            </div>
            <div class="panel-carousel-footer">
             <p><a href="#"><?php echo $IC_LEGGI_TUTTO_STR; ?></a></p> 
            </div>
           </div>
          </div>
         </div>
         <div class="panel-carousel-nav">
          <p class="text-center">
          <a class="panel-carousel-control" href="#segnalazioni-carousel" data-slide="prev">
           <span class="glyphicon glyphicon-chevron-left"></span>
          </a> 
          <a class="panel-carousel-control" href="#segnalazioni-carousel" data-slide="next">
           <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
          </p>  
         </div>
        </div>
      </div><!-- /.col-sm-5 -->

      <div class="col-sm-7">
          <div id="segnalazioni-tab">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab-1" data-toggle="tab">C/C++</a></li>
              <li><a href="#tab-2" data-toggle="tab">WEB</a></li>
              <li><a href="#tab-3" data-toggle="tab">Java/JSP/Servlet</a></li>
              <li><a href="#tab-4" data-toggle="tab">Android</a></li>
              <li><a href="#tab-5" data-toggle="tab">OS</a></li>
              <li><a href="#tab-6" data-toggle="tab">Hardware</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab-1">
                <p>c++</p>
              </div>
              <div class="tab-pane" id="tab-2">
               <p>Donec id elit non mi porta gravida at <a href="#">eget metus id elit mi</a> egetine. Fusce dapibus, tellus ac cursus comodo egetine metuss gorp.</p>
               <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus etiam sem...</p>
               <p>Donec id elit non mi porta gravida at eget metus id elit mi egetine. Fusce dapibus, <a href="#">tellus ac cursus</a> comodo egetine metuss gorp.</p>
              </div>
              <div class="tab-pane" id="tab-3">
               <p>Ho iniziato a programmare in Java nel lontano 1996, allora esisteva il JDK 1.0(1.1), ancora non esistevano tutti gli ogetti GUI che attualmente usiamo quotidianamente e per disegnare un pulsante lo si doveva fare con svariate righe di codice. Nel corso de tempo ho aquisito dimestichezza con tutti gli strumenti messi a disposizione.</p>
                <p>Sono passato da <strong>AWT, Swing, JOGL, JavaFX</strong>.</p>
                <p>Utilizzo spesso <strong>JavaServlet, JSP,JINI</strong>.</p>
                <p>Come framewark utilizzo <strong>Spring</strong> e <strong>Struts</strong>.</p>
                <p>Per sviluppare utilizzo fondamentalmente due IDE: <strong>Eclipse</strong> e <strong>Netbeans</strong>.</p>
              </div>
              <div class="tab-pane" id="tab-4">
               <p>Donec id elit non mi porta gravida at <a href="#">eget metus id elit mi</a> egetine. Fusce dapibus, tellus ac cursus comodo egetine metuss gorp.</p>
               <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus etiam sem...</p>
               <p>Donec id elit non mi porta gravida at eget metus id elit mi egetine. Fusce dapibus, <a href="#">tellus ac cursus</a> comodo egetine metuss gorp.</p>
              </div>
              <div class="tab-pane" id="tab-5">
               <p>Donec id elit non mi porta gravida at <a href="#">eget metus id elit mi</a> egetine. Fusce dapibus, tellus ac cursus comodo egetine metuss gorp.</p>
               <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus etiam sem...</p>
               <p>Donec id elit non mi porta gravida at eget metus id elit mi egetine. Fusce dapibus, <a href="#">tellus ac cursus</a> comodo egetine metuss gorp.</p>
              </div>
              <div class="tab-pane" id="tab-6">
               <p>Donec id elit non mi porta gravida at <a href="#">eget metus id elit mi</a> egetine. Fusce dapibus, tellus ac cursus comodo egetine metuss gorp.</p>
               <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus etiam sem...</p>
               <p>Donec id elit non mi porta gravida at eget metus id elit mi egetine. Fusce dapibus, <a href="#">tellus ac cursus</a> comodo egetine metuss gorp.</p>
              </div>
            </div>
          </div>
      </div><!-- /.col-sm-7 -->
    </div><!-- /row -->
</section><!-- Notizie e aggiornamenti -->