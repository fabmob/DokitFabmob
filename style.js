jQuery( document ).ready( function() {
	function displayModal() {
		$( "#connectionRequiredModal" ).modal();
	}

	$('.btn-message').click(function() {
		if (mw.config.get( 'wgUserId' ) === null) {
			displayModal();
			return false;
		}
		return true;
	});
} );
