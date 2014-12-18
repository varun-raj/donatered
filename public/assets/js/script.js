$('.enroll-success').hide();
     $('.search-results').hide();

$( '#donor-form-submit' ).on( 'click', function() {

  name=$('#name').val();
  phone=$('#phone').val();
  group=$('#group').val();
  pin=$('#pin').val();
$.post( "/donor/new", { name:name, phone:phone,group:group,pin:pin })
  .done(function( data ) {
    if (data == 1){
      $('.enroll-form').hide();

      $('.enroll-success').fadeIn();
      $('#name').val('');
      $('#phone').val('');
      $('#pin').val('');


    }

    else {

    }
  });

});


$( '#search' ).on( 'click', function() {

  group=$('#find-group').val();
  pin=$('#find-pin').val();
$.post( "/donor/search", { group:group,pin:pin })
  .done(function( data ) {
    if(data != null){
     $('.search-results').show();
var fbresults = $.parseJSON(data);

       $.each(fbresults, function (key, value) {
        $('#search-result-table tbody').append("<tr><td>" + value.name + "</td>" + "<td>" + value.phone + "</td>" + "<td>" + value.group + "</td>" + "<td>" + value.pin + "</td></tr>");

       });
   
     
    }
  });

});