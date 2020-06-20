<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
  	<meta charset="<?php bloginfo( 'charset' ); ?>">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php get_template_part('template-parts/sidebar'); ?>
    <main id="main">
      <header>
        <div class="page-width">
          <a id="sidebar-menu-btn" class="btn" onclick="toggleSidebar()"><i class="fas fa-bars"></i></a>
          <h1 class="title sans-serif"><a href="/index.html">James Hill</a></h1>
          <nav id="main-menu">
            <ul>
              <li><a class="main-menu-item" href="/about-me.html">About Me</a></li>
              <li><a class="main-menu-item" href="/resume.html">Resume</a></li>
              <li><a class="main-menu-item" href="/projects.html">Projects</a></li>
              <li><a class="main-menu-item" href="/projects.html">Dev-Notes</a></li>
              <li><a class="main-menu-item" href="/contact.html">Contact</a></li>
            </ul>
          </nav>
        </div>
      </header>
