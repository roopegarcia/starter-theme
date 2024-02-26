<?php

function wp_files() {
  wp_enqueue_style('wp_main_styles', get_theme_file_uri('/build/style-index.css'));
  wp_enqueue_style('wp_extra_styles', get_theme_file_uri('/build/index.css'));

}

add_action('wp_enqueue_scripts', 'wp_files');

function wp_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('professorLandscape', 400, 260, true);
  add_image_size('professorPortrait', 480, 650, true);
  add_image_size('pageBanner', 1500, 350, true);
}

add_action('after_setup_theme', 'wp_features');