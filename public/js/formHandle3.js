$(function(){
	// check boxes if campaign exists
	var chan = $('#channels').val();
	var chanA = chan.split(',');
	$('.campaignChannel').each(function(){
		let temp = $(this).val();
		if (chanA.indexOf(temp) != -1) {
			$(this).attr('checked', 'checked');
		}
	});


	// Update Hidden Fields on Change
	$('input.campaignChannel').on('change', function(){
		let temp = [];
		$('input.campaignChannel').each(function(){
			if ($(this).is(':checked')) {
					temp.push(($(this).val()));					
			}
		});
		$str = temp.join(',');
		$('#channels').attr('value', $str);
	});

	// show hidden if checked
	$('.revealer').each(function(){
		if ($(this).is(':checked')) {
			$(this).closest('div').next().removeClass('hiddenField');
		} else {
			$(this).closest('div').next().addClass('hiddenField');
		}
	});

	

});