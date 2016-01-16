<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
  <title>Exceptional Realty Group - Luxury Homes - Contact</title>
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js"></script>
</head>
<body>
 <div id="social">
    <a class="twit" href="#" title="Twitter">Twitter</a>
    <a class="fbook" href="#" title="Facebook">Facebook</a>
    <a class="gplus" href="#" title="Google Plus">Google Plus</a>
  </div>

  <div class="white-wood">
    <header class="medium-fade shadow">
      <div class="wrapper">
        <div id="logo">
          <h1>Exceptional Realty Group</h1>
          <h2>Exceptional Realty Group</h2>
        </div>
      </div><!-- .wrapper -->
      <div id="navbar" class="light-fade">
        <div class="wrapper">
            <nav class="clearfix">
              <a class="menu-icon">&#9776;</a>
              <div id="menu-links"><a href="index.html">About</a><a href="new-properties.html">New Properties</a><a href="real-estate-listings.html">Listings</a><a href="market-report.html">Market Report</a><a class="selected" href="contact.html">Contact</a><a href="http://hud.gov" target="_blank">H.U.D.</a></div>
            </nav>
        </div><!-- .wrapper -->
      </div><!-- #navbar -->
    </header>
    
    <div class="wrapper clearfix">

      <section class="col-2 first shadow">
      <?php if ($_GET['s'] == "success") { ?>
      <p>Thank you, your message has been sent successfully!</p>
      <?php } else if ($_GET['s'] == 'error') { ?>
      <p>Error. Your message was not sent! Make sure you type in the proper verification numbers. <a href="contact.php">Click here to try again</a>
      If issues persist please send an email to the site admin (site admin email here).</p>
      <?php } else { ?>

        <!-- Contact Form -->
        <form action="mailer.php" method="post">

          <label for="fullname">Name</label>
          <span id="fullname-error" class="error">must be more than two characters.</span>
          <input type="text" id="fullname" name="fullname" placeholder="your name">

          <label for="email">Email</label>
          <span id="email-error" class="error">must be a valid email.</span>
          <input type="text" id="email" name="email" placeholder="your email">
          
          <label for="phone">Phone</label>
          <input type="tel" id="phone" name="phone" placeholder="your phone (optional)">
          
          <label for="message">Message</label>
          <span id="message-error" class="error">can not be left blank.</span>
          <textarea id="message" name="message" rows="8"></textarea>
          
          <input type="text" name="verify" class="verify-box" placeholder="verify you're human">
          <img class="verify-img" src="verificationimage.php?<?php echo rand(0,9999) ?>" alt="verification image">

          <input type="submit" value="send">
        </form>

        <?php } ?>
      </section>

      <section class="col-1 shadow">
        <!-- Map -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6049.760881033193!2d-73.99517294629514!3d40.69863072747073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a47df06b185%3A0xc889234bc07c42ee!2sBrooklyn+Heights!5e0!3m2!1sen!2sus!4v1393612605402"></iframe>
      </section>

    </div><!-- .wrapper -->
  </div><!-- .white-wood -->

  <section id="details" class="medium-fade">
    <div class="wrapper clearfix">
      <div class="col-1 first border-right">
        <h3>Contact</h3>
        <p>
          email: <a href="mailto:info@exceptionalrealty.com">info@exceptionalrealty.com</a><br>
          phone: +1 710 555 1234
        </p>
        <h3>Correspondence</h3>
        <address>
          Exceptional Realty<br>
          P.O.Box 5555<br>
          Brooklyn, NY 11201
        </address>
      </div>

      <div class="col-1 border-right">
        <h3>Links</h3>
        <p>
          <a href="#" target="_blank">Home Restoration</a><br>
          <a href="#" target="_blank">Afordable Mortgages</a><br>
          <a href="#" target="_blank">Professional Moving Crew</a>
        </p>
      </div>

      <div class="col-1">
        <h3>Follow</h3>
        <p>
          <a href="#" target="_blank">Youtube</a><br>
          <a href="#" target="_blank">Facebook</a><br>
          <a href="#" target="_blank">Twitter</a>
        </p>
      </div>
    </div><!-- .wrapper -->
  </section>

  <footer>
    &copy; 2014 Exceptional Realty. All Rights Reserved.
  </footer>
  
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/contact.js"></script>
</body>
</html>