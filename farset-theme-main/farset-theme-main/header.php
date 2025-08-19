<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header style="background-color: #001f3f; color: white; padding: 1rem;">
    <h1 style="margin: 0;"><?php bloginfo('name'); ?></h1>
    <p style="margin: 0;"><?php bloginfo('description'); ?></p>
  </header>
