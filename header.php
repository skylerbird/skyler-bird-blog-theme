<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Skyler_Bird_Blog
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!--Nav Starts here-->
	          <div id="toggleS"></div>
	          <nav class="blogNav">
	            <div class="navA navAr"></div>

	            <ul>
	              <a href="#profile"><li>PROFILE</li></a>
	              <a href="#portfolio"><li>PORTFOLIO</li></a>
	              <a href="#contact"><li>CONTACT</li></a>
	            </ul>

	            <div class="socialContainer">
	              <span class="mBreak"><a href="https://www.facebook.com/SkylerBirdDesigns" target="_blank">
	                <div class="social" id="social1" title="Facebook Link"></div></a>
	              <a href="https://twitter.com/Skylerdesigns" target="_blank">
	                <div class="social" id="social2" title="Twitter Link"></div></a></span>
	              <span class="mBreak"><a href="https://www.instagram.com/skylerbirddesigns/" target="_blank">
	                <div class="social" id="social3" title="Instagram Link"></div></a>
	              <a href="https://www.behance.net/skylerbird" target="_blank">
	                <div class="social" id="social4" title="Behance Link"></div></a></span>
	            </div>

	            <div class="navA navAl"></div>
	          </nav>
						<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
						<script src="http://www.skylerbird.com/js/nav.js"></script>
						<div id="content" class="site-content">
