<!DOCTYPE html>
<html>
  <head>
    <?php $prefix="../..";?>
    <title>LugoCorp - Data analytics</title>
    <?php include($prefix."/head.php");?>
    <style><?php include($prefix."/styles/alternate.css");?></style>
    <style><?php include($prefix."/styles/services.css");?></style>
  </head>
  <body class="narrow">
    <?php
      $nav=array(
        "Tech"=>"#tech","Portfolio"=>"#portfolio"
      );
      include($prefix."/navbar.php");?>
    <div class="narrow-content">
      <div class="intro-wrapper">
        <h1>
          <img class="service-icon" src="<?php echo($prefix);?>/res/icons/data-usage.svg">
           Data analytics
        </h1>
        <img class="service-poster" src="<?php echo($prefix);?>/res/icons/data-usage.svg">
        <p>
          At LugoCorp we understand the power in data.
          That's why we dedicate ourselves to building robust, efficient webscrapers that get us the information we need.
          Of course what's data if you can't interpret it?
          We also develop solutions to visualize and analyze results so you can run your business smarter, faster, and more efficient.
        </p>
      </div>
      <div class="separator"></div>
      <div class="skills">
        <h1 id="tech">Technologies Used</h1>
        <div class="table">
          <div class="entry">Python</div>
          <div class="entry">Selenium</div>
          <div class="entry">R</div>
          <div class="entry">BeautifulSoup</div>
          <div class="entry">Cheerio</div>
        </div>
      </div>
      <p>
        There are a variety of ways to build webscrapers and data analysis pipelines.
        You'll find a few of the tools we like to use listed above.
        We use the most robust data collection and analysis tools to gain unmatched insight into the world around us.
        You can gain that insight by partnering with LugoCorp.
      </p>
      <div class="separator"></div>
      <div class="portfolio">
        <h1 id="portfolio">Portfolio</h1>
        <div class="wrapper2">
          <div class="past-project">
            <h2>Uh-oh</h2>
            <span>
              We're not ready to talk about our data collection projects yet!
              Try checking back in later :)
            </span>
          </div>
        </div>
      </div>
    </div>
    <?php include($prefix."/footer.php");?>
  </body>
</html>
