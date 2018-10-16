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
                    <h2>Add About Information</h2>
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
                <form class="form-horizontal" action="<?php echo base_url()?>super_admin/save_about" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <label class="col-md-2 control-label">About photo *</label>
                        <div class="col-md-4">
                           
                            <input type="file" class="form-control" name="photo">

                        </div>
                         </div>
                         <div class="form-group">
                      <label class="col-md-2 control-label">About Title Upper *</label>
                        <div class="col-md-4">
                           
                            <input type="text" class="form-control" name="title">

                        </div>
                    </div>
                    <div class="form-group">
                      
                      <label class="col-md-2 control-label">About Information Upper</label>
                        <div class=" col-md-9">
                            <textarea name="about" class="form-control" rows="12">
                             </textarea>
                            

                        </div>
                    </div><br><br>
                   
                    
                        <div class="form-group">
                      <label class="col-md-2 control-label">About Title Lower*</label>
                        <div class="col-md-4">
                           
                            <input type="text" class="form-control" name="title1">

                        </div>
                    </div>
                    <div class="form-group">
                      
                      <label class="col-md-2 control-label">About Information Lower</label>
                        <div class=" col-md-9">
                            <textarea name="about1" class="form-control" rows="7">
                             </textarea>
                            

                        </div>
                    </div><br><br>
                   
                
                  
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
                        <h4>Upper About Section.</h4>
                        <table class="table table-striped table-hover table-bordered matmix-dt">
                            <thead>
                                <tr>
                                       <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                     S/L
                                    </th>
                                      <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                  Photo
                                    </th>
                                    <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                 Upper About Title
                                    </th>
                                       <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                Upper About
                                    </th>
                                    <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php $i=0;?>
                                                    <?php foreach($all_about as $about) { ?> 
                                                            <?php $i=$i+1;?>
                            
                                             
                                <tr>
                                    
                                    <td class="tc-center">
                                     <?php echo $i;?>
                                    </td>
                                      <td class="tc-center">
                                  <img class="card-img-top img-fluid" height="100px" width="120px;" src=" <?php echo $about->photo;?>" alt="Card image cap">
                  
                                   
                                    </td>
                                     <td class="tc-center">
                                        <?php echo $about->about_title ?>
                                   
                                    </td>
                                     <td class="tc-center">
                                        <?php echo $about->about ?>
                                   
                                    </td>
                                    
                                    <td class="tc-center">
                                        <div class="btn-toolbar" role="toolbar">
                                            <div class="btn-group" role="group">
                                          <a href="<?php echo base_url()?>super_admin/edit_about/<?php echo $about->about_id ?>"  class="btn btn-success " color: white;">Update</a>
                                                <a href="<?php echo base_url()?>super_admin/delete_about/<?php echo $about->about_id ?>" class="btn btn-default" onclick="return confirm('Are you sure?')" style="background-color: #e5343d;color: white;" >Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                     <?php }?>
                               
                                  
                            </tbody>
                        </table>
                    </div><br><br>
                    <div class="table-responsive">
                        <h4>Lower About Section.</h4>
                        <table class="table table-striped table-hover table-bordered matmix-dt">
                            <thead>
                                <tr>
                                       <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                     S/L
                                    </th>
                                     
                                    <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                  Lower About Title
                                    </th>
                                       <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                 Lower About
                                    </th>
                                    <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php $i=0;?>
                                                    <?php foreach($all_about as $about) { ?> 
                                                            <?php $i=$i+1;?>
                            
                                             
                                <tr>
                                    
                                    <td class="tc-center">
                                     <?php echo $i;?>
                                    </td>
                                  
                                     <td class="tc-center">
                                        <?php echo $about->title1 ?>
                                   
                                    </td>
                                     <td class="tc-center">
                                        <?php echo $about->about1 ?>
                                   
                                    </td>
                                    
                                    <td class="tc-center">
                                        <div class="btn-toolbar" role="toolbar">
                                            <div class="btn-group" role="group">
                                          <a href="<?php echo base_url()?>super_admin/edit_about/<?php echo $about->about_id ?>"  class="btn btn-success " color: white;">Update</a>
                                                <a href="<?php echo base_url()?>super_admin/delete_about/<?php echo $about->about_id ?>" class="btn btn-default" onclick="return confirm('Are you sure?')" style="background-color: #e5343d;color: white;" >Delete</a>
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