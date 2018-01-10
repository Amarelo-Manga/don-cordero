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
	<div id="banner" style="background-image:url(<?php echo $image_url; ?>)">
		<div class="container">
			<h3><?php echo $banner['titulo'] ?></h3>
			<h4><?php echo $banner['subtitulo'] ?></h4>
			<p class="col-lg-6 col-md-6 col-sm-6 p-0"><?php echo $banner['texto'] ?></p>
		</div>
	</div>
	<div id="primary" class="container-fluid ajuntar">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6">
				<?php
					the_content();
				?>
			</div>
				<div class="col-lg-6 col-md-6 col-sm-6 address">
		      		<h2> <span class="hand">Venha nos</span><br>
		       		VISITAR</h2>
				      <ul class="lista-contato">
				        <li><img src="<?php echo get_template_directory_uri()?>/img/facebook-placeholder-for-locate-places-on-maps.png" class="icon_footer"><div class="address_data_contato">Av. Aparecida Tellau Seraphim, 1.800<br>
				          			  Vinhedo . São Paulo<br>
				         			  CEP: 13280.000 </div></li>
				        <li> <img src="<?php echo get_template_directory_uri()?>/img/phone-receiver.png" class="icon_footer"><div class="address_data_contato">19 3826.2163 / 	2301 / 2054<br>
				          19 3876.0421 </div></li>
				        <li><img src="<?php echo get_template_directory_uri()?>/img/mail-black-envelope-symbol.png" class="icon_footer"><div class="address_data_contato">reservas@doncordero.com.br</div></li>
				        <li> <img src="<?php echo get_template_directory_uri()?>/img/clock-circular-outline.png" class="icon_footer"><div class="address_data_contato">

						De Segunda a Quinta das 11h30 às 15h00 e das 18h00 às 24h00<br>
						Sexta e Sábado das 12h00 às 24h00<br>
						Domingos e Feriados das 12h00 às 18h00</div></li>
				      </ul>
		    </div>
		</div>
	</div><!-- #primary -->
</div><!-- .wrap -->

<footer class="container-fluid">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 maps h-maps">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.096742164812!2d-46.99310188417979!3d-23.056914584935654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf32887bac0acd%3A0x9ef84f07101e95c2!2sAv.+Aparecida+Tellau+Serafim%2C+1800+-+Lot.+Banespa%2C+Vinhedo+-+SP%2C+13280-000!5e0!3m2!1spt-BR!2sbr!4v1506021355697" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
  <div class="row amarelo_manga"></div>
</footer>
</body>

<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107891208-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-107891208-1');
</script>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri()?>/jQueryAssets/jquery.ui-1.10.4.tabs.min.js"></script>
</html>

