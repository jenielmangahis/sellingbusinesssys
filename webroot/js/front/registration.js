$(function(){
  
  $("#terms_conditions").change(function(){
    if(this.checked) {    
        $('#termsConditionModal').modal('show');
        $('#signUpModal').modal('hide');
    }
  });

  $("#termsConditionModal").on("hide.bs.modal", function () {
      $('#signUpModal').modal('show');
  });

  $("#frm-owner-registration").submit(function(e) {   
    e.preventDefault();         
      var url = base_url + "register/ajax_save_owner_registration";
      var redirect_url = base_url + "users/loggedin";
      $(".btn-owner-register").val("Registering...");
      $(".btn-owner-register").attr('disabled', true);
      $.ajax({
             type: "POST",
             url: url,
             dataType: "json",
             data: $(this).serialize(), 
             success: function(o)
             {
                  if(o.is_success){
                      location.href = redirect_url;
                      $(".user-registration-container").html(o.message);                      
                      //$("#modal-user-registration").css("height","171px");
                  }else{
                      $(".err-container").html(o.message);    
                  }   
                  $(".btn-owner-register").removeAttr('disabled');                 
                  $(".btn-owner-register").val("Register");
             }
      });      
  });

  $("#frm-user-registration").submit(function(e) {   
    e.preventDefault();     
    var terms = $("#terms_conditions");
    if( $('#terms_conditions').is(':checked') ){      
      var url = base_url + "register/ajax_save_user_registration";
      var redirect_url = base_url + "users/loggedin";
      $(".btn-user-signup").val("Saving...");
      $(".btn-user-signup").attr('disabled', true);
      $.ajax({
             type: "POST",
             url: url,
             dataType: "json",
             data: $(this).serialize(), 
             success: function(o)
             {
                  if(o.is_success){
                      //location.href = redirect_url;
                      $(".user-registration-container").html(o.message);   
                      $(".btn-user-signup").hide();                   
                      //$("#modal-user-registration").css("height","171px");
                  }else{
                      $(".err-container").html(o.message);    
                  }   
                  $(".btn-user-signup").removeAttr('disabled');                 
                  $(".btn-user-signup").val("Sign Up");
             }
      });
    }else{
      $(".err-container").html("<div class=\"alert alert-danger\" role=\"alert\">Must accept terms and conditions</div>");
      $(".btn-user-signup").removeAttr('disabled');                 
      $(".btn-user-signup").val("Sign Up");
    }   
  });

  $("#frm-tenant-registration").submit(function(e) {   
    e.preventDefault();         
      var url = base_url + "register/ajax_save_tenant_registration";
      var redirect_url = base_url + "users/loggedin";
      $(".btn-tenant-register").val("Registering...");
      $(".btn-tenant-register").attr('disabled', true);
      $.ajax({
             type: "POST",
             url: url,
             dataType: "json",
             data: $(this).serialize(), 
             success: function(o)
             {
                  if(o.is_success){
                      location.href = redirect_url;
                      $(".user-registration-container").html(o.message);                      
                      //$("#modal-user-registration").css("height","171px");
                  }else{
                      $(".err-container").html(o.message);    
                  }   
                  $(".btn-tenant-register").removeAttr('disabled');                 
                  $(".btn-tenant-register").val("Register");
             }
      });      
  });
});