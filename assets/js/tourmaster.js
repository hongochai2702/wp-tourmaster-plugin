jQuery(document).ready(function($) {
	/* <![CDATA[ */
	var sb_admin_ajax = {"url":"http:\/\/chili.dev\/travelTourist\/wp-admin\/admin-ajax.php"};
	/* ]]> */
	function getParameterByName(name, url) {
	    if (!url) url = window.location.href;
	    name = name.replace(/[\[\]]/g, "\\$&");
	    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
	        results = regex.exec(url);
	    if (!results) return null;
	    if (!results[2]) return '';
	    return decodeURIComponent(results[2].replace(/\+/g, " "));
	}
	// Ajax
	/*var id = getParameterByName('id');
	
	var element = this;
	$.ajax({
		url: sb_admin_ajax.url,
		type: 'POST',
		data: ({ action : 'postgetInfoTour', tour_id:id }),
	 beforeSend: function() {
	
	 	$(".tour-info").append('<div class="ajaxLoadding"><img src="/wp-admin/images/spinner.gif" alt="Loadding save status" /></div>');

	 },
	 success: function( data, textStatus, jqXHR ){
	 	 //$(element).next().remove('.ajaxLoadding');
		 //var $ajax_response = $( data );
		 $('.tour > h4').html(data.post_title);
		 console.log(data);
		 
		 
		 
	 },
	 error: function( jqXHR, textStatus, errorThrown ){
	 	console.log( 'The following error occured: ' + textStatus, errorThrown );
	 },
	 complete: function( jqXHR, textStatus ){ }
	});*/
	function addCommas(nStr)
	{
		nStr += '';
		x = nStr.split('.');
		x1 = x[0];
		x2 = x.length > 1 ? '.' + x[1] : '';
		var rgx = /(\d+)(\d{3})/;
		while (rgx.test(x1)) {
			x1 = x1.replace(rgx, '$1' + ',' + '$2');
		}
		return x1 + x2;
	}
	
	
	$("input[name=\'number_adults\'").change(function(e) {
		
		var price_adults 		= $("input[name=\'price_adults\'").val();
		var price_children 		= $("input[name=\'price_children\'").val();
		var number_children		= $("input[name=\'number_children\'").val();
		var number_adults		= $(this).val();
		var price_total 		= parseInt(price_adults * number_adults) + parseInt(price_children * number_children);
		$("input[name=price_total").val(price_total);
		console.log(number_children);
		$('.price_total').html(price_total);
	});

	$("input[name=\'number_children\'").change(function(e) {
		console.log($(this).val());
		var price_adults 		= $("input[name=\'price_adults\'").val();
		var price_children 		= $("input[name=\'price_children\'").val();
		var number_children		= $(this).val();
		var number_adults		= $("input[name=\'number_adults\'").val();
		var price_total 		= parseInt( price_adults * number_adults ) + parseInt(price_children * number_children);
		$("input[name=price_total").val(price_total);
		$('.price_total').html(price_total);
	});

});