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
	var id = getParameterByName('id');
	
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
	});

});