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
                                   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#createModuleModal"><i class="fa fa-check"></i>Create New Module</button>
                              </div>
                         </div>
                    <?php endif; ?>
                    <div class="row">
                         <div class="col-md-12 table-resposive">
                              <table class="table">
                                   <thead>
                                        <th>Module Name</th>
                                        <th>Module Icon</th>
                                        <th>Module Url</th>
                                        <th>Line ID</th>
                                        <th>Action</th>
                                   </thead>
                                   <tbody>
                                        <?php foreach($modules_list as $key => $value): ?>
                                             <tr>
                                                  <td><?php echo $value['module_name']; ?></td>
                                                  <td><?php echo $value['module_icon']; ?></td>
                                                  <td><?php echo base_url($value['module_url']); ?> <a href="<?php echo base_url($value['module_url']); ?>" target="_blank"><i class="fa fa-link"></i></a></td>
                                                  <td><?php echo $value['line_id']; ?></td>
                                                  <td>
                                                       <?php if($check_user_access->action_edit == 1): ?>
                                                            <a href="" class="btn btn-warning"><i class="fa fa-edit"></i></a>
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
     <div class="modal fade" id="createModuleModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
               <div class="modal-content">
                    <form action="<?php echo base_url('module/add_module'); ?>" id="add_module">
                         <input type="hidden" name="line_id" value="<?php echo $module_data->line_id + 1; ?>"/>
                         <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title" id="myModalLabel">Create Module</h4>
                         </div>
                         <div class="modal-body">
                              <div class="row">
                                   <div class="col-md-12">
                                        <div class="form-group">
                                             <label>Module Name:</label>
                                             <input type="text" class="form-control" name="module_name" placeholder="Module Name"/>
                                        </div>
                                   </div>
                              </div>
                              <div class="row">
                                   <div class="col-md-6">
                                        <div class="form-group">
                                             <label>Module Icon:</label>
                                             <input type="text" class="form-control" name="module_icon" placeholder="Module Icon"/>
                                        </div>
                                   </div>
                                   <div class="col-md-6">
                                        <div class="form-group">
                                             <label>Module Url:</label>
                                             <input type="text" class="form-control" name="module_url" placeholder="Module Url"/>
                                        </div>
                                   </div>

                              </div>
                              <div class="row">
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label>Has Parent Module</label>
                                             <select class="form-control" name="has_parent">
                                                  <option selected hidden value="0">Select Option</option>
                                                  <option value="1">Has Parent Module</option>
                                                  <option value="0">No Parent Module</option>
                                             </select>
                                        </div>
                                   </div>
                                   <div class="col-md-8">
                                        <div class="form-group">
                                             <label>Parent Module</label>
                                             <select class="form-control" name="parent_module">
                                                  <option selected hidden value="0">Select Module</option>
                                                  <?php foreach($modules_list as $key => $value): ?>
                                                       <option value="<?php echo $value['module_id']; ?>"><?php echo $value['module_name']; ?></option>
                                                  <?php endforeach; ?>
                                             </select>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Save Module</button>
                         </div>
                    </form>
               </div>
          </div>
     </div>
<?php endif; ?>
