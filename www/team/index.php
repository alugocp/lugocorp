<!DOCTYPE html>
<html>
  <head>
    <?php $prefix="..";?>
    <title>LugoCorp - Team</title>
    <?php include($prefix."/head.php");?>
    <style><?php include($prefix."/styles/alternate.css");?></style>
    <style><?php include($prefix."/styles/team.css");?></style>
  </head>
  <body class="narrow">
    <?php
      $nav=array(
        "Current"=>"#current",
        "Past"=>"#past"
      );
      include($prefix."/navbar.php");?>
    <div class="narrow-content">
      <h1 id="current">Current</h1>
      <p>
        These are the people who currently work on various teams at LugoCorp.
      </p>
      <div class="people override-small">
        <div class="person">
          <img class="propic" src="<?php echo($prefix);?>/res/people/alex-lugo.jpeg">
          <h2>Alex Lugo</h2>
          <h3>Founder</h3>
          <h3>CEO</h3>
        </div>

        <div class="person">
          <img class="propic" src="<?php echo($prefix);?>/res/people/samrat-somanna.jpg">
          <h2>Samrat Somanna</h2>
          <h3>Web scraping</h3>
          <h3>Python and C++</h3>
          <h3>Flutter development</h3>
        </div>

        <div class="person">
          <img class="propic" src="<?php echo($prefix);?>/res/people/damien-lutrin.png">
          <h2>Damien Lutrin</h2>
          <h3>React Native</h3>
          <h3>JS development</h3>
        </div>

        <div class="person">
          <img class="propic" src="<?php echo($prefix);?>/res/people/chris-martinez.jpg">
          <h2>Chris Martinez</h2>
          <h3>Frontend development</h3>
          <h3>C# with Xamarin</h3>
          <h3>Flutter development</h3>
        </div>

        <div class="person">
          <img class="propic" src="<?php echo($prefix);?>/res/people/naomi-stewart.jpg">
          <h2>Naomi Stewart</h2>
          <h3>JS development</h3>
          <h3>Frontend development</h3>
        </div>

        <div class="person">
          <img class="propic" src="<?php echo($prefix);?>/res/people/placeholder.png">
          <h2>Saman Jabari</h2>
          <h3>JS development</h3>
        </div>

        <div class="person">
          <img class="propic" src="<?php echo($prefix);?>/res/people/nikita-krupin.jpg">
          <h2>Nikita Krupin</h2>
          <h3>Software engineering</h3>
        </div>

        <div class="person">
          <img class="propic" src="<?php echo($prefix);?>/res/people/laudan-nikoobakht.jpg">
          <h2>Laudan Nikoobakht</h2>
          <h3>Frontend development</h3>
        </div>
      </div>

      <hr class="separator"/>

      <h1 id="past">Past</h1>
      <p>
        These are the people who have worked on our products in the past and are currently working elsewhere.
      </p>
      <div class="people override-small">
        <div class="person">
          <img class="propic" src="<?php echo($prefix);?>/res/people/placeholder.png">
          <h2>Kayvan Fouladi</h2>
          <h3>Frontend development</h3>
        </div>

        <div class="person">
          <img class="propic" src="<?php echo($prefix);?>/res/people/eric-robertson.jpg">
          <h2>Eric Robertson</h2>
          <h3>C# with Xamarin</h3>
        </div>

        <div class="person">
          <img class="propic" src="<?php echo($prefix);?>/res/people/rukaiya-anwar.png">
          <h2>Rukaiya Anwar</h2>
          <h3>Frontend development</h3>
        </div>
      </div>
    </div>

    <?php include($prefix."/footer.php");?>
  </body>
</html>
