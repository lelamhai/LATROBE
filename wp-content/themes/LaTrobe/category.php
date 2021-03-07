<?php
 /*
  Template Name: list-product
 */
?>

<?php get_header();?>
<?php
  $queried_category = get_term( get_query_var('cat'), 'category' );
?>



<main>
  <div id="content">
      <span class="slider">
        <a href="#" onclick="openSlideMenu()">
          <i class="fas fa-bars"></i>
        </a>
      </span>

      <div id="menu" class="nav">
        
        <ul id="menu-left-category">
          <li>
            <a href="#" class="close" onclick="closeSideMenu()">
              <i class="fas fa-times"></i>
            </a>
          </li>
          <li>
            <a href="">Category 1</a>
          </li>

          <li>
            <a href="">Category 2</a>
          </li>

          <!-- <?php
            wp_nav_menu(array(
              'menu'=>'Category',
              'container' => '',
              'items_wrap' => '%3$s' 
            ));
          ?> -->
        </ul>
        
      </div>

  </div>

</main>

<script>
  function openSlideMenu()
  {
    document.getElementById('menu').style.width = '250px';
    document.getElementById('content').style.marginLeft = '250px';
  }

  function closeSideMenu()
  {
    document.getElementById('menu').style.width = '0';
    document.getElementById('content').style.marginLeft = '0';
  }
</script>
<?php get_footer();?>