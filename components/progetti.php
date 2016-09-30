<!-- 
**************************************************************************
  (c) Raffaele Ficcadenti 
  Maggio 2016
  raffaele.ficcadenti@gmail.com

  File: progetti.php
  Descr:      
************************************************************************** 
-->
<section id="lancio-progetti">
      <header class="header-sezione">
          <h2><?php echo $PROGETTI_TITOLO_STR; ?></h2>
      </header>
      <br>
      <div class="row">

        <div class="col-sm-3">
         <div class="box-progetto">
            <h3>A.S.I.</h3>
            <p class="text-center"><img src="media/asi.jpg" class="img-thumbnail img-responsive"></p>
            <p>Agenzia Spaziale Italiana.</p>
                <a data-original-title="A.S.I." data-animation="false" data-easein="flipBounceXIn" href="#" class="btn btn-primary btn-large btn-block" rel="popover" data-placement="top" data-html="true" data-content=<?php echo '"'.file_get_contents("./components/asdc.html").'"'; ?>
                >
                <span class="glyphicon glyphicon-eye-open"></span> Show</a>
         </div>
        </div><!-- /.col-sm-4 -->

        <div class="col-sm-3">
         <div class="box-progetto">
          <h3>Telecom Sparkle</h3>
          <p class="text-center"><img src="media/sparkle.jpg" class="img-thumbnail img-responsive"></p>
          <p>Telecom Sparkle.</p>
                <a data-original-title="Telecom Sparkle." data-animation="false" data-easein="flipBounceXIn" href="#" class="btn btn-primary btn-large btn-block" rel="popover" data-placement="top" data-html="true" data-content=<?php echo '"'.file_get_contents("./components/sparkle.html").'"'; ?> >
                <span class="glyphicon glyphicon-eye-open"></span> Show</a>
         </div>
        </div><!-- /.col-sm-4 -->

        <div class="col-sm-3">
         <div class="box-progetto">
          <h3>e-Tech</h3>
          <p class="text-center"><img src="media/e-tech.png" class="img-thumbnail img-responsive"></p>
          <p>Societa di consulenza e sviluppo software</p>
                <a data-original-title="e-Tech s.r.l." data-animation="false" data-easein="flipBounceXIn" href="#" class="btn btn-primary btn-large btn-block" rel="popover" data-placement="top" data-html="true" data-content=<?php echo '"'.file_get_contents("./components/e-tech.html").'"'; ?> >
                <span class="glyphicon glyphicon-eye-open"></span> Show</a>
         </div>
        </div><!-- /.col-sm-4 -->

        <div class="col-sm-3">
         <div class="box-progetto">
          <h3>HP</h3>
          <p class="text-center"><img src="media/hp.png" class="img-thumbnail img-responsive"></p>
          <p>HP.</p>
                <a data-original-title="HP" data-animation="false" data-easein="flipBounceXIn" href="#" class="btn btn-primary btn-large btn-block" rel="popover" data-placement="top" data-html="true" data-content=<?php echo '"'.file_get_contents("./components/hp.html").'"'; ?> >
                <span class="glyphicon glyphicon-eye-open"></span> Show</a>
         </div>
        </div><!-- /.col-sm-4 -->

      </div><!-- /.row -->
</section><!-- /section progetti-->