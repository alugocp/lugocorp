<!DOCTYPE html>
<html>
  <head>
    <?php $prefix="..";?>
    <title>LugoCorp - Products</title>
    <?php include($prefix."/head.php");?>
    <style><?php include($prefix."/styles/alternate.css");?></style>
    <style><?php include($prefix."/styles/products.css");?></style>
  </head>
  <body class="narrow">
    <?php
      $nav=array(
        "Topics"=>"#topics",
        "Products"=>"#products"
      );
      include($prefix."/navbar.php");?>
    <div class="narrow-content">
      <h1 id="topics">Topics</h1>
      <p>
        Our products intersect with various other fields, so we've sorted them here by topic.
        Pick one that best interests you and take a look around!
        We've also got a few open beta and unannounced items up here.
      </p>
      <div class="topics">
        <a href="#topic-health">Health</a>
        <a href="#topic-linguistics">Linguistics</a>
        <a href="#topic-development">Development</a>
        <a href="#topic-gaming">Gaming</a>
      </div>

      <hr class="separator"/>

      <h1 id="products">Products</h1>
      <h1 class="topic" id="topic-health">Health</h1>
      <!-- Ergonomicon -->
      <h2>Coming soon...</h2>

      <h1 class="topic" id="topic-linguistics">Linguistics</h1>
      <!-- Pegasus -->
      <div class="product">
        <div><img src="<?php echo($prefix);?>/res/products/thoth-icon.svg"/></div>
        <div>
          <h2>Thoth</h2>
          <span>
            Thoth is a C++ library for language and word generation.
            You can use it to produce endless human-readable strings in a procedural language.
            Integrate it with your own projects as a C++ library or use it as a standalone command line tool!
            <a href="products/thoth">See more</a>
          </span>
        </div>
      </div>

      <h1 class="topic" id="topic-development">Development</h1>
      <!-- FeatherWheel, Overflow, Slime, Quetzal, Arcana -->
      <!--<div class="product">
        <div><img src="<?php echo($prefix);?>/res/products/moonshot.svg"/></div>
        <div>
          <h2>Moonshot</h2>
          <span>
            Coming soon
          </span>
        </div>
      </div>-->
      <div class="product">
        <div><img src="<?php echo($prefix);?>/res/products/cairn.svg"/></div>
        <div>
          <h2>Cairn</h2>
          <span>
            Cairn allows you to package your PHP projects into a static multi-page website.
            It makes use of Bash automation to handle all the index.php files in your project.
            We developed it to use across our internal and client sites that use PHP for templating.
            <a href="products/cairn">See more</a>
          </span>
        </div>
      </div>
      <div class="product">
        <div><img src="<?php echo($prefix);?>/res/products/argzilla.svg"/></div>
        <div>
          <h2>Argzilla</h2>
          <span>
            Argzilla is an easy to use partial evaluator for creating argparse functionality.
            It allows you to easily define command line arguments in a JSON file and then creates code to parse those inputs.
            Argzilla supports various languages including C++, Java, Ruby, Python, Lua and Bash.
            <a href="products/argzilla">See more</a>
          </span>
        </div>
      </div>

      <h1 class="topic" id="topic-gaming">Gaming</h1>
      <div class="product">
        <div><img src="<?php echo($prefix);?>/res/products/budgie.svg"/></div>
        <div>
          <h2>Budgie</h2>
          <span>
            Budgie is a lightweight game development framework for HTML5 browers.
            Use our command line tool to start writing a JavaScript game in no time!
            Budgie handles basic game functions such as event handling, asset loading and a sprite system.
            The rest is up to you!
            <!--<a href="https://lugocorp.github.io/budgie/">See more</a>-->
          </span>
        </div>
      </div>
      <div class="product">
        <div><img src="<?php echo($prefix);?>/res/products/supercharge.png"/></div>
        <div>
          <h2>Supercharge</h2>
          <span>
            Supercharge is a Minecraft mod that speeds up the core experience.
            It boosts enemy spawn and drop rates, and enemy kills drop 4x as much experience.
            It also supercharges ore placement in world generation, so you won't have to spend a long time looking for resources underground.
            <a href="https://github.com/alugocp/supercharge">View on GitHub</a>
          </span>
        </div>
      </div>

    </div>
    <?php include($prefix."/footer.php");?>
  </body>
</html>
