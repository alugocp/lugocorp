<h1 id="products" style="color:var(--gray1)">Products</h1>
<div class="wrapper3 override-small">
  <?php
    $products=json_decode(file_get_contents("data/products.json"),true);
    foreach($products as $i => $product): ?>
      <div class="product">
        <img class="product-logo" src="<?php echo($product["logo"]);?>">
        <?php foreach($product["text"] as $sentence){ echo($sentence." "); } ?>
      </div>
  <?php endforeach ?>
</div>
