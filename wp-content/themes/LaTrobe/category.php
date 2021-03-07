<?php
 /*
  Template Name: list-product
 */
?>
<?php get_header();?>

<div id="wrapper">

        <div class="overlay"></div>
     
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <?php
                wp_nav_menu(array(
                'menu'=>'Category',
                'container' => '',
                'items_wrap' => '%3$s' 
                ));
            ?>
                
            </ul>
        </nav>

        <div id="page-content-wrapper">
            <section id="se_main">
                <div id="banner">
                    <h2 style=" background: url(<?php bloginfo('template_url'); ?>/assets/imgs/bg-nodes.svg), linear-gradient(to bottom, #e2231b 1%, #d14124 100%);">
                        International applications
                    </h2>
                </div>
                <div class="menu-left">
                    <button type="button" class="btn btn-lg custom-btn" data-toggle="offcanvas">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                    <?php
                    $args = array(
                        'category_name'     => $queried_category->slug,
                        'post_status'       => 'publish'
                    ); 

                    $the_query = new WP_Query( $args );
                    $total =  $the_query->post_count;
                    if ( $the_query->have_posts() ) {
                        ?>
                        
                <div class="content">
                    <div class="row">
                        
                        <?php

                                while ( $the_query->have_posts() ) {
                                $the_query->the_post();
                                ?>
                                   <div class=col-md-3>
                                        <div class="item-list">
                                            <div class="item-list-image"><?php echo get_the_post_thumbnail( $post_id->ID,'full'); ?></div>
                                            <div class="info">
                                                <h2 class="title"><?php the_title();?></h2>
                                                <p class="description">
                                                    <?php the_excerpt();?>
                                                </p>
                                            </div>
                                        </div>
                                        <a href="<?php the_permalink(); ?>" class="url_button">
                                            <?php echo get_field( "link_text", $post->ID ) ?>
                                        </a>
                                </div>
                                    <?php
                                    }
                                    wp_reset_postdata();
                                    }
                                ?>
                    </div>
                </div>
            </section>
        </div>

    </div>
    <!-- /#wrapper -->
<?php get_footer();?>