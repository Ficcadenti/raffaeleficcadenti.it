<!-- 
**************************************************************************
  (c) Raffaele Ficcadenti 
  Maggio 2016
  raffaele.ficcadenti@gmail.com

  File:   footer_slim.php
  Descr:  
************************************************************************** 
-->
<footer id="footer_slim">
  <section id="footer-navigazione">
    <div class="row no-gutters">
      <div class="col-sm-4">
          <h3 class="myfont"><?php echo $SEGUIMI_STR; ?></h3>
          <div class="col-md-12">
                      <ul class="social-network social-circle">
                          <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                          <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                          <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                          <li><a href="https://plus.google.com/100770830113505848726" target="_blank" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                          <li><a href="https://www.linkedin.com/in/raffaele-ficcadenti-54723731" target="_blank" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                      </ul>       
          </div>
      </div> <!-- /col-sm-4 -->

    </div> <!-- /row -->
  </section> <!-- /section -->

  <div id="footer-copy">
    <div class="row no-gutters">
      <div class="col-sm-12">
        <p class="rigth">&copy; <?php echo $MESE_STR; ?> 2016 Raffaele Ficcadenti. &middot; 
        <a href=
            <?php echo '"'.$local_host.'components/cookiepolicy.php?lang='.$lang.'"'; ?> > <?php echo $COOKIE_INFO_STR; ?>
        </a>
        </p>
      </div>
    </div>
  </div>

</footer>
