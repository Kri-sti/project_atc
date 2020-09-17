<?php
require_once "includes/db.php";

$id = $_POST['id'];
if(empty($id)){


  ?>
  <div class="text-center">Not found <a href="#" onclick="$('#link_add').hide(); $('#show_add').show(600)">Hide </a></div> <?php die();
}

$sql = "SELECT * FROM books WHERE id = $id";

$result = $conn->query($sql);

while($row = $result->fetch_assoc()):
?>

<div class="form-inline" id="edit-data">
  <div class="form-group col-md-3">
    <input type="text" name="title" id="title" value="<?php echo $row['title']  ?>" placeholder="Title" class="form-control" required>

  </div>
  <div class="form-group col-md-3">
    <input type="text" name="author" id="author" value="<?php echo $row['author']  ?>" placeholder="Author" class="form-control" required>

  </div>
  <div class="form-group col-md-3">
    <input type="text" name="publisher" id="publisher" value="<?php echo $row['publisher']  ?>" placeholder="Publisher" class="form-control" required>

  </div>

  <div class="form-group col-md-3 my-2">
    <button type="button" name="update" class="update btn-outline-success btn-sm btn mx-3" id="<?= $row['id'] ?>">Update</button>
    <button type="button" name="add"class="btn btn-outline-danger btn-sm" href="javascript:void(0)" id="cancel" onclick="$('#link_add').slideUp(500);$('#show_add').show(500);">Cancel</button>
  </div>

</div>

<?php
endwhile; ?>

<script type="text/javascript">
$('.update').click(function (){
  var id = $(this).attr('id');


  var title = $('#title').val();
  var author = $('#author').val();
  var publisher = $('#publisher').val();

  $.ajax({


    url : "update.php",
    type : "post",
    data : {id: id, title: title, author: author, publisher: publisher},
    success : function(data, status, xhr){
      $('#title').val('');
      $('#author').val('');
      $('#publisher').val('');
      $('#records_content').fadeOut(1100).html(data);
      $.get("view.php",function(html){
        $('#table_content').html(html);
      })
      $('#records_content').fadeOut(1100).html(data);
    },
    complete: function(){
      $('#link_add').hide();
      $('#show_add').show(750);
    }
  })

})

</script>
