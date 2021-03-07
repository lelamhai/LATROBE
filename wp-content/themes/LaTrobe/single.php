<?php 
if (have_posts()) : the_post();
$category = get_the_category();

if ($category[0]->slug == "") 
{
    var_dump("Error");
    return;
}
endif;
?>
<?php get_header();?>

<div id="wrapper">

        <div class="overlay"></div>
     
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <?php
                $args = array(
                    'category_name'      => $category[0]->slug,
                    'post_status'        => 'publish',
                    'post__not_in' => array($post->ID )
                );
                
                $the_query = new WP_Query( $args );
                $total =  $the_query->post_count;
                if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                $the_query->the_post();
                    ?>
                        <li>
                            <a href=""><?php the_title();?></a>
                        </li>
                    <?php

                    }
                    wp_reset_postdata();
                }
                ?>
                
            </ul>
        </nav>

        <div id="page-content-wrapper">
            <section id="se_main">
                <div id="banner">
                    <h2 style=" background: url(<?php bloginfo('template_url'); ?>/assets/imgs/bg-nodes.svg), linear-gradient(to bottom, #e2231b 1%, #d14124 100%);">
                        <?php the_title();?>
                    </h2>
                </div>
                <div class="menu-left">
                    <button type="button" class="btn btn-lg custom-btn" data-toggle="offcanvas">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                   
                <div class="content">
                    <?php the_content();?>
                </div>
            </section>
        </div>

    </div>
    <!-- /#wrapper -->
<?php get_footer();?>