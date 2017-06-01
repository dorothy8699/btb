
jQuery(document).ready(function(){

	setInterval("polling()",60000);

});

function polling(){
	jQuery.ajax({
		url:'polling',
		type:'get',
		dataType:'json',
		success:function(data){
			jQuery("#rate_area").html(data.rate);
			jQuery("#last_area").html(data.last);
			jQuery("#bid_area").html(data.bid);
			jQuery("#ask_area").html(data.ask);
			jQuery("#high_area").html(data.high);
			jQuery("#low_area").html(data.log);
			jQuery("#buy_value_area").html(data.buyValue);
			jQuery("#sell_value_area").html(data.sellValue);
		}
	}); 
}






