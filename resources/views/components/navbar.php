 
  <nav role="navigation" id="navbar" class="navbar-fixed-top navbar-default">
    <div class="container-fluid col-md-1"></div>
    <div class="container-fluid col-md-10">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="img/logo_main.png" alt="main enbit.dk logo"></a><!-- LOGO -->
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-right navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a id="topLink" href="#"><?php echo $lang[$la]['nav']['home']; ?></a></li>
          <li><a id="servicesLink" href="#"><?php echo $lang[$la]['nav']['services']; ?></a></li>
          <li class="hideme"><a id="portfolioLink" href="#"><?php echo $lang[$la]['nav']['portfolio']; ?></a></li>
          <li><a id="aboutLink" href="#"><?php echo $lang[$la]['nav']['about']; ?></a></li>
          <li><a id="contactLink" href="#"><?php echo $lang[$la]['nav']['contact']; ?></a></li>
            <li><hr class="dividerr"></li>
          <li><a href="resources/changelang.php?lang=<?php echo $la; ?>"><?php echo $lang[$la]['nav']['lang']; ?></a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
    <div class="container-fluid col-md-1"></div>
  </nav>
<!--  <div class="navbar navbar-default"></div> -->
