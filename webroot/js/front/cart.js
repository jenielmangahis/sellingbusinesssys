$(function() {  
	/*$("#shipping-location").change(function(){
    getShippingFees();  
  });*/

  /*$("#postal-code").change(function(){
    getShippingFees();
  });*/

  function getShippingFees() {
    var location_id = $("#shipping-location").val();
    var postal_code = $("#postal-code").val();
    if( postal_code > 0 && location_id > 0 ){
      $(".shipping-fees").html("<small>Fetching courier list...</small>");
      $.ajax({
         type: "GET",
         url: base_url + "cart/ajax_shipping_fees",       
         data: {location_id:location_id, postal_code:postal_code}, 
         success: function(o)
         {
            //var shipping_fee = o.total_shipping_fee;
            //$("#shipping-fee").val(shipping_fee.toFixed(2));
            $(".shipping-fees").html(o);
         }
      });
    }    
  }

  $(".btn-pay-paypal").click(function(e){          
      $(".info-container").html('<div class="alert alert-info info-redirect"><p>Redirecting to paypal...</p></div>');
      $.post(base_url + 'transactions/add_paypal',{},
          function(o){                
            if( o.success ){   
              if( paypal_sandbox == 1 ){
              	location.href = 'https://www.sandbox.paypal.com/cgi-bin/webscr' + o.paypal_parameter;                    	
              }else{
              	location.href = 'https://www.paypal.com/cgi-bin/webscr' + o.paypal_parameter;              	
              }
        }else{
          alert('Error in paypal');
        }        
      },'json');
    });

  $(".btn-pay-paydollar").click(function(e){          
      $(".info-container").html('<div class="alert alert-info info-redirect"><p>Redirecting to paydollar...</p></div>');
      $.post(base_url + 'transactions/add_paydollar',{},
          function(o){                
            if( o.success ){   
              if( paydollar_sandbox == 1 ){
                location.href = 'https://test.paydollar.com/b2cDemo/eng/payment/payForm.jsp' + o.paypal_parameter;                     
              }else{
                location.href = 'https://www.paydollar.com/b2c2/eng/payment/payForm.jsp' + o.paypal_parameter;               
              }
        }else{
          alert('Error in paypal');
        }        
      },'json');
    });
});