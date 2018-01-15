<?php get_header(); ?>
<!-- Destaque-->
<div class="container-fluid destaque">
	<div class="row">
		<!--slideshow-->
		<div class="col-lg-12" id="slidehome">
			<?php echo do_shortcode('[smartslider3 slider=1]'); ?>
		</div>
		<!-- Texto e foto de destaque-->
		<div class="col-lg-12 destaque_txt">
			<div class="container">
				<div class="row">
					<?php $recent = new WP_Query("page_id=307"); while($recent->have_posts()) : $recent->the_post();?>
					<div class="col-lg-5 col-md-12 col-sm-12 foto_dest">
						<img src="<?php echo get_the_post_thumbnail_url() ?>" alt="mesa do restaurante Don Cordero"/>
					</div>
						<div class="col-lg-7 col-md-12 col-sm-12 txt_dest">
							<h1><span class="hand">Conheça o </span><br> DON CORDERO</h1>
								<?php the_content('saiba mais'); ?>
									<a href="<?php the_permalink(31); ?>" class="more-link">Saiba Mais</a>
								<?php endwhile; ?>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Categoria depratos em destaque-->
<section id="pratos_dest">
	<div class="container-fluid banner_sabores">
		<div class="row" style="display: flex;">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="container">
					<h2> <span class="hand">Sabores</span><br>
            IRRESISTÍVEIS</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
		<!--  Pegar termos da taxonomia tipo de pratos -->
		<? 
			$terms = get_terms( array(
			    'taxonomy' => 'tipos_de_pratos',
				'number' => 4,
				'orderby' => 'term_order'
			) );
			if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
			    foreach ( $terms as $term ) {
					//pegando taxonomia e id para detectar campo da taxonomia certa
					$taxonomy = 'tipos_de_pratos';
					$term_id = $term->term_id; 
					$image_pratos = get_field('imagem_de_tipo_de_pratos', $taxonomy . '_' . $term_id); 
		?>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12  item_food">
					<img src="<? echo $image_pratos['url']	?>" alt="<? echo $image_pratos['alt']?>"/>
					<h3 class="hand">
						<? echo $term->name ; ?>
					</h3>
				</div>
		<?  
				}// End foreach
			 }//end if 
		?>
		</div>
	</div>
		<div class="container">
			<div class="row" style="display: flex;"> 
				<a href="<?php echo get_post_type_archive_link( 'cardapio' ); ?>" class="call_to_action2">Cardápio Completo</a> 
			</div>
		</div>
</section>
<!-- bloco happy hour, cortes e vinhos-->
<section class="happy_cortes_carta">
	<div class="container-fluid">
		<div class="row" style="display: flex;">
			<div id="happy_hour" class="col-lg-6 col-md-12 col-sm-12">
				<div class="row content_happy">
					<div class="col-lg-4 d-block d-lg-block d-md-none">
					</div>
					<div class="col-lg-7 col-md-12 col-sm-12 mr-1">
						<h2><span class="hand">Aproveite seu</span> <br> HAPPY HOUR</h2>
              				<?php $recent = new WP_Query("page_id=310"); while($recent->have_posts()) : $recent->the_post();?>
             				 <?php the_content(); ?>
              				<?php endwhile; ?>
              				<br>
							<a href="<?php the_permalink(60); ?>" class="call_to_action">CONFIRA</a> 
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12" style="padding: 0; margin: 0;">
				<div class="cortes_area row m-right">
					<div class="col-lg-8 col-md-7 col-sm-6">
						<h2><span class="hand">Cortes</span><br>ESPECIAIS</h2>
					</div>
					<!--div class="col-lg-4 col-md-5 col-sm-6"> <span class="call_to_action1">CONFIRA</span> </div-->
				</div>
				<div class="vinho_area row m-right "> <img src="<?php echo get_template_directory_uri()?>/img/vinho.png" class="img_vinho d-lg-block  d-md-none d-sm-none" alt="vinho">
					<div class="col-lg-8 col-md-7 col-sm-6">
						<!--h2><span class="hand">Carta de</span><br>VINHOS</h2-->
              			<h2><span class="hand">Adega de</span><br>VINHOS</h2>
					</div>
					<div class="col-lg-4 col-md-5 col-sm-6"> <a href="<?php the_permalink(194)?>" class="call_to_action1">VER ADEGA</a> </div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--Delivery-->
<section id="delivery">
	<div class="container-fluid banner_delivery">
		<div class="container text_delivery">
			<div class="row">
				<div class="col-lg-8">
					<h2><span class="hand">Don Cordero</span><br>EM SUA CASA</h2>
					<?php $recent = new WP_Query("page_id=66"); while($recent->have_posts()) : $recent->the_post();?>
			 		<?php the_content('Saiba mais'); ?>
			 		<a href="<?php the_permalink(); ?>" class="more-link">Boutique de Carne</a>
              		<?php endwhile; ?>
				</div>
				<div class="col-lg-4 d-block d-lg-block d-md-block d-sm-none d-xs-none"><img src="<?php echo get_template_directory_uri()?>/img/panela.png" class="panela hidden-md hidden-sm">
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row" style="display: flex;">
			<div class="col-lg-6 col-md-12 col-sm-12 fogo_chao">
				<div class="text_area col-lg-6 col-md-6 col-sm-6">
					<h2> <span class="hand">Fogo</span> <br>DE CHÃO</h2>
					<a href="<?php the_permalink(215)?>" class="call_to_action"> LER SOBRE </a> 
				</div>
				<div class="img_area col-lg-6 col-md-6 col-sm-6" style="background-image: url(<?php echo get_template_directory_uri()?>/img/thumb_fogo_de_chao.jpg);">
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12 eventos_corporativos">
				<div class="text_area col-lg-6 col-md-6 col-sm-6 ">
					<h2> <span class="hand"> Eventos</span><br>CORPORATIVOS</h2>
					<a  href="<?php the_permalink(241)?>" class="call_to_action">CONFIRA </a> </div>
				<div class="img_area col-lg-6 col-md-6 col-sm-6" style="background-image: url(<?php echo get_template_directory_uri()?>/img/eventos_corporativos.jpg);"></div>
			</div>
		</div>
	</div>
</section>
<section class="cozinha">
	<div class="container-fluid">
		<div class="container">
			<div class="row" style="display: flex;">
				<div class="col-lg-8">
					<h2><span class="hand">Uma cozinha com</span> <br>INGREDIENTES SELECIONADOS</h2>
					<?php $recent = new WP_Query("page_id=62"); while($recent->have_posts()) : $recent->the_post();?>
						<?php the_content('CONHEÇA NOSSA COZINHA'); ?>
              		<?php endwhile; ?>
              <a href="<?php the_permalink(224); ?>" class="more-link">CONHEÇA NOSSA COZINHA</a>	
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>