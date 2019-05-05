<h1 style="color:var(--gray1)">Products</h1>
<?php
  $products=json_decode(file_get_contents("data/products.json"),true);
  foreach($products as $i => $product): ?>
    <div class="product">
      <img class="product-logo" src="<?php echo($product["logo"]);?>">
      <!--<h1><?php echo($product["name"]);?></h1>-->
      <?php foreach($product["text"] as $sentence){
        echo($sentence." ");
      } ?>
    </div>
<?php endforeach ?>
