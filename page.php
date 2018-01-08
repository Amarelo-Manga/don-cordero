<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<?php 
		$banner = get_post_meta( $post->ID, '_banner_page', true );
		$image_url = wp_get_attachment_url( $banner['image'] ); 
	?>
	<div id="banner" style="background:url(<?php echo $image_url; ?>)">
		<div class="container">
			<h3><?php echo $banner['titulo'] ?></h3>
			<h4><?php echo $banner['subtitulo'] ?></h4>
			<p class="col-6"><?php echo $banner['texto'] ?></p>
		</div>
	</div>
	<div id="primary" class="content-area container">
		<div class="row">
			<div class="col-6">
				<?php
					the_title();
					the_content();
				?>
			</div>
			<div class="col-4">
				<?php the_post_thumbnail();  ?>
			</div>
		</div>
	</div><!-- #primary -->
	<div id="galeria">
		<?php
			$images = get_post_meta( $post->ID, 'repeatable_images', true );
			$count = count( $images );
		?>
		<div class="container">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  	<div class="carousel-inner">
			  		<?php
			  			for ($i = 0; $i < $count; $i++) {
			  					
			  				$url_image = wp_get_attachment_url( $images[$i]['images'] ); 
			  				$active = ( $i==0 ? ' ' : 'active' );

			  				if( ($i % 3 ) == 0 ){
			  					echo '<div class="carousel-item '.$active.'">';
			  				}
			  				echo '<div class="image-item">';
				  			echo '<img class="col-4" src="'.$url_image.'" alt="First slide" data-toggle="modal" data-target="#modal'.$images[$i]['images'].'">';
				  			echo '</div>';

				  			if( ($i % 3 ) == 2 ){
				  				echo '</div>';
				  			}
			  			}
			  		?>
			    </div>
			  	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    	<span class="sr-only">Previous</span>
			  	</a>
			  	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
			    	<span class="sr-only">Next</span>
			  	</a>
			  	<?php 
			  		for ($i = 0; $i < $count; $i++) {
			  			$url_image = wp_get_attachment_url( $images[$i]['images'] ); 
			  			$content = '<div class="modal fade" id="modal'.$images[$i]['images'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
			  			$content .=  '<div class="modal-dialog" role="document">';
			  			$content .=  '<div class="modal-content">';
				  		$content .=  '<div class="modal-body">';
				  		$content .=  '<img class="col-4" src="'.$url_image.'" alt="First slide" >';
				  		$content .=  '</div>';	
				  		$content .=  '</div>';
			  			$content .=  '</div>';
			  			$content .=  '</div>';

			  			echo $content;
			  		}
			  	?>
			</div>
		</div>
	</div>
</div><!-- .wrap -->

<?php get_footer();
