<div class="row">
    <div class="col-md-12">
        
        <div class="box-widget widget-module">
            <div class="widget-head clearfix">
                <span class="h-icon"><i class="fa fa-table"></i></span>
                <h4>Manage All User </h4>
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
            <div class="widget-container">
                <div class="widget-block">
                    <div class="row">
                        <div class="col-md-6">
                        </div>
                        <div class="col-md-6">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-md-6 control-label">Request Search:</label>
                                    <div class=" col-md-6">
                                        <input class="form-control" type="text" placeholder="Search">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered matmix-dt">
                            <thead>
                                <tr>
                                    <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                        <input class="tc-check-all" type="checkbox" value="0">
                                    </th>
                                 <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                       SL
                                    </th>
                                     <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                       Photo
                                    </th>
                                     <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                     User ID
                                    </th>
                                    <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                     Full Name
                                    </th>
                                      <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                      Date of Birth
                                    </th>
                                  
                                  <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                     Gander
                                    </th>
                                       <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                     Phone
                                    </th>
                                     </th>
                                       <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                     
                                           Email
                                    </th>
                                   
                                    <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php $i=0;?>
                                                    <?php foreach($all_admin_user as $user) { ?> 
                                                            <?php $i=$i+1;?>
                            
                                             
                                <tr>
                                    <td class="tc-center">
                                        <input type="checkbox" class="tc-check" value="0">
                                    </td>
                                    <td class="tc-center">
                                     <?php echo $i;?>
                                    </td>
                                     <td class="tc-center">
                                   <span class="user-thumb"><img src="<?php echo $user->photo?>" alt="image"></span>
                               
                                    </td>
                                    <td class="tc-center">
                                   <?php echo $user->admin_user_id?>
                                    </td>
                                   <td class="tc-center">
                                   <?php echo $user->fullname?>
                                    </td>
                                     <td class="tc-center">
                                    <?php echo $user->dob?>
                                    </td>
                                    
                                     <td class="tc-center">
                                   <?php echo $user->gender?>
                                    </td>
                                     <td class="tc-center">
                                     <?php echo $user->phone?>
                                    </td>
                                    
                                    <td class="tc-center">
                                   <?php echo $user->email?>
                                    </td>
                                    <td class="tc-center">
                                        <div class="btn-toolbar" role="toolbar">
                                            <div class="btn-group" role="group">
                                                    <a href="<?php echo base_url()?>super_admin/delete_admin_user/<?php echo $user->admin_user_id ?>" class="btn btn-default" onclick="return confirm('Are you sure?')" style="background-color: #e5343d;color: white;" >Delete</a>
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