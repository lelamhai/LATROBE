<footer>
      <div class="bg-footer">
        <img src="<?php bloginfo('template_url'); ?>/assets/imgs/img-eagle-footer.svg" alt="" />
      </div>
      <div class="wrap-footer">
        <div class="wrap-left-footer">
          <div class="content-search-footer">
            <input type="text" placeholder="Search La Trobe" />
            <button><img src="<?php bloginfo('template_url'); ?>/assets/imgs/icon-search.svg" alt="" /></button>
          </div>
          <div class="wrap-info-footer">
            <div class="row">
              <div class="col-md-4">
                <div class="title-footer">
                  <?php
                  $first = true;
                  if(have_rows('column_1','options'))
                  {
                    while( have_rows('column_1','options')) : the_row();
                    $sub_value = get_sub_field('text_column_1');
                    if($first)
                    {
                        ?>
                           <h2><?php echo $sub_value;?></h2>
                        <?php
                        $first = false;
                    } 
                    endwhile;
                  }

                  ?>



                  <!-- <h2>STUDY WITH US</h2> -->
                  <div class="child-title">
                    <ul class="list-child">
                    <?php
                    $first = true;
                    if(have_rows('column_1','options'))
                    {
                      while( have_rows('column_1','options')) : the_row();
                      $sub_value = get_sub_field('text_column_1');
                      if($first)
                      {
                        $first = false;
                      } else {
                        ?>
                         <li><span><?php echo $sub_value;?></span></li>
                        <?php
                      }
                      endwhile;
                    }
                    ?>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="title-footer">



                <?php
                  $first = true;
                  if(have_rows('column_2','options'))
                  {
                    while( have_rows('column_2','options')) : the_row();
                    $sub_value = get_sub_field('text_column_2');
                    if($first)
                    {
                        ?>
                           <h2><?php echo $sub_value;?></h2>
                        <?php
                        $first = false;
                    } 
                    endwhile;
                  }

                ?>

                  <div class="child-title">
                    <ul class="list-child">

                    <?php
                    $first = true;
                    if(have_rows('column_2','options'))
                    {
                      while( have_rows('column_2','options')) : the_row();
                      $sub_value = get_sub_field('text_column_2');
                      if($first)
                      {
                        $first = false;
                      } else {
                        ?>
                         <li><span><?php echo $sub_value;?></span></li>
                        <?php
                      }
                      endwhile;
                    }
                    ?>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="title-footer">




                <?php
                  $first = true;
                  if(have_rows('column_3','options'))
                  {
                    while( have_rows('column_3','options')) : the_row();
                    $sub_value = get_sub_field('text_column_3');
                    if($first)
                    {
                        ?>
                           <h2><?php echo $sub_value;?></h2>
                        <?php
                        $first = false;
                    } 
                    endwhile;
                  }

                ?>


                  <div class="child-title">
                    <ul class="list-child"s>
                      


                    <?php
                    $first = true;
                    if(have_rows('column_3','options'))
                    {
                      while( have_rows('column_3','options')) : the_row();
                      $sub_value = get_sub_field('text_column_3');
                      if($first)
                      {
                        $first = false;
                      } else {
                        ?>
                         <li><span><?php echo $sub_value;?></span></li>
                        <?php
                      }
                      endwhile;
                    }
                    ?>



                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="wrap-right-footer row">
          <div class="col-md-12">
            <div class="wrap-logo-footer">
              <img
                src="<?php bloginfo('template_url'); ?>/assets/imgs/logo-white-footer.svg"
                alt=""
                width="361"
                height="122"
              />
            </div>
            <div class="list-socialnetwork-footer">
            <?php
                  if(have_rows('social-network','options'))
                  {
                      while( have_rows('social-network','options')) : the_row();
                      $link = get_sub_field('link_social_network');
                      $image = get_sub_field('img_social_network');
                      
                        ?>
                          <div class="item-socilnetwork">
                            <div class="wrap-img-footer">
                              <a href="<?php echo $link;?>"><img src="<?php echo $image;?>" alt="" /></a>
                            </div>
                          </div>
                        <?php
                      
                      endwhile;
                  }
              ?>
            </div>
          </div>
        </div>
      </div>
    </footer>
<?php wp_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script
      type="text/javascript"
      src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"
    ></script>

    <script type="text/javascript">
      $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        nav: false,
        responsive: {
          0: {
            items: 1,
          },
          480: {
            items: 3,
          },
          813: {
            items: 4,
          },
          1024: {
            items: 5,
          },
        },
      });
    </script>

<script>
      $(document).ready(function () {
      var flag = true;
        

 $('[data-toggle="offcanvas"]').click(function () {
       $('#wrapper').toggleClass('toggled');
       var width = $( window ).width()
       if(width >= 768 )
       {
          if(flag)
          {
              width = $( window ).width() - 350;
              flag = false;
          } else {
              flag = true;
          }
          
          $('#page-content-wrapper').css('width', width);
          $('#banner').css('width', width);
       } else {
          if(flag)
          {
              width = 250;
              flag = false;
          } else {
              width = 0;
              flag = true;
          }
          $('#menu-left').css('padding-left', width);

       }
 });  
});
    </script>

<!-- <script>
      $("#btn-hide").click(function () {
        $("nav").slideToggle("slow");
        $("#se_main").css("flex-basis", "100%");
      });
      $("#hide-menu").click(function () {
        $("nav").hide("slow");
        $("#se_main").css("flex-basis", "100%");

      });
    </script> -->


</body>
</html>
