<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>

  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">

<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="wp-content/themes/victims-commissioner/assets/css/old-ie.css">
<script src="wp-content/themes/victims-commissioner/assets/js/html5shiv.min.js"></script>
<![endif]-->


</head>
