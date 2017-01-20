var tour = {
  id: "hello-hopscotch",
  steps: [
    {
      title: "Input Text",
      content: "Ini input text",
      target: "#textHop",
      placement: "bottom"
    },
    {
      title: "Dropdown",
      content: "Ini dropdown",
      target: "#dropdownHop",
      placement: "bottom"
    },
    {
      title: "Button",
      content: "Ini button",
      target: "buttonHop",
      placement: "bottom"
    },
    {
      title: "Table",
      content: "Ini table",
      target: "tableHop",
      placement: "bottom"
    }
  ]
};

hopscotch.startTour(tour);


$(document).ready(function() {
  $('#apiCall').validate({
    rules: {
      mrc_id: {
        required: true,
      },
      order_id: {
        required: true
      },
      payment_info: {
        required: true
      },
      customer_info: {
        required: true
      },
      amount: {
        required: true
      }
    }

    , highlight: function (element, errorClass, validClass) {
            $(element).closest('.form-group').addClass('has-error');
            $(element).closest('.form-group').find('label.error').addClass('errors');
        }
        , unhighlight: function (element, errorClass, validClass) {
            $(element).closest('.form-group').removeClass('has-error');
            $(element).closest('.form-group').find('label.error').removeClass('errors');
        }

  });
  $('#apiCall').submit(function(){
    if($(this).valid()){
      var data = $(this).serializeJSON();
      var secret = 'bwMo0k9XPW';
      data.signature = sha256_digest(secret + data.mrc_id + data.amount + data.customer_info + data.payment_info + data.order_id);
      $('#requestText').val(JSON.stringify(data));
      $.ajax({
        async: true,
        crossDomain: true,
        url: "https://api.sandbox.id.mcpayment.net:9000/va/transactions?payment=VA_CIMB",
        type: 'POST',
        headers: {
          "x-api-key": "LPbGFVMzrcB0KuAO5t8a",
          "content-type": "application/json",
          "cache-control": "no-cache"
        },
        // url: "http://api.dev/api/test",
        processData: false,
        data: JSON.stringify(data),
        success: function(result){
          $('#responseText').val(JSON.stringify(result));
        },
        fail: function(result){
          $('#responseText').val(JSON.stringify(result));
        }
      });
    }
    return false;
  });

});