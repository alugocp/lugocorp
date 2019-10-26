<div class="lugo-navbar">
  <a href="/">
    <img class="icon" src="<?php echo($prefix);?>res/lugocorp-hex.svg" title="Home">
  </a>
  <div>
    <?php foreach($nav as $k => $v): ?>
      <span class="a-like" onclick="lugo.scroll('<?php echo($v);?>')" title="<?php echo($k);?>">
        <?php echo($k);?>
      </span>
    <?php endforeach ?>
  </div>
</div>
