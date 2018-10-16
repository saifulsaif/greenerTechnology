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
                    <h2>Add Contact Information</h2>
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
                <form class="form-horizontal" action="<?php echo base_url()?>super_admin/save_contact" enctype="multipart/form-data" method="post">
                   <div class="form-group">
                        <label class="col-md-2 control-label">Address *</label>
                        <div class="col-md-4">
                           
                            <input type="text" class="form-control" name="address">

                        </div>
                      
                    </div>
                     <div class="form-group">
                        <label class="col-md-2 control-label">Number *</label>
                        <div class="col-md-4">
                           
                            <input type="text" class="form-control" name="number">

                        </div>
                      
                    </div>
                     <div class="form-group">
                        <label class="col-md-2 control-label">Email *</label>
                        <div class="col-md-4">
                           
                            <input type="text" class="form-control" name="email">

                        </div>
                      
                    </div>
                    <div class="form-group">
                      
                      <label class="col-md-2 control-label">Contact Details</label>
                        <div class=" col-md-9">
                            <textarea name="details" class="form-control" rows="6">
                             </textarea>
                            

                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-md-2 control-label">Facebook Link </label>
                        <div class="col-md-4">
                           
                            <input type="text" class="form-control" name="facebook">

                        </div>
                      
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Twitter Link </label>
                        <div class="col-md-4">
                           
                            <input type="text" class="form-control" name="twitter">

                        </div>
                      
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Youtube Link </label>
                        <div class="col-md-4">
                           
                            <input type="text" class="form-control" name="youtube">

                        </div>
                      
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Instagram</label>
                        <div class="col-md-4">
                           
                            <input type="text" class="form-control" name="instagram">

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
                                  Address
                                    </th>
                                    <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                  Number
                                    </th>
                                    <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                  Email
                                    </th>
                                    <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                  Details
                                    </th>
                                         </th>
                                       <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                  Facebook
                                    </th>
                                    <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                  Twitter
                                    </th>
                                    <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                  Youtube
                                    </th>
                                    <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                  Instagram
                                    </th>
                                    <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php $i=0;?>
                                                    <?php foreach($all_contact as $contact) { ?> 
                                                            <?php $i=$i+1;?>
                            
                                             
                                <tr>
                                    
                                    <td class="tc-center">
                                     <?php echo $i;?>
                                    </td>
                                     
                                     <td class="tc-center">
                                        <?php echo $contact->address ?>
                                   
                                    </td>
                                    <td class="tc-center">
                                        <?php echo $contact->number ?>
                                   
                                    </td>
                                    <td class="tc-center">
                                        <?php echo $contact->email ?>
                                   
                                    </td>
                                    <td class="tc-center">
                                        <?php echo $contact->details ?>
                                   
                                    </td>
                                      <td class="tc-center">
                                        <?php echo $contact->facebook ?>
                                   
                                    </td>
                                    <td class="tc-center">
                                        <?php echo $contact->twitter ?>
                                   
                                    </td>
                                    <td class="tc-center">
                                        <?php echo $contact->youtube ?>
                                   
                                    </td>
                                    <td class="tc-center">
                                        <?php echo $contact->instagram ?>
                                   
                                    </td>
                                    <td class="tc-center">
                                        <div class="btn-toolbar" role="toolbar">
                                            <div class="btn-group" role="group">
                                          <a href="<?php echo base_url()?>super_admin/edit_contact/<?php echo $contact->contact_id ?>"  class="btn btn-success " color: white;">Update</a>
                                                <a href="<?php echo base_url()?>super_admin/delete_contact/<?php echo $contact->contact_id ?>" class="btn btn-default" onclick="return confirm('Are you sure?')" style="background-color: #e5343d;color: white;" >Delete</a>
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