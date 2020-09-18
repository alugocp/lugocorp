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
        "Current"=>"#current",
        "Past"=>"#past"
      );
      include("../navbar.php");?>
    <div class="narrow-content">
      <h1 id="current">Current</h1>
      <p>
        These are the people who currently work on various teams at LugoCorp.
      </p>
      <div class="people override-small">
        <div class="person">
          <img class="propic" src="../res/people/alex-lugo.jpg">
          <h2>Alex Lugo</h2>
          <h3>Founder</h3>
          <h3>CEO</h3>
        </div>

        <div class="person">
          <img class="propic" src="../res/people/samrat-somanna.jpg">
          <h2>Samrat Somanna</h2>
          <h3>Web scraping</h3>
          <h3>Python and C++</h3>
        </div>

        <div class="person">
          <img class="propic" src="../res/people/damien-lutrin.png">
          <h2>Damien Lutrin</h2>
          <h3>React Native</h3>
          <h3>Lua and C++</h3>
        </div>

        <div class="person">
          <img class="propic" src="../res/people/chris-martinez.jpg">
          <h2>Chris Martinez</h2>
          <h3>Frontend development</h3>
          <h3>C# with Xamarin</h3>
        </div>

        <div class="person">
          <img class="propic" src="../res/people/naomi-stewart.jpg">
          <h2>Naomi Stewart</h2>
          <h3>JS development</h3>
        </div>

        <div class="person">
          <img class="propic" src="../res/people/placeholder.png">
          <h2>Saman Jabari</h2>
          <h3>JS development</h3>
        </div>

        <div class="person">
          <img class="propic" src="../res/people/nikita-krupin.jpg">
          <h2>Nikita Krupin</h2>
          <h3>Software engineering</h3>
        </div>

        <div class="person">
          <img class="propic" src="../res/people/laudan-nikoobakht.jpg">
          <h2>Laudan Nikoobakht</h2>
          <h3>Frontend development</h3>
        </div>

        <div class="person">
          <img class="propic" src="../res/people/niharika-sahay.jpg">
          <h2>Niharika Sahay</h2>
          <h3>Frontend development</h3>
          <h3>Scripting</h3>
        </div>
      </div>

      <hr class="separator"/>

      <h1 id="past">Past</h1>
      <p>
        These are the people who have worked on our products in the past and are currently working elsewhere.
      </p>
      <div class="people override-small">
        <div class="person">
          <img class="propic" src="../res/people/placeholder.png">
          <h2>Kayvan Fouladi</h2>
          <h3>Frontend development</h3>
        </div>

        <div class="person">
          <img class="propic" src="../res/people/eric-robertson.jpg">
          <h2>Eric Robertson</h2>
          <h3>C# with Xamarin</h3>
        </div>

        <div class="person">
          <img class="propic" src="../res/people/rukaiya-anwar.png">
          <h2>Rukaiya Anwar</h2>
          <h3>Frontend development</h3>
        </div>
      </div>
    </div>

    <?php include("../footer.php");?>
  </body>
</html>
