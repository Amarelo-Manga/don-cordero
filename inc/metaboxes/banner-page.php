<?php
/*
 * Documentation
 * Replace "_banner_page" for name the metabox_box_name
 *
 * Add Metabox_example.php on the function
 * require get_template_directory() . '/metabox_example3.php';
 *
 * Add metabox-imageUpload.js on the function
 * wp_enqueue_script('metabox-imageUpload', get_template_directory_uri().'/js/metabox-imageUpload.js');
 */

add_action( 'add_meta_boxes', 'add_metabox_image_upload' );
function add_metabox_image_upload () {
	add_meta_box( 
		'banner_page', // $id  
		 __( 'Banner Página', 'text-domain' ),  // $title   
		'listing_image_metabox', // $callback
		'page', // $page  
		'normal', // $context
		'high' // $priority  
	);
}

function listing_image_metabox ( $post ) {
	global $content_width, $_wp_additional_image_sizes;
	
	$banner_image = get_post_meta( $post->ID, '_banner_page', true );

	$image_id = $banner_image['image'];

	if ( $banner_image && get_post( $image_id ) ) {
		
		$image_url = wp_get_attachment_url( $image_id );

		$content .= '<img src="'.$image_url.'" style="width:100%;height:150px;border:0;" id="upload_image" />';
		$content .= '<p class="hide-if-no-js"><a title="Escolher Imagem" href="javascript:;" id="upload_image_button"  data-uploader_title="Escolher Imagem" data-uploader_button_text="Escolher Imagem" class="button custom_upload_image_button">Escolher Imagem</a></p>';
		$content .= '<input type="hidden" id="upload_image_input" name="_banner_image" value="'. $image_id .'" /><br />';

		$content .= '<p><label class="post-attributes-label">Título</label><input type="text" value="'. $banner_image["titulo"] .'" name="_banner_titulo" style="width:100%;padding: 10px 5px;" ></p>';

		$content .= '<p><label class="post-attributes-label">Subtítulo</label><input type="text" value="'. $banner_image["subtitulo"] .'" name="_banner_subtitulo" style="width:100%;padding: 10px 5px;" ></p>';
		$content .= '<p><label class="post-attributes-label">Texto</label>';

	} else {

		$content .= '<img src="'.$image_url.'" style="width:100%;height:200px;border:0;" id="upload_image" />';	
		$content .= '<p class="hide-if-no-js"><a title="Escolher Imagem" href="javascript:;" id="upload_image_button"  data-uploader_title="Escolher Imagem" data-uploader_button_text="Escolher Imagem" class="button custom_upload_image_button">Escolher Imagem</a></p>';
		$content .= '<label class="post-attributes-label">Título</label><input type="text" value="" name="_banner_titulo" style="width:100%;padding: 10px 5px;" ><br />';
		$content .= '<label class="post-attributes-label">Subtítulo</label><input type="text" value="" name="_banner_subtitulo" style="width:100%;padding: 10px 5px;" ><br />';
		$content .= '<p><label class="post-attributes-label">Texto</label>';
	}

	echo $content;

	//Add Text Area com Editor
	$settings = array( 'media_buttons' => false, 'tinymce' => true, 'textarea_rows'=> 6 );
	wp_editor( $banner_image["texto"], "_banner_texto", $settings );
}

add_action( 'save_post', 'banner_page_save', 10, 1 );
function banner_page_save ( $post_id ) {
	if( isset( $_POST['_banner_titulo'] ) ) {
		$new['titulo'] = $_POST['_banner_titulo'];
	}

	if( isset( $_POST['_banner_subtitulo'] ) ) {
		$new['subtitulo'] = $_POST['_banner_subtitulo'];
	}

	if( isset( $_POST['_banner_texto'] ) ) {
		$new['texto'] = $_POST['_banner_texto'];
	}

	if( isset( $_POST['_banner_image'] ) ) {
		$new['image'] = (int) $_POST['_banner_image'];
	}

	update_post_meta( $post_id, '_banner_page', $new );
}