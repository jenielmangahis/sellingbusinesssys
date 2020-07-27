var check_line = false;
var check_x = false;
var tooth_global='';
$(document).ready(function(){
	
	$(".dental-line").hide();
	$(".dental-x").hide();
	$("#img-view").hide();
	$(".img-tooth").hide();

	$(".dt-treatment-date").datepicker({
	    dateFormat: 'yy-mm-dd',
	    changeYear: true
	  });

	setTimeout(function(){
		//set all tooth
		$(".canvas-tooth").each(function(){
			var number = $(this).attr('data-tooth-number');
			var canvas_tooth =document.getElementById("canvas-for-"+number);
			var ctx_tooth=canvas_tooth.getContext("2d");
			var img_tooth=document.getElementById("chart-icon-"+number);
			ctx_tooth.drawImage(img_tooth,0,0,300,150);
		});
		//end set all tooth

		//canvas-line
		var canvas_line =document.getElementById("canvas-line");
		var ctx_line=canvas_line.getContext("2d");
		var img_line=document.getElementById("icon-line");
		
	    ctx_line.drawImage(img_line,0,0,300,150);
	    ctx_line.beginPath();
		ctx_line.moveTo(150,14);
		ctx_line.lineTo(150,140);
		ctx_line.lineWidth = 30;
		ctx_line.strokeStyle = '#ff0000';
		ctx_line.stroke();
		//end canvas line
		
		//canvas-x
		var canvas_x =document.getElementById("canvas-x");
		var ctx_x=canvas_x.getContext("2d");
		var img_x=document.getElementById("icon-x");
		
	    ctx_x.drawImage(img_x,0,0,300,150);

	    //first line \
	    ctx_x.beginPath();
		ctx_x.moveTo(50,30);
		ctx_x.lineTo(255,123);
		ctx_x.lineWidth = 15;
		ctx_x.strokeStyle = '#ff0000';
		ctx_x.stroke();
		// end first line \

		//second line /
	    ctx_x.beginPath();
		ctx_x.moveTo(255,30);
		ctx_x.lineTo(50,123);
		ctx_x.lineWidth = 15;
		ctx_x.strokeStyle = '#ff0000';
		ctx_x.stroke();
		// end second line /

		//second canvas x


		// canvas view result
			var canvas_result =document.getElementById("dental-canvas-view");
			var ctx_result=canvas_result.getContext("2d");
			var img_default=document.getElementById("img-view");

			ctx_result.drawImage(img_default,0,0,300,150);
		//
	},500);
	

	//change view per icon
	$(".dental-icon").click(function(){
		var image=$(this).find('img').attr('src');
		var preview_image=$('#img-view').attr('src');

		// get the name of the iamge
		var new_image = image.split('/');
		var len = new_image[new_image.length-1].length;
		var name= new_image[new_image.length-1].substring(0,len-4);

		//get the name of preview image
		var new_image = preview_image.split('/');
		var len = new_image[new_image.length-1].length;
		var name_prev= new_image[new_image.length-1].substring(0,len-4);
		
		//generate the nama of the new image
		var new_name_prev = '';
		var check=false;
		for(var i=0;i<name_prev.length;i++){
			if(name_prev.charAt(i) != name)
			{
				new_name_prev+=name_prev.charAt(i);
			}else
			{
				check=true;
			}
		}
		if(check)
			var temp_string=new_name_prev;
		else
			var temp_string=name+name_prev;
		if(name == '1')
			var temp_string=new_name_prev;

		var temp_array=[];
		for (var i = 0; i < temp_string.length; i++) {
			temp_array.push(temp_string.charAt(i));
		};
		var name_array = [];
		$.each(temp_array, function(i, el){
		    if($.inArray(el, name_array) === -1) name_array.push(el);
		});
		name_array.sort();
		var gen_new_name=DENTAL_IMG_DIR;
		if(name_array.length > 0)
		{
			for (var i = 0; i < name_array.length; i++) {
				gen_new_name+=name_array[i];
			};
		}else
		{
			gen_new_name+='1';
		}
		
		gen_new_name+='.png';

		//end generate

		
		if(name_prev == '1')
		{
			$('#img-view').attr('src',image);
			var canvas_result =document.getElementById("dental-canvas-view");
			var ctx_result=canvas_result.getContext("2d");
			var img_default=document.getElementById("img-view");
			ctx_result.clearRect(0, 0, canvas_result.width, canvas_result.height);
			ctx_result.drawImage(img_default,0,0,300,150);
			if(check_x == true)
			{
				
				//first line \
			    ctx_result.beginPath();
				ctx_result.moveTo(50,30);
				ctx_result.lineTo(255,123);
				ctx_result.lineWidth = 15;
				ctx_result.strokeStyle = '#ff0000';
				ctx_result.stroke();
				// end first line \

				//second line /
			    ctx_result.beginPath();
				ctx_result.moveTo(255,30);
				ctx_result.lineTo(50,123);
				ctx_result.lineWidth = 15;
				ctx_result.strokeStyle = '#ff0000';
				ctx_result.stroke();
				// end second line /
				
			}
			if(check_line == true)
			{	
				ctx_result.beginPath();
				ctx_result.moveTo(150,14);
				ctx_result.lineTo(150,140);
				ctx_result.lineWidth = 30;
				ctx_result.strokeStyle = '#ff0000';
				ctx_result.stroke();
			}

		}
		else
		{

			$('#img-view').attr('src',gen_new_name);
			
			setTimeout(function() {
				var canvas_result =document.getElementById("dental-canvas-view");
				var ctx_result=canvas_result.getContext("2d");
				var img_default=document.getElementById("img-view");
				ctx_result.clearRect(0, 0, canvas_result.width, canvas_result.height);
				ctx_result.drawImage(img_default,0,0,300,150);
				if(check_x == true)
				{
					
					//first line \
				    ctx_result.beginPath();
					ctx_result.moveTo(50,30);
					ctx_result.lineTo(255,123);
					ctx_result.lineWidth = 15;
					ctx_result.strokeStyle = '#ff0000';
					ctx_result.stroke();
					// end first line \

					//second line /
				    ctx_result.beginPath();
					ctx_result.moveTo(255,30);
					ctx_result.lineTo(50,123);
					ctx_result.lineWidth = 15;
					ctx_result.strokeStyle = '#ff0000';
					ctx_result.stroke();
					// end second line /
					
				}
				if(check_line == true)
				{	
					ctx_result.beginPath();
					ctx_result.moveTo(150,14);
					ctx_result.lineTo(150,140);
					ctx_result.lineWidth = 30;
					ctx_result.strokeStyle = '#ff0000';
					ctx_result.stroke();
				}
			}, 1000);

			
		}

		if(name == '1')
		{
			var type=$(this).attr('data-line');
			setTimeout(function() {
				var canvas_result =document.getElementById("dental-canvas-view");
				var ctx_result=canvas_result.getContext("2d");	
				var img_default=document.getElementById("img-view");
				
				if(type == 'line' && check_line == false)
				{

					if(check_x == true)
					{
						
						//first line \
					    ctx_result.beginPath();
						ctx_result.moveTo(50,30);
						ctx_result.lineTo(255,123);
						ctx_result.lineWidth = 15;
						ctx_result.strokeStyle = '#ff0000';
						ctx_result.stroke();
						// end first line \

						//second line /
					    ctx_result.beginPath();
						ctx_result.moveTo(255,30);
						ctx_result.lineTo(50,123);
						ctx_result.lineWidth = 15;
						ctx_result.strokeStyle = '#ff0000';
						ctx_result.stroke();
						// end second line /
						
					}

					
					check_line=true;
					ctx_result.beginPath();
					ctx_result.moveTo(150,14);
					ctx_result.lineTo(150,140);
					ctx_result.lineWidth = 30;
					ctx_result.strokeStyle = '#ff0000';
					ctx_result.stroke();


					
				}else if(type == 'line' && check_line == true)
				{
					check_line=false;
					ctx_result.clearRect(0, 0, canvas_result.width, canvas_result.height);
					ctx_result.drawImage(img_default,0,0,300,150);
					if(check_x == true)
					{
						//first line \
					    ctx_result.beginPath();
						ctx_result.moveTo(50,30);
						ctx_result.lineTo(255,123);
						ctx_result.lineWidth = 15;
						ctx_result.strokeStyle = '#ff0000';
						ctx_result.stroke();
						// end first line \

						//second line /
					    ctx_result.beginPath();
						ctx_result.moveTo(255,30);
						ctx_result.lineTo(50,123);
						ctx_result.lineWidth = 15;
						ctx_result.strokeStyle = '#ff0000';
						ctx_result.stroke();
						// end second line /
					}
				}
				if(type == 'x' && check_x == false)
				{
					
					check_x=true;
					//first line \
				    ctx_result.beginPath();
					ctx_result.moveTo(50,30);
					ctx_result.lineTo(255,123);
					ctx_result.lineWidth = 15;
					ctx_result.strokeStyle = '#ff0000';
					ctx_result.stroke();
					// end first line \

					//second line /
				    ctx_result.beginPath();
					ctx_result.moveTo(255,30);
					ctx_result.lineTo(50,123);
					ctx_result.lineWidth = 15;
					ctx_result.strokeStyle = '#ff0000';
					ctx_result.stroke();
					// end second line /
					if(check_line == true)
					{
						ctx_result.beginPath();
						ctx_result.moveTo(150,14);
						ctx_result.lineTo(150,140);
						ctx_result.lineWidth = 30;
						ctx_result.strokeStyle = '#ff0000';
						ctx_result.stroke();
					}
				}else if(type == 'x' && check_x == true)
				{
					check_x=false;
					ctx_result.clearRect(0, 0, canvas_result.width, canvas_result.height);
					ctx_result.drawImage(img_default,0,0,300,150);
					if(check_line == true)
					{
						ctx_result.beginPath();
						ctx_result.moveTo(150,14);
						ctx_result.lineTo(150,140);
						ctx_result.lineWidth = 30;
						ctx_result.strokeStyle = '#ff0000';
						ctx_result.stroke();
					}
				}
			}, 1000);
		}
		
		
		
	});
	// end change view per icon

	// change background color

	$(".dental-color").click(function(){
		$(".color-result").css('background-color',$(this).attr('data-dental-color'));
		$(".dental-icon").css('background-color',$(this).attr('data-dental-color'));
	});
	//end change background color

	// clear result
	$(".dental-btn-clear").click(function(){
		clear_result(null);
	});
	//end clear result

	$('.treatment-code-desc').click(function(){
		$('#dental-chart-history-modal').modal('show');
		$('#dch-tooth-no').html($(this).attr("data-tooth-no"));
		$('#dental-chart-history-container').html("<i class='fa fa-spin fa-spinner'></i> Loading content...");
		var dental_chart_id = $(this).attr("data-dental-cid");
		var tooth_number = $(this).attr("data-tooth-no");
		$.post(BASE_URL + "patient/ajax_load_dental_chart_details_history",{
			tooth_number:tooth_number,
			dental_chart_id:dental_chart_id
		},function(o) {
			$("#dental-chart-history-container").html(o);
		});
	})
	
    
});

//display modal
function chart(id,positiony,positionx,level)
{
	check_line = false;
	check_x = false;
	tooth_global=id;
	//$(".modal-title-chart").html('Tooth '+id+' '+positiony+' '+positionx+' '+level+' Molar');
	$(".modal-title-chart").html('Tooth');
	$("#tooth-number").val(id);
	$("#select-treatment").val($("#chart-icon-"+id).attr("data-treatment-id"));
	$("#note").val($("#chart-icon-"+id).attr("data-note"));
	$("#doctor_name").val($("#chart-icon-"+id).attr("data-doctor-name"));
	$("#dental-chart-modal").modal('show');
	$(".color-result").css('background-color','red');
	$(".dental-icon").css('background-color','red');
	clear_result(id);

}
// end display modal

//clear result
function clear_result(id)
{
	if(id == null)
	{
		$('#img-view').attr('src',DENTAL_IMG_DIR+'1.png');
		$(".color-result").css('background-color',$(this).attr('data-dental-color'));
		//setTimeout(function() {
		var canvas_result =document.getElementById("dental-canvas-view");
		var ctx_result=canvas_result.getContext("2d");
		var img_default=document.getElementById("img-view");
		ctx_result.clearRect(0, 0, ctx_result.width, ctx_result.height);
		ctx_result.drawImage(img_default,0,0,300,150);
		//}, 1000);
		$("#chart-icon-"+tooth_global).attr('data-if-x','false');
		$("#chart-icon-"+tooth_global).attr('data-if-line','false');
		check_x = false;
		check_line = false;
	}else
	{
		$(".color-result").css('background-color',$("#chart-icon-"+id).attr('data-this-color'));
		$(".dental-icon").css('background-color',$("#chart-icon-"+id).attr('data-this-color'));
		$('#img-view').attr('src',$("#chart-icon-"+id).attr('src'));
		// setTimeout(function() {
		var canvas_result =document.getElementById("dental-canvas-view");
		var ctx_result=canvas_result.getContext("2d");
		var img_default=document.getElementById("img-view");
		ctx_result.clearRect(0, 0, ctx_result.width, ctx_result.height);
		ctx_result.beginPath();
		ctx_result.rect(0, 0,1000,1000);
		ctx_result.fillStyle = $("#chart-icon-"+id).attr('data-this-color');
		ctx_result.fill();
		ctx_result.drawImage(img_default,0,0,300,150);

		 if($("#chart-icon-"+id).attr('data-if-x') == 'true')
		{
			check_x = true;
			//first line \
		    ctx_result.beginPath();
			ctx_result.moveTo(50,30);
			ctx_result.lineTo(255,123);
			ctx_result.lineWidth = 15;
			ctx_result.strokeStyle = '#ff0000';
			ctx_result.stroke();
			// end first line \

			//second line /
		    ctx_result.beginPath();
			ctx_result.moveTo(255,30);
			ctx_result.lineTo(50,123);
			ctx_result.lineWidth = 15;
			ctx_result.strokeStyle = '#ff0000';
			ctx_result.stroke();
			// end second line /
			
		}else{
			$("#chart-icon-"+id).attr('data-if-x','false');
			check_x = false;
		}

		if($("#chart-icon-"+id).attr('data-if-line') == 'true')
		{	
			check_line = true;
			ctx_result.beginPath();
			ctx_result.moveTo(150,14);
			ctx_result.lineTo(150,140);
			ctx_result.lineWidth = 30;
			ctx_result.strokeStyle = '#ff0000';
			ctx_result.stroke();	
		}else{
			$("#chart-icon-"+id).attr('data-if-line','false');
			check_line = false;
		}
		// }, 1000);
	}
	
}
//end clear result

// add tooth
function add_tooth()
{
	if($("#select-treatment").val() == null) {
		alert('Please select treatment.');
		return false;
	}
	var has_cross_out = 0;
	var has_line = 0;
	var id=$("#tooth-number").val();
	var preview_image=$('#img-view').attr('src');

	console.log(preview_image);
	console.log($(".color-result").css('background-color'));
	$("#chart-icon-"+id).attr('data-this-color',$(".color-result").css('background-color'));
	$("#chart-icon-"+id).attr('src',preview_image);
	setTimeout(function() {
		var canvas_tooth =document.getElementById("canvas-for-"+id);
		var ctx_tooth=canvas_tooth.getContext("2d");
		var img_tooth=document.getElementById("chart-icon-"+id);
		ctx_tooth.clearRect(0, 0, ctx_tooth.width, ctx_tooth.height);
		ctx_tooth.beginPath();
		ctx_tooth.rect(0, 0,1000,1000);
		ctx_tooth.fillStyle = $(".color-result").css('background-color');
		ctx_tooth.fill();
		ctx_tooth.drawImage(img_tooth,0,0,300,150);

		
	    if(check_x == true)
		{
			$("#chart-icon-"+id).attr('data-if-x','true');
			//first line \
		    ctx_tooth.beginPath();
			ctx_tooth.moveTo(50,30);
			ctx_tooth.lineTo(255,123);
			ctx_tooth.lineWidth = 15;
			ctx_tooth.strokeStyle = '#ff0000';
			ctx_tooth.stroke();
			// end first line \

			//second line /
		    ctx_tooth.beginPath();
			ctx_tooth.moveTo(255,30);
			ctx_tooth.lineTo(50,123);
			ctx_tooth.lineWidth = 15;
			ctx_tooth.strokeStyle = '#ff0000';
			ctx_tooth.stroke();
			// end second line /

			has_cross_out = 1;
			
		}else
		{
			$("#chart-icon-"+id).attr('data-if-x','false');
		}
		if(check_line == true)
		{	
			ctx_tooth.beginPath();
			ctx_tooth.moveTo(150,14);
			ctx_tooth.lineTo(150,140);
			ctx_tooth.lineWidth = 30;
			ctx_tooth.strokeStyle = '#ffff00';
			ctx_tooth.stroke();

			has_line = 1;

			$("#chart-icon-"+id).attr('data-if-line','true');
		}else
		{
			$("#chart-icon-"+id).attr('data-if-line','false');
		}
		$("#dental-chart-modal").modal('hide');

		var tooth_number = id;
		var dental_chart_id = $("#dental_chart_id").val();
		var treatment_id = $("#select-treatment").val();
		var color = rgb2hex($(".color-result").css('background-color'));
		var image = preview_image;
		var note = $('#note').val();
		var treatment_date = $('#treatment_date').val();
		var doctor_name = $('#doctor_name').val();

	    var selected = $("#select-treatment").find('option:selected');
	    var t_code = selected.data('treatment-code'); 
	    $("#tcode-"+tooth_number).val(t_code);
	    $("#tcode-"+tooth_number).addClass('treatment-code-desc');

		$.post(BASE_URL + "patient/ajax_save_dental_chart_detail",{
			tooth_number:tooth_number,
			dental_chart_id:dental_chart_id,
			treatment_id:treatment_id,
			color:color,
			image:image,
			note:note,
			has_cross_out:has_cross_out,
			has_line:has_line,
			treatment_date:treatment_date,
			doctor_name:doctor_name
		},function(o) {
			//$("#patient-dental-chart-details").html(o);
			if(o.is_success) {
				ajax_load_chart_details(o.dental_chart_id);
			}
			
		},"json");

	}, 1000);

}
//end add tooth

var hexDigits = new Array("0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f"); 

//Function to convert hex format to a rgb color
function rgb2hex(rgb) {
 	rgb = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
 	return "#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);
}

function hex(x) {
	return isNaN(x) ? "00" : hexDigits[(x - x % 16) / 16] + hexDigits[x % 16];
}