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
                    <h2>Update  Member Information </h2>
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
                <form class="form-horizontal" action="<?php echo base_url()?>super_admin/update_artists" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <label class="col-md-2 control-label">photo *</label>
                        <div class="col-md-4">
                           
                            <input type="file" class="form-control" name="photo">
                            <input type="hidden" class="form-control" value="<?php echo $artists_info->artists_id;?>" name="artists_id">
                             <br>   <img class="card-img-top img-fluid" height="100px" width="120px;" src=" <?php echo $artists_info->photo;?>" alt="Card image cap">
                  
                          

                        </div>
                       
                      
                    </div>
                   <div class="form-group">
                        <label class="col-md-2 control-label">Member Name *</label>
                        <div class="col-md-4">
                           
                            <input type="text" value="<?php echo $artists_info->name?>" class="form-control" name="name">

                        </div>
                      
                    </div>
                      <div class="form-group">
                        <label class="col-md-2 control-label">Designation *</label>
                        <div class="col-md-4">
                           
                            <input type="text" value="<?php echo $artists_info->category;?>" class="form-control" name="category">

                        </div><br><br><br>
                      
                    </div>
                       <div class="form-group">
                        <label class="col-md-2 control-label">Facebook Link </label>
                        <div class="col-md-4">
                           
                            <input type="text" value="<?php echo $artists_info->facebook?>" class="form-control" name="facebook">

                        </div>
                      
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Twitter Link </label>
                        <div class="col-md-4">
                           
                            <input type="text" value="<?php echo $artists_info->twitter?>" class="form-control" name="twitter">

                        </div>
                      
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">LinkIn </label>
                        <div class="col-md-4">
                           
                            <input type="text" value="<?php echo $artists_info->linkin?>" class="form-control" name="linkin">

                        </div>
                      
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Gmail</label>
                        <div class="col-md-4">
                           
                            <input type="text" value="<?php echo $artists_info->gmail?>" class="form-control" name="gmail">

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
                                     Member Image
                                      </th>
                                       <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                    Member Name
                                    </th>
                                       <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                   Designation
                                    </th>
                                     <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                   Facebook
                                    </th>
                                    <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                   Twitter
                                    </th>
                                    <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                   LinkIn
                                    </th>
                                    <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                   Gmail
                                    </th>
                                    <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php $i=0;?>
                                                    <?php foreach($all_artists as $logo) { ?> 
                                                            <?php $i=$i+1;?>
                            
                                             
                                <tr>
                                    
                                    <td class="tc-center">
                                     <?php echo $i;?>
                                    </td>
                                     
                                     <td class="tc-center">
                                  <img class="card-img-top img-fluid" height="100px" width="120px;" src=" <?php echo $logo->photo;?>" alt="Card image cap">
                  
                                   
                                    </td>
                                      
                                     <td class="tc-center">
                                  <?php echo $logo->name;?>
                                   
                                    </td>
                                    <td class="tc-center">
                                  <?php echo $logo->category;?>
                                   
                                    </td>
                                    <td class="tc-center">
                                  <?php echo $logo->facebook;?>
                                   
                                    </td>
                                    <td class="tc-center">
                                  <?php echo $logo->twitter;?>
                                   
                                    </td>
                                    <td class="tc-center">
                                  <?php echo $logo->linkin;?>
                                   
                                    </td>
                                    <td class="tc-center">
                                  <?php echo $logo->gmail;?>
                                   
                                    </td>
                                    <td class="tc-center">
                                        <div class="btn-toolbar" role="toolbar">
                                            <div class="btn-group" role="group">
                                          <a href="<?php echo base_url()?>super_admin/edit_artists/<?php echo $logo->artists_id ?>"  class="btn btn-success " color: white;">Update</a>
                                                <a href="<?php echo base_url()?>super_admin/delete_artists/<?php echo $logo->artists_id ?>" class="btn btn-default" onclick="return confirm('Are you sure?')" style="background-color: #e5343d;color: white;" >Delete</a>
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