
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="robots" content="noindex" />
 
 <!-- Adobe Fonts -->
 <link rel="stylesheet" href="https://use.typekit.net/mwg6wqu.css">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/70a4005e9d.js" crossorigin="anonymous"></script>

<!-- Favicon -->
<link rel="icon" type="image/png" href="images/favicon.png" />
<link rel="icon" type="image/ico" href="images/favicon.ico" />

<!-- jQuery Library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style type="text/css">

* {
  border: 0;
  padding: 0;
  margin: 0;
}

img,
iframe {
  width: 100%;
}

h1,
h2,
h3 {
  font-family: 'acumin-pro-condensed', sans-serif;
}
p {
  font-family: 'lato', sans-serif;
}

/************************ START NAV STYLING ************************/
.logo {
  max-width: 200px;
  display: block;
  margin: auto;
  position: absolute;
  top: 8%;
  left: 50%;
  transform: translate(-50%, -50%);
}
nav {
  font-family: 'lato', sans-serif;
}
.nav-flex,
.desktop-menu {
  display: none;
}
.menu,
.hamburger,
.cross {
  display: block;
}
/************************** Hamburger menu *********************/
.hamburger {
  background: none;
  position: absolute;
  top: 0;
  line-height: 50px;
  padding: 1px 10px 2px 15px;
  color: #ffffff;
  border: 0;
  font-size: 1.8em;
  font-weight: bold;
  cursor: pointer;
  outline: none;
  z-index: 10000000000000;
}
.cross {
  background: none;
  position: absolute;
  top: 0;
  padding: 1px 15px 0px 15px;
  color: #ffffff;
  border: 0;
  font-size: 3.5em;
  line-height: 65px;
  font-weight: bold;
  cursor: pointer;
  outline: none;
  z-index: 10000000000000;
}
.menu {
  z-index: 1000000;
  font-weight: bold;
  font-size: 0.8em;
  width: 100%;
  background: #D7745B;
  position: absolute;
  text-align: center;
  font-size: 1em;
}
.menu ul {
  margin: 0;
  padding: 0;
  list-style-type: none;
  list-style-image: none;
}
.menu li {
  display: block;
  padding: 15px 0 15px 0;
  border-bottom: #ffffff 1px solid;
}
.menu li:hover {
  display: block;
  background: #ffffff;
  padding: 15px 0 15px 0;
  border-bottom: white 1px solid;
  transition: 0.2s ease;
}
.menu ul li a {
  text-decoration: none;
  margin: 0px;
  color: #ffffff;
}
.menu ul li a:hover {
  color: #D7745B;
  text-decoration: none;
}
.menu a {
  text-decoration: none;
  color: #ffffff;
}
.menu a:hover {
  text-decoration: none;
  color: #ffffff;
}
/*********************** START FOOTER STYLING ***********************/
.footer-color-block {
  background-color: #05485A;
  padding: 5%;
  color: #ffffff;
}
.footer-color-block h3 {
  text-align: center;
  padding-bottom: 2%;
}
.footer-color-block ul,
.footer-color-block p {
  font-family: 'lato', sans-serif;
  text-align: center;
}
.footer-color-block li {
  list-style: none;
}
.footer-color-block p span {
  font-weight: bold;
}
.footer-color-block .footer-padding {
  padding-top: 8%;
}
.footer-content {
  padding: 5%;
}
.footer-content ul,
.footer-content p {
  text-align: center;
  color: #05485A;
  font-family: 'lato', sans-serif;
}
.footer-content ul li,
.footer-content p li {
  list-style: none;
  padding-bottom: 1%;
}
.footer-content .footer-icons {
  text-align: center;
  padding-top: 2%;
  padding-bottom: 3%;
  font-size: 35px;
}
.footer-content a {
  color: #05485A;
  text-decoration: none;
  padding-right: 1%;
}

/************************* START STICKY FOOTER ***************************/

.site {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

.site-content {
    flex: 1;
}


/*********************** START PAGE STYLING ***********************/

main h1,
main p {
  color: #05485A;
}

.info {
  text-align: center;
  padding: 15% 0;
}

.hero-form {
    background-image: url(images/home-bg.jpg);
    background-size: cover;
    background-position: center;
    min-height: 50vh;
}


/********************* START 650PX MEDIA QUERY **************************/
@media (min-width: 650px) {
  .nav-flex .nav-beers {
    padding-right: 28%;
  }
}

/********************* START 700PX MEDIA QUERY **************************/
@media (min-width: 700px ) {
    .nav-flex,
  .desktop-menu {
    display: block;
  }
  .desktop-menu {
    margin-bottom: 1rem;
  }
  .desktop-menu .nav-flex {
    display: flex;
    padding-left: 2%;
    padding-top: 2%;
    list-style-type: none;
    justify-content: space-evenly;
  }
  .desktop-menu .nav-flex li {
    font-family: 'lato', sans-serif;
    font-weight: 600;
  }
  .desktop-menu .nav-flex a {
    text-decoration: none;
    color: #05485A;
  }
  .desktop-menu .nav-flex a:hover {
    border-bottom: 2px solid #D7745B;
    transition: 0.1s;
  }
  .menu,
  .hamburger,
  .cross {
    display: none;
  }
}

/********************* START 1000PX MEDIA QUERY **************************/
@media (min-width: 1000px) {
  nav {
    max-width: 1000px;
    margin: 0 auto;
    margin-bottom: 1rem;
  }
}

</style>


<body class="site">
    <header>
        <div class="logo-center">
            <a href="index.html"><img class="logo" src="images/logo.png" title="3 Daughters Brewing Logo" alt="3 Daughters Brewing Logo" /></a>
        </div>

        <!--Desktop Menu-->
        <nav class="desktop-menu">
            <ul class="nav-flex">
                <li><a href="about.html">ABOUT</a></li>
                <li class="nav-beers"><a href="beers.html">BREWS</a></li>
                <li><a href="events.html">EVENTS</a></li>
                <li><a href="contact.html">CONTACT</a></li>
            </ul>
        </nav>

        <!--Mobile Menu-->

        <button class="hamburger">&#9776;</button>
        <button class="cross">&#735;</button>

        <nav class="menu">
            <ul>
                <li><a href="about.html">ABOUT</a></li>
                <li class="nav-beers"><a href="beers.html">BREWS</a></li>
                <li><a href="events.html">EVENTS</a></li>
                <li><a href="contact.html">CONTACT</a></li>
            </ul>
        </nav>
    </header>

    <main class="site-content">

      <div class="hero-form"></div>

      <div class=info>
        <h1>Thank you for your enquiry</h1>
        <p>Thanks for your interest. We have received your message, and we will be in touch shortly.</p>
      </div>
    </main>

    <footer>

<div class="footer-color-block">
    <h3>HOURS</h3>
    <ul>
        <li>Monday - Thursday 11:30AM - 10:00PM</li>
        <li>Friday - Saturday 11:30AM - 12:00AM</li>
        <li>Sunday 11:30AM - 8:00PM</li>
    </ul>

    <div class="footer-padding">
        <p><span>PHONE NUMBER:</span> 727-495-6002</p>
        <p><span>ADDRESS:</span> 222 22nd Street South, St. Petersburg, FL 33712</p>
    </div>
</div>

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14121.28775866159!2d-82.6627778!3d27.7690528!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4d9834cf3055fece!2s3%20Daughters%20Brewing!5e0!3m2!1sen!2sus!4v1623001621032!5m2!1sen!2sus" width="600"
    height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>


<div class="footer-content">
    <ul>
        <li><a href="about.html">ABOUT</a></li>
        <li><a href="beers.html">BREWS</a></li>
        <li><a href="events.html">EVENTS</a></li>
        <li><a href="contact.html">CONTACT</a></li>
    </ul>

    <div class="footer-icons">
        <a href="https://www.facebook.com/3DaughtersBrewing" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/3daughtersbrewing/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://twitter.com/3DBrewing" target="_blank"><i class="fab fa-twitter"></i></a>
    </div>

    <div>
        <p>Designed by GG Creative Co.</p>
        <p>All Rights Reserved by Three Daughters Brewing</p>
        <p>Copyright 2021</p>
    </div>

</div>

</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

$( document ).ready(function() {

$( ".cross" ).hide();
$( ".menu" ).hide();
$( ".hamburger" ).click(function() {
$( ".menu" ).slideToggle( "slow", function() {
$( ".hamburger" ).hide();
$( ".cross" ).show();
});
});

$( ".cross" ).click(function() {
$( ".menu" ).slideToggle( "slow", function() {
$( ".cross" ).hide();
$( ".hamburger" ).show();
});
});

});

</script>

</body>





