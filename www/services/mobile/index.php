<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LugoCorp - Mobile development</title>
    <link rel="icon" href="../../res/favicon.ico">
    <link rel="stylesheet" href="../../styles/main.css">
    <link rel="stylesheet" href="../../styles/alternate.css">
    <link rel="stylesheet" href="../../styles/services.css">
    <link rel="stylesheet" href="../../styles/alt-small.css">
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
          <div class="entry">NativeScript</div>
          <div class="entry">Qt</div>
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
          <?php $portfolio=json_decode(file_get_contents("../../data/portfolio.json"),true);
          foreach($portfolio as $project):
            if($project["platform"]=="mobile"): ?>
              <div class="past-site">
                <?php foreach($project["text"] as $sentence){ echo($sentence." "); } ?>
              </div>
            <?php endif ?>
          <?php endforeach?>
        </div>
      </div>
    </div>
    <?php include("../../footer.php");?>
  </body>
</html>
