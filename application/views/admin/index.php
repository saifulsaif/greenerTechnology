<!doctype html>
<html>

<!-- Mirrored from www.lab.westilian.com/matmix-admin/list-view/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Jan 2018 19:30:05 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A Components Mix Bootstarp 3 Admin Dashboard Template">
    <meta name="author" content="Westilian">
    <title>Greener Technology </title>  
      <link rel="icon" href="<?php echo base_url();?>assets/site/assets/images/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/animate.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/waves.css" type="text/css">
     <link href="<?php echo base_url();?>assets/user/css/icons.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/layout.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/components.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/plugins.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/common-styles.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/pages.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/responsive.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/matmix-iconfont.css" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,300,400italic,500,500italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet" type="text/css">
</head>
<body>
<div class="page-container list-menu-view">
<!--Leftbar Start Here -->
<div class="left-aside desktop-view">
    <div class="aside-branding">
        <a href="<?php echo base_url();?>super_admin" class="iconic-logo"><img src="<?php echo base_url();?>assets/admin/images/logo-iconic.png" alt="Matmix Logo">
        </a>
           <?php foreach($all_logo as $logo) { ?>   
        <a href="<?php echo base_url();?>super_admin" class="large-logo"><img src="<?php echo $logo->logo;?>" height="60px" width="100px;" alt="Matmix Logo">
        <?php }?>
        </a><span class="aside-pin waves-effect"><i class="fa fa-thumb-tack"></i></span>
        <span class="aside-close waves-effect"><i class="fa fa-times"></i></span>
    </div>
    <div class="left-navigation">
        <ul class="list-accordion">
            <li><a href="<?php echo base_url();?>super_admin" class="waves-effect"><span class="nav-icon"><i class="fa fa-home"></i></span><span class="nav-label">Dashboard</span> </a>
               
            </li>

             
            <li><a href="#"><span class="nav-icon"><i class="fa fa-table"></i></span><span class="nav-label">Logo</span></a>
                <ul>
                    <li><a href="<?php echo base_url();?>super_admin/logo">Logo</a>
                    </li>
                    
                       
                </ul>
               
            </li>
             <li><a href="#"><span class="nav-icon"><i class="fa fa-table"></i></span><span class="nav-label">Slider</span></a>
                <ul>
                    <li><a href="<?php echo base_url();?>super_admin/slider">slider</a>
                    </li>
                    
                       
                </ul>
               
            </li>
             <li><a href="#"><span class="nav-icon"><i class="ico-email"></i></span><span class="nav-label">About </span></a>
                <ul>
                    <li><a href="<?php echo base_url();?>super_admin/about">About</a>
                </ul>
            </li>
        
        
            <li><a href="#"><span class="nav-icon"><i class="ico-users"></i></span><span class="nav-label">Team Member</span></a>
                <ul>
                    <li><a href="<?php echo base_url();?>super_admin/member">Member </a> </li>
                  
                </ul>
            </li>
          
           
          
                <li><a href="#"><span class="nav-icon"><i class="fa fa-money"></i></span><span class="nav-label">Contact Information
                       
                     
                        </span></a>
                <ul>
                   
                        <li><a href="<?php echo base_url();?>super_admin/contact">Contact Information</a>
                    </li>
                    <li><a href="<?php echo base_url();?>super_admin/user_contact">Visitor Contact Information</a> </li>
                  
                </ul>
            </li>
             <li><a href="#"><span class="nav-icon"><i class="fa fa-money"></i></span><span class="nav-label">Service
                       
                        </span></a>
                <ul>
                    <li><a href="<?php echo base_url();?>super_admin/main_portfolio">Service </a> </li>
                  
                </ul>
            </li>
            <li><a href="#"><span class="nav-icon"><i class="fa fa-money"></i></span><span class="nav-label">Blog
                       
                        </span></a>
                <ul>
                    <li><a href="<?php echo base_url();?>super_admin/blog">Blog </a> </li>
                  
                </ul>
            </li>
            
             <li><a href="#"><span class="nav-icon"><i class="fa fa-money"></i></span><span class="nav-label">Counter
                       
                        </span></a>
                <ul>
                    <li><a href="<?php echo base_url();?>super_admin/counter">Counter </a> </li>
                  
                </ul>
            </li>
              <li><a href="#"><span class="nav-icon"><i class="ico-users"></i></span><span class="nav-label">Testimonial</span></a>
                <ul>
                    <li><a href="<?php echo base_url();?>super_admin/testimonial">Testimonial </a> </li>
                  
                </ul>
            </li>
             <li><a href="#"><span class="nav-icon"><i class="fa fa-money"></i></span><span class="nav-label">Project
                       
                        </span></a>
                <ul>
                   <li><a href="<?php echo base_url();?>super_admin/gallery">Project </a> </li>
                </ul>
            </li>
             <li><a href="#"><span class="nav-icon"><i class="ico-users"></i></span><span class="nav-label">Partner</span></a>
                <ul>
                    <li><a href="<?php echo base_url();?>super_admin/partner">Partner </a> </li>
                  
                </ul>
            </li>
             <li><a href="#"><span class="nav-icon"><i class="ico-users"></i></span><span class="nav-label">System User</span></a>
                <ul>
                    <li><a href="<?php echo base_url();?>super_admin/add_admin_user">Add Admin Uesr </a> </li>
                   <li><a href="<?php echo base_url();?>super_admin/all_admin_user">All Admin Uesr </a> </li>
                </ul>
            </li>
            <li><a href="<?php echo base_url();;?>admin_login/admin_logout" class="waves-effect"><span class="nav-icon"><i class="fa fa-lock"></i></span><span class="nav-label">Logout</span></a>
            
            </li>
        </ul>
    </div>
</div>
<div class="page-content">
<!--Topbar Start Here -->
<header class="top-bar">
    <div class="container-fluid top-nav">
        <div class="search-form search-bar">
            <form>
                <input name="searchbox" value="" placeholder="Search Topic..." class="search-input">
            </form>
            <span class="search-close waves-effect"><i class="ico-cross"></i></span>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="clearfix top-bar-action">
                    <span class="leftbar-action-mobile waves-effect"><i class="fa fa-bars "></i></span>
                    <span class="leftbar-action desktop waves-effect"><i class="fa fa-bars "></i></span>
						<span class="waves-effect search-btn mobile-search-btn">
						<i class="fa fa-search"></i>
						</span>
                    <span class="rightbar-action waves-effect"><i class="fa fa-bars"></i></span>
                </div>
            </div>
            <div class="col-md-4 responsive-fix top-mid">
                <div class="notification-nav">
                    <ul class="clearfix">
                        <li class="dropdown"><a href="#" data-toggle="dropdown" class="hide-small-device waves-effect"><i class="fa fa-envelope"></i>
                               
                               </a>
                            <div role="menu" class="dropdown-menu message-dropdown msg-lists fadeInUp hide-small-device">
                                <div class="message-wrap">
                                    <h4>You have <?php echo $count;?> new messages</h4>
                                    <ul class="clearfix">
                                        <?php foreach ($all_email as $email) { ?>
                                            <?php if($email->status>0){?>
                                            <li class="clearfix">
                                                <a href="<?php echo base_url()?>super_admin/view_inbox/<?php echo $email->email_id ?>" class="message-thumb"><img src="<?php echo $email->photo?>" alt="image">
                                                </a><a href="<?php echo base_url()?>super_admin/view_inbox/<?php echo $email->email_id ?>" class="message-intro"><span class="message-meta"><?php echo $email->fullname?> </span><?php echo $email->subject?> <span class="message-time"><?php echo $email->date?></span></a>
                                            </li>
                                            <?php }?>
                                      <?php }?>
                                    </ul>
                                    <a class="btn btn-primary btn-block notification-btn clearfix waves-effect" href="#"><span>View All</span></a>
                                </div>
                            </div>
                        </li>
                     
                    </ul>
                </div>
                <div class="pull-left mobile-search">
						<span class=" waves-effect search-btn">
						<i class="fa fa-search"></i>
						</span>
                </div>
            </div>
            <div class="col-md-6 responsive-fix">
                <div class="top-aside-right">
                    <div class="user-nav">
                        <ul>
                            <li class="dropdown">
                                <?php foreach($all_admin_users as $case) { ?>   
                                <a data-toggle="dropdown" href="#" class="clearfix dropdown-toggle waves-effect waves-block waves-classic">
                                    <span class="user-info"><?php echo $case->fullname;?>  <cite><?php echo $case->email;?>  </cite></span>
                                    
                                    <span class="user-thumb"><img src="<?php echo $case->photo;?>" alt="image"></span>
                                </a>
                              
                                <ul role="menu" class="dropdown-menu fadeInUp">
                                    
                                    <li><a href="<?php echo base_url();?>super_admin/profile"><span class="user-nav-icon"><i class="fa fa-user"></i></span><span class="user-nav-label">View Profile</span></a>
                                    </li>
                                    <li><a href="#"><span class="user-nav-icon"><i class="fa fa-cogs"></i></span><span class="user-nav-label">Change Password</span></a>
                                    </li>
                                    <li><a href="<?php echo base_url();;?>admin_login/admin_logout"><span class="user-nav-icon"><i class="fa fa-lock"></i></span><span class="user-nav-label">Logout</span></a>
                                    </li>
                                </ul>
                                <?php }?>
                            </li>
                        </ul>
                    </div>
                    <div class="pull-right desktop-search">
							<span class="waves-effect search-btn">
							<i class="fa fa-search"></i>
							</span>
                    </div>
                    <span class="rightbar-action waves-effect"><i class="fa fa-bars"></i></span>
                </div>
            </div>
        </div>
    </div>
</header>



  <?php echo $content ?>

</div>

<!--Rightbar Start Here -->

</div>
</div>
<script src="<?php echo base_url();?>assets/admin/js/jquery-1.11.2.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/jRespond.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/nav-accordion.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/hoverintent.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/waves.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/switchery.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/jquery.loadmask.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/icheck.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/select2.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/bootstrap-filestyle.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/bootbox.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/animation.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/colorpicker.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/sweetalert.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/moment.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/calendar/fullcalendar.js"></script>
<!--CHARTS-->
<script src="<?php echo base_url();?>assets/admin/js/chart/sparkline/jquery.sparkline.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/chart/easypie/jquery.easypiechart.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/chart/flot/excanvas.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/chart/flot/jquery.flot.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/chart/flot/curvedLines.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/chart/flot/jquery.flot.time.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/chart/flot/jquery.flot.stack.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/chart/flot/jquery.flot.axislabels.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/chart/flot/jquery.flot.resize.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/chart/flot/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/chart/flot/jquery.flot.spline.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/chart/flot/jquery.flot.pie.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/chart.init.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/smart-resize.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/layout.init.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/matmix.init.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/retina.min.js"></script>
</body>

<!-- Mirrored from www.lab.westilian.com/matmix-admin/list-view/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Jan 2018 19:30:55 GMT -->
</html>