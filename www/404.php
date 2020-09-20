<!DOCTYPE html>
<html>
  <head>
    <?php $prefix=".";?>
    <title>Page Not Found</title>
    <?php include($prefix."/head.php");?>
    <style><?php include($prefix."/styles/404.css");?></style>
  </head>
  <body>
    <?php
      $nav=array();
      include($prefix."/navbar.php");
    ?>

    <!-- 404 message -->
    <div class="wrapper-404">
      <div class="msg-404">
        <h1>404</h1>
        <p>The specified page does not exist</p>
      </div>
    </div>

    <!-- Footer -->
    <?php include($prefix."/footer.php");?>
  </body>
</html>
