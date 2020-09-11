<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <title>Books</title>
  </head>
  <?php require 'includes/nav_bar.php'; ?>
  <body>

    <div class="container-fluid my-4">
      <div class="jumbotron">
          <h2 class="text-center">My Books</h2>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="pull-right">
            <button class="btn btn-outline-success" id="show_add" style="float:right;">Add a Book</button>

          </div>
          <div class="form-inline" id="link_add">
            <div class="form-group col-md-3">
              <input type="text" name="title" value="" placeholder="Title" class="form-control" required>

            </div>
            <div class="form-group col-md-3">
              <input type="text" name="author" value="" placeholder="Author" class="form-control" required>

            </div>
            <div class="form-group col-md-3">
              <input type="text" name="publisher" value="" placeholder="Publisher" class="form-control" required>

            </div>
          <!--  <div class="form-group col-md-4 my-4">
              <input type="text" name="year" value="" placeholder="Year of publish" class="form-control" required>

            </div>
            <div class="form-group col-md-4 my-4">
              <input type="text" name="page_no" value="" placeholder="Page numbers" class="form-control" required>

            </div> -->
            <div class="form-group col-md-3 my-2">
              <button type="button" name="button"class="btn btn-outline-success btn-sm mx-3" id="add">Add</button>
              <button type="button" name="button"class="btn btn-outline-danger btn-sm" href="javascript:void(0)">Cancel</button>
            </div>

          </div>

        </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="" id="records_content">

            </div>

            <br>
            <div class="col-md-offset-1 col-md-10" id="table_content">

            </div>



        </div>

      </div>

    </div>

  </body>
</html>
