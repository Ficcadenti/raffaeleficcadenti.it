<!-- 
**************************************************************************
  (c) Raffaele Ficcadenti 
  Maggio 2016
  raffaele.ficcadenti@gmail.com

  File: cv.html
  Descr:      
************************************************************************** 
-->
<section id="Collapse">
          <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-custom">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <i class="glyphicon glyphicon-plus"></i> <span class="myfont"><?php echo $CV_TITOLO_STR; ?></span>
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body animated zoomOut">
                        <div class="row">
                            <div class="col-sm-12 lead text-center">
                                <?php echo $CV_SLOGAN_STR; ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <a href="./dati/CVRaffaeleFiccadenti.pdf" target="_blank"><img src="media/PDF-icon.png"> Curriculum Vitae (PDF)</a>
                            </div>
                            <div class="col-sm-6">
                                <a href="./dati/CVRaffaeleFiccadenti.doc"><img src="media/WORD-icon.png">Curriculum Vitae (Word)</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <br>
          <br>
</section>