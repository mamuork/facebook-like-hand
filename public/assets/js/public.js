(function ( $ ) {
	"use strict";

	$(function () {

		/* Facebook Like Hand - Wordpres Plugin */
		jQuery( document ).ready( function( $ ) {
			var cook = $.cookie( 'flh-cookie' );				
			if( null == cook){			
				$( "#flh-popup" ).show();
			}
			$( "#flh-popup .flh-popup-close" ).click( function() {
				creaCookie();
				$( "#flh-popup" ).hide();
			});
		}); //document ready
	});
	
	function creaCookie(){
		$.cookie('flh-cookie', 'fan', { expires: 7 } );
		$("#flh-popup").hide();
	}

}(jQuery));