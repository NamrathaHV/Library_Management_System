<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Add New Branch</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="branch_add.php">
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Branch Name</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="location" class="col-sm-3 control-label">Location</label>

                        <div class="col-sm-9">
                            <textarea class="form-control" name="location" id="location" required></textarea>
                        </div>
                    </div>
            </div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Edit Location</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="branch_edit.php">
            		<input type="hidden" class="branchid" name="id">
                <div class="form-group">
                    <label for="branchid" class="col-sm-3 control-label">Branch ID</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="branchid" name="branchid" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_name" class="col-sm-3 control-label">Branch Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="name" id="edit_name" readonly>
                    </div>
                </div>
        
                <div class="form-group">
                    <label for="edit_location" class="col-sm-3 control-label">Location</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" id="edit_location" name="location"></textarea>
                    </div>
                </div>
                
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Deleting...</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="branch_delete.php">
            		<input type="hidden" class="branchid" name="id">
                
            		<div class="text-center">
	                	<p>DELETE BRANCH</p>
	                	<h2 id="del_branch" class="bold"></h2>
	            	</div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
            	</form>
          	</div>
        </div>
    </div>
</div>


     