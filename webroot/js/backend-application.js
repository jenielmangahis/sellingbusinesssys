//Coupons 
$(".discount-type").change(function(){
    var selected_discount_type = $(this).val();    
    if( selected_discount_type == 'Percentage' ){
        $(".percentage-amount").removeClass('hidden');
        $(".fixed-amount").addClass('hidden');
    }else{
        $(".fixed-amount").removeClass('hidden');
        $(".percentage-amount").addClass('hidden');
    }
});
//Products
$(".add-more-pricing").click(function(){	
	var rowCount = $('.product-pricing tr').length + 1;	
	$('.product-pricing').append('<tr><td><input type="text" name="productAvailability[' + (rowCount - 1) + '][date_from]" class="form-control default-datepicker" placeholder="Date from"></td><td><input type="text" name="productAvailability[' + (rowCount - 1) + '][date_to]" class="form-control default-datepicker" placeholder="Date to"></td><td><a href="javascript:void(0);" class="btn btn-danger btn-delete-product-availability"><i class="fa fa-trash"></i></a></td></tr>');
	$('.default-datepicker').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true
    });

    $(".btn-delete-product-availability").click(function(){    
        $(this).closest('tr').remove();
    });
});
$(".btn-delete-product-availability").click(function(){    
    $(this).closest('tr').remove();
});