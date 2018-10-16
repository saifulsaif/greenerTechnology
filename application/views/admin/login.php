<!doctype html>
<html>

<!-- Mirrored from www.lab.westilian.com/matmix-admin/list-view/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Jan 2018 19:32:14 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="A Components Mix Bootstarp 3 Admin Dashboard Template">
<meta name="author" content="Westilian">
<title>Greener Technology</title>
<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/font-awesome.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/animate.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/waves.css" type="text/css">
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
<body class="login-page">
    <div class="page-container">
        <div class="login-branding">
            <a href="index.html"></a>
        </div>
                           <h4 style="color:red;">
          <?php 
                $exception=$this->session->userdata('exception');
                if(isset($exception))
                {
                    echo $exception;
                    $this->session->unset_userdata('exception');
                }
          ?>
          
      </h4>
      <h4 style="color:green;">
          <?php 
                $message=$this->session->userdata('message');
                if(isset($message))
                {
                    echo $message;
                    $this->session->unset_userdata('message');
                }
          ?>
      </h4>
        <div class="login-container">
                <?php foreach($all_logo as $logo) { ?>  
            <img class="login-img-card" src="<?php echo $logo->logo;?>" alt="login thumb" />
                <?php }?>  
            <form class="form-signin" action="<?php echo base_url(); ?>admin_login/check_admin_login" method="post">
                <input type="text" id="inputEmail" class="form-control floatlabel " placeholder="Email Address" name="admin_email_address" required autofocus>
                <input type="password" id="inputPassword" class="form-control floatlabel " placeholder="Password" name="admin_password" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" class="switch-mini" /> Remember Me
                    </label>
                </div>
                <button class="btn btn-primary btn-block btn-signin" type="submit">Sign In</button>
            </form>

            <a href="#" class="forgot-password">
                Forgot the password?
            </a>
        </div>
        

    </div>
    <script src="<?php echo base_url();?>assets/admin/js/jquery-1.11.2.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/jRespond.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/nav-accordion.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/hoverintent.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/waves.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/switchery.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/jquery.loadmask.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/icheck.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/bootbox.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/animation.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/colorpicker.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/floatlabels.js"></script>

    <script src="<?php echo base_url();?>assets/admin/js/smart-resize.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/layout.init.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/matmix.init.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/retina.min.js"></script>
</body>


<!-- Mirrored from www.lab.westilian.com/matmix-admin/list-view/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Jan 2018 19:32:15 GMT -->
</html>