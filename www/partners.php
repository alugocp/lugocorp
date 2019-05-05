<h1 style="color:var(--blue)">Partners</h1>
<!--<img class="partner" src="res/partners/ramirez.svg" title="Victor Ramirez Law LLC">-->
<?php
  $partners=json_decode(file_get_contents("data/partners.json"),true);
  foreach($partners as $i => $partner): ?>
    <img class="partner" src="<?php echo($partner["src"]);?>" title="<?php echo($partner["name"]);?>">
  <?php endforeach ?>
