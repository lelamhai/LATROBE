<?php
 /*
  Template Name: detail
 */
?>

<html class="no-js">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>jQuery Pushy Plugin Demo</title>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="stylesheet" href="https://www.jqueryscript.net/demo/Creating-A-Simple-Off-canvas-Slide-Panel-Navigation-with-jQuery-Pushy/css/normalize.css">
<link rel="stylesheet" href="https://www.jqueryscript.net/demo/Creating-A-Simple-Off-canvas-Slide-Panel-Navigation-with-jQuery-Pushy/css/demo.css">
<!-- Pushy CSS -->
<link rel="stylesheet" href="https://www.jqueryscript.net/demo/Creating-A-Simple-Off-canvas-Slide-Panel-Navigation-with-jQuery-Pushy/css/pushy.css">

<!-- jQuery -->





<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css"/>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"/>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://bootstrapious.com/tutorial/sidebar/style2.css">

    <link rel="stylesheet" href="<?php echo get_bloginfo("template_directory"); ?>/assets/css/home/home.css" />
    <link rel="stylesheet" href="<?php echo get_bloginfo("template_directory"); ?>/assets/css/home/responsive-home.css" />

	<link rel="stylesheet" href="<?php echo get_bloginfo("template_directory"); ?>/assets/css/listproduct/list-product.css" />
    <script src="<?php echo get_bloginfo("template_directory"); ?>/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>





<!-- Modernizr -->
<!-- <script src="https://www.jqueryscript.net/demo/Creating-A-Simple-Off-canvas-Slide-Panel-Navigation-with-jQuery-Pushy/js/vendor/modernizr-2.6.2.min.js"></script> -->






</head>
<body>
<!-- Pushy Menu -->
<nav class="pushy pushy-left">
        <ul id="menu-nav">
          <li class="open-child acitve">
            <a href="">International applications</a>
          </li>
          <li class="open-child">
            <a href="list - Copy.htm">International applications</a>
          </li>
          <li class="open-child">
            <a href="#">International applications</a>
          </li>
          <li id="bnt-hide-menu">
            <button id="hide-menu">X</button>
          </li>
        </ul>
      </nav>




<nav class="pushy pushy-left">
<ul>
<li><a href="#">Item 1</a></li>
<li><a href="#">Item 2</a></li>
<li><a href="#">Item 3</a></li>
<li><a href="#">Item 4</a></li>
<li><a href="#">Item 5</a></li>
<li><a href="#">Item 6</a></li>
</ul>
</nav>

<!-- Site Overlay -->
<div class="site-overlay"></div>

<!-- Your Content -->
<div id="container"> 
<!-- Menu Button -->
    <div class="menu-btn">&#9776; Menu</div>
    





</div>

<!-- Pushy JS --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://www.jqueryscript.net/demo/Creating-A-Simple-Off-canvas-Slide-Panel-Navigation-with-jQuery-Pushy/js/pushy.min.js"></script>

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


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
