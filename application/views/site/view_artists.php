<?php include 'header.php';?>
    <div class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="consultis-breadcumb banner-text">
                        <ul>
                            <li class="home-icon"><a href="<?php echo base_url()?>welcome">Home</a></li>
                            <li class="left-arrow-icon"><a href="<?php echo base_url()?>welcome/artiest">Artists</a></li>
                           <li class="left-arrow-icon">Artists Details</li>
                        </ul>
                       
                        <h2 class="color-black"><?php foreach($all_view_artists as $artists) { ?> 
                            <?php echo $artists->name;
                              
                                ?>

                             <?php }?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php foreach($all_view_artists as $artists) { ?>  
    <section class="section-padding">
        <div class="container">
            <div class="row mb25">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="image">
                        <img src="<?php echo $artists->photo?>" alt="">
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="team-details">
                        <h2><?php echo $artists->name;
                              
                                ?></h2>
                        <p class="designation"><?php echo $artists->category?></p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-google"></i></a></li>
                        </ul>
                        <p><?php echo $artists->details?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="section-head mb45">
                        <h3>About</h3>
                    </div>
                    <div class="address-list">
                        <h4>Contact</h4>
                        <ul>
                             <li><span><i class="fa fa-phone"></i> </span> <?php echo $artists->number?></li>
                            <li><span><i class="fa fa-map-marker"></i> </span> <?php echo $artists->address?></li>
                        </ul>
                    </div>
                    <div class="widget bg-deep">
                        <h4>Experience:</h4>
                       <?php echo $artists->experience?>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="section-head mb45">
                        <h3>Call Back</h3>
                    </div>
                    <div class="bg-deep">
                        <div class="return-back">
                            <p>If youd like a free consultation please start by completing the form:</p>

                            <form id="contact" action="#">
                                <div class="custom-input">
                                    <input type="text" name="name" placeholder="First Name" class="form-control" required="">
                                    <input type="email" name="email" placeholder="Email" class="form-control" required="">
                                    <select class="form-control mb30" name="text">
                                        <option>United State</option>
                                        <option>Canada</option>
                                        <option>Australia</option>
                                        <option>Usa</option>
                                    </select>
                                    <select class="form-control" name="text">
                                        <option>Marketing Consulting</option>
                                        <option>Ecomonic Consulting</option>
                                        <option>Business Consulting</option>
                                        <option>Consulting Services</option>
                                    </select>
                                </div>
                                <div class="custom-input">
                                    <input type="text" name="name" placeholder="Last Name" class="form-control" required="">
                                    <input type="text" name="name" placeholder="Phone" class="form-control" required="">
                                    <input type="text" name="name" placeholder="Address" class="form-control" required="">
                                    <button type="submit" class="consultis-success-button">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <?php }?>
    <section class="section-padding bg-deep">
        <div class="container">
            <div class="section-head text-left mb85">
                <h2 class="title-line-left">Project of <span class="title-text"> Gray </span></h2>
            </div>
            <div class="row">
                <div class="project-carousel popup-box owl-carousel owl-theme custom-navs">
                    <div class="project-item-box">
                        <div class="image">
                            <img class="img-responsive" src="images/project/9.jpg" alt="">
                            <a class="zoom-button" href="images/project/9.jpg"><i class="fa fa-search-plus "></i></a>
                        </div>
                        <div class="project-content text-center">
                            <h4 class="mb0"><a href="#">Franchising Trade Center</a></h4>
                            <p>Franchising Consulting</p>
                        </div>
                    </div>
                    <div class="project-item-box">
                        <div class="image">
                            <img class="img-responsive" src="images/project/10.jpg" alt="">
                            <a class="zoom-button" href="images/project/10.jpg"><i class="fa fa-search-plus "></i></a>
                        </div>
                        <div class="project-content text-center">
                            <h4 class="mb0"><a href="#">Franchising Trade Center</a></h4>
                            <p>Franchising Consulting</p>
                        </div>
                    </div>
                    <div class="project-item-box">
                        <div class="image">
                            <img class="img-responsive" src="images/project/11.jpg" alt="">
                            <a class="zoom-button" href="images/project/11.jpg"><i class="fa fa-search-plus "></i></a>
                        </div>
                        <div class="project-content text-center">
                            <h4 class="mb0"><a href="#">Franchising Trade Center</a></h4>
                            <p>Franchising Consulting</p>
                        </div>
                    </div>
                    <div class="project-item-box">
                        <div class="image">
                            <img class="img-responsive" src="images/project/12.jpg" alt="">
                            <a class="zoom-button" href="images/project/12.jpg"><i class="fa fa-search-plus "></i></a>
                        </div>
                        <div class="project-content text-center">
                            <h4 class="mb0"><a href="#">Franchising Trade Center</a></h4>
                            <p>Franchising Consulting</p>
                        </div>
                    </div>
                    <div class="project-item-box">
                        <div class="image">
                            <img class="img-responsive" src="images/project/9.jpg" alt="">
                            <a class="zoom-button" href="images/project/9.jpg"><i class="fa fa-search-plus "></i></a>
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
                <div class="col-md-9 col-sm-8 col-xs-12">
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
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <a class="consultis-success-button" href="#">Get A Quote</a>
                </div>
            </div>
        </div>
    </section>
    <!--footer-->
   <?php include 'footer.php';?>