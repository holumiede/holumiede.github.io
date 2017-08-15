<!DOCTYPE HTML>
<!--
	Strata by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>Osideinde Oluwadara</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
</head>

<body id="top">

    <!-- Header -->
    <header id="header">
        <div class="inner">
            <a href="#" class="image avatar"><img src="images/avatar.jpg" alt="" /></a>
            <h1><strong>I am Osideinde Oluwadara</strong>,<br /> a super simple and creative student of the Federal University of Agriculture Abeokuta<br /> Favorite Code -- <a href="#">Html</a>.</h1>
        </div>
    </header>

    <!-- Main -->
    <div id="main">

        <!-- One -->
        <section id="one">
            <header class="major">
                <h2>POLITICAL VIEWS</h2>
                </h>
                <P>
                    I feel the politics of our Great Nation is currently in schambles. Why??
                    <br> Well i can say the current administration is trying but all thier efforts are being nunilfied by the other political parrties because of selfish ambitions wchich shoudnt be so.
                </P>
                <ul class="actions">
                    <li><a href="#" class="button">Learn More</a></li>
                </ul>
        </section>

        <!-- Two -->
        <section id="two">
            <h2>Recent Work</h2>
            <div class="row">
                <article class="6u 12u$(xsmall) work-item">
                    <a href="images/fulls/11.jpg" class="image fit thumb"><img src="images/thumbs/11.jpg" alt="" /></a>
                    <h3>CODE2EARN</h3>
                    <p>This is the statistics of the Code2Earn submit held in FUNAAB</p>
                </article>
                <article class="6u$ 12u$(xsmall) work-item">
                    <a href="images/fulls/13.jpg" class="image fit thumb"><img src="images/thumbs/13.jpg" alt="" /></a>
                    <h3>CowbellCoffeeUniStorm</h3>
                    <p>This is the statistics of the Cowbell UniStorm with 9ice held in FUNAAB</p>
                </article>
                <article class="6u 12u$(xsmall) work-item">
                    <a href="images/fulls/14.jpg" class="image fit thumb"><img src="images/thumbs/14.jpg" alt="" /></a>
                    <h3>Tortor metus commodo</h3>
                    <p>Lorem ipsum dolor sit amet nisl sed nullam feugiat.</p>
                </article>
                <article class="6u$ 12u$(xsmall) work-item">
                    <a href="images/fulls/16.jpg" class="image fit thumb"><img src="images/thumbs/16.jpg" alt="" /></a>
                    <h3>Quam neque phasellus</h3>
                    <p>Lorem ipsum dolor sit amet nisl sed nullam feugiat.</p>
                </article>
                <article class="6u 12u$(xsmall) work-item">
                    <a href="images/fulls/17.jpg" class="image fit thumb"><img src="images/thumbs/17.jpg" alt="" /></a>
                    <h3>Nunc enim commodo aliquet</h3>
                    <p>Lorem ipsum dolor sit amet nisl sed nullam feugiat.</p>
                </article>
                <article class="6u$ 12u$(xsmall) work-item">
                    <a href="images/fulls/18.jpg" class="image fit thumb"><img src="images/thumbs/18.jpg" alt="" /></a>
                    <h3>Risus ornare lacinia</h3>
                    <p>Lorem ipsum dolor sit amet nisl sed nullam feugiat.</p>
                </article>
            </div>
            <ul class="actions">
                <li><a href="#" class="button">Full Portfolio</a></li>
            </ul>
        </section>

        <!-- Three -->
        <section id="three">

            <h2>Get In Touch</h2>
            <p>My address is off limit you can either call or send an sms.</p>
            <div class="row">
                <div class="8u 12u$(small)">


                    <?php
    //if "email" variable is filled out, send email
      if (isset($_REQUEST['email']))  {
      
      //Email information
      $admin_email = "osideindeo@gmail.com";
      $email = $_REQUEST['email'];
      $subject = $_REQUEST['subject'];
      $message = $_REQUEST['message'];
      
      //send email
      mail($admin_email, "$subject", $message, "From:" . $email);
      
      //Email response
      echo "Thank you for contacting us!";
      }
      
      //if "email" variable is not filled out, display the form
      else  {
    ?>
                        <form method="post" action="index.php" name="contact_form">
                            <div class="row uniform 50%">
                                <div class="6u 12u$(xsmall)"><input type="text" name="name" id="name" placeholder="Name" /></div>
                                <div class="6u$ 12u$(xsmall)"><input type="email" name="email" id="email" placeholder="Email" /></div>
                                <div class="12u$"><textarea name="message" id="message" placeholder="Message" rows="4"></textarea></div>
                            </div>

                            <ul class="actions">

                                <li><input type="submit" value="Send Message" id="submit" name="submit" /></li>
                                <li><input type="reset" value="reset" id="reset" name="reset" /></li>
                            </ul>
                </div>
                </form>
                <?php } ?>



                <div class="4u$ 12u$(small)">
                    <ul class="labeled-icons">
                        <li>
                            <h3 class="icon fa-home"><span class="label">Address</span></h3>
                            1, Bello Owolabi Street,.<br /> Iyana-Ipaja, Lagos State<br /> Nigeria
                        </li>
                        <li>
                            <h3 class="icon fa-mobile"><span class="label">Phone</span></h3>
                            234816-626-0062
                        </li>
                        <li>
                            <h3 class="icon fa-envelope-o"><span class="label">Email</span></h3>
                            <a href="#">mail@oluwadara.com</a>
                            <a href="#">osideindeo@gmail.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section </div>

        <!-- Footer -->
        <footer id="footer">
            <div class="inner">
                <ul class="icons">
                    <li><a href="http://twitter.com/holumiede" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="http://holumiede.github.io" class="icon fa-github"><span class="label">Github</span></a></li>
                    <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                    <li><a href="osideindeo@gmail.com" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
                    <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                </ul>
                <ul class="copyright">
                    <li>&copy; osideinde</li>
                    <li>Designed by: <a href="#">Osideinde Oluwadara</a></li>
                </ul>
            </div>
        </footer>

        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.poptrox.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
        <script src="assets/js/main.js"></script>

</body>

</html>
