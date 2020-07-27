$(function(){
	$('#dt-users-list').DataTable();
	$('#agency_id').change(function(){
		var agency_id = $(this).val();
		loadItemCategoryByAgencyId(agency_id);
	});

	$('.chkbx-part-800').change(function(){
		if($(this).is(":checked")){
			$('#part_800').removeAttr('disabled');
		}else{
			$('#part_800').attr('disabled','disabled');
		}
	});

	if($('.chkbx-part-800').is(":checked")){
		$('#part_800').removeAttr('disabled');
	}else{
		$('#part_800').attr('disabled','disabled');
	}

	loadItemCategoryByAgencyId($('#agency_id').val());

	$('.btn-load-vendor').click(function(){
		var agency_id = $(this).attr("data-agency-id");
		loadVendorByAgencyId(agency_id)
	});

});

function loadVendorByAgencyId(agency_id)
{
	$('.vendor-list-container').html('<div style="margin-top:6px"><i class="fa fa-spin fa-spinner"></i> Loading...</div>');
	$.post(BASE_URL + "vendors/load_vendor_by_agency_id",{agency_id:agency_id},function(o){
		$('.vendor-list-container').html(o);
	});
}

function loadItemCategoryByAgencyId(agency_id)
{
	$('.item-categories-container').html('<div style="margin-top:6px"><i class="fa fa-spin fa-spinner"></i> Loading...</div>');
	$.post(BASE_URL + "item_categories/load_item_category_by_agency_id",{agency_id:agency_id},function(o){
		$('.item-categories-container').html(o);
	});
}