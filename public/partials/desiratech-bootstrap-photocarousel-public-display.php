<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       http://dev.desiratech.com
 * @since      1.0.0
 *
 * @package    Desiratech_Bootstrap_Photocarousel
 * @subpackage Desiratech_Bootstrap_Photocarousel/public/partials
 */
?>

<div id="my-carousel" class="carousel slide col-sm-12 col-md-9 col-lg-6" data-ride="carousel" data-interval="1000">
<div id="carousel-overlay"></div>
    
  <!-- Indicators -->
  <ol class="hidden carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
      
    <div class="item active">
      <img src="<?= plugin_dir_url(__FILE__)?>../images/pic1.jpg" alt="Accalia">
    </div>

    <div class="item">
      <img src="<?= plugin_dir_url(__FILE__)?>../images/pic2.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="<?= plugin_dir_url(__FILE__)?>../images/pic3.jpg" alt="Flower">
    </div>

    <div class="item">
      <img src="<?= plugin_dir_url(__FILE__)?>../images/pic4.jpg" alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="hidden left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="hidden right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
