<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from preview.perfecthemes.com/TF/Finex/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 May 2018 07:14:47 GMT -->
<head>
     <title>Greener||Technology</title>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--[if IE]>
        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
        <![endif]-->
        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="Finex- Multipurpose Business and Corporate HTML5 Template" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Include All CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/site/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/site/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/site/css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/site/css/owl.theme.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/site/css/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/site/css/preset.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/site/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/site/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/site/css/responsive.css" />

    <!-- End Include All CSS -->

    <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
            <script src="js/respond.min.js"></script>
        <![endif]-->

    <!-- Favicon Icon -->
    <link rel="icon" type="<?php echo base_url();?>assets/site/image/png" href="images/favicon.png">
    <!-- Favicon Icon -->
</head>

<body>
    <!-- ========= preloader ========== -->
    <div class="preloader">
        <img src="<?php echo base_url();?>assets/site/images/loader.gif" alt="">
    </div>
    <!-- ========= End preloader ========== -->


    <!--Header Middle End-->
    <!--Header Start-->
    <header class="header">
        <div class="menu-spacer"></div>
        <div class="container">
            <div class="row">
			                <div class="col-lg-3 col-sm-3">
                     <div class="logo">
                      <?php foreach($all_logo as $logo) { ?>  
                     <a href="<?php echo base_url();?>welcome/">
                     <img src="<?php echo $logo->logo;?>" alt="">
                     </a>
                      <?php }?>
                  </div>
                    
               </div>
               <div class="col-lg-9 col-sm-9">
                  <nav class="mainnav">
                     <div class="logoMobile hidden-lg hidden-sm hidden-md">
                       <?php foreach($all_logo as $logo) { ?>  
                     <a href="<?php echo base_url();?>welcome/">
                     <img src="<?php echo $logo->logo;?>" alt="">
                     </a>
                      <?php }?>
                     </div>
                        <div class="mobileMenu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                       <ul>
                        <li class="has-menu-items active"><a href="<?php echo base_url();?>welcome">home</a></li>
                        <li><a href="<?php echo base_url();?>welcome/about.html">about</a></li>
                        <li class="has-menu-items">
                           <a class="drop_menu" href="<?php echo base_url();?>welcome/service.html">our services</a>
                        
                        </li>
                        <li class="has-menu-items">
                           <a class="drop_menu" href="<?php echo base_url();?>welcome/project.html ">projects</a>
                       
                        </li>
                        <li class="has-menu-items">
                           <a class="drop_menu" href="<?php echo base_url();?>welcome/blog.html ">blog </a>
                           
                        </li>
                       
                        <li><a href="<?php echo base_url();?>welcome/contact.html">Contact Us</a></li>
                     </ul>
                    </nav>
                </div>

            </div>
        </div>
    </header>
    <!--Header End-->
		      <!--Breadcrumb Start-->
			  
        <section class="breadcrumbSec" style="background-image:url('<?php echo base_url();?>assets/site/images/breadcum/3.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center breadsec">
                        <h1 class="breadTitle">CONTACT</h1>
                        <div class="breadCumpNav">
                            <a href="index.html">Home</a>
                            <i class="fa fa-angle-right"></i>
                            <a href="#">contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Breadcrumb End-->
<section class="blogSection">
            <div class="container">
                <div class="row">   <?php foreach($all_contact as $contact) { ?>  
				    <div class="col-sm-4">
                        <div class="contactInfo">
                            <h2 class="commentTitle">Contact Info</h2>
                            <div class="contAddress">
                                <div class="singleContadds">
                                    <p>
                                        <?php echo $contact->details?>
                                    </p>
                                </div>
                                <div class="singleContadds">
                                    <i class="fa fa-map-marker"></i>
                                    <p>
                                       <?php echo $contact->address?>
                                    </p>
                                </div>
                                <div class="singleContadds phone">
                                    <i class="fa fa-phone"></i>
                                    <p>
                                        <?php echo $contact->number?> - <span>Office</span>
                                    </p>
                                   
                                </div>
                                <div class="singleContadds">
                                    <i class="fa fa-envelope"></i>
                                    <a href="mailto:support@example.com"><?php echo $contact->email?></a>
                                </div>
                                <div class="contactSocial">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                     <?php }?>
                    <div class="col-sm-8">
                        <h2 class="commentTitle">Send a Message</h2>
                        <div class="commentForm">
                            <form action="<?php echo base_url()?>super_admin/save_user_contact" method="post"  id="contactForm">
                                <div class="row">
                                    <div class="col-lg-6 formmargin">
                                        <input type="text" placeholder="Name" name="name" id="con_name" class="required">
                                        <input type="email" placeholder="Email" name="email" id="con_email" class="required">
                                        <input type="url" placeholder="Website" name="" id="con_url" class="required">
                                    </div>
                                    <div class="col-lg-6">
                                        <textarea placeholder="Message" id="con_message" name="message" class="required"></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="blogReadmore" id="con_submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                
                </div>
            </div>
        </section>
        <!--Blog End-->
        <section class="contactMap">
            <div id="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3651.8924867767096!2d90.3889808306933!3d23.751213052801255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1527678120048" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div> 
            
            
        </section>
  
             <!--Footer Start-->
             <footer>
                 <?php foreach($all_contact as $contact) { ?> 
         <div id="footer" >
            <div class="container">
               <div class="col-md-12 col-xs-12 ">
                  <div class="inside">
                     <div class="contact-info">
                        <div class="col-md-4 col-xs-12 m-margin">
                           <h4>Telephone</h4>
                           <p><a href="tel:07938857242">  <?php echo $contact->number?></a></p>
                        </div>
                        <div class="col-md-4 col-xs-12 m-margin">
                           <h4>Email</h4>
                           <p><a href="mailto:info@example.com"><?php echo $contact->email?></a></p>
                        </div>
                        <div class="col-md-4 col-xs-12 m-margin">
                           <h4>Address</h4>
                           <p><?php echo $contact->address?></p>
                        </div>
                     </div>
                     <div class="social col-md-12">
                        <a href="<?php echo $contact->twitter?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="<?php echo $contact->facebook?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="<?php echo $contact->instagram?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="<?php echo $contact->youtube?>"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="bottom-footer">
               <p>© 2018 <span class="theme_color">Greener Technology.</span> All Rights Reserved.</p>
            </div>
         </div>
                <?php }?>
      </footer>
    <!--footer End-->

    <a href="#" id="backToTop"><i class="fa fa-angle-up"></i></a>
    <!-- Include All JS -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/site/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/site/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/site/js/owl.carousel.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/site/js/jquery.magnific-popup.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/site/js/mixer.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/site/js/theme.js"></script>
	<script  type="text/javascript" src="<?php echo base_url();?>assets/site/js/smoothscroll.js"></script>
</body>

<!-- Mirrored from preview.perfecthemes.com/TF/Finex/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 May 2018 07:14:47 GMT -->
</html>