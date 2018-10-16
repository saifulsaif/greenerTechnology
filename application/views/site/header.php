<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from preview.perfecthemes.com/TF/Finex/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 May 2018 07:11:30 GMT -->
<head>
        <title>Greener||Technology</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!--[if IE]>
      <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
      <![endif]-->
      <meta name="keywords" content="HTML5 Template" />
      <meta name="description" content="Finex - Multipurpose Business and Corporate HTML5 Template" />
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
      <!-- Favicon Icon -->
      <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/site/images/favicon.png">
      <!-- Favicon Icon -->
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="index">
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