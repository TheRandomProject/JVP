<?php
    include "admin/conn.php";

    //fetch settings
    $settings = mysqli_query($con,"SELECT * FROM settings");
    $setting  = mysqli_fetch_array($settings);
?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>About Us - <?php echo $setting['site_name']; ?></title>
<meta name="description" content="We Offer Import & Export assistance foreign businesses in transporting and selling their products in China, India and USA. We connect domestic companies to the international shipping services most suited for their business.">
   
<!-- Stylesheets -->
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<!-- Responsive File -->
<link href="assets/css/responsive.css" rel="stylesheet">
<!-- Color File -->
<link href="assets/css/color.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&amp;family=Yantramanav:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">

<link rel="shortcut icon" href="assets/images/hcd.png" type="image/x-icon">
<link rel="icon" href="assets/images/hcd.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=601e75803d01430011c105c8&product=image-share-buttons' async='async'></script>

</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
  

  
    <!-- End Main Header -->
<?php include "header.php"; ?>
    <!-- Hidden Sidebar -->

    <section class="hidden-sidebar close-sidebar">
        <div class="wrapper-box">
            <div class="content-wrapper">
                <div class="hidden-sidebar-close"><span class="flaticon-remove"></span></div>
                <div class="text-widget sidebar-widget">
                    <div class="logo"><a href="index.php"><img src="assets/images/logo.png" alt=""></a></div>
                    <div class="text">Demoralized by the charms of pleasure of the moment so blinded by desire that they cannot foresees the pain.</div>
                </div>
                <!-- PDF Widget -->
                <div class="pdf-widget sidebar-widget">
                    <div class="row">
                        <div class="col-sm-6 column">
                            <div class="content">
                                <div class="icon"><img src="assets/images/icons/icon-8.png" alt=""></div>
                                <h4>Sender <br> Instructions</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 column">
                            <div class="content">
                                <div class="icon"><img src="assets/images/icons/icon-8.png" alt=""></div>
                                <h4>Sender <br> Instructions</h4>
                            </div>
                        </div>
                    </div>                            
                </div>
                <!-- Contact Widget -->
           
                <!-- Link Btn -->
                <div class="link-btn"><a href="#" class="theme-btn btn-style-one style-two"><span><i class="flaticon-up-arrow"></i>Purchase Our Theme </span></a></div>
            </div>
        </div>
    </section>
    
    <!--Search Popup-->
    <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn"><span class="flaticon-remove"></span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="http://st.ourhtmldemo.com/new/Transida2/index.php">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                            <input type="submit" value="Search Now!" class="theme-btn">
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Page Title -->
    <section class="page-title" style="background-image: url(assets/images/background/A3.png);">
        <!--<div class="background-text">
            <div data-parallax='{"x": 100}'>
                <div class="text-1">transida</div>
                <div class="text-2">transida</div>
            </div>                
        </div> -->
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <!--<h1>Batasan Super Health Center</h1>->
                    </div>
                   <!--<ul class="bread-crumb style-two">
                        <li class="active"><a href="about.php">About Company <i class="flaticon-up-arrow"></i></a></li>
                        <li><a href="history.php">Our History <i class="flaticon-up-arrow"></i></a></li>
                        <li><a href="team.php">Leadership Team<i class="flaticon-up-arrow"></i></a></li>
                        <li><a href="global-networks.php">Global Network <i class="flaticon-up-arrow"></i></a></li>
                    </ul> -->
                </div>                    
            </div>
        </div>
    </section>

    <!-- Who we are -->
    <section class="who-we-are-section">
        <div class="top-content">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="sec-title mb-30">
                            <div class="sub-title">Health Center</div>
                            <h2>Provide a <br> Reliable Services <br> Since 2000</h2>
                        </div>
                        <div class="experience-year">
                            <div class="icon"><i class="flaticon-package-1"></i></div>
                            <div class="content">
                                <h3>5 <span>+ Years</span></h3>
                                <h5>Experience In Medical Services</h5>
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="col-lg-8">
                        <div class="image mb-30"><img src="assets/images/main-slider/A.jpg" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overview">
            <div class="auto-container">
                <div class="wrapper-box">
                    <h2>NGC LYING-IN
TEENS HEALTH QUARTERS &
CHILD MINDING CENTER has been operating in the Commonwealth  now, for over 5 years and are part <br>  of a reliable, medical services.</h2>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="text">
                                <p>National Government Center (NGC) Teen Health Quarter is a government-run health center in Quezon City, Metro Manila particularly in the Commonwealth. It was built in February 2016 by the program of Doctor Penalinga Verdades that offers services such as counseling, dental, prenatal and outreach programs. They also provide some recreational activities for the youth like exercises, board games, music jamming and providing activity areas. 
</p>
                                <p>Based on the current processes of the NGC health quarter, several problems were found. First, the process that they use for gathering information about the teen is not computerized and is prone for misplacement and can be damaged by natural disasters like flood and fire. Furthermore, the NGC health quarter is lacking in promoting their services for the adolescent. Moreover, the dissemination of information is not properly distributed due to miscommunication of the barangay official to the NGC health quarter personnel. 
</p>
                            </div>
                            <div class="author-info wow fadeInUp" data-wow-duration="1500ms">
                                <!--<div class="video-btn">
                                    <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="overlay-link lightbox-image video-fancybox"><i class="flaticon-play-arrow"></i></a>
                                </div>-->
                                <div class="signature"><img src="assets/images/logoqc.PNG" alt=""></div>
                                <div>
                                    <div class="author-title">DR. ESPERANZA ANITA N. ESCAÑO-ARIAS, MD, MPH </div>
                                    <div class="designation">OIC, City Health Department Head</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row m-10">
                                <!--Column-->
                                <div class="column counter-column col-md-3">
                                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        <div class="content">
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="3000" data-stop="9.5">0</span><span>k</span>
                                            </div>
                                            <h4>Medical <br> Services</h4>
                                            <h5>Total</h5>
                                        </div>
                                    </div>
                                </div>
                                <!--Column-->
                                <div class="column counter-column col-md-3.1">
                                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        <div class="content">
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="3000" data-stop="6.5">0</span><span>k</span>
                                            </div>
                                            <h5>Appointment</h5>
                                            <div class="icon"><span class="flaticon-24-hours"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <!--Column-->
                                <div class="column counter-column col-md-2.9">
                                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        <div class="content">
                                            <div class="icon"><span class="flaticon-chat"></span></div>
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="3000" data-stop="1.7">0</span><span>k</span>
                                            </div>
                                            <h5>Chat</h5>
                                        </div>
                                    </div>
                                </div>
                                <!--Column-->
                                <div class="column counter-column col-md-3">
                                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        <div class="content">
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="3000" data-stop="2495">0</span><span>k</span>
                                            </div>
                                            <h5>Patients</h5>
                                            <div class="icon"><span class="flaticon-packing-list"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- Whychooseus section four -->
   <!-- <section class="whychooseus-section-four" style="background-image: url(assets/images/background/bg-23.jpg);">
        <div class="auto-container">
            <div class="sec-title light text-center">
                <div class="sub-title">Why Choose Us</div>
                <h2> Reasons Why to Choose Our <br> Freight Services</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 whychooseus-block-four">
                    <div class="inner-box wow fadeInUp animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                        <div class="icon"><span class="flaticon-shield"></span><i class="fas fa-check"></i><a href="#"><i class="fas fa-check"></i>Read More</a></div>
                        <h4>Trasparent Pricing</h4>
                     
                        <div class="count">01</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 whychooseus-block-four">
                    <div class="inner-box wow fadeInUp animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                        <div class="icon"><span class="flaticon-delivery"></span><i class="fas fa-check"></i><a href="#"><i class="fas fa-check"></i>Read More</a></div>
                        <h4>On - Time Delivery</h4>
                        
                        <div class="count">02</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 whychooseus-block-four">
                    <div class="inner-box wow fadeInUp animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                        <div class="icon"><span class="flaticon-box"></span><i class="fas fa-check"></i><a href="#"><i class="fas fa-check"></i>Read More</a></div>
                        <h4>Real Time Tracking</h4>
                     
                        <div class="count">03</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 whychooseus-block-four">
                    <div class="inner-box wow fadeInUp animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                        <div class="icon"><span class="flaticon-24-hours"></span><i class="fas fa-check"></i><a href="#"><i class="fas fa-check"></i>Read More</a></div>
                        <h4>24/7 Online Support</h4>
                       
                        <div class="count">04</div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <!-- Statement -->
    <section class="statement-section pt-0">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image"><img src="assets/images/resource/ngc1.jpg" alt=""></div>
                </div>
                <div class="col-lg-6">
                    <div class="content">  
                        <div class="badge"><img src="assets/images/badge-3.png" alt=""></div>
                        <!-- Tab panes -->
                        <div class="tab-content wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                            <div class="tab-pane fadeInUp animated active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                                <div class="text-block">
                                    <div class="sec-title mb-30">
                                        <div class="sub-title">Statements</div>
                                        <h2>Mission Statement</h2>
                                    </div>
                                    <div class="text"><ul>
                                        <li>Provide promotive,preventive,curative,rehabilitative,supportive,comprehensive quality health care services which are accesible and available in an adolescent-friendly environment.</li>
                                       <!-- <li>To continually improve our business processes.</li>
                                        <li>To contribute to the growth of society as we grow the company’s business.</li>-->
                                    </ul></div>
                                </div>
                            </div>
                            <div class="tab-pane fadeInUp animated" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                                <div class="text-block">
                                    <div class="sec-title mb-30">
                                        <div class="sub-title">Statements</div>
                                        <h2>Vision Statement</h2>
                                    </div>
                                    <div class="text">Health for all, Health in the hands of the people</div>
                                </div>
                            </div>
                            <div class="tab-pane fadeInUp animated" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                                <div class="text-block">
                                    <div class="sec-title mb-30">
                                        <div class="sub-title">Statements</div>
                                        <h2>Service Pledge</h2>
                                    </div>
                                    <div class="text">“Kaming mga Health Workers sa Quezon City ay nangangakong maglingkod na.”</div>
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-tabs tab-btn-style-one" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab-one-area" data-toggle="tab" href="#tab-one" role="tab" aria-controls="tab-one" aria-selected="true">
                                    <h4><i class="flaticon-up-arrow"></i>Mission</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-two-area" data-toggle="tab" href="#tab-two" role="tab" aria-controls="tab-two" aria-selected="false">
                                    <h4><i class="flaticon-up-arrow"></i>Vision</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-three-area" data-toggle="tab" href="#tab-three" role="tab" aria-controls="tab-three" aria-selected="false">
                                    <h4><i class="flaticon-up-arrow"></i>Service Pledge</h4>
                                </a>
                            </li>
                        </ul>                        
                    </div>
                </div>
            </div>
        </div>
    </section>

   
   


    <!--Main Footer-->
   <?php include "footer.php"; ?>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-right-arrow-6"></span></div>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="assets/js/jquery.fancybox.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/lazyload.js"></script>
<script src="assets/js/scrollbar.js"></script>
<script src="assets/js/TweenMax.min.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/jquery.polyglot.language.switcher.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<script src="assets/js/parallax-scroll.js"></script>

<script src="assets/js/script.js"></script>


</body>


</html>













