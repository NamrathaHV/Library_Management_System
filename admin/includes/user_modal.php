<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Add User</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="user_add.php">
					<div class="form-group">
						<label for="name" class="col-sm-3 control-label">FULL NAME</label>

						<div class="col-sm-9">
							<input type="text" class="form-control" id="name" name="name" required>
						</div>
					</div>
					<div class="form-group">
						<label for="phn" class="col-sm-3 control-label">PHONE No</label>

						<div class="col-sm-9">
						<input type="tel" class="form-control" id="phn" name="phn" pattern="\d{10}" required>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-3 control-label">E-Mail</label>

						<div class="col-sm-9">
						<input type="email" class="form-control" id="email" name="email" required>
						</div>
					</div>
					
					<div class="form-group">
						<label for="address" class="col-sm-3 control-label">Address</label>

						<div class="col-sm-9">
						<input type="text" class="form-control" id="address" name="address" required>
						</div>
					</div>
					<div class="form-group">
						<label for="password" class="col-sm-3 control-label">Password</label>

						<div class="col-sm-9">
						<input type="password" class="form-control" id="password" name="password" required>
						</div>
               		</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
						<button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Add</button>
          			</div>
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
            	<form class="form-horizontal" method="POST" action="user_delete.php">
            		<input type="hidden" class="uid" name="id">
            		<div class="text-center">
	                	<p>DELETE USER</p>
	                	<h2 id="del_user" class="bold"></h2>
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