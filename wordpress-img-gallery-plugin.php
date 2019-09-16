<?php
  /**
   * Plugin Name: Wordpress Image Gallery Plugin
   * Plugin URI: https://github.com/DylanHarrisonGithub/wordpress-img-gallery-plugin
   * Description: A simple image gallery
   * Author: Dylan Harrison
   */
  add_shortcode('wp_img_gallery', function($atts = [], $content = null, $tag = '') {
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    if (array_key_exists('ids', $atts)) {
      $content = "";
      $ids = explode(',', $atts['ids']);
      foreach ($ids as $key => $value) {
        $content .= '<p>'.$value.'</p>';
      }
      return $content;
    } else {
      return 'Empty Gallery';
    }
  });
?>