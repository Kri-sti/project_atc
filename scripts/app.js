$(document).ready(function(){

  $.get("view.php", function(data){
    $("#table_content").html(data)
  })


  $('#link_add').hide();
  $('#show_add').click(function(){
    $('#link_add').slideDown(500);
    $('#show_add').hide();
  })

$('#add').click(function(){

  var title = $('#title').val();
  var author = $('#author').val();
  var publisher = $('#publisher').val();

  $.ajax({

    url : "add.php",
    type : "post",
    data : {title: title, author: author, publisher: publisher},
    success : function (data, status, xhr){
      $('#title').val('');
    $('#author').val('');
    $('#publisher').val('');

    $.get('view.php',function(html){
      $('#table_content').html(html);
    });
    $('#records_content').fadeOut(1000).html(data);


  },
  error: function(){
    $('#records_content').fadeIn(3000).html('<div class="text-center">ERROR </div>')
  },
  beforeSend: function(){
  $('#records_content').fadeOut(800).html('<div class="text-center">loading.. </div>')
},
completed: function(){
  $('#link_add').hide();
  $('#show_add').show(700)
}
  })

})

})
