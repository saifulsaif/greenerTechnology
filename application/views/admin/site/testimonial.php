<div class="row">
    <div class="col-md-12">
        
        
            <div class="widget-container">
                <div class="widget-block">
                    <div class="row">
                       
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
                    <h2>Add Testimonial Information</h2>
                     <h4 style="color:red;">
          <?php 
                $message=$this->session->userdata('message');
                if(isset($error))
                {
                    echo $error;
                    $this->session->unset_userdata('message');
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

                </div>
                <form class="form-horizontal" action="<?php echo base_url()?>super_admin/save_testimonial" enctype="multipart/form-data" method="post">
                   <div class="form-group">
                        <label class="col-md-2 control-label">Name *</label>
                        <div class="col-md-4">
                           
                            <input type="text" class="form-control" name="name">

                        </div>
                      
                    </div>
                     <div class="form-group">
                        <label class="col-md-2 control-label">Designation *</label>
                        <div class="col-md-4">
                           
                            <input type="text" class="form-control" name="designation">

                        </div>
                      
                    </div>
                  
                    <div class="form-group">
                      
                      <label class="col-md-2 control-label">Testimonial Details</label>
                        <div class=" col-md-9">
                            <textarea name="details" class="form-control" rows="6">
                             </textarea>
                            

                        </div>
                    </div>
                    
                
                  
                    <div class="form-group">
                           <label class="col-md-2 control-label"></label>
                        <div class="col-md-7">
                            <div class="form-actions">
                                <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-primary">Submit</button>
                                <button type="reset"  class="btn btn-default">Cancel</button>
                            </div>
                        </div>
                           
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>

                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered matmix-dt">
                            <thead>
                                <tr>
                                       <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                     S/L
                                    </th>
                                       <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                  Name
                                    </th>
                                    <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                  Designation
                                    </th>
                                   
                                    <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                  Details
                                    </th>
                                       
                                    <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php $i=0;?>
                                                    <?php foreach($all_testimonial as $contact) { ?> 
                                                            <?php $i=$i+1;?>
                            
                                             
                                <tr>
                                    
                                    <td class="tc-center">
                                     <?php echo $i;?>
                                    </td>
                                     
                                     <td class="tc-center">
                                        <?php echo $contact->name ?>
                                   
                                    </td>
                                    <td class="tc-center">
                                        <?php echo $contact->designation ?>
                                   
                                    </td>
                                    <td class="tc-center">
                                        <?php echo $contact->details ?>
                                   
                                    </td>
                                      
                                    <td class="tc-center">
                                        <div class="btn-toolbar" role="toolbar">
                                            <div class="btn-group" role="group">
                                          <a href="<?php echo base_url()?>super_admin/edit_testimonial/<?php echo $contact->testimonial_id ?>"  class="btn btn-success " color: white;">Update</a>
                                                <a href="<?php echo base_url()?>super_admin/delete_testimonial/<?php echo $contact->testimonial_id ?>" class="btn btn-default" onclick="return confirm('Are you sure?')" style="background-color: #e5343d;color: white;" >Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                     <?php }?>
                               
                                  
                            </tbody>
                        </table>
                    </div>
                    <div class="dt-pagination">
                        <nav>
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">Prev</span>
                                    </a>
                                </li>
                                <li><a href="#">1</a>
                                </li>
                                <li><a href="#">2</a>
                                </li>
                                <li><a href="#">3</a>
                                </li>
                                <li><a href="#">4</a>
                                </li>
                                <li><a href="#">5</a>
                                </li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        
      
    </div>
</div>