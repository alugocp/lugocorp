<h1 id="partners" style="color:var(--blue)">Partners</h1>
<div class="partners-wrapper">
<?php
  $partners=json_decode(file_get_contents("data/partners.json"),true);
  foreach($partners as $i => $partner): ?>
    <img class="partner" src="<?php echo($partner["src"]);?>" title="<?php echo($partner["name"]);?>">
<?php endforeach ?>
<p>Unfortunately it's impossible to list all of our amazing partners on the front page. That's why we built this <a href="partners">partners page</a> to include everyone!</p>
</div>
