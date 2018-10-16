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
                    <h2>Update  Blog Information</h2>
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
                <form class="form-horizontal" action="<?php echo base_url()?>super_admin/update_blog" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Image *</label>
                        <div class="col-md-4">
                           
                            <input type="file" class="form-control" name="photo">
                            <br>   <img class="card-img-top img-fluid" height="100px" width="120px;" src=" <?php echo $blog_info->photo?>" alt="Card image cap">
                  

                        </div>
                      
                    </div>
                     <div class="form-group">
                        <label class="col-md-2 control-label">Blog Title *</label>
                        <div class="col-md-4">
                           
                            <input type="text" class="form-control" value="<?php echo $blog_info->title?>" name="title">
                            <input type="hidden" class="form-control" value="<?php echo $blog_info->athor?>" name="athor">
                            <input type="hidden" class="form-control" value="<?php echo $blog_info->date?>" name="date">
                            <input type="hidden" class="form-control" value="<?php echo $blog_info->blog_id?>" name="blog_id">

                        </div>
                      
                    </div>
                    <div class="form-group">
                      
                      <label class="col-md-2 control-label">Blog Content</label>
                        <div class=" col-md-9">
                            <textarea value="<?php echo $blog_info->details?>" name="details" class="form-control" rows="15">
                          <?php echo $blog_info->details?>
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
                                     Date
                                    </th>
                                       <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                     Photo
                                    </th>
                                    <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                        title
                                    </th>
                                    <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                        Action
                                    </th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                 <?php $i=0;?>
                                                    <?php foreach($all_blog as $logo) { ?> 
                                                            <?php $i=$i+1;?>
                            
                                             
                                <tr>
                                    
                                    <td class="tc-center">
                                     <?php echo $i;?>
                                    </td>
                                      <td class="tc-center">
                                 <?php echo $logo->date;?>
                                   
                                    </td>
                                     <td class="tc-center">
                                  <img class="card-img-top img-fluid" height="100px" width="120px;" src=" <?php echo $logo->photo;?>" alt="Card image cap">
                  
                                   
                                    </td>
                                      <td class="tc-center">
                                 <?php echo $logo->title;?>
                                   
                                    </td>
                                    <td class="tc-center">
                                        <div class="btn-toolbar" role="toolbar">
                                            <div class="btn-group" role="group">
                                          <a href="<?php echo base_url()?>super_admin/edit_blog/<?php echo $logo->blog_id ?>"  class="btn btn-success " color: white;">Update</a>
                                                <a href="<?php echo base_url()?>super_admin/delete_blog/<?php echo $logo->blog_id ?>" class="btn btn-default" onclick="return confirm('Are you sure?')" style="background-color: #e5343d;color: white;" >Delete</a>
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