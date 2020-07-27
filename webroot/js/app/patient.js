$(function(){

  function load_patient_list_dt() {
    $("#dt-patients-list-dt").html('<div class="text-center"><i class="fa fa-spin fa-spinner" ></i> Loading Patients</div>');  
    $.get(BASE_URL + "patient/ajax_load_patients_list",{},function(o) {
      sessionStorage.setItem('patient_selected_tab', 'charting');
      $('#dt-patients-list-dt').html(o);    
    }); 
  }

  function load_patient_appointment_list_dt() {
    $("#dt-patients-list-dt").html('<div class="text-center"><i class="fa fa-spin fa-spinner" ></i> Loading Patients</div>');  
    $.get(BASE_URL + "patient/ajax_load_patients_appointment_list",{},function(o) {
      $('#dt-patients-list-dt').html(o);    
    }); 
  }

  function load_patient_treatment_list_dt(patient_id) {
    $("#dt-patient-treatment-list-dt").html('<div class="text-center"><i class="fa fa-spin fa-spinner" ></i> Loading Treatments</div>');  
    $.get(BASE_URL + "patient/ajax_load_patient_treatment_list",{patient_id:patient_id},function(o) {
      $('#dt-patient-treatment-list-dt').html(o);    
    }); 
  }

  load_patient_list_dt();

  $('.btn-load-patient').click(function(){
    $('.btn-load-appointment').removeClass("active");
    $(this).addClass("active");
    load_patient_list_dt();
  });

  $('.btn-load-appointment').click(function(){
    $('.btn-load-patient').removeClass("active");
    $(this).addClass("active");
    load_patient_appointment_list_dt();
  });

  $(".dt-treatment-date").datepicker({
    dateFormat: 'yy-mm-dd',
    changeYear: true
  });

  $(".dt-default").datepicker({
    dateFormat: 'yy-mm-dd',
    changeYear: true,
    yearRange: '1950:2016'
  });

  $(".btn-history").click(function(){
    var id = $(this).attr("data-patient-id");
    $("#history").html("<div class='text-center'><i class='fa fa-spin fa-spinner'></i> Loading content...</div>");
    $.post(BASE_URL + "patient/ajax_load_patient_history",{id:id},function(o) {
      $('.tab-pane').html("");
      sessionStorage.setItem('patient_selected_tab', 'history');
      $('#history').html(o);    
    }); 
  });
  

  $(".btn-charting").click(function(){
    var id = $(this).attr("data-patient-id");
    $("#charting").html("<div class='text-center'><i class='fa fa-spin fa-spinner'></i> Loading content...</div>");
    $.post(BASE_URL + "patient/ajax_load_patient_charting",{id:id},function(o) {
      $('.tab-pane').html("");
      sessionStorage.setItem('patient_selected_tab', 'charting');
      $('#charting').html(o);  
    }); 
  });
  

  $(".btn-treatment").click(function(){
    var id = $(this).attr("data-patient-id");
    $("#treatment").html("<div class='text-center'><i class='fa fa-spin fa-spinner'></i> Loading content...</div>");
    $.post(BASE_URL + "patient/ajax_load_patient_treatment",{id:id},function(o) {
      $('.tab-pane').html("");
      sessionStorage.setItem('patient_selected_tab', 'treatment');
      $('#treatment').html(o);  
      //load_patient_treatment_list_dt(id);
    }); 
  });

  $(".btn-schedule").click(function(){
    var id = $(this).attr("data-patient-id");
    $("#schedule").html("<div class='text-center'><i class='fa fa-spin fa-spinner'></i> Loading content...</div>");
    $.post(BASE_URL + "patient/ajax_load_patient_schedule",{id:id},function(o) {
      $('.tab-pane').html("");
      sessionStorage.setItem('patient_selected_tab', 'schedule');
      $('#schedule').html(o);  
    }); 
  });

  $(".btn-attachment").click(function(){
    var id = $(this).attr("data-patient-id");
    $("#attachment").html("<div class='text-center'><i class='fa fa-spin fa-spinner'></i> Loading content...</div>");
    $.post(BASE_URL + "patient/ajax_load_patient_attachment",{id:id},function(o) {
      $('.tab-pane').html("");
      sessionStorage.setItem('patient_selected_tab', 'attachment');
      $('#attachment').html(o);  
    }); 
  });

  $(".btn-orthodontic").click(function(){
    var id = $(this).attr("data-patient-id");
    $("#orthodontic").html("<div class='text-center'><i class='fa fa-spin fa-spinner'></i> Loading content...</div>");
    $.post(BASE_URL + "patient/ajax_load_patient_orthodontic",{id:id},function(o) {
      $('.tab-pane').html("");
      sessionStorage.setItem('patient_selected_tab', 'orthodontic');
      $('#orthodontic').html(o);  
    }); 
  });

  $(".btn-xray").click(function(){
    var id = $(this).attr("data-patient-id");
    $("#xray").html("<div class='text-center'><i class='fa fa-spin fa-spinner'></i> Loading content...</div>");
    $.post(BASE_URL + "patient/ajax_load_patient_xray",{id:id},function(o) {
      $('.tab-pane').html("");
      sessionStorage.setItem('patient_selected_tab', 'xray');
      $('#xray').html(o);  
    }); 
  });

  $(".btn-prescription").click(function(){
    var id = $(this).attr("data-patient-id");
    $("#prescription").html("<div class='text-center'><i class='fa fa-spin fa-spinner'></i> Loading content...</div>");
    $.post(BASE_URL + "patient/ajax_load_patient_prescription",{id:id},function(o) {
      $('.tab-pane').html("");
      sessionStorage.setItem('patient_selected_tab', 'prescription');
      $('#prescription').html(o);  
    }); 
  });
  
  if(sessionStorage.getItem('patient_selected_tab') == null) {
      sessionStorage.setItem('patient_selected_tab', 'charting');
  }

  $(".btn-"+sessionStorage.getItem('patient_selected_tab')).trigger('click');

  $(".btn-show-edit-profile").click(function(){
    $('.profile-label').hide();
    $('.profile-input').removeClass("hidden");
  });

  $(".btn-cancel-edit-profile").click(function(){    
    $('.profile-input').addClass("hidden");
    $('.profile-label').show();
  });

  $(".btn-show-edit-about-me").click(function(){
    $('.about-me-label').hide();
    $('.about-me-input').removeClass("hidden");
  });

  $(".btn-cancel-edit-about-me").click(function(){    
    $('.about-me-input').addClass("hidden");
    $('.about-me-label').show();
  });

  $('#frm-edit-profile').submit(function(evt) {
      evt.preventDefault();

      $('.btn-update-profile').html("<b><i class='fa fa-spin fa-spinner'></i> Saving...</b>");
      if( $('.btn-update-profile').hasClass("disabled") ) {
        $('.btn-update-profile').html("<b>Save Changes</b>");
      }else{
        $('.btn-update-profile').attr("disabled","disabled");
        $.post(BASE_URL + "patient/update_profile",$('#frm-edit-profile').serialize(),function(o) {
          if(o.is_success) {
            $('.patient-name-label').html(o.patient_name);
            $('.telephone-number-label').html(o.telephone_number);
            $('.mobile-number-label').html(o.mobile_number);
            $('.health-card-type-label').html(o.health_card_type);
            $('.health-card-number-label').html(o.health_card_number);
            $('.btn-cancel-edit-profile').trigger('click');
          }else{

          }
          $('.btn-update-profile').removeAttr("disabled");
          $('#msg-notifier-container').html(o.message);
          $('#messageNotifierModal').modal("show");
          $('.btn-update-profile').html("<b>Save Changes</b>");
        },"json");
      }
   });

  $('#frm-edit-about-me').submit(function(evt) {
      evt.preventDefault();

      $('.btn-update-about-me').html("<b><i class='fa fa-spin fa-spinner'></i> Saving...</b>");
      if( $('.btn-update-about-me').hasClass("disabled") ) {
        $('.btn-update-about-me').html("<b>Save Changes</b>");
      }else{
        $('.btn-update-about-me').attr("disabled","disabled");
        $.post(BASE_URL + "patient/update_about_me",$('#frm-edit-about-me').serialize(),function(o) {
          if(o.is_success) {


            $('.birthdate-label').html(o.birthdate);
            $('.age-label').html(o.age + " years old");
            $('.address-label').html(o.address);
            $('.city-province-label').html(o.city_province);
            $('.occupation-label').html(o.occupation);
            $('.company-label').html(o.company);
            $('.civil-status-label').html(o.civil_status);
            $('.gender-label').html(o.gender);

            /*if(o.birthdate != "") {
              dob = new Date(o.birthdate);
              var today = new Date();
              var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
              $('.age-label').html(age+' years old');
            }*/

            $('.age-label').html(o.age  + " years old");
            $('.btn-cancel-edit-about-me').trigger('click');
          }else{

          }
          $('.btn-update-about-me').removeAttr("disabled");
          $('#msg-notifier-container').html(o.message);
          $('#messageNotifierModal').modal("show");
          $('.btn-update-about-me').html("<b>Save Changes</b>");
        },"json");
      }
  });

  $('.dt-bdate').change(function(){
      dob = new Date($(this).val());
      var today = new Date();
      var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
      if(age > 0) {
        $('.age-input').val(age);
      }else{
        $('.age-input').val(0);
      }
  });

  $('.inp-age-patient').change(function(){
    $('.dt-bdate').val("");
    $('.birthdate-label').html("");
  });

  // SCRIPT FOR Datepicker year dropdown bugs
  var enforceModalFocusFn = $.fn.modal.Constructor.prototype.enforceFocus;
  var $confModal = $("#addPatientModal");
  $.fn.modal.Constructor.prototype.enforceFocus = function() {};
  $confModal.on('hidden', function() {
      $.fn.modal.Constructor.prototype.enforceFocus = enforceModalFocusFn;
  });
  //$confModal.modal({ backdrop : false });

  $(".btn-change-photo").click(function(){
      $("#patient-image").trigger('click');
  }); 

  $('.has-ck-finder').click(function(){
    openKCFinder_textbox($(this));
  });


  $("#check-all").click(function(){
      var attr=$(this).attr('checked');
      if(attr != undefined && attr != false)
      {
        $(".dental-option").each(function(){
            $(this).prop('checked', false);
        });
        $(this).removeAttr('checked');
      }else
      {
         $(".dental-option").each(function(){
            $(this).prop('checked', true);
        });
        $(this).attr('checked','checked');
      }

      
  });

  $(".dental-option").click(function(){
      var ifcheck=0;
       var attr=$(this).prop('checked');
      if(!attr)
      {
         $("#check-all").removeAttr('checked');
      }else
      {
        $(".dental-option").each(function(){
          if($(this).prop('checked'))
              ifcheck++;
          
      });
      }
      //console.log(ifcheck);

      if(ifcheck == 4)
      {
        //console.log('good');
        $("#check-all").attr('checked','checked');
          $("#check-all").prop('checked', true);
      }
      
  });

  $('.btn-hide-show-patient-form').click(function(){
    $("#more-details-container").toggle(500);
    if($(this).attr("data-show") == 'false') {
      $(this).html('<i class="fa fa-minus-square"></i> Hide');
      $(this).attr("data-show","true");
    }else{
      $(this).html('<i class="fa fa-plus-square"></i> View more');
      $(this).attr("data-show","false");
    }
  });

  $('.age-input').change(function(){
    $('#birthdate').val("");
  });

});

CKEDITOR.replace( 'ckeditor', {
      width: '600'
    });

function openKCFinder_textbox(field) {      
  window.KCFinder = {
      callBack: function(url) {
        var filename= url.split('/').pop()
        var clean_filename = filename.replace(new RegExp("%20", 'g')," ");

        var extension = clean_filename.split('.').pop().toUpperCase();
        if (extension == "PNG" || extension == "JPG" || extension == "JPEG" || extension == "BMP"){
          $(".img-attachment").attr("src",url);
        }else{
          $(".img-attachment").attr("src",DEFAULT_IMG);
        }

        $("#attachment-filename").val(clean_filename);            
        field.val(url);
      }
  };
  window.open(BASE_URL+'js/kcfinder/browse.php?dir=files', 'kcfinder_textbox',
      'status=0, toolbar=0, location=0, menubar=0, directories=0, ' +
      'resizable=1, scrollbars=0, width=800, height=600'
  );
}

function openPrintModal()
{
  $("#print-modal").modal('show');
}

function generatePDF(id,name)
{
  var getvar="?";
  $(".dental-option").each(function(){
      if($(this).prop('checked'))
      {
        getvar+=$(this).val()+'='+$(this).val()+'&';
      }
     
  });
   console.log(getvar);
  window.open(BASE_URL+'report/generate/'+id+'/'+getvar,'_blank');
}

