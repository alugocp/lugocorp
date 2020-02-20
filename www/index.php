<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LugoCorp</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description" content="Need some software consultants in the DC area? LugoCorp has got you covered! Check out our products today">
    <meta name="keywords" content="lugocorp,software,software consultancy,tech consultants,lugo,alex lugo,software development,lugo corp">
    <meta name="robots" content="index,follow">
    <link rel="icon" href="res/favicon.ico">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/front-page.css">
    <script src="scripts/jquery.min.js"></script>
    <script src="scripts/lugo.js"></script>
  </head>
  <body>
    <?php
      $prefix="";
      $nav=array(
        "Services"=>"#services","Products"=>"#products",
        "Partners"=>"#partners","About"=>"#about",
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
      <!-- Services -->
      <div class="section" style="gray1">
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
          </div>
        </div>
      </div>

      <!-- Products -->
      <div class="section" style="background-color:var(--blue)">
        <div class="content">
          <h1 id="products" style="color:var(--gray1)">Products</h1>
          <div class="wrapper3 override-small">
            <div class="product">
              <img class="product-logo" src="res/products/featherwheel.svg">
              <h2>Coming soon...</h2>
              <p>
                The FeatherWheel IDE combines Gedit's small footprint with Atom's powerful text manipulation.
                This minimalistic text editor is the best choice for those who need to open files in a quick and efficient manner but who still want a modern IDE.
              </p>
            </div>
            <div class="product">
              <img class="product-logo" src="res/products/ultradocs.svg">
              <h2>Coming soon...</h2>
            </div>
          </div>
        </div>
      </div>

      <!-- Partners -->
      <div class="section" style="background-color:var(--gray1)">
        <div class="content">
          <h1 id="partners" style="color:var(--blue)">Partners</h1>
          <div class="partners-wrapper">
            <img class="partner" src="res/partners/nurostream.png" title="NuroSTREAM">
            <img class="partner" src="res/partners/tavolo.jpg" title="Tavolo Solutions, LLC">
            <img class="partner" src="res/partners/mehta.png" title="Mehta India">
            <img class="partner" src="res/partners/ramirez.svg" title="Victor Ramirez Law, LLC">
            <p>Unfortunately it's impossible to list all of our amazing partners on the front page. That's why we built this <a href="partners">partners page</a> to include everyone!</p>
          </div>
        </div>
      </div>

      <!-- About -->
      <div class="section" style="background-color:var(--blue)">
        <div class="content">
          <div id="about" class="about">
            <h1 style="color:var(--blue)">About</h1>
            <p>
              At LugoCorp every employee is either a technologist, an artist or both.
              We believe we have the power and obligation to change the world for the better through combining our collective talents.
              Whether it's migrating out-of-date industries to the digital world or developing the next generation of creative tools, people who work at LugoCorp are always making an impact.
            </p>
            <p>
              We're a small software company based in College Park, Maryland.
              We mainly focus on web and mobile development for clients with a few software products.
              If you need any digital work done just contact us using the information provided below.
              We're always looking forward to working on new problems with new teams!
            </p>
            <p>
              Here at LugoCorp we train local programmers in various languages and frameworks to boost their confidence and coding skills.
              We've created a team that can handle any project or problem thrown their way - whether it's web and app development or collecting and processing large data sets.
              You can view some of our team members on our <a href="team">team page</a>.
            </p>
          </div>
        </div>
      </div>

      <!-- Contact -->
      <div class="section" style="background-color:var(--gray1)">
        <div class="content">
          <div id="contact" class="contact">
            <h1 style="color:var(--blue)">Contact</h1>
            <p>
              Feel free to contact us if you have any questions or would like to know more.
            </p>
            <div class="icons-wrapper">
              <div class="icons-col">
                <a href="https://twitter.com/alugocp/">
                  <img src="res/icons/twitter.svg"><br>
                  <span>@alugocp</span>
                </a><br>
                <a href="mailto:alugocp@gmail.com">
                  <img src="res/icons/mail.svg"><br>
                  <span>alugocp@gmail.com</span>
                </a>
              </div>
              <div class="icons-col">
                <a href="https://www.instagram.com/alugocp1/">
                  <img src="res/icons/instagram.svg"><br>
                  <span>@alugocp1</span>
                </a>
              </div>
              <div class="icons-col">
                <a href="https://youtube.com/alexlugo">
                  <img src="res/icons/youtube.svg"><br>
                  <span>Alex Lugo</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include("footer.php");?>
  </body>
</html>
