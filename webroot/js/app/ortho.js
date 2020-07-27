$(document).ready(function(){
	$('.before-hide').hide();
	$('.after-hide').hide();
	$('.pic-action').hide();

	//hover
	$(".before-image").hover(function(){
		var pos = $(this).attr("data-before-number");
		var img = $(this).css('background-image');
		$('.pic-for-'+pos).each(function(){
			if(img == 'none')
			{
				
				if($(this).hasClass('pic-trash'))
				{
					$(this).hide();
				}else
				{
					$(this).show();
				}
			}else
			{
				$(this).show();
			}
		});
	
	},function(){
		var pos = $(this).attr("data-before-number");
		$('.pic-for-'+pos).hide();
	});

	$(".after-image").hover(function(){
		var pos = $(this).attr("data-after-number");
		var img = $(this).css('background-image');
		$('.after-pic-for-'+pos).each(function(){
			if(img == 'none')
			{
				
				if($(this).hasClass('pic-trash'))
				{
					$(this).hide();
				}else
				{
					$(this).show();
				}
			}else
			{
				$(this).show();
			}
		});
	},function(){
		var pos = $(this).attr("data-after-number");
		$('.after-pic-for-'+pos).hide();
	});

	//end hover

	//set draggable
		$(".before-image").draggable({
			cursor: "move",
			revert:"invalid",
			zIndex: 300,
		});

		$(".after-image").draggable({
			cursor: "move",
			revert:"invalid",
			zIndex: 300,
		});


	//end set draggable

	//set droppable
		$(".before-droppable").droppable({
			accept: ".before-image",
		    hoverClass: "before-container-hover",
            drop: function( event, ui ) {
            	var newurl = $(ui.draggable).css("background-image");
            	var image_num = $(ui.draggable).attr("data-before-number");
            	var new_index = $(ui.draggable).attr("data-index");
            	var chek_class = $(ui.draggable).hasClass("avalable-image");
            	var parent_num = $(this).attr("data-before-number");
            	var oldurl = $(".image-container-"+parent_num).css("background-image");
            	var old_index = $(".image-container-"+parent_num).attr("data-index");
            	if(!chek_class)
            	{
            		$(ui.draggable).remove();
            	}
            	
            	//new parent
				var str='<div class="before-image image-container-'+parent_num+'" data-before-number="'+parent_num+'"  data-index="'+parent_num+'" >';
				str+='<span class="has-ck-finder-xray before-btn pic-upload pic-action pic-for-'+parent_num+'" data-number="'+parent_num+'" ><a href="javascript:upload('+new_index+')"><i class="fa fa-camera"></i></a></span>';
				str+='<span class="pic-upload pic-action pic-for-'+parent_num+' " style="margin-left: 5px;" ><a href="javascript:void(0)" data-toggle="modal" data-target="#previewModal-'+parent_num+'" ><i class="fa fa-picture-o"></i></a></span>';
                str+='	<div style="text-align:left !important;" class="modal fade" id="previewModal-'+parent_num+'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">';
                str+='		<div class="modal-dialog modal-lg " role="document">';
                str+='			<div class="modal-content">';
                str+='				<div class="modal-header">';
                str+='					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                str+='					<h4 class="modal-title" id="exampleModalLabel">Preview</h4>';
                str+='              </div>';
                str+='				<div class="modal-body text-center">';
                str+='              	<div id="before-img-prev-'+parent_num+'" class="img-preview">';
                str+='                  </div>';
                str+='              </div>';
                str+='              <div class="modal-footer">';
                str+='              	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';
                str+='              </div>';
                str+='			</div>';
                str+='	</div>';
                str+='</div>';
				str+='<span class="pic-trash pic-action pic-for-'+parent_num+'"><a href="javascript:xBefore('+parent_num+')"><i class="fa fa-times"></i></a></span>';
				str+='</div>';
				$(this).find("div").remove();
				$(this).append(str);
				var newdiv=$(".image-container-"+parent_num);
				newdiv.css("background-image",newurl);
            	newdiv.draggable({
					cursor: "move",
					revert:"invalid",
					zIndex: 300,
				});
				newdiv.hover(function(){
					var pos = $(this).attr("data-before-number");
					var img = $(this).css('background-image');
					$('.pic-for-'+pos).each(function(){
						if(img == 'none')
						{
							
							if($(this).hasClass('pic-trash'))
							{
								$(this).hide();
							}else
							{
								$(this).show();
							}
						}else
						{
							$(this).show();
						}
					});
				},function(){
					var pos = $(this).attr("data-before-number");
					$('.pic-for-'+pos).hide();
				});
				$('.pic-action').hide();

				var new_val = $("#before-in-file-"+new_index).val();
				//$("#before-in-pos-"+new_index).val(parent_num);
				// end new parent

				//old parent
				var str='<div class="before-image image-container-'+image_num+'" data-before-number="'+image_num+'"  data-index="'+image_num+'" >';
				str+='<span class="has-ck-finder-xray before-btn pic-upload pic-action pic-for-'+image_num+'" data-number="'+image_num+'"><a href="javascript:upload('+old_index+')"><i class="fa fa-camera"></i></a></span>';
				str+='<span class="pic-upload pic-action pic-for-'+image_num+' " style="margin-left: 5px;" ><a href="javascript:void(0)" data-toggle="modal" data-target="#previewModal-'+image_num+'" ><i class="fa fa-picture-o"></i></a></span>';
                str+='	<div style="text-align:left !important;" class="modal fade" id="previewModal-'+image_num+'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">';
                str+='		<div class="modal-dialog modal-lg " role="document">';
                str+='			<div class="modal-content">';
                str+='				<div class="modal-header">';
                str+='					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                str+='					<h4 class="modal-title" id="exampleModalLabel">Preview</h4>';
                str+='              </div>';
                str+='				<div class="modal-body text-center">';
                str+='              	<div id="before-img-prev-'+image_num+'" class="img-preview">';
                str+='                  </div>';
                str+='              </div>';
                str+='              <div class="modal-footer">';
                str+='              	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';
                str+='              </div>';
                str+='			</div>';
                str+='	</div>';
                str+='</div>';
				str+='<span class="pic-trash pic-action pic-for-'+image_num+'"><a href="javascript:xBefore('+image_num+')"><i class="fa fa-times"></i></a></span>';
				str+='</div>';
				$(".image-parent-"+image_num).find("div").remove();
				$(".image-parent-"+image_num).append(str);
				var olddiv=$(".image-container-"+image_num);
				olddiv.css("background-image",oldurl);
            	olddiv.draggable({
					cursor: "move",
					revert:"invalid",
					zIndex: 300,
				});
				olddiv.hover(function(){
					var pos = $(this).attr("data-before-number");
					var img = $(this).css('background-image');
					$('.pic-for-'+pos).each(function(){
						if(img == 'none')
						{
							
							if($(this).hasClass('pic-trash'))
							{
								$(this).hide();
							}else
							{
								$(this).show();
							}
						}else
						{
							$(this).show();
						}
					});
				},function(){
					var pos = $(this).attr("data-before-number");
					$('.pic-for-'+pos).hide();
				});
				$('.pic-action').hide();
				var old_val = $("#before-in-file-"+old_index).val();
				//$("#before-in-pos-"+old_index).val(image_num);

				$("#before-in-file-"+new_index).val(old_val);
				$("#before-in-file-"+old_index).val(new_val);


				if(new_val != "") {
					$('#before-img-prev-'+parent_num).html('<img src="'+new_val+'" />');
				}else{
					$('#before-img-prev-'+parent_num).html('No preview available.');
				}

				if(old_val != "") {
					$('#before-img-prev-'+image_num).html('<img src="'+old_val+'" />');
				}else{
					$('#before-img-prev-'+image_num).html('No preview available.');
				}

				loadCKFinderScript();
				ajaxSavePatientXray('before');
				//end old parent    
		    }
		});

		$(".after-droppable").droppable({
			accept: ".after-image",
		    hoverClass: "before-container-hover",
            drop: function( event, ui ) {
            	var newurl = $(ui.draggable).css("background-image");
            	var image_num = $(ui.draggable).attr("data-after-number");
            	var new_index = $(ui.draggable).attr("data-index");
            	var chek_class = $(ui.draggable).hasClass("avalable-image");
            	var parent_num = $(this).attr("data-after-number");
            	var oldurl = $(".after-image-container-"+parent_num).css("background-image");
            	var old_index = $(".after-image-container-"+parent_num).attr("data-index");
            	if(!chek_class)
            	{
            		$(ui.draggable).remove();
            	}
            	
            	//new parent
				var str='<div class="after-image after-image-container-'+parent_num+'" data-after-number="'+parent_num+'"  data-index="'+parent_num+'" >';
				str+='<span class="has-ck-finder-xray after-btn pic-upload pic-action after-pic-for-'+parent_num+'" data-number="'+parent_num+'"><a href="javascript:uploadAfter('+new_index+')"><i class="fa fa-camera"></i></a></span>';
				str+='<span class="pic-upload pic-action after-pic-for-'+parent_num+' " style="margin-left: 5px;" ><a href="javascript:void(0)" data-toggle="modal" data-target="#previewAfterModal-'+parent_num+'" ><i class="fa fa-picture-o"></i></a></span>';
                str+='	<div style="text-align:left !important;" class="modal fade" id="previewAfterModal-'+parent_num+'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">';
                str+='		<div class="modal-dialog modal-lg " role="document">';
                str+='			<div class="modal-content">';
                str+='				<div class="modal-header">';
                str+='					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                str+='					<h4 class="modal-title" id="exampleModalLabel">Preview</h4>';
                str+='              </div>';
                str+='				<div class="modal-body text-center">';
                str+='              	<div id="after-img-prev-'+parent_num+'" class="img-preview">';
                str+='                  </div>';
                str+='              </div>';
                str+='              <div class="modal-footer">';
                str+='              	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';
                str+='              </div>';
                str+='			</div>';
                str+='	</div>';
                str+='</div>';
				str+='<span class="pic-trash pic-action after-pic-for-'+parent_num+'"><a href="javascript:xAfter('+parent_num+')"><i class="fa fa-times"></i></a></span>';
				str+='</div>';
				$(this).find("div").remove();
				$(this).append(str);
				var newdiv=$(".after-image-container-"+parent_num);
				newdiv.css("background-image",newurl);
            	newdiv.draggable({
					cursor: "move",
					revert:"invalid",
					zIndex: 300,
				});
				newdiv.hover(function(){
					var pos = $(this).attr("data-after-number");
					var img = $(this).css('background-image');
					$('.after-pic-for-'+pos).each(function(){
						if(img == 'none')
						{
							
							if($(this).hasClass('pic-trash'))
							{
								$(this).hide();
							}else
							{
								$(this).show();
							}
						}else
						{
							$(this).show();
						}
					});
				},function(){
					var pos = $(this).attr("data-after-number");
					$('.after-pic-for-'+pos).hide();
				});
				$('.pic-action').hide();

				var new_val = $("#after-in-file-"+new_index).val();
				//$("#after-in-pos-"+new_index).val(parent_num);
				// end new parent

				//old parent
				var str='<div class="after-image after-image-container-'+image_num+'" data-after-number="'+image_num+'"  data-index="'+image_num+'" >';
				str+='<span class="has-ck-finder-xray after-btn pic-upload pic-action after-pic-for-'+image_num+'" data-number="'+image_num+'"><a href="javascript:uploadAfter('+old_index+')"><i class="fa fa-camera"></i></a></span>';
				str+='<span class="pic-upload pic-action after-pic-for-'+image_num+' " style="margin-left: 5px;" ><a href="javascript:void(0)" data-toggle="modal" data-target="#previewAfterModal-'+image_num+'" ><i class="fa fa-picture-o"></i></a></span>';
                str+='	<div style="text-align:left !important;" class="modal fade" id="previewAfterModal-'+image_num+'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">';
                str+='		<div class="modal-dialog modal-lg " role="document">';
                str+='			<div class="modal-content">';
                str+='				<div class="modal-header">';
                str+='					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                str+='					<h4 class="modal-title" id="exampleModalLabel">Preview</h4>';
                str+='              </div>';
                str+='				<div class="modal-body text-center">';
                str+='              	<div id="after-img-prev-'+image_num+'" class="img-preview">';
                str+='                  </div>';
                str+='              </div>';
                str+='              <div class="modal-footer">';
                str+='              	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';
                str+='              </div>';
                str+='			</div>';
                str+='	</div>';
                str+='</div>';
				str+='<span class="pic-trash pic-action after-pic-for-'+image_num+'"><a href="javascript:xAfter('+image_num+')"><i class="fa fa-times"></i></a></span>';
				str+='</div>';
				$(".after-image-parent-"+image_num).find("div").remove();
				$(".after-image-parent-"+image_num).append(str);
				var olddiv=$(".after-image-container-"+image_num);
				olddiv.css("background-image",oldurl);
            	olddiv.draggable({
					cursor: "move",
					revert:"invalid",
					zIndex: 300,
				});
            	olddiv.hover(function(){
					var pos = $(this).attr("data-after-number");
					var img = $(this).css('background-image');
					$('.after-pic-for-'+pos).each(function(){
						if(img == 'none')
						{
							
							if($(this).hasClass('pic-trash'))
							{
								$(this).hide();
							}else
							{
								$(this).show();
							}
						}else
						{
							$(this).show();
						}
					});
				},function(){
					var pos = $(this).attr("data-after-number");
					$('.after-pic-for-'+pos).hide();
				});
				$('.pic-action').hide();

				var old_val = $("#after-in-file-"+old_index).val();
				//$("#after-in-pos-"+old_index).val(image_num);

				$("#after-in-file-"+new_index).val(old_val);
				$("#after-in-file-"+old_index).val(new_val);

				if(new_val != "") {
					$('#after-img-prev-'+parent_num).html('<img src="'+new_val+'" />');
				}else{
					$('#after-img-prev-'+parent_num).html('No preview available.');
				}

				if(old_val != "") {
					$('#after-img-prev-'+image_num).html('<img src="'+old_val+'" />');
				}else{
					$('#after-img-prev-'+image_num).html('No preview available.');
				}

				loadCKFinderScript();
				ajaxSavePatientXray('after');
				//end old parent    
		    }
		});
	//end set droppable

	// set url preview
	// $("#before-file").change(function(){
	// 	size=this.files.length;
		
	// 	for(var i=0;i<size;i++)
	// 	{
	// 		readURL(this,i,'before');
	// 	}
	// 	$(".before-image").show();
	// });

	$(".before-files").change(function(){	

			var getArr = $(this).attr('id').split('-');
			var i = $("#before-in-pos-"+getArr[getArr.length-1]).val();
			readURL(this,i,'before');
	});

	$(".after-files").change(function(){	

			var getArr = $(this).attr('id').split('-');
			var i = $("#after-in-pos-"+getArr[getArr.length-1]).val();
			readURL(this,i,'after');
	});

	// $("#all-file").change(function(){
	// 	size=this.files.length;
	// 	var file=this;
	// 	var form = new FormData(document.getElementById('form-file'));
		

	// 	console.log(form);


	// 	for(var i=0;i<size;i++)
	// 	{
	// 		form.append('index',i);
	// 		$.ajax({
	// 			type:'POST',
	// 			url:'includes/upload.php',
	// 			data:form,
	// 			processData: false,
	//             contentType: false,
	// 			cache:false,
	// 			success:function(data)
	// 			{
					
					
	// 			}
	// 		});
	// 		readURL(this,i,'avalable');
	// 	}
	// 	//$(".before-image").show();
	// });
	//end set url preview


	
});

function readURL(input,index,method) {
	
    if (input.files && input.files[0]) {
    	
        var reader = new FileReader();
        reader.onload = function (e) {
        	if(method == "before")
        	{

            	$('.image-container-'+index).css('background-image','url('+e.target.result+')');
        	}
            else if( method == "after")
            {
            	
            	$('.after-image-container-'+index).css('background-image','url('+e.target.result+')');
            }else
            {
            	
            	//var div =$('<div class="col-md-6"><div class="avalable-image avalable-image-container-'+(index+1)+'"></div></div>');
            	var parentDiv = document.createElement("div");
            	$(parentDiv).addClass("col-md-3");
            	var div = document.createElement("div");
            	$(div).addClass("avalable-image").addClass("before-image").addClass("after-image");
            	$(div).attr("data-index",index+1);
            	$(div).css('background-image','url('+e.target.result+')');
            	$(div).draggable({
					cursor: "move",
					revert:"invalid",
					zIndex: 1000,
					helper: "clone",
				});
            	$(parentDiv).append(div);
            	var parent = document.getElementsByClassName("div-main-avalable");
            	$(parent).append(parentDiv);
            	//$(".div-main-avalable").append(div);
            	//$('.avalable-image-container-'+(index+1)).css('background-image','url('+e.target.result+')');
            }
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function upload(id)
{

	//$("#before-in-file-"+id).click();

}
function uploadAfter(id)
{

	$("#after-in-file-"+id).click();

}

function xBefore(id)
{
	$(".pic-for-"+id).each(function(){
		if($(this).hasClass('pic-trash'))
			$(this).hide();
	});
	$("#before-in-file-"+id).val("");
	$('.image-container-'+id).css('background-image','none');
	ajaxSavePatientXray('before');
}

function xAfter(id)
{
	$(".after-pic-for-"+id).each(function(){
		if($(this).hasClass('pic-trash'))
			$(this).hide();
	});
	$("#after-in-file-"+id).val("");
	$('.after-image-container-'+id).css('background-image','none');
	ajaxSavePatientXray('after');
}