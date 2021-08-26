<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Request Book</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="req_book_add.php">
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Book Name</label>

                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="name" name="name" required >
                    </div>
                </div>
                <div class="form-group">
                    <label for="author" class="col-sm-3 control-label">Author</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="author" name="author" required>
                    </div>
                </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Submit</button>
            	</form>
          	</div>
        </div>
    </div>
</div>