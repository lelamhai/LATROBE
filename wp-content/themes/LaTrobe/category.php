<?php
 /*
  Template Name: list-product
 */
?>

<?php get_header();?>
<?php
  $queried_category = get_term( get_query_var('cat'), 'category' );
?>

<main id="wrap-category">
      <nav id="nav">
        <?php
          wp_nav_menu(array(
            'menu'=>'Category',
            'menu_class'=>'open-child'
          ));
        ?>
      </nav>
      <section id="se_main">
        <div id="banner">
          <h2>International applications</h2>
          <div class="hide-nav"><button id="btn-hide"></button></div>
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
      <ul id="menu_content">
      <?php

        while ( $the_query->have_posts() ) {
          $the_query->the_post();
        ?>
        <li>
          <div class="item-list">
            <span><?php the_post_thumbnail(); ?></span>
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
        </li>
        <?php
        }
        wp_reset_postdata();
        ?>

      </ul>
    </div>
    <?php

  }
?>

          </ul>
        </div>
      </section>
    </main>


<?php get_footer();?>