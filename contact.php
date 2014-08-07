<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>JJ WebStuff Contact</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

    <!-- CSS CDNs -->
        <!-- Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'> 
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Telex' rel='stylesheet' type='text/css'>
        <!-- Bootstrap -->
        <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">

        <link href="http://www.jjwebstuff.com/resources/css/style.css" rel="stylesheet" type="text/css" />
        <link href="http://www.jjwebstuff.com/resources/css/style-responsive.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
<!--################ NAVIGATION START ################-->
  
        <div class="navbar-wrapper" >
            <div class="navbar navbar-fixed-top" id="navigation">
                <div class="navbar-inner">
                    <div class="container">
                        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <i class="fa fa-caret-down fa-2x"></i>
                        </button>
                        <a class="brand" href="http://www.jjwebstuff.com/index.html">  <img src="http://www.jjwebstuff.com/resources/images/logo.png" width="150" id="logokhan"></a>
                        <div class="nav-collapse collapse">
                            <ul class="nav pull-right">
                                <li><a href="http://www.jjwebstuff.com/features.html">What We Do</a></li>
                                <li><a href="http://www.jjwebstuff.com/portfolio.html">Our Projects</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">The Specifics <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="http://www.jjwebstuff.com/services.html">Services</a></li>
                                        <li><a href="http://www.jjwebstuff.com/team.html">Our Team</a></li>
                                        <li><a href="http://www.jjwebstuff.com/pricing.html">Pricing</a></li>
                                    </ul>
                                </li>
                                <li class="active"><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--################ NAVIGATION END ################-->
      <div id="wrap"> 
        <section class="contact-page top-of-page rev">

            <div class="container">
                <div class="row margintop20">
                    <div class="span6">
                        
                        <?php  
                            // check for a successful form post  
                            if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
                            // check for a form error  
                            elseif (isset($_GET['e'])) echo "<div class=\"alert alert-error\">".$_GET['e']."</div>";  
                        ?>
                        
                        <h2 class="big-h2-heading company-color-text"><i class="fa fa-envelope"></i> Contact Us</h2>
                        <p class="company-color-text">Call, email, tweet, FB drop us a line any way you want and we'll get back with you to get started on your project today!</p>
                        <form class="form-main" method="POST" name="contactform" action="http://www.jjwebstuff.com/resources/php/contact-form-submission.php">

                            <fieldset>
                                <div class="clearfix">
                                    <label for="name"><span>Name:</span></label>
                                    <div class="input">
                                        <input  id="name" name="contact_name" type="text" value="" class="input-xlarge">
                                    </div>
                                </div>

                                <div class="clearfix">
                                    <label for="email"><span>Email:</span></label>
                                    <div class="input">
                                        <input  id="email" name="contact_email" type="text" value="" class="input-xlarge" placeholder='YourEmail@email.com'>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <label for="phone"><span>Phone:</span></label>
                                    <div class="input">
                                        <input  id="phone" name="contact_phone" type="text" value="" class="input-xlarge" placeholder='(555) 555-5555'>
                                    </div>
                                </div>

                                <div class="clearfix">
                                    <label for="message"><span>Message:</span></label>
                                    <div class="input">
                                        <textarea class="input-xlarge" id="message" name="contact_message" rows="7"></textarea>
                                    </div>
                                </div>
                                <input type="hidden" name="save" value="contact">
                                <div class="actions">
                                    <button type="submit" class="btn btn-landing ">Submit Message</button>
                                </div>
                            </fieldset>

                        </form>
                    </div>
                    <div class="span5 offset1">
                        <h2 class="big-h2-heading company-color-text">Info</h2>
                        <i class="fa fa-phone"></i>  773 398 5154 <br>
                        <i class="fa fa-envelope"></i>  <a href="mailto:jacobsiddall@gmail.com">jacobsiddall@gmail.com</a>
                        <br />
                        <h2 class="big-h2-heading company-color-text">Social Media</h2>
                        <a href="#" class="social-network yelp"></a> 
                        <a href="#" class="social-network facebook"></a>
                        <a href="#" class="social-network twitter"></a>
                        <a href="#" class="social-network google"></a>
                        <a href="#" class="social-network linkedin"></a>
                        <br />
                        <h2 class="big-h2-heading company-color-text">Location</h2>
                        <div class="map">
                            <!--<iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?source=embed&amp;hl=en-US&amp;ie=UTF8&amp;ll=41.525287,-87.450485&amp;spn=0.099472,0.263844&amp;t=m&amp;z=13&amp;output=embed"></iframe>-->
                            <iframe src="https://mapsengine.google.com/map/embed?mid=zqfTndKgI4JY.kKb3fdq7L9jU" width="100%" height="385"></iframe>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <div id="push"></div>
     </div>
           
        <!--################ FOOTER START ################-->

        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <h2 class="footer-h2">about</h2>
                        <!-- <img src="images/logo.png" > -->
                        <p>JJWeb is a company focused on building web prescence for clients of any kind.  We specialize in starter sites that branch into social networks and help clients grow ideas from small to amazing</p>
                    </div>
                    <div class="span2 offset3">
                        <h2 class="footer-h2">links </h2>
                        <ul class="unstyled footer-links">
                            <li><a href="http://www.jjwebstuff.com/team.html" class="flink">The Team</a></li>
                            <li><a href="http://www.jjwebstuff.com/blog.html" class="flink">Blog</a></li>

                            <li><a href="http://www.jjwebstuff.com/contact.php" class="flink">Contact</a></li>
                        </ul>
                    </div>

                    <div class="span2">
                        <h2 class="footer-h2">find us </h2>
                            <a href="#" class="social-network yelp"></a>
                            <a href="#" class="social-network facebook"></a>
                            <a href="#" class="social-network twitter"></a>
                            <br>
                            <a href="#" class="social-network google"></a>
                            <a href="#" class="social-network linkedin"></a>
                            <a href="#" class="social-network instagram"></a>
                        </ul>  
                    </div>

                    <div class="span2">
                        <h2 class="footer-h2">tweets <i class="fa fa-twitter"></i></h2>
                        <ul id="twitter" class=" unstyled margintop20">

                        </ul>
                    </div>


                </div>
            </div>
        </footer>


        <!--################ FOOTER END ################-->




        <!--################ JAVASCRIPTS ################-->

       <!-- Placed at the end of the document so the pages load faster -->
        <script src="http://www.jjwebstuff.com/resources/js/jquery.js"></script>
        <script src="http://www.jjwebstuff.com/resources/js/modernizr.js"></script>
        <script src="http://www.jjwebstuff.com/resources/js/bootstrap.js"></script>
        <script src="http://www.jjwebstuff.com/resources/js/jquery.fitvids.js"></script>
        <script src="http://www.jjwebstuff.com/resources/js/jquery.easing.1.3.js"></script>
        <script src="http://www.jjwebstuff.com/resources/js/twitter.js"></script>

        <script src="http://www.jjwebstuff.com/resources/js/stellar.js"></script>
        <script src="http://www.jjwebstuff.com/resources/js/nicescroll.min.js"></script>
        <script src="http://www.jjwebstuff.com/resources/js/jquery.isotope.min.js"></script>
        <script type="text/javascript" src="http://www.jjwebstuff.com/resources/js/jquery.fancybox.pack.js"></script>
        <script type="text/javascript" src="http://www.jjwebstuff.com/resources/js/jquery.fancybox-thumbs.js?v=1.0.2"></script>
        <script type="text/javascript" src="http://www.jjwebstuff.com/resources/js/jquery.fancybox-media.js?v=1.0.0"></script>
        <script src="http://www.jjwebstuff.com/resources/js/custom.js"></script>
        <script src="http://www.jjwebstuff.com/resources/js/jquery.flexslider.js"></script>

    </body>
</html>
