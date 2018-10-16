  <?php include 'site/header.php';?>
      <!--Header End-->
      <!--Slider Start-->
      <section class="sliderSection">
         <div id="main_slider" class="owl-carousel owl-theme slider">
                <?php foreach($all_slider as $slider) { ?> 
            <div class="item">
               <figure class="slider_image">
                  <img src="<?php echo $slider->photo?>" alt="slider_img" />
               </figure>
               <div class="slider-text text-center">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-10 col-sm-10 col-xs-10 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 text-center slider_animation">
                           <h1 class="theme_slider_title "><?php echo $slider->title?><span> <?php echo $slider->details?></span></h1>
                           <p class="slide-caption__desc ">
                            <?php echo $slider->details1?>
                           </p>
                           <div class="sliderBtn">
                              <a href="#" class="themeBtn ">Read More</a>
                              <a href="#" class="themeBtn bgwhite ">Contact Us</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
               <?php }?>
             
           
           
         </div>
      </section>
      <!--Slider End-->
      <!-- About us -->
      <section id="about_sec" class="commonSection aboutCont">
         <div class="container">
             <?php foreach ($all_about as $about) { ?>  
                 <div class="row">
                     <div class="col-lg-6">

                         <div class="aboutcontain">
                             <div class="themeHeadding black">
                                 <h2><?php echo $about->about_title; ?></h2>
                             </div>

                             <p>
                                 <?php echo $about->about; ?>

                             </p>

                             <a href="<?php echo base_url()?>welcome/about" class="themeBtn">Read More</a>
                         </div>
                     </div>
                     <div class="col-lg-6">
                         <div class="aboutimg">
                             <img src="<?php echo $about->photo; ?>" alt="">
                         </div>
                     </div>
                 </div>
             <?php } ?>
         </div>
      </section>
      <!-- About us -->
      <!--Service Section Start-->
      <section class="commonSection service_sec bggray">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 text-center">
                  <div class="themeHeadding black">
                     <h2>Our Service</h2>
                  </div>
               </div>
            </div>
             <div class="row">
                 <?php $i=0?>
                   <?php foreach($all_main_portfolio as $service) { ?>  
                 <?php $i=$i+1?>
                        <?php if($i<=8){?>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service text-center">
                        <div class="service-icon">
                              <img height="150px" width="150px" style=" border-radius: 50%;" src="<?php echo $service->photo?>" alt=""><br><br>
                      
                        </div>
                        <div class="service-text">
                            <h2 class="title"><?php echo $service->name?></h2>
                            <p><?php echo $service->link?></p>
                        </div>
                    </div>
                </div>
                
                 <?php }?>
                 <?php }?>
               
        </div>
         </div>
      </section>
      <!--Service Section End-->
      <!--Team Section Start-->
      <section class="commonSection bgwhite teamsec">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 text-center testcarHeadding">
                  <div class="themeHeadding black">
                     <h2>Our Team</h2>
                  </div>
               </div>
            </div>
             <?php $i=0?>
           <?php foreach($all_artists as $member) { ?>   
              <?php $i=$i+1?>
              <?php if($i<=4){?>
             <div class="col-md-3 col-sm-6 col-xs-12 team_sect">
                <div class="teamImg">
                    <figure>
                        <img src="<?php echo $member->photo;?>" alt="team_img" />
                        <p class="team-social">
                            <a href="<?php echo $member->facebook;?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="<?php echo $member->twitter;?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="<?php echo $member->linkin;?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href="<?php echo $member->gmail;?>"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                        </p>
                    </figure>
                </div>
                <div class="team-info text-center">
                    <h4 class="title"><?php echo $member->name;?></h4>
                    <p class="team_designation"><?php echo $member->category;?></p>
                </div>
            </div>
            <?php }?>
              <?php }?>
         </div>
      </section>
      <!--Team Section End-->
      <!--Project Fillter Start-->
      <section id="project_sec" class="commonSection fillterProject">
         <div class="container-fluid">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 text-left portfolio_sec">
                     <div class="themeHeadding black">
                        <h2>Show Our Work</h2>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <ul class="fillterNav">
                        <li class="filter" data-filter="all">All</li>
                        <li class="filter" data-filter="Wordpress">Wordpress</li>
                        <li class="filter" data-filter="Responsive">Responsive</li>
                        <li class="filter" data-filter="Magento">Magento</li> 
						<li class="filter" data-filter="Web Design">Web Design</li>
                     </ul>
                  </div>
               </div>
            </div>
             <div class="row">
                <div class="filterCont">
                     <?php $i=0?>
			   <?php foreach($all_gallery as $gallery) { ?>  
                         <?php $i=$i+1?>
                        <?php if($i<=8){?>
                           <?php $var='web Design'?>
                    <div class="col-md-3 col-sm-4 col-xs-6 project_secs mix <?php echo $var;?>">
                        <div class="singlePortfolio">
                            <div class="portfolioImg">
                                <img src="<?php echo $gallery->photo;?>" alt="">
                            </div>
                            <div class="portfolioHover">
                                <a href="<?php echo $gallery->photo;?>" class="popUp"><i class="fa fa-search-plus"></i></a>
                            </div>
                        </div>
                    </div>
                     <?php }?>
                     <?php }?>
                </div>
            </div>
         </div>
      </section>
      <!--Project Fillter End-->
      <!--Testmonial Start-->
      <section class="commonSection testmonial bgwhite">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 text-center testcarHeadding">
                  <div class="themeHeadding black">
                     <h2>Our Testimonials</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="testmonialsec">
                      <?php foreach($all_testimonial as $testimonial) { ?> 
                  <div class="col-xs-12 text-center">
                     <div class="singleTest">
                        <p>
                       <?php echo $testimonial->details?> </p>
                        <div class="testmonialinner">
                           <h2><?php echo $testimonial->name?></h2>
                           <p><?php echo $testimonial->designation?></p>
                        </div>
                     </div>
                  </div>
                   
                   <?php }?>
               </div>
            </div>
         </div>
      </section>
      <!--Testmonial End-->
      <!-- countert section -->
       <?php foreach($all_counter as $counter) { ?> 
      <section id="stats" class="commonSection">
         <div class="container">
            <div class="content" id="counter">
               <div class="col-md-3 col-sm-3 col-xs-6">
                  <div class="countdown">
                     <div class="counticon">
                        <i class="fa fa-book"></i>
                        <span class="counter-value" data-count="<?php echo $counter->project?>">0</span>
                        <h3>Total Projects</h3>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 col-sm-3 col-xs-6">
                  <div class="countdown">
                     <div class="counticon">
                        <i class="fa fa-smile-o"></i>
                        <span class="counter-value" data-count="<?php echo $counter->client?>">0</span>
                        <h3>Happy Clients</h3>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 col-sm-3 col-xs-6">
                  <div class="countdown">
                     <div class="counticon">
                        <i class="fa fa-group"></i>
                        <span class="counter-value" data-count="<?php echo $counter->member?>">0</span>
                        <h3>Active Member</h3>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 col-sm-3 col-xs-6">
                  <div class="countdown">
                     <div class="counticon">
                        <i class="fa fa-trophy"></i>
                        <span class="counter-value" data-count="<?php echo $counter->award?>">0</span>
                        <h3>Won Award</h3>
                     </div>
                  </div>
               </div>
               <div style="clear:both;"></div>
            </div>
         </div>
      </section>
       <?php }?> 
      
      <!-- counter section -->
      <!--Blog Section Start-->
      <section id="blog_Sec" class="commonSection bgwhite">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 text-center testcarHeadding">
                  <div class="themeHeadding black">
                     <h2>Latest News</h2>
                  </div>
               </div>
            </div>
            <div class="row">
            <?php $i=0?>
           <?php foreach($all_blog as $blog) { ?> 
             <?php $i=$i+1?>
            <?php if($i<=3){?>
               <div class="col-lg-4 col-sm-6 col-md-4">
                  <div class="singleBlog blogSec2">
                     <div class="blog_imag">
                        <img src="<?php echo $blog->photo?>" alt="">
                     </div>
                     <div class="blog_cont">
                        <h2 class="blog_tit"><a href="blog_detailsright.html"><?php echo $blog->title?> </a></h2>
                        <div class="meta">
                           <a href="#"><?php echo $blog->date?></a>,
                           <a href="#"><?php echo $blog->athor?></a>
                        </div>
                        <p>
                           <?php $content= $blog->details;
                                        $pos=strpos($content, ' ',120);
                                         echo substr($content,0,$pos ); 
                                          ?> ... </p>     </p>
                        <a class="sbrm" href="<?php echo base_url()?>welcome/single_blog/<?php echo $blog->blog_id ?>">Read More<i class="fa fa-angle-right"></i></a>
                     </div>
                  </div>
               </div>
           <?php } ?>  
                 <?php } ?>  
            </div>
         </div>
      </section>
      <!--Blog Section End-->
      <!--Partner Start-->
      <section class="partnerSec">
         <div class="container">
            <h2 class="hide">partner</h2>
            <div class="row">
               <div class="partnerCaro">
                      <?php foreach($all_partner as $partner) { ?>  
                  <div class="col-xs-12">
                     <div class="partnerClient">
                        <a href="<?php echo $partner->link?>">
                        <img src="<?php echo $partner->photo?>" alt="">
                        </a>
                     </div>
                  </div>
                   
                  <?php }?>
               </div>
            </div>
         </div>
      </section>
      <!--Partner End-->
      <!--Footer Start-->
    <?php include 'site/footer.php';?>