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
      <script  type="text/javascript" src="<?php echo base_url();?>assets/site/js/bootstrap.min.js"></script>
      <script  type="text/javascript" src="<?php echo base_url();?>assets/site/js/owl.carousel.js"></script>
      <script  type="text/javascript" src="<?php echo base_url();?>assets/site/js/jquery.magnific-popup.js"></script>
      <script  type="text/javascript" src="<?php echo base_url();?>assets/site/js/mixer.js"></script>
      <script  type="text/javascript" src="<?php echo base_url();?>assets/site/js/count.js"></script>
      <script  type="text/javascript" src="<?php echo base_url();?>assets/site/js/theme.js"></script>
	  <script  type="text/javascript" src="<?php echo base_url();?>assets/site/js/smoothscroll.js"></script>
   </body>

<!-- Mirrored from preview.perfecthemes.com/TF/Finex/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 May 2018 07:13:16 GMT -->
</html>