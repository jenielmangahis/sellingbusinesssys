$(function(){
  $("#frm-user-login").submit(function(e) {   
    e.preventDefault();         
      var url = base_url + "users/ajax_login";
      var redirect_url = base_url + "users/loggedin";      
      $(".btn-user-signin").attr('disabled', true);
      $.ajax({
         type: "POST",
         url: url,
         dataType: "json",
         data: $(this).serialize(), 
         success: function(o)
         {
              if(o.is_success){
                  location.href = redirect_url;
                  $(".user-login-container").html(o.message);                                            
              }else{
                  $(".err-container").html(o.message);    
              }   
              $(".btn-user-signin").removeAttr('disabled');                                   
         }
      });      
  });
});