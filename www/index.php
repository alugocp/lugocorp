<!DOCTYPE html>
<html>
  <head>
    <?php $prefix=".";?>
    <title>LugoCorp</title>
    <meta name="description" content="Need some software consultants in the DC area? LugoCorp has got you covered! Check out our products today">
    <meta name="keywords" content="lugocorp,software,software consultancy,tech consultants,lugo,alex lugo,software development,lugo corp,software consultant,software consulting,web development,mobile development,web,mobile,web design,mobile design,consulting,developers,software,tech">
    <meta name="robots" content="index,follow">
    <style><?php include("styles/front-page.css");?></style>
    <?php include("head.php");?>
  </head>
  <body>
    <?php
      $nav=array(
        "About"=>"#about","Products"=>"#products",
        "Services"=>"#services","Partners"=>"#partners",
        "Contact"=>"#contact"
      );
      include("navbar.php");
    ?>

    <!-- Splash -->
    <div class="welcome-wrapper">
      <div class="welcome">
        <img class="logo" src="res/lugocorp-logo.svg">
        <p><i>Design • Develop • Deploy</i></p>
        <p>
          Here at LugoCorp we put the client first
        </p>
      </div>
    </div>

    <div>
      <!-- About -->
      <div class="section" style="background-color:var(--gray1)">
        <div class="content">
          <h1 id="about" style="color:var(--blue)">About</h1>
          <p>
            We're a small software company based in College Park, Maryland.
            We provide web and mobile development for clients while we develop software products of our own.
            If you need any work done just contact us using the information found at the bottom of this page.
            We're always looking forward to working on new problems for new clients!
          </p>
          <p>
            At LugoCorp every employee is either a technologist, an artist or both.
            We believe we have the power and responsibility to change the world for the better through combining our collective talents.
            Whether it's migrating out-of-date industries to the digital world or developing the next generation of creative tools, people who work at LugoCorp are always making an impact.
          </p>
          <p>
            We train local and international programmers in various languages and frameworks to boost their confidence and coding skills.
            We've created a team that can handle any project or problem thrown their way - whether it's web and app development or collecting and processing large data sets.
            You can view our various team members on the <a href="team">team page</a>.
          </p>
        </div>
      </div>

      <!-- Products -->
      <div class="section" style="background-color:var(--blue)">
        <div class="content">
          <h1 id="products" style="color:var(--gray1)">Products</h1>
          <div class="wrapper3 override-small">
            <div class="product">
              <img class="product-logo" src="res/products/cairn.svg">
              <h2>Cairn</h2>
                Cairn is a simple automated web build script.
                Package your PHP projects into static pages with a single command!
              <p>
              </p>
              <a href="products/cairn">Find out more</a>
            </div>
            <!--<div class="product">
              <img class="product-logo" src="res/products/tiempos.svg">
              <h2>Tiempos</h2>
              <p>
                A timezones app for timezone enthusiasts and/or frequent fliers.
                This beta is currently only available for Android.
              </p>
              <a href="https://play.google.com/apps/testing/net.lugocorp.tiempos">Get the Beta</a>
            </div>
            <div class="product">
              <img class="product-logo" src="res/products/exposure.svg">
              <h2>Exposure Notes</h2>
              <p>
                We created a simple app to help you remember who's been going out to bars and such.
                Stay safe out there, the pandemic is far from over.
                This beta is currently only available for Android.
              </p>
              <a href="https://play.google.com/apps/testing/net.lugocorp.exposurenotes">Get the Beta</a>
            </div>-->
            <div class="product">
              <img class="product-logo" src="res/products/thoth-icon.svg">
              <h2>Thoth</h2>
              <p>
                Thoth is our procedural word generator framework.
                Its simple API allows you to generate novel, human-readable text for days on end!
              </p>
              <p>Launch will be announced soon</p>
              <!--<a href="products/thoth">Find out more</a>-->
              <!--<b>Coming soon!</b>-->
            </div>
            <div class="product">
              <img class="product-logo" src="res/products/argzilla.svg">
              <h2>Coming soon...</h2>
            </div>
          </div>
          <a class="products-link" href="products">See more</a>
        </div>
      </div>

      <!-- Services -->
      <div class="section">
        <div class="content">
          <h1 id="services" style="color:var(--blue)">Services</h1>
          <p>
            LugoCorp provides various software development and business-centric services to its customers.
            Below we have listed a few of our specialties.
            For inquiries into one of these services, please see our <span class="a-like" onclick="lugo.scroll('#contact')">contact</span> section.
          </p>
          <div class="wrapper3 override-small">
            <div class="service">
              <div class="service-top">
                <h2><img src="res/icons/html.svg"> Web development</h2>
              </div>
              <div class="service-bot">
                <span>
                  LugoCorp is primarily a software development firm.
                  We specialize in web and mobile solutions that match any of our clients' expectations.
                  If you're interested in hiring us for web development, click below.
                  You'll find more details on how we build our sites along with how to contact us.
                </span>
                <br>
                <a href="services/web">more</a>
              </div>
            </div>
            <div class="service">
              <div class="service-top">
                <h2><img src="res/icons/phone.svg"> Mobile development</h2>
              </div>
              <div class="service-bot">
                <span>
                  In addition to websites, LugoCorp also designs mobile applications.
                  We have accumulated 6 years of mobile development experience that we're excited to put to use for our clients.
                </span>
                <br>
                <a href="services/mobile">more</a>
              </div>
            </div>
            <div class="service">
              <div class="service-top">
                <h2><img src="res/icons/data-usage.svg"> Data analytics</h2>
              </div>
              <div class="service-bot">
                <span>
                  Every industry today is fueled by data.
                  Good business decisions are made when you can effectively analyze your market.
                  LugoCorp has the tools and experience you need to make the smart choice.
                </span>
                <br>
                <a href="services/data">more</a>
              </div>
            </div>
            <!--<div class="service">
              <div class="service-top">
                <h2><img src="res/icons/cloud.svg"> Cloud development</h2>
              </div>
              <div class="service-bot">
                <span>
                  We develop for several cloud hosted backend systems, including AWS and Heroku.
                  More information coming soon.
                </span>
              </div>
            </div>
            <div class="service">
              <div class="service-top">
                <h2><img src="res/icons/happy.svg"> Consulting</h2>
              </div>
              <div class="service-bot">
                <span>
                  We provide consulting services for systems design and technical literacy.
                  It doesn't matter if you want to review possible development pathways for your next project or if you need to translate technical details to management.
                  We've got you covered!
                  More information coming soon.
                </span>
              </div>
            </div>-->
          </div>
        </div>
      </div>

      <!-- Partners -->
      <div class="section" style="background-color:var(--blue)">
        <div class="content">
          <div class="partners">
            <h1 id="partners" style="color:var(--blue)">Partners</h1>
            <div class="partners-wrapper">
              <img class="partner" src="res/partners/tavolo.jpg" title="Tavolo Solutions, LLC">
              <img class="partner" src="res/partners/mehta.png" title="Mehta India">
              <img class="partner" src="res/partners/ramirez.svg" title="Victor Ramirez Law, LLC">
              <img class="partner" src="res/partners/tranzed.png" title="Tranzed Academy">
              <p>Unfortunately it's impossible to list all of our amazing partners on the front page. That's why we built this <a href="partners">partners page</a> to include everyone!</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Contact -->
      <div class="section" style="background-color:var(--gray1)">
        <div class="content contact">
          <h1 id="contact" style="color:var(--blue)">Contact</h1>
          <p>
            Feel free to contact us if you have any questions or would like to know more.
          </p>
          <div class="icons-wrapper">
            <div class="icons-col">
              <a href="https://github.com/lugocorp">
                <img title="GitHub" src="res/icons/github.svg"><br>
                <span>LugoCorp, LLC</span>
              </a><br>
            </div>
            <div class="icons-col">
              <a href="https://linkedin.com/company/lugocorp">
                <img title="LinkedIn" src="res/icons/linkedin.svg"><br>
                <span>LugoCorp</span>
              </a>
            </div>
            <div class="icons-col">
              <a href="mailto:alugocp@gmail.com">
                <img title="Email" src="res/icons/mail.svg"><br>
                <span>alugocp@gmail.com</span>
              </a>
            </div>
            <div class="icons-col">
              <a href="https://instagram.com/lugocorpllc">
                <img title="Instagram" src="res/icons/instagram.svg"><br>
                <span>@lugocorpllc</span>
              </a>
            </div>
            <div class="icons-col">
              <a href="https://twitter.com/lugocorpllc/">
                <img title="Twitter" src="res/icons/twitter.svg"><br>
                <span>@lugocorpllc</span>
              </a><br>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include("footer.php");?>
  </body>
</html>
