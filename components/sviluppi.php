<!-- 
**************************************************************************
  (c) Raffaele Ficcadenti 
  Maggio 2016
  raffaele.ficcadenti@gmail.com

  File:   sviluppi.html
  Descr:  
************************************************************************** 
-->
<section id="sviluppi">
    <header class="header-sezione">
     <h2><?php echo $SVILUPPI_TITOLO_STR; ?></h2>
    </header>
    <div class="row">
      <div class="col-sm-4">
       <ul class="list-group servizi">
        <li class="list-group-item servizi-titolo"><h4>Android APP</h4></li>
        <li class="list-group-item servizi-prezzo"><strong>APP per Os Android</strong></li>
          <li class="list-group-item servizi-opzione">Conway's Life</li>
          <li class="list-group-item servizi-opzione">Hello World(Android Studio)</li>
          <li class="list-group-item servizi-opzione">Hello World(Meteor)</li>
        <li class="list-group-item servizi-footer"><button class="btn btn-raised ripple-effect btn-primary" type="button"><?php echo $SVILUPPI_BTN_VISUALIZZA_STR ?></button></li>
       </ul>
      </div>
      <div class="col-sm-4">
       <ul class="list-group servizi">
        <li class="list-group-item servizi-titolo"><h4>Docker HUB</h4></li>
        <li class="list-group-item servizi-prezzo"><strong>Docker images</strong></li>
        <li class="list-group-item servizi-opzione"><a target="_blank" href="https://hub.docker.com/search/?isAutomated=0&isOfficial=0&page=1&pullCount=0&q=ficcadenti&starCount=0">Centos 6.7</a></li>
        <li class="list-group-item servizi-opzione"><a target="_blank" href="https://hub.docker.com/search/?isAutomated=0&isOfficial=0&page=1&pullCount=0&q=ficcadenti&starCount=0">OpenSUSE Leap42.1</a></li>
        <li class="list-group-item servizi-opzione"><a target="_blank" href="https://hub.docker.com/search/?isAutomated=0&isOfficial=0&page=1&pullCount=0&q=ficcadenti&starCount=0">Apache/PHP/MySQL</a></li>
        <li class="list-group-item servizi-opzione"><a target="_blank" href="https://hub.docker.com/search/?isAutomated=0&isOfficial=0&page=1&pullCount=0&q=ficcadenti&starCount=0">Meteor</a></li>
        <li class="list-group-item servizi-footer"><button class="btn btn-raised ripple-effect btn-primary" type="button"><?php echo $SVILUPPI_BTN_VISUALIZZA_STR ?></button></li>
      </ul>
      </div>
      <div class="col-sm-4">
       <ul class="list-group servizi">
        <li class="list-group-item servizi-titolo"><h4>Git HUB</h4></li>
        <li class="list-group-item servizi-prezzo"><strong><?php echo $SVILUPPI_ALL_STR ?></strong></li>
        <li class="list-group-item servizi-opzione"><a href=<?php echo "'".$local_host."./components/corso_php.php?lang=".$lang."'"; ?>><?php echo $SVILUPPI_PHP_STR ?></a></li>
        <li class="list-group-item servizi-opzione"><a target="_blank" href="https://github.com/Ficcadenti/corso-java"><?php echo $SVILUPPI_JAVA_STR ?></a></li>
        <li class="list-group-item servizi-opzione"><a target="_blank" href="https://github.com/Ficcadenti/perl-example"><?php echo $SVILUPPI_PERL_STR ?></a></li>
        <li class="list-group-item servizi-footer"><button class="btn btn-raised ripple-effect btn-primary" type="button"><?php echo $SVILUPPI_BTN_VISUALIZZA_STR ?></button></li>
      </ul>
      </div>
    </div>
</section>