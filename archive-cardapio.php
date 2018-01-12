<?php get_header(); ?>
<!--Menu principal-->
<div class="sombra_menu">
	<!-- Destaque-->
	<div class="container-fluid banner_cardapio">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<h1>
						<div class="hand">Sabores</div>
						IRRESISTÍVEIS</h1>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid content_cardapio">
		<div id="faixa" class="row">
			<div class="col-lg-12"></div>
		</div>
		<div id="cardapio" class="container">
			<div id="Tabs1">
				<ul>
					<?php
						$args = array( 
									'include'  => array(7,5,16,8), 
									'taxonomy' => 'tipos_de_pratos', 
									'orderby'  => 'include', 
								);
						$terms =  get_terms($args); 
						// echo "<pre>";
						// 	print_r( $terms );	
						if ( !empty( $terms ) && !is_wp_error( $terms ) ){  
							foreach ( $terms as $term ) {
						echo '<li><a href="#tabs-'.$term->term_id.'">'.$term->name .'</a></li>';
							} 
						} 
					?>
				</ul>
				<?php  	
					$args = array( 
								'include'  => array(7,5,16,8), 
								'taxonomy' => 'tipos_de_pratos', 
								'orderby'  => 'include',
								'hide_empty' => 'true'
							);
					$terms_tab = get_terms( $args ); 
					if ( ! empty( $terms_tab ) && ! is_wp_error( $terms_tab ) ){  
						foreach ( $terms_tab as $term_tab ){
				?>
				<!--tabs com o cardapio-->
				<div id="tabs-<? echo $term_tab->term_id ?>">
					<div class="container">
						<div class="row">
							<h3><?php echo $term_tab->name ?></h3>
						</div>
						<div class="row">
							<!-- Seleciona Slug da categoria e mostra todos os posts -->
							<?php
							 $slug = $term_tab->term_id;
							$posts = get_posts( array(
								'post_type' => 'cardapio',
								'numberposts' => -1,
								'tax_query' => array(
									array(
										'taxonomy' => 'tipos_de_pratos',
										'field' => 'id',
										'terms' => $slug, // Where term_id of Term 1 is "1".
										'include_children' => false
									)
								)
							) );
							if ( $posts ): ?>
							<?php foreach( $posts as $post ): setup_postdata( $post );?>
							<div class="col-lg-5 mr-3 mb-3 col-md-12 col-sm-12 item">
								<div class="thumb_page">
									<? $slug; ?>
									<?php the_post_thumbnail(); ?>
								</div>
								<h2 class="item_tub">
									<? the_title() ?>
								</h2>
								<?php the_content();?>
							</div>
							<?php endforeach; ?>
							<?php wp_reset_postdata(); ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<?  } } ?>
			</div>
		</div>
	</div>
	<script src="<?php echo get_template_directory_uri()?>/jQueryAssets/jquery-1.11.1.min.js"></script>
	<script type="text/javascript">
		$( function () {
			$( "#Tabs1" ).tabs();
		} );
	</script>

<?php get_footer(); ?>