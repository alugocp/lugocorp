<h1 id="partners" style="color:var(--blue)">Partners</h1>
<span class="partners-wrapper">
<?php
  $partners=json_decode(file_get_contents("data/partners.json"),true);
  foreach($partners as $i => $partner): ?>
    <img class="partner" src="<?php echo($partner["src"]);?>" title="<?php echo($partner["name"]);?>">
<?php endforeach ?>
</span>
