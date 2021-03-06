<!doctype html>
<?php
	$version = 6;
?>

<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css"/>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"/>

    <link rel="stylesheet" href="<?php echo get_bloginfo("template_directory"); ?>/assets/css/home/common.css?v=<?php echo $version?>" />
    <link rel="stylesheet" href="<?php echo get_bloginfo("template_directory"); ?>/assets/css/home/responsive-home.css?v=<?php echo $version?>" />

	  <link rel="stylesheet" href="<?php echo get_bloginfo("template_directory"); ?>/assets/css/listproduct/list-product.css?v=<?php echo $version?>" />
    <link rel="stylesheet" href="<?php echo get_bloginfo("template_directory"); ?>/assets/css/listproduct/demo.css?v=<?php echo $version?>" />
    <link rel="stylesheet" href="<?php echo get_bloginfo("template_directory"); ?>/assets/css/listproduct/responsive.css?v=<?php echo $version?>" />
    
    <script src="<?php echo get_bloginfo("template_directory"); ?>/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

  </head>
	<?php wp_head(); ?>
</head>

<body>
	<main>
	<header>
      <section id="header">
        <div class="menu-top">
          <div class="wrap-logo-menu-top">
            <a href="<?php home_url(); ?>">
               <img src="<?php bloginfo('template_url'); ?>/assets/imgs/img-logo-top.svg" alt="" width="240" height="81" />
            </a>
          </div>

          <!-- <div class="wrap-menu-top">
            <ul>
              <li><a href="">Home</a></li>
              <li><a href="">List Product 1</a></li>
              <li><a href="">List Product 2</a></li>
              <li><a href="">Contact</a></li>
            </ul>
          </div> -->
          <div class="wrap-search-menu-top">
              <button><img src="<?php bloginfo('template_url'); ?>/assets/imgs/icon-search.svg" alt="" /></button>
          </div>
        </div>
      </section>

      <!-- <section id="menu-mobile" >
        <div class="menu-top-mobile">
          <div class="wrap-menu-top-mobile">
            <ul>
              <li><a href="">Home</a></li>
              <li><a href="">List Product 1</a></li>
              <li><a href="">List Product 2</a></li>
              <li><a href="">Contact</a></li>
            </ul>
          </div>
        </div>
      </section> -->


      <section>
        <?php echo do_shortcode("[maxmegamenu location=max_mega_menu_1]"); ?>
      </section>
    </header>

