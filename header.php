<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<?php wp_head(); ?>
    <!--- basic page needs
    ================================================== -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><? bloginfo('title'); ?></title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#111111">
    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="icon.png" type="image/x-icon">
    <link rel="icon" href="icon.png" type="image/x-icon">
</head>
<body id="top" class="<?php body_class(); ?>" >
<div id="wrapper" class="divided">  
<div id="nav-trigger" class="nav-trigger open">
  <span class="line"></span>
  <span class="line"></span>
  <span class="line"></span>
</div>
<nav id="nav" class="out">
  <ul>
    <li><span class="nav-label"><a href="<?php echo site_url(); ?>">Home</a></span></li>
    <li><span class="nav-label"><a href="<?php echo site_url('/about'); ?>">About</a></span></li>
    <li><span class="nav-label"><a href="<?php echo site_url('/category/work'); ?>">Work</a></span></li>
    <li><span class="nav-label"><a href="<?php echo site_url('/blog'); ?>">Blog</a></span></li>
    <li><span class="nav-label"><a href="<?php echo site_url('/contact'); ?>">Contact</a></span></li>
  </ul>
</nav>