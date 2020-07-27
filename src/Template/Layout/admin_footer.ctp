	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <?php
        echo $this->Html->script('bootstrap.min.js');
        echo $this->Html->script('plugins/datepicker/bootstrap-datepicker.js');
        echo $this->Html->script('bootstrap-modalmanager.js');
        echo $this->Html->script('bootstrap-modal.js');
        echo $this->Html->script('backend-application.js');
        echo $this->Html->script('ckeditor/ckeditor', array('inline' => false));
    ?>

	<script type="text/javascript">
	    $(function(){	    	
	    	$("#dt-default").datepicker({
				inline: true,
				dateFormat: 'yy-mm-dd',
				minDate:0,
				showOn: "button",					
			  	buttonImageOnly: true,
			  	buttonImage: base_url + "webroot/images/calendar.gif",
			  	buttonText: "Calendar",
			  	beforeShow: function(input, inst)
			    {
			        inst.dpDiv.css({marginTop: -input.offsetHeight + 'px', marginLeft: input.offsetWidth + 'px'});
			    }
			});
			
	    	$('.has-tiny-mce').removeAttr('required');

	    	$('.btn-publish-update').click(function(){
	    		if ($(this).children().hasClass('fa-circle-o')) {
	    			$(this).children().removeClass('fa-circle-o');
	    			$(this).children().addClass('fa-check');
	    			$(this).children().attr('title','Set as Unpublish');
	    		}else{
	    			$(this).children().removeClass('fa-check');
	    			$(this).children().addClass('fa-circle-o');
	    			$(this).children().attr('title','Set as Publish');
	    		}

	    		var url = $(this).attr("base-url");
	    		var id = $(this).attr("update-id");

	    		$("#message-container").html('Updating...');
			    $("#trigger-modal-btn").trigger("click");
	    		$.post(url,{id:id},
			        function(o){
			            $("#message-container").html(o.message);
			    },"json");
	    	});

	    	//Date picker	    	
		    $('#default-datepicker').datepicker({
		      autoclose: true
		    });

	    	$('.btn-cover-image-update').click(function(){
	    		$(".btn-cover-image").children().removeClass('fa-check');
    			$(".btn-cover-image").children().addClass('fa-image');

    			$(".btn-cover-image").removeClass('btn-success');
    			$(".btn-cover-image").addClass('btn-info');

    			$(".btn-cover-image").children().attr('title','Set as cover photo');

	    		$(this).children().removeClass('fa-image');
    			$(this).children().addClass('fa-check');

    			$(this).removeClass('btn-info');
    			$(this).addClass('btn-success');

    			$(this).children().attr('title','Cover image');

	    		var url = $(this).attr("base-url");
	    		var id = $(this).attr("update-id");

	    		$("#message-container").html('Updating...');
			    $("#trigger-modal-btn").trigger("click");
	    		$.post(url,{id:id},
			        function(o){
			            $("#message-container").html(o.message);
			    },"json");
	    	});

	    	$('.btn-featured-product-update').click(function(){	    		
	    		if ($(this).children().hasClass('fa-remove')) {
	    			$(this).children().removeClass('fa-remove');
	    			$(this).children().addClass('fa-check');

	    			$(this).removeClass('btn-danger');
	    			$(this).addClass('btn-info');

	    			$(this).children().attr('title','Set as Unpublish');
	    		}else{
	    			$(this).children().removeClass('fa-check');
	    			$(this).children().addClass('fa-remove');

	    			$(this).removeClass('btn-info');
	    			$(this).addClass('btn-danger');

	    			$(this).children().attr('title','Set as Publish');
	    		}

	    		var url = $(this).attr("base-url");
	    		var id = $(this).attr("update-id");

	    		$("#message-container").html('Updating...');
			    $("#trigger-modal-btn").trigger("click");
	    		$.post(url,{id:id},
			        function(o){
			            $("#message-container").html(o.message);
			    },"json");
	    	});

	    	$('.btn-publish-product-update').click(function(){	    		
	    		if ($(this).children().hasClass('fa-remove')) {
	    			$(this).children().removeClass('fa-remove');
	    			$(this).children().addClass('fa-check');

	    			$(this).removeClass('btn-danger');
	    			$(this).addClass('btn-info');

	    			$(this).children().attr('title','Set as Unpublish');
	    		}else{
	    			$(this).children().removeClass('fa-check');
	    			$(this).children().addClass('fa-remove');

	    			$(this).removeClass('btn-info');
	    			$(this).addClass('btn-danger');

	    			$(this).children().attr('title','Set as Publish');
	    		}

	    		var url = $(this).attr("base-url");
	    		var id = $(this).attr("update-id");

	    		$("#message-container").html('Updating...');
			    $("#trigger-modal-btn").trigger("click");
	    		$.post(url,{id:id},
			        function(o){
			            $("#message-container").html(o.message);
			    },"json");
	    	});

	    	$('.has-ck-finder').click(function(){
	    		openKCFinder_textbox($(this));
	    	});
	    });

	    $(function(){
		    $.fn.modalmanager.defaults.resize = true;  
		});

		CKEDITOR.replace( 'ckeditor', {
		    width: '600'
	    });

	    function openKCFinder_textbox(field) {
	    	console.log(field);
		    window.KCFinder = {
		        callBack: function(url) {
		            field.val(url);
		        }
		    };
		    window.open(BASE_URL+'js/kcfinder/browse.php?type=images&dir=images', 'kcfinder_textbox',
		        'status=0, toolbar=0, location=0, menubar=0, directories=0, ' +
		        'resizable=1, scrollbars=0, width=800, height=600'
		    );
		}
	</script>