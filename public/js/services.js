jQuery('#create').click(function(){
  $('#service_create').modal('show');
});
jQuery('#edit').click(function(){
  //TODO:take all info from table before show
  var elements = new Array();
  jQuery.each(jQuery("input[name = 'checkbox[]']:checked"),function(){
    elements.push(jQuery(this).val());
  });
  if(!elements.length == 1){
    alert('You have to select only 1 service to launch edit function');
  }else{
    var service_name = $("#data_" + elements +">td:nth-child(3)").text();
    $("input[name = 'id']").val(elements);
    $("input[name = 'name']").val(service_name);
    $("[name = 'service_name']").text(service_name);
    $('#service_edit').modal('show');
  }

});
jQuery('#delete').click(function(){
  var elements = new Array();
  jQuery.each(jQuery("input[name = 'checkbox[]']:checked"),function(){
    elements.push(jQuery(this).val());
  });
  jQuery.ajax({
        url:"/services/1",
        type: 'POST',
        dataType:'json',
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        data: {
          "_method": 'delete',
          "id": elements
        },
        success:function(response){
          location.reload();
          /*alert(JSON.stringify(response));
          var data = response['data'];
          /*for(i = 0; i<data.length; i++){
            data[i][name];
          }*/
          /*alert(JSON.stringify(data));*/
          alert("service/s deleted");
        },
        error: function (jqXHR, exception) {
        var msg = '';
        if (jqXHR.status === 0) {
            msg = 'Not connect.\n Verify Network.';
        } else if (jqXHR.status == 404) {
            msg = 'Requested page not found. [404]';
        } else if (jqXHR.status == 500) {
            msg = 'Internal Server Error [500].';
        } else if (exception === 'parsererror') {
            msg = 'Requested JSON parse failed.';
        } else if (exception === 'timeout') {
            msg = 'Time out error.';
        } else if (exception === 'abort') {
            msg = 'Ajax request aborted.';
        } else {
            msg = 'Uncaught Error.\n' + jqXHR.responseText;
        }
        $('#post').html(msg);
    },
  });
});
