$(document).ready(function(){

  $.get("view.php", function(data){
    $("#table_content").html(data)
  })


  $('#link_add').hide();
  $('#show').click(function(){
    $('#link_add').slideDown(500);
    $('#show_add').hide();
  })
})
