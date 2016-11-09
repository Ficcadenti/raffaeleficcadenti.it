<!-- 
**************************************************************************
  (c) Raffaele Ficcadenti 
  Maggio 2016
  raffaele.ficcadenti@gmail.com

  File:   header.php
  Descr:  Classe header contenente la barra di navigazione con i menu.
************************************************************************** 
-->
<header id="main-menu">
    <nav class="navbar navbar-default">

      <div class="container">
       
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
            </button>
          <a class="navbar-brand">Raffaele Ficcadenti</a>
        </div>

        <div class="collapse navbar-collapse navbar-responsive-collapse">
               <ul class="nav navbar-nav">
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                      <li><a href=<?php echo "'".$local_host."?lang=".$lang."'"; ?>>Home</a></li>
                      <li><a href="#curriculum">Curriculum</a></li>
                      <li><a href=<?php echo "'".$local_host."under.php?lang=".$lang."'"; ?>>Progetti</a></li>
                      <li><a href=<?php echo "'".$local_host."under.php?lang=".$lang."'"; ?>>I miei lavori</a></li>
                      <li><a href=<?php echo "'".$local_host."under.php?lang=".$lang."#miei_sviluppi'"; ?> >I miei sviluppi</a></li>
                      <li><a href=<?php echo "'".$local_host."under.php?lang=".$lang."#qrcode'"; ?> >Il mio QRCode</a></li>
                      <li><a href=<?php echo "'".$local_host."under.php?lang=".$lang."#vota'"; ?> >Vota</a></li>
                     </ul>
                    </li>
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hobbies <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                      <li><a href=<?php echo "'".$local_host."under.php?lang=".$lang."'"; ?>>Musica</a></li>
                      <li><a href=<?php echo "'".$local_host."under.php?lang=".$lang."'"; ?>>Cucina</a></li>
                      <li><a href=<?php echo "'".$local_host."under.php?lang=".$lang."'"; ?>>Famiglia</a></li>
                      <li><a href=<?php echo "'".$local_host."under.php?lang=".$lang."'"; ?>>Bricolage</a></li>
                      <li><a href=<?php echo "'".$local_host."under.php?lang=".$lang."'"; ?>>Cartoni 70,80</a></li>
                     </ul>
                    </li>
                    <li><a href=<?php echo "'".$local_host."components/links.php?lang=".$lang."'"; ?>><?php echo $MENU_STR_LINK; ?></a></li>
                    <li><a href=<?php echo "'".$local_host."under.php?lang=".$lang."'"; ?>><?php echo $MENU_STR_NEWS; ?></a></li>
                    <li><a href=<?php echo "'".$local_host."under.php?lang=".$lang."'"; ?>><?php echo $MENU_STR_BLOG; ?></a></li>
                    <li><a href=<?php echo "'".$local_host."under.php?lang=".$lang."'"; ?>><?php echo $MENU_STR_FORUM; ?></a></li>
                    <li><a href=<?php echo "'".$local_host."under.php?lang=".$lang."'"; ?>><?php echo $MENU_STR_CONTATTI; ?></a></li>
                    <li>
                        <select  class="selectpicker centrato_l" id="selectLang" data-width="140px" data-style="btn btn-primary  btn-large btn-block" >
                          <option data-content=<?php echo '"<img src=\''.$local_host.'media/flags/it_resize.png\'>  <span style=\'display:inline-block; width:100px;\'> Italiano</span>"' ?> <?php
                            if ($lang=="it")
                            {
                                  echo "selected ";
                            }
                          ?>
                          value="?lang=it">Italiano>
                          </option>

                          <option data-content=<?php echo '"<img src=\''.$local_host.'media/flags/en_resize.png\'>  <span style=\'display:inline-block; width:100px;\'> English</span>"' ?> <?php
                            if ($lang=="en")
                            {
                                  echo "selected ";
                            }
                          ?>
                          value="?lang=en">English>
                          </option>
                        </select>
                    </li>
              </ul>
        </div><!-- /collapse -->
      </div><!-- /container -->
    </nav><!-- /navbar -->
</header>