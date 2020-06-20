<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
  	<meta charset="<?php bloginfo( 'charset' ); ?>">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php get_sidebar(); ?>
    <main id="main">
      <header>
        <a id="sidebar-menu-btn" class="btn" onclick="toggleSidebar()"><i class="fas fa-bars"></i></a>
        <a class="title" href="/index.html"><h1 class="sans-serif">James Hill</h1></a>
        <nav id="main-menu">
          <ul>
            <li><a class="main-menu-item" href="/about-me.html">About Me</a></li>
            <li><a class="main-menu-item" href="/resume.html">Resume</a></li>
            <li><a class="main-menu-item" href="/projects.html">Projects</a></li>
            <li><a class="main-menu-item" href="/projects.html">Dev-Notes</a></li>
            <li><a class="main-menu-item" href="/contact.html">Contact</a></li>
          </ul>
        </nav>
      </header>
