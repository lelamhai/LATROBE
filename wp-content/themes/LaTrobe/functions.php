<?php
function agilsun_imagesize(){
	add_theme_support( 'post-thumbnails' );
 }
 add_action('after_setup_theme','agilsun_imagesize');