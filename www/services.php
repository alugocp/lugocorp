<h1 style="color:var(--blue)">Services</h1>
<?php
  $services=json_decode(file_get_contents("data/services.json"),true);
  foreach($services as $i => $service): ?>
    <div class="service">
      <div class="service-top">
        <h1><img src="<?php echo($service["icon"]);?>"> <?php echo($service["name"]);?></h1>
      </div>
      <div class="service-bot">
        <?php foreach($service["text"] as $sentence){
          echo($sentence." ");
        }
        if($service["link"]){
          echo("<br><a href=\"".$service["link"]."\">more</a>");
        } ?>
      </div>
    </div>
<?php endforeach ?>
