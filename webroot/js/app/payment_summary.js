$(function(){

  function load_patient_list_dt() {
    $("#dt-payment-summary-list-dt").html('<div class="text-center"><i class="fa fa-spin fa-spinner" ></i> Loading Payment History</div>');  
    $.get(BASE_URL + "payment_summary/ajax_load_payment_summary_list",{},function(o) {
      $('#dt-payment-summary-list-dt').html(o);    
    }); 
  }

  load_patient_list_dt();

});
