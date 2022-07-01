(function($){
	$( '.js-button' ).on( 'click', function() {
		$( this ).toggleClass( 'active' )
		$( '.js-header' ).toggleClass( 'active' )
		$( 'body' ).toggleClass( 'overflow-hidden' )
	})

	$( '.nav-link' ).on('click', function() {
		$( 'body' ).toggleClass( 'overflow-hidden' )
		$( '.js-button' ).toggleClass( 'active' )
		$( '.js-header' ).toggleClass( 'active' )
	})
})(jQuery)