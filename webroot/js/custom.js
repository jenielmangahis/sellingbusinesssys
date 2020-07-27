$('.collapse').on('shown.bs.collapse', function(){
$(this).parent().find(".glyphicon-plus").removeClass("glyphicon-plus").addClass("glyphicon-minus");
}).on('hidden.bs.collapse', function(){
$(this).parent().find(".glyphicon-minus").removeClass("glyphicon-minus").addClass("glyphicon-plus");
});

//$(".productCategory").click(function(){
	//var categoryID = $('#productCategory').val();
	var categoryID = $("#productCategory input[type='radio']:checked").val();
//});

jQuery(function(){

	$(".productCategory").click(function(){
		if($("input[type='radio'].productCategory").is(':checked')) {
		    var categoryID = $("input[type='radio'].productCategory:checked").val();
		    var dataString = 'categoryID='+ categoryID;
			$("#divcatResult").html('Loading...');
		    if(categoryID != '')
		    {
				$.ajax({
				type: "GET",
				url: base_url + 'products/ajaxorderviewproductpercategory',
				data: dataString,
				cache: false,
				success: function(html)
				{
					$("#divcatResult").html(html).show();
				}
				});
		    }
		}
	});	

  

});