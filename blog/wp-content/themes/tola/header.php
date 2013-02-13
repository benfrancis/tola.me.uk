<?php
/**
 * The Header.
 *
 * Displays the <head>, <body> and <header>
 */
?>

<!DOCTYPE html>

<html>

  <head>
    <meta charset="utf-8">
    <title>Ben Francis <?php wp_title( '-', true, left ); ?></title>
    <script type="text/javascript" src="/site.js"></script>
    <link rel="stylesheet" href="/site.css" type="text/css" />
    <link rel="stylesheet" href="/blog/wp-content/themes/tola/style.css" type="text/css" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="alternate" type="application/rss+xml" title="Ben Francis Blog" href="/blog/?feed=rss2" />
  </head>

  <body>
    
    <header>
      <hgroup>
        <h1>Ben Francis</h1>
        <h2>tola.me.uk</h2>
      </hgroup>
      <nav>
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a class="selected" href="/blog">Blog</a></li>
          <li><a href="/software">Software</a></li>
          <li><a href="/music">Music</a></li>
          <li><a href="/poems">Poems</a></li>
        </ul>
      </nav>
    </header>
