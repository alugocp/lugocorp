<h1 id="services" style="color:var(--blue)">Services</h1>
<p>
  LugoCorp provides various software development and business-centric services to its customers.
  Below we have listed a few of our specialties.
  For inquiries into one of these services, please see our <span class="a-like" onclick="lugo.scroll('#contact')">contact</span> section.
</p>
<div class="wrapper3 override-small">
  <?php
    $services=json_decode(file_get_contents("data/services.json"),true);
    foreach($services as $i => $service): ?>
      <div class="service">
        <div class="service-top">
          <h2><img src="<?php echo($service["icon"]);?>"> <?php echo($service["name"]);?></h2>
        </div>
        <div class="service-bot">
          <?php foreach($service["text"] as $sentence){
            echo($sentence." ");
          }
          if(array_key_exists("link",$service)){
            echo("<br><a href=\"".$service["link"]."\">more</a>");
          } ?>
        </div>
      </div>
  <?php endforeach ?>
</div>
