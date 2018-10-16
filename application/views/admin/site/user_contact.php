<div class="row">
    <div class="col-md-12">
        
        
            <div class="widget-container">
                <div class="widget-block">
                    <div class="row">
                       
<div class="col-md-1">
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
                                  Name
                                    </th>
                                    <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                  Email
                                    </th>
                                 
                                    <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                  Message
                                    </th>
                                    <th class="tc-center" style="background-color:#15bdc3; color:white; ">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php $i=0;?>
                                                    <?php foreach($all_user_contact as $contact) { ?> 
                                                            <?php $i=$i+1;?>
                            
                                             
                                <tr>
                                    
                                    <td class="tc-center">
                                     <?php echo $i;?>
                                    </td>
                                      <td class="tc-center">
                                        <?php echo $contact->date ?>
                                   
                                    </td>
                                     <td class="tc-center">
                                        <?php echo $contact->name ?>
                                   
                                    </td>
                                    <td class="tc-center">
                                        <?php echo $contact->email ?>
                                   
                                    </td>
                                   
                                    <td class="tc-center">
                                        <?php echo $contact->message ?>
                                   
                                    </td>
                                    
                                    <td class="tc-center">
                                        <div class="btn-toolbar" role="toolbar">
                                            <div class="btn-group" role="group">
                                                 <a href="<?php echo base_url()?>super_admin/delete_user_contact/<?php echo $contact->user_contact_id ?>" class="btn btn-default" onclick="return confirm('Are you sure?')" style="background-color: #e5343d;color: white;" >Delete</a>
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