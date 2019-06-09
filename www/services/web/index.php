<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LugoCorp - Web development</title>
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
          <img class="service-icon" src="../../res/icons/html.svg">
           Web development
        </h1>
        <img class="service-poster" src="../../res/website.png">
        <p>
          We do web dev here.
          Like, a lot of web dev.
        </p>
      </div>
      <div class="separator"></div>
      <div class="skills">
        <h1 id="tech">Technologies Used</h1>
        <div class="table">
          <div class="entry">WebAssembly</div>
          <div class="entry">WordPress</div>
          <div class="entry">Bootstrap</div>
          <div class="entry">Shiny R</div>
          <div class="entry">Flask</div>
          <div class="entry">MySQL</div>
          <div class="entry">PHP</div>
        </div>
      </div>
      <p>
        Here at LugoCorp we use a variety of technologies to bring the website of your dreams to life.
        Above you'll find listed a number of these technologies.
      </p>
      <div class="separator"></div>
      <div class="portfolio">
        <h1 id="portfolio">Portfolio</h1>
        <div class="wrapper2">
          <?php $portfolio=json_decode(file_get_contents("../../data/portfolio.json"),true);
          foreach($portfolio as $project):
            if($project["platform"]=="web"): ?>
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
