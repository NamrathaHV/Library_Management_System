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
            	<form class="form-horizontal" method="POST" action="issue_req_delete.php">
            		<input type="hidden" class="reqid" name="id">
            		<div class="text-center">
	                	<p>CANCEL BOOK REQUEST</p>
	                	<h2 id="del_book" class="bold"></h2>
	            	</div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Cancel</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<!-- ISSUE -->
<div class="modal fade" id="issue">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>ISSUE REQUEST</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="issue1.php">
          		  <div class="form-group">
                  	<label for="isbn" class="col-sm-3 control-label">Book ID</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="isbn" name="isbn"  required pattern="\d{10}">
                  	</div>
                </div>
                <div class="form-group">
                    <label for="uid" class="col-sm-3 control-label">USER ID</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="uid" id="uid" value="<?php echo $user['USER_ID'] ?>" required pattern="\d{10}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="date" class="col-sm-3 control-label">Req Date</label>

                    <div class="col-sm-9">
                      <div class="date">
                        <input type="date" class="form-control" id="date" name="issue_req_date" value="<?php echo date("Y-m-d");?>" required readonly>
                      </div>
                    </div>
                </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-primary btn-flat" name="issue"><i class="fa fa-save"></i> Save</button>
            	</form>
          	</div>
        </div>
    </div>
</div>