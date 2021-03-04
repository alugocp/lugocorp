<!DOCTYPE html>
<html>
  <head>
    <?php $prefix="..";?>
    <meta charset="utf-8">
    <title>LugoCorp - Partners</title>
    <?php include($prefix."/head.php");?>
    <style><?php include($prefix."/styles/alternate.css");?></style>
    <style><?php include($prefix."/styles/partners.css");?></style>
  </head>
  <body class="narrow">
    <?php
      $nav=array(
        "Intro"=>"#intro","Partners"=>"#partners"
      );
      include($prefix."/navbar.php");?>
    <div class="narrow-content">
      <h1 id="intro">Introduction</h1>
      <p>
        Here at LugoCorp we pride ourselves on providing critical organizations with software that's supportive of their needs.
        We build scripts and websites for educators, civil rights, veterans' affairs and mutual aid groups.
        Without our partners we wouldn't be able to change the world for the better, so we decided to dedicate an entire page just for them.
      </p>
      <div class="separator"></div>
      <h1 id="partners">Partners list</h1>
      <div class="partners-categories override-small">
        <div>
          <h1>Design</h1>
          <img src="<?php echo($prefix);?>/res/partners/tavolo.png" title="Tavolo Solutions">
        </div>
        <div>
          <h1>Cybersecurity</h1>
          <img src="<?php echo($prefix);?>/res/partners/haystack.svg" title="Haystack Solutions">
        </div>
        <div>
          <h1>Law</h1>
          <img src="<?php echo($prefix);?>/res/partners/ramirez.svg" title="Victor Ramirez Law, LLC">
        </div>
        <div>
          <h1>Education</h1>
          <img src="<?php echo($prefix);?>/res/partners/nurostream.png" title="NuroStream, LLC">
          <img src="<?php echo($prefix);?>/res/partners/tranzed.png" title="Tranzed Academy">
          <img src="<?php echo($prefix);?>/res/partners/edhaus.png" title="Edhaus">
        </div>
        <div>
          <h1>Workforce</h1>
          <img src="<?php echo($prefix);?>/res/partners/mwa.png" title="Maryland Workforce Alliance">
        </div>
      </div>
    </div>
    <?php include($prefix."/footer.php");?>
  </body>
</html>
