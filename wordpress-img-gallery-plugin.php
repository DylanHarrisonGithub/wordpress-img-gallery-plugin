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
      $content = "<div>";
      $ids = explode(',', $atts['ids']);
      foreach ($ids as $key => $value) {
        $img = wp_get_attachment_image_src($ids[$key]);
        if ($img) {
          $content .= "<img src='{$img[0]}' onclick='location.href=\"{$img[0]}\"'>";
        } else {
          $content .= "<span>"."Image id: ".$ids[$key]." not found!"."</span>";
        }
      }
      $content .="</div>";
      return $content;
    } else {
      return 'Empty Gallery';
    }
  });
?>