jQuery(document).ready(function($) {

	// Uploading files
	var file_frame;

	jQuery.fn.upload_listing_image = function( button ) {
		var button_id = button.attr('id');
		var field_id = button_id.replace( '_button', '_input' );
		var image_id = button_id.replace("_button", "");

		// If the media frame already exists, reopen it.
		// if ( file_frame ) {
		//   file_frame.open();
		//   return;
		// }

		// Create the media frame.
		file_frame = wp.media.frames.file_frame = wp.media({
		  title: jQuery( this ).data( 'uploader_title' ),
		  button: {
		    text: jQuery( this ).data( 'uploader_button_text' ),
		  },
		  multiple: false
		});

		

		// When an image is selected, run a callback.
		file_frame.on( 'select', function() {
		  var attachment = file_frame.state().get('selection').first().toJSON();
		  jQuery( "#"+field_id).val(attachment.id);
		  jQuery( "#repeatable-fieldset-one img#"+image_id).attr('src',attachment.url);
		  jQuery( '#repeatable-fieldset-one img#'+image_id).show();
		  jQuery( '#' + button_id ).attr( 'id', 'remove_listing_image_button' );
		  jQuery( '#remove_listing_image_button' ).text( 'Remove listing image' );
		});

		// Finally, open the modal
		file_frame.open();
	};


	$('.custom_upload_image_button').on( 'click', function( event ) {
		event.preventDefault();
		jQuery.fn.upload_listing_image( jQuery(this) );
	});

	jQuery('#listingimagediv').on( 'click', '#remove_listing_image_button', function( event ) {
		event.preventDefault();
		jQuery( '#upload_listing_image' ).val( '' );
		jQuery( '#listingimagediv img' ).attr( 'src', '' );
		jQuery( '#listingimagediv img' ).hide();
		jQuery( this ).attr( 'id', 'upload_listing_image_button' ); // upload_listing_image_button -> upload_image_button
		jQuery( '#upload_listing_image_button' ).text( 'Set listing image' ); // upload_listing_image_button -> upload_image_button
	});


	// Repeatable
	$( '#add-row' ).on('click', function() {
		var row = $( '.empty-row.screen-reader-text' ).clone(true);
		row.removeClass( 'empty-row screen-reader-text' );
		row.insertBefore( '#repeatable-fieldset-one tbody>tr:last' );

		var images = $('.upload_image').length;
		var upload_image = 'upload_image' + images;
		var upload_image_button = 'upload_image' + images + '_button';
		var upload_image_input = 'upload_image' + images + '_input';

		var image = $(row).find('#upload_image_hidden');
		image.attr( 'id', upload_image );

		var button = $(row).find('#upload_image_button');
		button.attr( 'id', upload_image_button );

		var input = $(row).find('#upload_image_input_hidden');
		input.attr( 'id', upload_image_input );

		return false;
	});
	
	$( '.remove-row' ).on('click', function() {
		$(this).parents('tr').remove();
		return false;
	});

});