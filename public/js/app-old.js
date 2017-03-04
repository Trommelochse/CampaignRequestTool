$(document).foundation();
/*
$('#campignRequestFormClose').click(function(){
	var r = confirm("Are you sure you want to abandon your request?");
    if (r == true) {
        window.location = "review.html";
    } else {
    
    }
})*/

window.prettyPrint && prettyPrint();
$('.dp1').fdatepicker({
  format: 'dd-mm-yyyy',
  disableDblClickSelection: true
});
$('#dp2').fdatepicker({
  closeButton: true
});
$('#dp3').fdatepicker();
$('#dpt').fdatepicker({
  format: 'dd/mm/yyyy hh:ii',
  disableDblClickSelection: true,
  language: 'vi',
  pickTime: true
});
// datepicker limited to months
$('#dpMonths').fdatepicker();
// implementation of custom elements instead of inputs
var startDate = new Date(2012, 1, 20);
var endDate = new Date(2012, 1, 25);
$('#dp4').fdatepicker()
  .on('changeDate', function (ev) {
  if (ev.date.valueOf() > endDate.valueOf()) {
    $('#alert').show().find('strong').text('The start date can not be greater then the end date');
  } else {
    $('#alert').hide();
    startDate = new Date(ev.date);
    $('#startDate').text($('#dp4').data('date'));
  }
  $('#dp4').fdatepicker('hide');
});
$('#dp5').fdatepicker()
  .on('changeDate', function (ev) {
  if (ev.date.valueOf() < startDate.valueOf()) {
    $('#alert').show().find('strong').text('The end date can not be less then the start date');
  } else {
    $('#alert').hide();
    endDate = new Date(ev.date);
    $('#endDate').text($('#dp5').data('date'));
  }
  $('#dp5').fdatepicker('hide');
});

/*
$('.revealer').click(function(){
if ($('.revealer').is(':checked')) {
	$('.revealer')
		.next('div.hiddenField')
		.removeClass('hiddenField')
		.addClass('showHiddenField');}
	else {
	$('.revealer')
		.next('div.showHiddenField')
		.removeClass('showHiddenField')
		.addClass('hiddenField');
	}
}
);*/

$('.revealer').click(function(){
	if ($(this).is(':checked')) {
	$(this).parent('div').next('div').removeClass('hiddenField').addClass('showHiddenField').children('input'>'textarea').attr('required',true);

	}
	else{
	$(this).parent('div').next('.showHiddenField').removeClass('showHiddenField').addClass('hiddenField').children('input, textarea').attr('required',false);

	}
});


$('span[id^="filterBy"]').click(function(){
	if ($(this).hasClass('filterByOff')) {
		$(this).removeClass('filterByOff');
		if ($(this).is("#filterByApproved")){$('#requestListAll').find('.requestApproved').show();}
		if ($(this).is("#filterByPending")){$('#requestListAll').find('.requestPending').show();}
		if ($(this).is("#filterByReview")){$('#requestListAll').find('.requestReview').show();}
		if ($(this).is("#filterByDraft")){$('#requestListAll').find('.requestDraft').show();}


	}
	else{
		$(this).addClass('filterByOff');	
		if ($(this).is("#filterByApproved")){$('#requestListAll').find('.requestApproved').hide();}
		if ($(this).is("#filterByPending")){$('#requestListAll').find('.requestPending').hide();}
		if ($(this).is("#filterByReview")){$('#requestListAll').find('.requestReview').hide();}
		if ($(this).is("#filterByDraft")){$('#requestListAll').find('.requestDraft').hide();}
	}

	
});



