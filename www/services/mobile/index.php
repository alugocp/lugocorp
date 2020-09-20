<!DOCTYPE html>
<html>
  <head>
    <?php $prefix="../..";?>
    <title>LugoCorp - Mobile development</title>
    <?php include($prefix."/head.php");?>
    <style><?php include($prefix."/styles/alternate.css");?></style>
    <style><?php include($prefix."/styles/services.css");?></style>
  </head>
  <body class="narrow">
    <?php
      $nav=array(
        "Tech"=>"#tech","Portfolio"=>"#portfolio"
      );
      include($prefix."/navbar.php");?>
    <div class="narrow-content">
      <div class="intro-wrapper">
        <h1>
          <img class="service-icon" src="<?php echo($prefix);?>/res/icons/phone.svg">
           Mobile development
        </h1>
        <img class="service-poster" src="<?php echo($prefix);?>/res/icons/phone.svg">
        <p>
          Yeah websites are cool, but so are mobile apps.
          We mostly specialize in Android development but are expanding into cross-platform mobile development.
          The digital world has continued to expand as more and more people gain access to mobile devices.
          We recognize the immense potential market open to mobile apps thanks to users around the world.
        </p>
      </div>
      <div class="separator"></div>
      <div class="skills">
        <h1 id="tech">Technologies Used</h1>
        <div class="table">
          <div class="entry">Java</div>
          <div class="entry">Kotlin</div>
          <div class="entry">Apache Cordova</div>
          <div class="entry">Dart/Flutter</div>
          <div class="entry">Qt</div>
          <div class="entry">React Native</div>
          <div class="entry">Xamarin Forms</div>
          <div class="entry">Corona</div>
        </div>
      </div>
      <p>
        Yeah, we've got some experience in mobile development.
        The list above represents the technologies we've used the most here at LugoCorp.
        If your prefered language or engine isn't listed up here then let us know, we might already have it on our reading list.
      </p>
      <div class="separator"></div>
      <div class="portfolio">
        <h1 id="portfolio">Portfolio</h1>
        <div class="wrapper2">
          <div class="past-project">
            <h2>Exposure Notes</h2>
            <span>
              We created an app with React Native to help you remember when neighbors went out to beaches in a pandemic.
              Simply log when they got back and whether or not they're tested, and you'll know if it's safe to have them over.
              Find it on the <a href="https://play.google.com/apps/testing/net.lugocorp.exposurenotes">Google Play store</a> and Apple App Store (coming soon).
            </span>
          </div>
          <div class="past-project">
            <h2>Tiempos</h2>
            <span>
              We're currently working on an app using Dart's Flutter framework.
              It's designed to keep track of time in major cities around the world.
              Try our beta on the <a href="https://play.google.com/apps/testing/net.lugocorp.tiempos">Google play store</a>.
            </span>
          </div>
        </div>
      </div>
    </div>
    <?php include($prefix."/footer.php");?>
  </body>
</html>
