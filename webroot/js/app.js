
 /* ========================================================================
 * Custom: Global v0.1 Bootstrap v3.5.2
 * ======================================================================== */
 
	$(document).ready(function(){
		$("[data-toggle=tooltip]").tooltip({
			html: true,
		});
        
        $(window).scroll(function() {
          if ($(document).scrollTop() > 50) {
            $('.navbar').addClass('shrink');
          } else {
            $('.navbar').removeClass('shrink');
          }
        });
	});
	
/* ========================================================================
 * Custom: backTop v0.1 Jquery v2.1.0
 * ======================================================================== */
 
	$(window).scroll(function() {
		if ($(this).scrollTop()) {
			$('#backTop').fadeIn();
		} else {
			$('#backTop').fadeOut();
		}
	});

	$("#backTop").click(function(e) {
		e.preventDefault();
		$("html, body").animate({scrollTop: 0}, 500);
		return false;
	});

/*Customer Registration*/
$(function(){
	/*$(".dt_default").datepicker({
        dateFormat: 'yy-mm-dd',
        minDate:0        
    }).val();*/

    $("#frm-customer-registration").submit(function(e) {
	    var url = base_url + "customer/ajax_submit_customer_registration";
	    $(".btn-customer-register").text("Sending");
	    $(".btn-customer-register").attr('disabled', true);
	    $.ajax({
	           type: "POST",
	           url: url,
	           dataType: "json",
	           data: $("#frm-customer-registration").serialize(), 
	           success: function(o)
	           {
	           		if(o.success){
	           			$(".err-container").html(o.message);
	           			setTimeout(function() { location.href = base_url + 'users/logout'; }, 5000);
	           			
	           		}else{
	           			$('html, body').animate({
						    scrollTop: $(".form-inner").offset().top
						}, 1000);
	           			$(".err-container").html(o.message);	
	           		}	
	           		$(".btn-customer-register").removeAttr('disabled');	           		
	           		$(".btn-customer-register").text("Submit");
	           }
	         });

	    e.preventDefault();
	});
});
/**/
