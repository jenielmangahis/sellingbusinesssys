$(function(){
  $("#form-contact-us").submit(function(e) {      
      var url = base_url + "inquiry/ajax_send_contact_us";
      $(".btn-send-inquiry").html("<i class=\"fa fa-paper-plane\"></i> Sending...");
      $(".btn-send-inquiry").attr('disabled', true);

      $.ajax({               
        url: url,
        data: $("#form-contact-us").serialize(),         
        type: 'POST',
        dataType:'json',
         success: function(o)
         {
            if(o.is_success){
                $(".contact-form-container").html(o.message);                        
            }else{
                $(".err-container").html(o.message);    
            }   
            $(".btn-send-inquiry").removeAttr('disabled');                 
            $(".btn-send-inquiry").html("<i class=\"fa fa-paper-plane\"></i> Send");
         }
      });
      e.preventDefault();     
  });

  $("#form-subscribe-email").submit(function(e) {      
      var url = base_url + "inquiry/ajax_send_subscribe_email";
      var btnSubscribe   = $(".btn-subscribe");
      var alertContainer = $(".subscribe-alert");
      btnSubscribe.html("<i class=\"fa fa-paper-plane\"></i> Sending...");
      btnSubscribe.attr('disabled', true);

      $.ajax({               
        url: url,
        data: $("#form-subscribe-email").serialize(),         
        type: 'POST',
        dataType:'json',
         success: function(o)
         {            
            $("#email-footer4-n").val("");
            alertContainer.html(o.message);              
            btnSubscribe.removeAttr('disabled');                 
            btnSubscribe.html("<i class=\"fa fa-paper-plane\"></i> Send");
         }
      });
      e.preventDefault();     
  });
});