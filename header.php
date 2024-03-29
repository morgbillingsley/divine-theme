<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link href='https://fonts.googleapis.com/css?family=Parisienne' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=ZCOOL XiaoWei' rel='stylesheet'>
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/logo1.png">
    <title>Divine Embodiment Hypnotherapy</title>
  </head>
  <body>
    <div class="header">
      <div class="header-logo">
        <img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="">
      </div>
      <div class="nav-menu">
        <ul>
            <a href="/"><li>Home</li></a>
            <li>|</li>
            <a href="<?php echo get_permalink(get_page_by_path('about/')); ?>"><li>About Vivian Grace</li></a>
            <li>|</li>
            <a href="<?php echo get_permalink(get_page_by_path('hypnotherapy/')); ?>"><li>Hypnotherapy</li></a>
            <li>|</li>
            <a href="<?php echo get_permalink(get_page_by_path('integrative-therapies/')); ?>"><li>Integrative Therapies</li></a>
            <li>|</li>
            <a href="http://divineembodimenthypnotherapy.com/author/viviangrace/"><li>Blog</li></a>
            <li>|</li>
            <a href="<?php echo get_permalink(get_page_by_path('contact/')); ?>"><li>Contact</li></a>
            <li>|</li>
            <a href="<?php echo get_permalink(get_page_by_path('testimonials/')); ?>"><li>Testimonials</li></a>
        </ul>
      </div>
    </div>