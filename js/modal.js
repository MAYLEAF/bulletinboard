$(document).ready(function(){

  $(document).on('click', '#getcard', function(e){

    e.preventDefault();

    var uid = $(this).data('id');   // it will get id of clicked row
    $('#articleLabel').html('');
    $('#dynamic-content').html(''); // leave it blank before ajax call
    $('#modal-loader').show();      // load ajax loader
    $('#articleLabel').html($(this).data('id'));
    $('#deletecard').val($(this).data('id'));

    $.ajax({
      url: 'getcard.php',
      type: 'POST',
      data: 'id='+uid,
      dataType: 'html'
    })
    .done(function(data){
      console.log(data);
      $('#dynamic-content').html('');
      $('#dynamic-content').html(data); // load response
      $('#modal-loader').hide();		  // hide ajax loader
    })
    .fail(function(){
      $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
      $('#modal-loader').hide();
    });

  });

});

$(document).ready(function(){

  $(document).on('click', '#Searchbutton', function(e){

    e.preventDefault();

    var begood = $('#Search').val();   // it will get id of clicked row
    $('#articleLabel').html('');
    $('#dynamic-content').html(''); // leave it blank before ajax call
    $('#modal-loader').show();      // load ajax loader
    $('#articleLabel').html($(this).data('id'));
    $('#deletecard').val($(this).data('id'));

    $.ajax({
      url: 'getcard.php',
      type: 'GET',
      data: 'begood='+ begood,
      dataType: 'html'
    })
    .done(function(data){
      console.log(data);
      $('#dynamic-content').html('');
      $('#dynamic-content').html(data); // load response
      $('#modal-loader').hide();		  // hide ajax loader
    })
    .fail(function(){
      $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
      $('#modal-loader').hide();
    });

  });
});
