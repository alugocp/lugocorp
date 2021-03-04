<div class="navbar">
  <a href="/">
    <img class="icon" src="<?php echo($prefix);?>/res/lugocorp-hex.svg" title="Home">
  </a>
  <div>
    <?php foreach($nav as $k => $v):
      echo("<a href=\"".$v."\" title=\"".$k."\">".$k."</a>");
    endforeach ?>
  </div>
</div>
