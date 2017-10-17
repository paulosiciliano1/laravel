jQuery('#create').click(function(){
  $('#salon_create').modal('show');
});
jQuery('#edit').click(function(){
  //TODO:take all info from table before show
  var elements = new Array();
  jQuery.each(jQuery("input[name = 'checkbox[]']:checked"),function(){
    elements.push(jQuery(this).val());
  });
  if(!elements.length == 1){
    alert('You have to select only 1 salon to launch edit function');
  }else{
    var salon_name = $("#data_" + elements +">td:nth-child(3)").text();
    var salon_address= $("#data_" + elements +">td:nth-child(4)").text();
    $("input[name = 'id']").val(elements);
    $("input[name = 'name']").val(salon_name);
    $("input[name = 'address']").val(salon_address);
    $("[name = 'salon_name']").text(salon_name);
    $('#salon_edit').modal('show');
  }
});
jQuery('#delete').click(function(){
  var elements = new Array();
  jQuery.each(jQuery("input[name = 'checkbox[]']:checked"),function(){
    elements.push(jQuery(this).val());
  });
  alert(elements);
  jQuery.ajax({
        url:"/salons/1",
        type: 'POST',
        dataType:'json',
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        data: {
          "_method": 'delete',
          "id": JSON.stringify(elements)
        },
        success:function(response){
          alert("response success");
          location.reload();
          /*alert(JSON.stringify(response));
          var data = response['data'];
          /*for(i = 0; i<data.length; i++){
            data[i][name];
          }*/
          /*alert(JSON.stringify(data));*/
          alert("salon/s deleted");
        },
        error: function (jqXHR, exception,x) {
          window.open(JSON.stringify(jqXHR),"_blank");
          alert("an error occur"+ JSON.stringify(jqXHR));
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
