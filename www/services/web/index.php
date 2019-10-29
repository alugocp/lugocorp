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
        <img class="service-poster" src="../../res/icons/html.svg">
        <p>
          We do web dev here.
          Like, a lot of web dev.
          LugoCorp got started on web development for local customers, and we're excited to expand this service to a wider range of clientelle.
          We can design and develop front-end UIs to amaze your customers and back-end systems that keep your business running smoothly.
          Whether you've got a style guide or not we can help develop your brand in the digital world.
          Our mixed team of designers, artists and coders are ready to help you develop the website of your dreams!
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
          <div class="entry">Flask/Jinja</div>
          <div class="entry">MySQL</div>
          <div class="entry">PHP</div>
          <div class="entry">Node.js</div>
          <div class="entry">Pug</div>
        </div>
      </div>
      <p>
        Here at LugoCorp we use a variety of technologies to bring the website of your dreams to life.
        Above you'll find listed a number of these technologies.
        If you're not familiar with any of these technologies don't worry, that's our job!
        We just like to let people know what our stack may look like.
        If you do have a preference for which technologies we use for your product then go ahead and let us know.
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
