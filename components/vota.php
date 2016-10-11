<!-- 
**************************************************************************
  (c) Raffaele Ficcadenti 
  Maggio 2016
  raffaele.ficcadenti@gmail.com

  File: voto.php
  Descr:    
************************************************************************** 
-->

  <script type="text/javascript">
          function removeStrVoto()
          {
              $("#regok").remove();
          }

          function getVoto()
          {


              var ajax = assegnaXMLHttpRequest();
              var data_post= "";


              if(ajax) 
              {
                // chiamata AJAX
                $.ajax({
                  url: 'components/result_db.php',
                  type: 'POST',
                  data: data_post,
                  datatype: 'json',
                  success: function(res)
                  {
                    var voti = JSON.parse(res);
                    //window.alert(res);

                    $("#eccellente").attr("style","width: "+voti.eccellente+"%");
                    $("#eccellente").html(parseInt(voti.eccellente)+" %");

                    $("#buono").attr("style","width: "+voti.buono+"%");
                    $("#buono").html(parseInt(voti.buono)+" %");

                    $("#migliorabile").attr("style","width: "+voti.migliorabile+"%");
                    $("#migliorabile").html(parseInt(voti.migliorabile)+" %");

                    $("#brutto").attr("style","width: "+voti.brutto+"%");
                    $("#brutto").html(parseInt(voti.brutto)+" %");

                    $("#nocomment").attr("style","width: "+voti.nocomment+"%");
                    $("#nocomment").html(parseInt(voti.nocomment)+" %");

                    $("#totali").html("Complessivamente "+voti.tot+" voti.");

                    $("#tot_eccellente").attr("style","width: "+voti.eccellente+"%");
                    $("#tot_buono").attr("style","width: "+voti.buono+"%");
                    $("#tot_migliorabile").attr("style","width: "+voti.migliorabile+"%");
                    $("#tot_brutto").attr("style","width: "+voti.brutto+"%");
                    $("#tot_nocomment").attr("style","width: "+voti.nocomment+"%");
                 }
                });
              }

          }

          function vota()
          {
              var eccellente=0,buono=0,migliorabile=0,brutto=0,nocomment=0;
              var gradimento=$("input[name='gradimento']:checked").val();

              if(gradimento==="eccellente")
              {
                eccellente=1;
              }else if(gradimento==="buono")
              {
                buono=1;
              }else if(gradimento==="migliorabile")
              {
                migliorabile=1;
              }else if(gradimento==="brutto")
              {
                brutto=1;
              }
              else if(gradimento==="nocomment")
              {
                nocomment=1;
              }

              $("#vota_form").append('<img src="media/loading.gif" alt="loading" id="loading" >');
              $("#regok").remove();

              var ajax = assegnaXMLHttpRequest();
              var data_post= "";
              data_post=  "eccellente="+eccellente+
                    "&migliorabile="+migliorabile+
                    "&brutto="+brutto+
                    "&nocomment="+nocomment+
                    "&buono="+buono+
                    "&lang=<?php echo $lang?>";


              if(ajax) 
              {
                // chiamata AJAX
                  
                $.ajax({
                  url: 'components/vota_db.php',
                  type: 'POST',
                  data: data_post,
                  success: function(res)
                  {
                    $("#loading").fadeOut(800,function()
                    {
                      this.remove();
                      $("#vota_form").append('<p id="regok">'+res+'</p>')
                    });
                  }
                });
              }
          }
  </script>

<section id="vota_sito">
	
  <header class="header-sezione">
	 <h2><?php echo $VOTA_STR; ?></h2>
	</header>

	<br>

	<div class="row">

      <div class="col-sm-6">
        <a style="display: block; margin: 0 auto; width: 210px;" class="btn btn-raised ripple-effect btn-primary" data-toggle="modal" data-target="#vote" data-original-title>
          <?php echo $VOTA_BTN_VOTA_STR ?>
        </a>
      </div>

      <div class="col-sm-6">
        <a onclick="getVoto();" style="display: block; margin: 0 auto; width: 210px;"  class="btn btn-raised ripple-effect btn-primary" data-toggle="modal" data-target="#result" data-original-title >
          <?php echo $VOTA_BTN_RES_STR ?>
        </a>
      </div>

      <!-- Sezione per il voto -->
     	<div class="modal fade" id="vote" tabindex="-1" role="dialog" aria-labelledby="voteLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="panel-vote panel-primary">

            <div class="panel-heading">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="removeStrVoto();">X</button>
              <h4 class="panel-title" id="voteLabel"><span class="glyphicon glyphicon-arrow-right"></span> <?php echo $VOTA_DOMANDA_STR ?></h4>
            </div>

            <div class="modal-body">
              <ul class="list-group">
                  <li class="list-group-item">
                      <div class="radio">
                          <label>
                              <input type="radio" name="gradimento" value="eccellente" checked="checked">
                              <?php echo $ECCELLENTE_STR?>
                          </label>
                      </div>
                  </li>
                  <li class="list-group-item">
                      <div class="radio">
                          <label>
                              <input type="radio" name="gradimento" value="buono">
                              <?php echo $BUONO_STR?>
                          </label>
                      </div>
                  </li>
                  <li class="list-group-item">
                      <div class="radio">
                          <label>
                              <input type="radio" name="gradimento" value="migliorabile">
                              <?php echo $MIGLIORABILE_STR?>
                          </label>
                      </div>
                  </li>
                  <li class="list-group-item">
                      <div class="radio">
                          <label>
                              <input type="radio" name="gradimento" value="brutto">
                              <?php echo $BRUTTO_STR?>
                          </label>
                      </div>
                  </li>
                  <li class="list-group-item">
                      <div class="radio">
                          <label>
                              <input type="radio" name="gradimento" value="nocomment">
                              <?php echo $NOCOMMENT_STR?>
                          </label>
                      </div>
                  </li>
              </ul>
            </div>
            
            <div class="modal-footer">
              <button type="button" class="btn btn-success ripple-effect btn-vote" onclick="vota();"><?php echo $VOTA_BTN2_VOTA_STR?></button>
              <button type="button" class="btn btn-default  ripple-effect btn-close" onclick="removeStrVoto();" data-dismiss="modal"><?php echo $VOTA_BTN_CHIUDI_STR?></button>
            </div>

            <div id="vota_form" style="text-align:center;">
            </div>
            
          </div>
        </div>
      </div>  <!-- /vote -->

      <!-- Sezione per i risultati -->
      <div class="modal fade" id="result" tabindex="-1" role="dialog" aria-labelledby="voteLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="panel-vote panel-primary">

            <div class="panel-heading">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
              <h4 class="panel-title" id="voteLabel"><span class="glyphicon glyphicon-arrow-right"></span> <?php echo $VOTA_RES_STR?></h4>
            </div>

            <div class="row results" >
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-left: 5px; margin-top: 20px;">
                      <?php echo $ECCELLENTE_STR?>
                      <div class="progress" >
                          <div id="eccellente" class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          </div>
                      </div>
                      <?php echo $BUONO_STR?>
                      <div class="progress">
                          <div id="buono" class="progress-bar progress-bar-primary progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                          </div>
                      </div>
                      <?php echo $MIGLIORABILE_STR?>
                      <div class="progress">
                          <div id="migliorabile" class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                          </div>
                      </div>
                      <?php echo $BRUTTO_STR?>
                      <div class="progress">
                          <div id="brutto" class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                          </div>
                      </div>
                      <?php echo $NOCOMMENT_STR?>
                      <div class="progress">
                          <div id="nocomment" class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">
                          </div>
                      </div>

                      <spam id="totali">ciao</spam>
                      <div class="progress">
                          <div id="tot_eccellente" class="progress-bar progress-bar-success">
                          </div>

                          <div id="tot_buono" class="progress-bar progress-bar-primary">
                          </div>

                          <div id="tot_migliorabile" class="progress-bar progress-bar-warning">
                          </div>

                          <div id="tot_brutto" class="progress-bar progress-bar-danger">
                          </div>

                          <div id="tot_nocomment" class="progress-bar progress-bar-info" >
                          </div>
                      </div>
                  </div>
            </div>
            
            <div class="modal-footer">
              <button type="button" class="btn btn-default  ripple-effect btn-close" onclick="removeStrVoto();" data-dismiss="modal"><?php echo $VOTA_BTN_CHIUDI_STR?></button>
            </div>



          </div>
        </div>
      </div> <!-- /result -->

	</div><!-- /.row -->
</section><!-- vota_sito -->