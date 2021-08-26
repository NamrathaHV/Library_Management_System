<!-- Return -->
<div class="modal fade" id="return">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Return Book</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="return1.php">
            		<input type="hidden" class="regid" name="id">
                <div class="form-group">
                    <label for="rregno" class="col-sm-3 control-label">REQ No</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="rregno" name="id" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="risbn" class="col-sm-3 control-label">Book ID</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control"  id="risbn" name="isbn" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ruser_id" class="col-sm-3 control-label">USER ID</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="ruser_id" name="user_id" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="rissue_date" class="col-sm-3 control-label">Issue Date</label>
                    <div class="col-sm-9">
                      <div class="date">
                        <input type="text" class="form-control" id="rissue_date" name="issue_date" readonly>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="rdue_date" class="col-sm-3 control-label">Due Date</label>
                    <div class="col-sm-9">
                      <div class="date">
                        <input type="text" class="form-control" id="rdue_date" name="due_date" readonly>
                      </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="datepicker_return" class="col-sm-3 control-label">Return Date</label>
                    <div class="col-sm-9">
                      <div class="date">
                        <input type="date" class="form-control" id="date" name="return_date" value="<?php echo date("Y-m-d");?>" required readonly>
                      </div>
                    </div>
                </div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-success btn-flat" name="return"><i class="fa fa-check-square-o"></i> RETURN</button>
            	</form>
          	</div>
        </div>
    </div>
</div>