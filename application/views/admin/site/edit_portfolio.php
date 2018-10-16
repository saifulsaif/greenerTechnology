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
                    <h2>Update  Product</h2>
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
                <form class="form-horizontal" action="<?php echo base_url()?>super_admin/update_main_portfolio" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Service Icon  *</label>
                        <div class="col-md-4">
                           
                            <input type="file" class="form-control" name="photo">
                             <br>   <img class="card-img-top img-fluid" height="100px" width="120px;" src=" <?php echo $portfolio_info->photo?>" alt="Card image cap">
                  

                        </div>
                       
                      
                    </div>
                   <div class="form-group">
                        <label class="col-md-2 control-label">Service Title*</label>
                        <div class="col-md-4">
                           
                            <input type="text" class="form-control" value="<?php echo $portfolio_info->name?>" name="name">
                            <input type="hidden" class="form-control" value="<?php echo $portfolio_info->id?>" name="id">

                        </div>
                      
                    </div>
                        <div class="form-group">
                      
                      <label class="col-md-2 control-label">Service Description</label>
                        <div class=" col-md-9">
                            <textarea name="link" value="<?php echo $portfolio_info->link;?>" class="form-control" rows="12">
<?php echo $portfolio_info->link;?>
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
</div></div>
 <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered matmix-dt">
                            <thead>
                                <tr>
                                       <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                     S/L
                                    </th>
                                       <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                     Service Icon
                                      </th>
                                       <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                    Service Title
                                    </th>
                                     </th>
                                       <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                     Service Description 
                                    </th>
                                    </th>
                                    <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php $i=0;?>
                                                    <?php foreach($all_main_portfolio as $logo) { ?> 
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
                                  <?php echo $logo->link;?>
                                   
                                    </td>
                                    <td class="tc-center">
                                        <div class="btn-toolbar" role="toolbar">
                                            <div class="btn-group" role="group">
                                          <a href="<?php echo base_url()?>super_admin/edit_main_portfolio/<?php echo $logo->id ?>"  class="btn btn-success " color: white;">Update</a>
                                                <a href="<?php echo base_url()?>super_admin/delete_main_portfolio/<?php echo $logo->id ?>" class="btn btn-default" onclick="return confirm('Are you sure?')" style="background-color: #e5343d;color: white;" >Delete</a>
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