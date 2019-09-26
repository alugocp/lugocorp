<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LugoCorp</title>
    <link rel="icon" href="res/favicon.ico">
    <link rel="stylesheet" href="styles/main.css">
    <script src="scripts/jquery.min.js"></script>
    <script src="scripts/lugo.js"></script>
  </head>
  <body>
    <?php
      $prefix="";
      $nav=array(
        "Services"=>"#services","Products"=>"#products",
        "Partners"=>"#partners","About"=>"#about",
        "Contact"=>"#contact"
      );
      include("navbar.php");
      include("welcome.php");
    ?>
    <div>
      <?php
      $sections=json_decode(file_get_contents("data/sections.json"),true);
      foreach($sections as $i => $s): ?>

        <div class="section" style="<?php echo("background-color:var(--".$s["color"].")");?>">
          <div class="content">
            <?php include($s["file"]) ?>
          </div>
        </div>

      <?php endforeach ?>
    </div>
    <?php include("footer.php");?>
  </body>
</html>
