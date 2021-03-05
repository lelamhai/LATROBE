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
                  <h2>STUDY WITH US</h2>
                  <div class="child-title">
                    <ul class="list-child">
                      <li><span>Apply</span></li>
                      <li><span>Courses</span></li>
                      <li><span>Life at La Trobe</span></li>
                      <li><span>FAQs</span></li>
                      <li><span>Scholarships</span></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="title-footer">
                  <h2>INTERNATIONAL</h2>
                  <div class="child-title">
                    <ul class="list-child">
                      <li><span>International home</span></li>
                      <li><span>Courses and study options</span></li>
                      <li><span>Apply and accept</span></li>
                      <li><span>Study abroad and exchange</span></li>
                      <li><span>Fees and scholarships</span></li>
                      <li><span>International student enquiries</span></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="title-footer">
                  <h2>CONNECT</h2>
                  <div class="child-title">
                    <ul class="list-child"s>
                      <li><span>Alumni</span></li>
                      <li><span>Directory of staff</span></li>
                      <li><span>Give to La Trobe</span></li>
                      <li><span>Jobs at La Trobe</span></li>
                      <li><span>Maps and parking</span></li>
                      <li><span>Schools and departments</span></li>
                      <li><span>Transport Central</span></li>
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
              <div class="item-socilnetwork">
                <div class="wrap-img-footer">
                  <a href=""><img src="<?php bloginfo('template_url'); ?>/assets/imgs/icon-facebook.png" alt="" /></a>
                </div>
              </div>
              <div class="item-socilnetwork">
                <div class="wrap-img-footer">
                  <a href=""><img src="<?php bloginfo('template_url'); ?>/assets/imgs/icon-instagram.png" alt="" /></a>
                </div>
              </div>
              <div class="item-socilnetwork">
                <div class="wrap-img-footer">
                  <a href=""><img src="<?php bloginfo('template_url'); ?>/assets/imgs/icon-twitter.png" alt="" /></a>
                </div>
              </div>
              <div class="item-socilnetwork">
                <div class="wrap-img-footer">
                  <a href=""><img src="<?php bloginfo('template_url'); ?>/assets/imgs/icon-facebook.png" alt="" /></a>
                </div>
              </div>
              <div class="item-socilnetwork">
                <div class="wrap-img-footer">
                  <a href=""><img src="<?php bloginfo('template_url'); ?>/assets/imgs/icon-instagram.png" alt="" /></a>
                </div>
              </div>
              <div class="item-socilnetwork">
                <div class="wrap-img-footer">
                  <a href=""><img src="<?php bloginfo('template_url'); ?>/assets/imgs/icon-twitter.png" alt="" /></a>
                </div>
              </div>
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
</body>
</html>
