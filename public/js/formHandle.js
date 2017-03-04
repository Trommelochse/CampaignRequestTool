$(function(){
	// check boxes if campaign exists
	var prod = $('#products').val();
	var prodA = prod.split(',');
	$('.campaignProduct').each(function(){
		let temp = $(this).val();
		if (prodA.indexOf(temp) != -1) {
			$(this).attr('checked', 'checked');
		}
	});

	var plat = $('#platforms').val();
	var platA = plat.split(',');
	console.log(platA);
	$('.campaignPlatform').each(function(){
		let temp = $(this).val();
		console.log(temp);
		if (platA.indexOf(temp) != -1){
			$(this).attr('checked', 'checked');
		}
	});


	


	// Update Hidden Fields on Change
	$('input.campaignProduct').on('change', function(){
		let temp = [];
		$('input.campaignProduct').each(function(){
			if ($(this).is(':checked')) {
					temp.push(($(this).val()));					
			}
		});
		$str = temp.join(',');
		$('#products').attr('value', $str);
	});	

	var a = function(){
		let temp = [];
		$('input.campaignPlatform').each(function(){
			if ($(this).is(':checked')) {
					temp.push(($(this).val()));					
			}
		});
		$str = temp.join(',');
		$('#platforms').attr('value', $str);
	}  
	a();

	$('input.campaignPlatform').on('change', function(){
		a();
	});	
});