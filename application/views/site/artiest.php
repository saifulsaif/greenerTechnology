<?php include 'header.php';?>
  <div class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="consultis-breadcumb banner-text">
                        <ul>
                            <li class="home-icon"><a href="#">Home</a></li>
                            <li class="left-arrow-icon"><a href="#">Artists</a></li>
                          
                        </ul>
                        <h2 class="color-black">All Famous Artists</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="section-padding">
        <div class="container">
            <div class="team-member-2 owl-carousel owl-theme">
                <div class="team-inner-item">
                   <?php foreach($all_artists as $artists) { ?> 
                    <?php if($artists->artists_id%2==0){?>
                    <div class="team-box">
                          
                        <div class="row">
                            <div class="col-md-4">
                                <div class="image">
                                    <img src="<?php echo $artists->photo?>" alt="">
                                    <div class="social">
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 pl5">
                                <div>
                                    <h4><a href="#"><?php echo $artists->name?> - </a><span class="designation"> <?php echo $artists->category?></span></h4>
                                    <p> <?php $content= $artists->details;
                                        $pos=strpos($content, ' ', 180);
                                         echo substr($content,0,$pos ); 
                                          ?></p>
                                    <a class="angle-left-arrow" href="<?php echo base_url()?>welcome/view_artists/<?php echo $artists->artists_id ?>">Read More</a>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    <?php }?>
                     <?php }?>
                    
                    </div>
                
                
                   <div class="team-inner-item">
                   <?php foreach($all_artists as $artists) { ?> 
                    <?php if($artists->artists_id%2==1){?>
                    <div class="team-box">
                          
                        <div class="row">
                            <div class="col-md-4">
                                <div class="image">
                                    <img src="<?php echo $artists->photo?>" alt="">
                                    <div class="social">
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 pl5">
                                <div>
                                    <h4><a href="#"><?php echo $artists->name?> - </a><span class="designation"> <?php echo $artists->category?></span></h4>
                                    <p> <?php $content= $artists->details;
                                        $pos=strpos($content, ' ', 180);
                                         echo substr($content,0,$pos ); 
                                          ?></p>
                                    <a class="angle-left-arrow" href="<?php echo base_url()?>welcome/view_artists/<?php echo $artists->artists_id ?>">Read More</a>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    <?php }?>
                     <?php }?>
                    
                    </div>
                    
                
                
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding bg-deep">
        <div class="container">
            <div class="section-head text-left mb85">
                <h2 class="title-line-left">Project</h2>
            </div>
            <div class="row">
                <div class="project-carousel popup-box owl-carousel owl-theme custom-navs">
                    <div class="project-item-box">
                        <div class="image">
                            <img class="img-responsive" src="<?php echo base_url();?>assets/site/images/project/9.jpg" alt="">
                            <a class="zoom-button" href="<?php echo base_url();?>assets/site/images/project/9.jpg"><i class="fa fa-search-plus "></i></a>
                        </div>
                        <div class="project-content text-center">
                            <h4 class="mb0"><a href="#">Franchising Trade Center</a></h4>
                            <p>Franchising Consulting</p>
                        </div>
                    </div>
                    <div class="project-item-box">
                        <div class="image">
                            <img class="img-responsive" src="<?php echo base_url();?>assets/site/images/project/10.jpg" alt="">
                            <a class="zoom-button" href="<?php echo base_url();?>assets/site/images/project/10.jpg"><i class="fa fa-search-plus "></i></a>
                        </div>
                        <div class="project-content text-center">
                            <h4 class="mb0"><a href="#">Franchising Trade Center</a></h4>
                            <p>Franchising Consulting</p>
                        </div>
                    </div>
                    <div class="project-item-box">
                        <div class="image">
                            <img class="img-responsive" src="<?php echo base_url();?>assets/site/images/project/11.jpg" alt="">
                            <a class="zoom-button" href="<?php echo base_url();?>assets/site/images/project/11.jpg"><i class="fa fa-search-plus "></i></a>
                        </div>
                        <div class="project-content text-center">
                            <h4 class="mb0"><a href="#">Franchising Trade Center</a></h4>
                            <p>Franchising Consulting</p>
                        </div>
                    </div>
                    <div class="project-item-box">
                        <div class="image">
                            <img class="img-responsive" src="<?php echo base_url();?>assets/site/images/project/12.jpg" alt="">
                            <a class="zoom-button" href="<?php echo base_url();?>assets/site/images/project/12.jpg"><i class="fa fa-search-plus "></i></a>
                        </div>
                        <div class="project-content text-center">
                            <h4 class="mb0"><a href="#">Franchising Trade Center</a></h4>
                            <p>Franchising Consulting</p>
                        </div>
                    </div>
                    <div class="project-item-box">
                        <div class="image">
                            <img class="img-responsive" src="<?php echo base_url();?>assets/site/images/project/9.jpg" alt="">
                            <a class="zoom-button" href="<?php echo base_url();?>assets/site/images/project/9.jpg"><i class="fa fa-search-plus "></i></a>
                        </div>
                        <div class="project-content text-center">
                            <h4 class="mb0"><a href="#">Franchising Trade Center</a></h4>
                            <p>Franchising Consulting</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="getquote">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-4 col-xs-12">
                    <div class="getquote-text owl-theme owl-carousel">
                        <div class="item">
                            <h3>Let's deliver the right solution for your business!</h3>
                        </div>
                        <div class="item">
                            <h3>Let's deliver the right solution for your business!</h3>
                        </div>
                        <div class="item">
                            <h3>Let's deliver the right solution for your business!</h3>
                        </div>
                        <div class="item">
                            <h3>Let's deliver the right solution for your business!</h3>
                        </div>
                        <div class="item">
                            <h3>Let's deliver the right solution for your business!</h3>
                        </div>
                        <div class="item">
                            <h3>Let's deliver the right solution for your business!</h3>
                        </div>
                        <div class="item">
                            <h3>Let's deliver the right solution for your business!</h3>
                        </div>
                        <div class="item">
                            <h3>Let's deliver the right solution for your business!</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12 text-right">
                    <a class="consultis-success-button" href="#">Get A Quote</a>
                </div>
            </div>
        </div>
    </section>
    <!--footer-->
  <?php include 'footer.php';?>