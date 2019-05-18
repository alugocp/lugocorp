<div class="lugo-navbar">
  <a href="/">
    <img class="icon" src="<?php echo($prefix);?>res/lugocorp-hex.svg">
  </a>
  <div>
    <?php foreach($nav as $k => $v): ?>
      <span class="a-like" onclick="lugo.scroll('<?php echo($v);?>')">
        <?php echo($k);?>
      </span>
    <?php endforeach ?>
  </div>
</div>
