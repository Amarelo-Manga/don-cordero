<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta charset="<?php bloginfo( 'charset' ); ?>"><!-- 
<meta property="og:image" content="http://doncordero.com.br/desenv/wp-content/themes/don-cordero/img/logo_don_cordeiro.png" /> -->
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/bootstrap.min.css" >
<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107891208-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-107891208-1');
</script>
</head>

<body <?php body_class();?>>
<!--Área do header-->
<header id="top" class="container">
  <div class="row m-right">
<!-- BORDAS LAETAIS DOS ITENS ABAIXO TAMBÉM COMENTADOS NO CSS-->
    <div class="col-lg-5 col-md-4 col-sm-12 logo"><a href="<?php echo home_url(); ?>" ><img src="<?php echo get_template_directory_uri()?>/img/logo_don_cordeiro.png" alt="Don Cordero"/></a></div>
    <div class="col-lg-7 col-md-8 col-sm-12 top_menu">
      <div class="phone_delivery col-lg-3 col-md-3 col-sm-3"> <!--DELIVERY <b><br>19 3826.2301</b--></div>
      <div class="ifood col-lg-2 col-md-2 col-sm-2"><!--img src="<?php //echo get_template_directory_uri()?>/img/ifood.png"--></div>
      <div class="fale_conosco col-lg-3 col-md-3 col-sm-3"><!--FALE CONOSCO--></div>
      <div class="social col-lg-4 col-md-4 col-sm-4">
        <ul>
          <li><a href="https://www.facebook.com/doncorderorestaurante/" target="blank"><img src="<?php echo get_template_directory_uri()?>/img/face.png"/></a></li>
          <li><a href="https://www.instagram.com/doncordero_restaurante/" target="blank"><img src="<?php echo get_template_directory_uri()?>/img/icon_instagram.png"/></a></li>
		</ul> 
        </div>
      </div>
    </div>
</header>
<!--Menu principal-->
<div class="sombra_menu">
  <div class="container">
   		<nav id="main_menu" class="navbar navbar-expand-lg navbar-light">
	 			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    			<span class="navbar-toggler-icon"></span>
	  			</button>
	  			<div class="collapse navbar-collapse" id="navbarNav">
					<?php wp_nav_menu( array('theme_location' => 'top', 'menu_class'=> 'col-lg-12 navbar-nav',   'menu_id'        => 'top-menu',) ); ?>	  
  				</div>
		</nav>
   </div>
</div>