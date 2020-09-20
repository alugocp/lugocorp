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
        <a href="#topic-utilities">Utilities</a>
        <a href="#topic-marketing">Marketing</a>
        <a href="#topic-activism">Activism</a>
        <a href="#topic-datascience">Data Science</a>
        <a href="#topic-management">Management</a>
      </div>

      <hr class="separator"/>

      <h1 id="products">Products</h1>
      <h1 class="topic" id="topic-health">Health</h1>
      <!-- Ergonomicon -->
      <h2>Coming soon...</h2>
      <!--<div class="product">
        <div><img src="<?php echo($prefix);?>/res/products/exposure.svg"/></div>
        <div>
          <h2>Exposure Notes</h2>
          <span>
            Viral pandemics are fairly scary.
            In lots of instances you don't know who might be infected.
            But in lots of other instances you can tell when someone's been going out to high-risk places.
            This app allows you to keep track of those around you who have been tested or gone out, so that you can count to two weeks and see if they become symptomatic.
            This product stores all the data you enter locally on your device, and it does not store any identifying information apart from someone's name.
          </span>
        </div>
      </div>-->

      <h1 class="topic" id="topic-linguistics">Linguistics</h1>
      <!-- Pegasus -->
      <div class="product">
        <div><img src="<?php echo($prefix);?>/res/products/thoth-icon.svg"/></div>
        <div>
          <h2>Thoth</h2>
          <span>
            Coming soon...
          </span>
        </div>
      </div>

      <h1 class="topic" id="topic-development">Development</h1>
      <!-- FeatherWheel, Overflow, Slime, Argzilla, Swamp, Quetzal -->
      <div class="product">
        <div><img src="<?php echo($prefix);?>/res/products/cairn.svg"/></div>
        <div>
          <h2>Cairn</h2>
          <span>
            Cairn allows you to package your PHP projects into a static multi-page website.
            It makes use of Bash automation to handle all the index.php files in your project.
            We developed it to use across our internal and client sites that use PHP for templating.
          </span>
        </div>
      </div>

      <h1 class="topic" id="topic-utilities">Utilities</h1>
      <!--<div class="product">
        <div><img src="<?php echo($prefix);?>/res/products/tiempos.svg"/></div>
        <div>
          <h2>Tiempos</h2>
          <span>
            Tiempos is an app to help you coordinate between timezones.
            Keep track of local time in your favorite cities around the globe with Tiempos!
          </span>
        </div>
      </div>-->
      <h2>Coming soon...</h2>

      <h1 class="topic" id="topic-marketing">Marketing</h1>
      <!-- SEOda, Divine -->
      <h2>Coming soon...</h2>

      <h1 class="topic" id="topic-activism">Activism</h1>
      <!-- Email app thing -->
      <h2>Coming soon...</h2>

      <h1 class="topic" id="topic-datascience">Data Science</h1>
      <!-- DataLemon -->
      <h2>Coming soon...</h2>

      <h1 class="topic" id="topic-management">Management</h1>
      <!-- Bamboo -->
      <h2>Coming soon...</h2>

    </div>
    <?php include($prefix."/footer.php");?>
  </body>
</html>
