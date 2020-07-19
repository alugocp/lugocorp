<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LugoCorp - Mobile development</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../res/favicon.ico">
    <link rel="stylesheet" href="../../styles/main.css">
    <link rel="stylesheet" href="../../styles/alternate.css">
    <link rel="stylesheet" href="../../styles/services.css">
    <script src="../../scripts/jquery.min.js"></script>
    <script src="../../scripts/lugo.js"></script>
  </head>
  <body class="narrow">
    <?php $prefix="../../";
      $nav=array(
        "Tech"=>"#tech","Portfolio"=>"#portfolio"
      );
      include("../../navbar.php");?>
    <div class="narrow-content">
      <div class="intro-wrapper">
        <h1>
          <img class="service-icon" src="../../res/icons/phone.svg">
           Mobile development
        </h1>
        <img class="service-poster" src="../../res/icons/phone.svg">
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
            <h2>Uh-oh</h2>
            <span>
              Looks like we haven't built many apps yet.
              We're working on it, just stop by again later!
            </span>
          </div>
        </div>
      </div>
    </div>
    <?php include("../../footer.php");?>
  </body>
</html>
