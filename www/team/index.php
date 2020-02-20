<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LugoCorp - Team</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../res/favicon.ico">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/alternate.css">
    <link rel="stylesheet" href="../styles/team.css">
    <script src="../scripts/jquery.min.js"></script>
    <script src="../scripts/lugo.js"></script>
  </head>
  <body class="narrow">
    <?php $prefix="../";
      $nav=array(
        "Intro"=>"#intro","Members"=>"#members"
      );
      include("../navbar.php");?>
    <div class="narrow-content">
      <h1 id="intro">Intro</h1>
      <p>
      Things about the team
      </p>
      <div class="separator"></div>
      <h1 id="members">Members</h1>
      <div class = "people override-small">
        <div class = "person">
          <img class="propic" src="../res/people/alex-lugo.jpg">
          <h2>Alex Lugo</h2>
          <h3>CEO</h3>
        </div>

        <div class = "person">
          <img class="propic" src="../res/people/placeholder.png">
          <h2>Samrat Somana</h2>
          <h3>Web scraping</h3>
        </div>

        <div class = "person">
          <img class="propic" src="../res/people/placeholder.png">
          <h2>Damien Lutrin</h2>
          <h3>Mobile development</h3>
        </div>

        <div class = "person">
          <img class="propic" src="../res/people/placeholder.png">
          <h2>Kayvan Fouladi</h2>
          <h3>Web development</h3>
        </div>

        <div class = "person">
          <img class="propic" src="../res/people/naomi-stewart.jpg">
          <h2>Naomi Stewart</h2>
          <h3>Backend development</h3>
        </div>

      </div>
    </div>

    <?php include("../footer.php");?>
  </body>
</html>
