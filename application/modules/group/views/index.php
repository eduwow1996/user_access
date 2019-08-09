<div class="row">
     <div class="col-xs-12">
          <div class="box box-primary">
               <div class="box-header with-border">
                    <h3 class="box-title"><?php echo ucwords($this->router->fetch_class()); ?></h3>
               </div>
               <div class="box-body">
                    <?php if($check_user_access->action_add == 1): ?>
                         <div class="row">
                              <div class="col-md-12">
                                   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#createGroupModal"><i class="fa fa-check"></i>Create New Group</button>
                              </div>
                         </div>
                    <?php endif; ?>
                    <div class="row">
                         <div class="col-md-12 table-resposive">
                              <table class="table">
                                   <thead>
                                        <th>Group Name</th>
                                        <th>Action</th>
                                   </thead>
                                   <tbody>
                                        <?php foreach($group_list as $key => $value): ?>
                                             <tr>
                                                  <td><?php echo $value['group_name']; ?></td>
                                                  <td>
                                                       <?php if($check_user_access->action_edit == 1): ?>
                                                            <a href="" class="btn btn-warning getGroupRightBtn" data-id="<?php echo $value['group_id']; ?>" data-toggle="modal" data-target="#editGroupModal"><i class="fa fa-edit"></i></a>
                                                       <?php endif; ?>
                                                       <?php if($check_user_access->action_delete == 1): ?>
                                                            <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                                       <?php endif; ?>
                                                       <a href="" class="btn btn-primary"><i class="fa fa-search"></i></a>
                                                  </td>
                                             </tr>
                                        <?php endforeach; ?>
                                   </tbody>
                              </table>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
<?php if($check_user_access->action_add == 1): ?>
     <div class="modal fade" id="createGroupModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-lg" role="document">
               <div class="modal-content">
                    <form method="post" action="<?php echo base_url('group/addgroup'); ?>">
                         <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title" id="myModalLabel">Create Group</h4>
                         </div>
                         <div class="modal-body">
                              <div class="row">
                                   <div class="col-md-6">
                                        <div class="form-group">
                                             <label>Group Name:</label>
                                             <input type="text" class="form-control" name="group_name" placeholder="Group Name"/>
                                        </div>
                                   </div>
                              </div>
                              <hr>
                              <div class="row">
                                   <div class="col-md-12">
                                        <div class="form-group">
                                             <span style="font-size:24px;">User Group Access Rights</span>
                                        </div>
                                   </div>
                              </div>
                              <div class="row">
                                   <div class="col-md-12 responsive-table">
                                        <table class="table">
                                             <thead>
                                                  <th>Module Name</th>
                                                  <th style="text-align:center;">Can View</th>
                                                  <th style="text-align:center;">Can Add</th>
                                                  <th style="text-align:center;">Can Edit</th>
                                                  <th style="text-align:center;">Can Delete</th>
                                             </thead>
                                             <tbody>
                                                  <?php foreach($modules_list as $key => $value): ?>
                                                       <tr>
                                                            <td><?php echo $value['module_name']; ?></td>
                                                            <td style="text-align:center;"><input type="checkbox" class="minimal" name="rights[<?php echo $value['module_id'];?>][action_view]" value="1"/></td>
                                                            <td style="text-align:center;"><input type="checkbox" class="minimal" name="rights[<?php echo $value['module_id'];?>][action_add]" value="1"/></td>
                                                            <td style="text-align:center;"><input type="checkbox" class="minimal" name="rights[<?php echo $value['module_id'];?>][action_edit]" value="1"/></td>
                                                            <td style="text-align:center;"><input type="checkbox" class="minimal" name="rights[<?php echo $value['module_id'];?>][action_delete]" value="1"/></td>
                                                       </tr>
                                                  <?php endforeach; ?>
                                             </tbody>
                                        </table>
                                   </div>
                              </div>
                         </div>
                         <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Save Group</button>
                         </div>
                    </form>
               </div>
          </div>
     </div>
<?php endif; ?>
<?php if($check_user_access->action_edit == 1): ?>
     <div class="modal fade" id="editGroupModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-lg" role="document">
               <div class="modal-content">
                    <form method="post" action="<?php echo base_url('group/addgroup'); ?>">
                         <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title" id="myModalLabel">Edit Group</h4>
                         </div>
                         <div class="modal-body">
                              <div class="row">
                                   <div class="col-md-6">
                                        <div class="form-group">
                                             <label>Group Name:</label>
                                             <input type="text" class="form-control" name="group_name" placeholder="Group Name"/>
                                        </div>
                                   </div>
                              </div>
                              <hr>
                              <div class="row">
                                   <div class="col-md-12">
                                        <div class="form-group">
                                             <span style="font-size:24px;">User Group Access Rights</span>
                                        </div>
                                   </div>
                              </div>
                              <div class="row">
                                   <div class="col-md-12 responsive-table">
                                        <table class="table">
                                             <thead>
                                                  <th>Module Name</th>
                                                  <th style="text-align:center;">Can View</th>
                                                  <th style="text-align:center;">Can Add</th>
                                                  <th style="text-align:center;">Can Edit</th>
                                                  <th style="text-align:center;">Can Delete</th>
                                             </thead>
                                             <tbody>
                                                  <?php foreach($modules_list as $key => $value): ?>
                                                       <tr>
                                                            <td><?php echo $value['module_name']; ?></td>
                                                            <td style="text-align:center;"><input type="checkbox" name="rights[<?php echo $value['module_id'];?>][action_view]" value="1"/></td>
                                                            <td style="text-align:center;"><input type="checkbox" name="rights[<?php echo $value['module_id'];?>][action_add]" value="1"/></td>
                                                            <td style="text-align:center;"><input type="checkbox" name="rights[<?php echo $value['module_id'];?>][action_edit]" value="1"/></td>
                                                            <td style="text-align:center;"><input type="checkbox" name="rights[<?php echo $value['module_id'];?>][action_delete]" value="1"/></td>
                                                       </tr>
                                                  <?php endforeach; ?>
                                             </tbody>
                                        </table>
                                   </div>
                              </div>
                         </div>
                         <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Save Group</button>
                         </div>
                    </form>
               </div>
          </div>
     </div>
<?php endif; ?>
