<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Add New Book</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="book_add.php">
          		  <div class="form-group">
                  	<label for="isbn" class="col-sm-3 control-label">Book ID</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="isbn" name="isbn" required pattern="\d{10}">
                  	</div>
                </div>
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label">Title</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" name="title" id="title" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edition" class="col-sm-3 control-label">Edition</label>

                    <div class="col-sm-9">
                    <input type="number" class="form-control" id="edition" min="1" name="edition" required >
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="author" class="col-sm-3 control-label">Author</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="author" name="author" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="publisher" class="col-sm-3 control-label">Publisher</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="publisher" name="publisher" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="price" class="col-sm-3 control-label">Price</label>

                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="price" name="price" min="0" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="year_of_publication" class="col-sm-3 control-label">Year Of Publication</label>

                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="year_of_publication" name="year_of_publication" pattern="\d{4}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="category" class="col-sm-3 control-label">Category</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="category" id="category" required>
                        <option value="" selected>- Select -</option>
                        <?php
                          $sql = "SELECT * FROM SECTION";
                          $query = $set->query($sql);
                          while($crow = $query->fetch_assoc()){
                            echo "
                              <option value='".$crow['SECTION_NO']."'>".$crow['SECTION_NAME']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="branch" class="col-sm-3 control-label">Branch</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="branch" id="branch" required>
                        <option value="" selected>- Select -</option>
                        <?php
                          $sql = "SELECT * FROM BRANCH";
                          $query = $set->query($sql);
                          while($brow = $query->fetch_assoc()){
                            echo "
                              <option value='".$brow['BRANCH_ID']."'>".$brow['BRANCH_NAME']."</option>
                            ";
                          }
                        ?>
                      </select>
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
            	<form class="form-horizontal" method="POST" action="book_delete.php">
            		<input type="hidden" class="bookid" name="id">
            		<div class="text-center">
	                	<p>DELETE BOOK</p>
	                	<h2 id="del_book" class="bold"></h2>
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