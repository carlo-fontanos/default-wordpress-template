/* <![CDATA[ */
jQuery(document).ready(function ($) {
	
	// Replace target="_blank" to all links with rel="external"
	$("a[rel='external']").attr("target","_blank");
		
	// Custom Image Upload
	$('#upload_logo_button').click(function() {
		tb_show('Upload Logo', 'media-upload.php?referer=site_options&type=image&TB_iframe=true&post_id=0', false);
		return false;
	});
	
	window.send_to_editor = function(html) {
		var image_url = $('img',html).attr('src');
		$('#custom_site_options\\[logourl\\]').val(image_url);
		if(image_url != ""){
			$('#uplogo').empty();
			$('#uplogo').append('<img src="' + image_url + '" alt="" />');
		}
		tb_remove();
	}
	
});
/* ]]> */