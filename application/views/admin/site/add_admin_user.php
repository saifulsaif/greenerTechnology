
<div class="col-md-1">
</div>
<div class="col-md-12">
    <div class="box-widget widget-module">
        <div class="widget-head clearfix">
            <span class="h-icon"><i class="fa fa-bars"></i></span>
            <h4>Please fill in the information below. The field labels marked with( * )are required input fields.</h4>
        </div>
        <div class="widget-container">
            <div class=" widget-block">
                <div class="page-header">
                    <h2>Add New  Admin User</h2>
                    <h4 style="color:red;">
          <?php 
                $exception=$this->session->userdata('error');
                if(isset($exception))
                {
                    echo $exception;
                    $this->session->unset_userdata('exception');
                }
          ?>
          
      </h4>
     

                </div>
                <form class="form-horizontal" action="<?php echo base_url()?>super_admin/save_user" method="post" enctype="multipart/form-data">
                   
                   
                    <div class="form-group">
                        <label class="col-md-2 control-label">Full Name *</label>
                        <div class="col-md-4">
                           
                            <input type="text" name="fullname" required="name" class="form-control" >

                        </div>
                      
                    </div>
                     <div class="form-group">
                        <label class="col-md-2 control-label">Date Of Birth *</label>
                        <div class="col-md-4">
                           
                            <input type="text" name="dob" required="name" class="form-control" >

                        </div>
                      
                    </div>
                    
                  <div class="form-group">
                      
                      <label class="col-md-2 control-label"> Gander </label>
                        <div class=" col-md-4">
                            <select class="form-control" name="gender">
                               <option value="0">Select one</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                
                            </select>

                        </div>
                    </div>
                    <div class="form-group">
                      
                      <label class="col-md-2 control-label">Number</label>
                        <div class=" col-md-4">
                            <input type="text" class="form-control" name="phone" placeholder="From which number">
                            

                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-md-2 control-label">Email</label>
                        <div class="col-md-4">
                           
                            <input type="email" name="email" required="name" class="form-control" >

                        </div>
                      
                    </div>
                      <div class="form-group">
                        <label class="col-md-2 control-label">Photo</label>
                        <div class="col-md-4">
                           
                            <input type="file" name="photo" required="name" class="form-control" >

                        </div>
                      
                    </div>
                    <div class="form-group">
                      
                      <label class="col-md-2 control-label"> User Name</label>
                        <div class=" col-md-4">
                            <input type="text" class="form-control" name="username">
                        </div>
                    </div>
                     <div class="form-group">
                      
                      <label class="col-md-2 control-label"> Password</label>
                        <div class=" col-md-4">
                            <input type="password" class="form-control" name="password">
                        </div>
                    </div>
                 
                  
                    <div class="form-group">
                           <label class="col-md-3 control-label"></label>
                        <div class="col-md-6">
                            <div class="form-actions">
                                <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-primary">Save </button>
                                <button type="reset"  class="btn btn-default">Cancel</button>
                            </div>
                        </div>
                           
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>
