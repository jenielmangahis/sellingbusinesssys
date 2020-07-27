$(function(){

  //Sortable
  $( ".sortable-rows" ).sortable({
    tolerance: 'pointer',
    helper: 'clone',
    placeholder: 'ui-state-highlight',
    forceHelperSize: true,
    update: function() {          
      var target_url = $("#target-url").val();
      var order = $(this).sortable("serialize"); 
      $.post(base_url + target_url, order, function(theResponse){
      });
    }
  });

  $( ".sortable-div" ).sortable({
    tolerance: 'pointer',
    helper: 'clone',
    placeholder: 'ui-state-highlight',
    forceHelperSize: true,
    update: function() {          
      var target_url = $("#target-url").val();
      var order = $(this).sortable("serialize"); 
      $.post(base_url + target_url, order, function(theResponse){
      });
    }
  });

  //Date picker         
  $('.default-datepicker').datepicker({
    format: 'yyyy-mm-dd',
    autoclose: true
  });

  $('.has-ck-finder').click(function(){
    openKCFinder_textbox($(this));
  });

  $('.has-ck-finder-sub').click(function(){
    openKCFinder_textbox_sub($(this));
  });

  //Sidebar widget settings
  $("#side-widget-push-notification").click(function(){
    if( $(this).is(':checked') ){
      var enable_push_notification = 1;
    }else{
      var enable_push_notification = 0;
    }
      $.ajax({
             type: "POST",                  
             url: base_url + 'user_settings/ajax_update_member_push_notification',      
             data: {enable_push_notification:enable_push_notification},    
             dataType: "JSON",                                         
             success: function(o)
             {
                                                          
             }
      });
  });

  $(".todo-list").sortable({
    placeholder: "sort-highlight",
    handle: ".handle",
    forcePlaceholderSize: true,
    zIndex: 999999
  });

});
CKEDITOR.replace( 'ckeditor', {
      width: '100'
    });

function openKCFinder_textbox(field) {    

  window.KCFinder = {
      callBack: function(url) {
        var filename= url.split('/').pop()
        var clean_filename = filename.replace(new RegExp("%20", 'g')," ");

        var extension = clean_filename.split('.').pop().toUpperCase();
        /*if (extension == "PNG" || extension == "JPG" || extension == "JPEG" || extension == "BMP"){
          $(".img-attachment").attr("src",url);
        }else{
          $(".img-attachment").attr("src",DEFAULT_IMG);
        }*/

        $("#logo").val(clean_filename);            
        field.val(url);
      }
  };
  window.open(base_url+'js/kcfinder/browse.php?dir=files', 'kcfinder_textbox',
      'status=0, toolbar=0, location=0, menubar=0, directories=0, ' +
      'resizable=1, scrollbars=0, width=800, height=600'
  );
}

function openKCFinder_textbox_sub(field) {    

  window.KCFinder = {
      callBack: function(url) {
        var filename= url.split('/').pop()
        var clean_filename = filename.replace(new RegExp("%20", 'g')," ");

        var extension = clean_filename.split('.').pop().toUpperCase();
        /*if (extension == "PNG" || extension == "JPG" || extension == "JPEG" || extension == "BMP"){
          $(".img-attachment").attr("src",url);
        }else{
          $(".img-attachment").attr("src",DEFAULT_IMG);
        }*/

        $("#logo2").val(clean_filename);            
        field.val(url);
      }
  };
  window.open(base_url+'js/kcfinder/browse.php?dir=files', 'kcfinder_textbox',
      'status=0, toolbar=0, location=0, menubar=0, directories=0, ' +
      'resizable=1, scrollbars=0, width=800, height=600'
  );
}
