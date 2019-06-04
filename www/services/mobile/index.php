<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LugoCorp - Mobile development</title>
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
          <img class="service-icon" src="../../res/icons/html.svg">
           Mobile development
        </h1>
        <img class="service-poster" src="../../res/website.png">
        <p>
          We make a lot of apps.
          We mostly specialize in Android development but we are expanding into cross-platform mobile development.
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
          <div class="entry">Corona</div>
        </div>
      </div>
      <p>
        Yeah, we've got some experience in mobile development.
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
