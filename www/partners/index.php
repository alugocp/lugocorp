<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LugoCorp - Partners</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../res/favicon.ico">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/alternate.css">
    <link rel="stylesheet" href="../styles/partners.css">
    <script src="../scripts/jquery.min.js"></script>
    <script src="../scripts/lugo.js"></script>
  </head>
  <body class="narrow">
    <?php $prefix="../";
      $nav=array(
        "Intro"=>"#intro","Partners"=>"#partners"
      );
      include("../navbar.php");?>
    <div class="narrow-content">
      <h1 id="intro">Introduction</h1>
      <p>
        Good business relationships help keep LugoCorp happy and healthy.
        Without our partners we wouldn't be able to change the world for the better,
        so we decided to dedicate an entire page just for them.
      </p>
      <div class="separator"></div>
      <h1 id="partners">Partners list</h1>
      <div class="partners-categories override-small">
        <div>
          <h1>Design</h1>
          <img src="../res/partners/tavolo.jpg" title="Tavolo Solutions">
        </div>
        <div>
          <h1>Education</h1>
          <img src="../res/partners/nurostream.png" title="NuroStream, LLC">
          <img src="../res/partners/tranzed.png" title="Tranzed Academy">
          <!--<img src="../res/partners/edhaus.png" title="Edhaus">-->
        </div>
        <div>
          <h1>Law</h1>
          <img src="../res/partners/ramirez.svg" title="Victor Ramirez Law, LLC">
        </div>
        <div>
          <h1>Manufacturing</h1>
          <img src="../res/partners/mehta.png" title="Mehta India">
        </div>
        <div>
          <h1>Cybersecurity</h1>
          <img src="../res/partners/haystack.svg" title="Haystack Solutions">
        </div>
        <!--<div>
          <h1>Fashion</h1>
          <img src="../res/partners/enly-logo.png" title="Enly">
        </div>-->
      </div>
    </div>
    <?php include("../footer.php");?>
  </body>
</html>
