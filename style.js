
jQuery( document ).ready( function() {
	console.log('init fabmob');
	
	function displayModal() {
		$( "#connectionRequiredModal" ).modal();
	}

	$('.btn-message').click(function() {
		if (typeof wgUserId == 'undefined') {
			displayModal();
			return false;
		}
		return true;
	});
	
} );