<?php get_header();?>

<?php
if (have_posts()) : the_post();
$category = get_the_category();
if($category[0]->slug != "");
?>

<main id="wrap-category">
    <nav id="nav">
        <ul>
        <?php
        
        $args = array(
            'category_name'     => $category[0]->slug,
            'post__not_in'      => array($post->ID),
            'post_status'       => 'publish'
        ); 
            $the_query = new WP_Query( $args );
            $total =  $the_query->post_count;
            if ( $the_query->have_posts() ) {
                
                while ( $the_query->have_posts() ) {
                $the_query->the_post();
                ?>
                    <li class="open-child">
                        <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                    </li>
                <?php
                }
                wp_reset_postdata();
            }
        ?>
        </ul>
    </nav>
    <section id="se_main">
        <div id="banner">
          <h2><?php the_title();?></h2>
          <div class="hide-nav"><button id="btn-hide"></button></div>
        </div>
            
        <div class="content">
            <?php the_content();?>
        </div>
    </section>
    </main>
<?php

endif;
?>

<?php get_footer();?>