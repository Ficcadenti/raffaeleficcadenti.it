<!-- 
**************************************************************************
  (c) Raffaele Ficcadenti 
  Maggio 2016
  raffaele.ficcadenti@gmail.com

  File:   footer.php
  Descr:  
************************************************************************** 
-->
<footer>
  <section id="footer-navigazione">
    <div class="row no-gutters">
      <div class="col-sm-4">
          <h3 class="myfont"><?php echo $SEGUIMI_STR; ?></h3><br><br>
          <div class="col-md-12">
                      <ul class="social-network social-circle">
                          <li><a href="#" class="icoRss disabled" title="Rss"><i class="fa fa-rss"></i></a></li>
                          <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                          <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                          <li><a href="https://plus.google.com/100770830113505848726" target="_blank" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                          <li><a href="https://www.linkedin.com/in/raffaele-ficcadenti-54723731" target="_blank" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                      </ul>       
          </div>
      </div> <!-- /col-sm-4 -->

      <div class="col-sm-4">
       <h3 class="myfont"><?php echo $ULTIMI_POST_STR; ?></h3>
       <ul class="media-list">
        <li class="media">
         <img class="media-object pull-left img-thumbnail img-responsive" src="media/post/post1.png">
         <div class="media-body">
         <h5 class="media-heading"><span> <strong><?php echo $GIT_HUB_STR; ?></strong></span></h5>
         <p><?php echo $GIT_HUB_STR1; ?></p>    
         </div>
        </li>
        <li class="media">
         <img class="media-object pull-left img-thumbnail img-responsive" src="media/post/post2.png">
         <div class="media-body">
         <h5 class="media-heading"><strong><?php echo $DOCKER_HUB_STR; ?></strong></h5>
         <p><?php echo $DOCKER_HUB_STR1; ?></p>    
         </div>
        </li>
        <li class="media">
         <img class="media-object pull-left img-thumbnail img-responsive" src="media/post/post3.png">
         <div class="media-body">
         <h5 class="media-heading"><strong><?php echo $OS_STR; ?></strong></h5>
         <p><?php echo $OS_STR1; ?></p>    
         </div>
        </li>
       </ul>
      </div><!-- /col-sm-4 -->

      <div class="col-sm-4">
         <h3 class="myfont"><?php echo $CONTATTI_STR; ?></h3>
         <address>
          <h5><strong>Raffaele Ficcadenti</strong><br></h5>
          Via Castellamonte 82<br>
          Roma, 00123, Italy<br>
          <?php echo $CELLULARE_STR; ?>: (+39)3404020010
         </address>
         <address>
          <h5><strong>E-mail</strong></h5><br>
          <a href="mailto:#">raffaele.ficcadenti@gmail.com</a>
         </address>
      </div><!-- /col-sm-4 -->

    </div> <!-- /row -->
  </section> <!-- /section -->

  <section id="footer-copy">
    <div class="row no-gutters">
      <div class="col-sm-12">
        <p class="rigth">&copy; <?php echo $MESE_STR; ?> 2016 Raffaele Ficcadenti. &middot; 
        <a href=
            <?php echo '"'.$local_host.'components/cookiepolicy.php?lang='.$lang.'"'; ?> > <?php echo $COOKIE_INFO_STR; ?>
        </a>
        </p>
      </div>
    </div>
  </section>

</footer>
