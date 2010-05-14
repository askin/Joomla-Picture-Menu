<?php

// No direct access

defined('_JEXEC') or die('Restricted access'); ?>
<h1><?php echo $this->greeting; ?></h1>

<div id="dhtmlgoodies_slideshow">
  <div id="previewPane">
    <img src="http://localhost/siteler/joomla/images/fotoselli_musluk_mid.png" />
    <span id="waitMessage">Resim yükleniyor. Lütfen bekleyin</span>
    <div id="largeImageCaption">
      <a href="/urunler/9">Fotoselli Musluk Aparatı, detaylar için tıklayınız..</a>
    </div>
  </div>
  <div id="galleryContainer">
    <div id="arrow_left"><img src="http://localhost/siteler/joomla/images/arrow_left.gif"></div>
    <div id="arrow_right"><img src="http://localhost/siteler/joomla/images/arrow_right.gif"></div>
    <div id="theImages">
      <!-- Thumbnails -->
      <a href="#" onclick="showPreview('http://localhost/siteler/joomla/images/fotoselli_musluk_mid.png','1');return false">
        <img src="http://localhost/siteler/joomla/images/fotoselli_musluk_small.jpg" width="121" height="100">
      </a>
      <a href="#" onclick="showPreview('http://localhost/siteler/joomla/images/dokunmatik_perlator_mid.png','2');return false">
        <img src="http://localhost/siteler/joomla/images/dokunmatik_perlator_small.jpg" width="98" height="100">
      </a>

      <!-- Image captions -->
      <div class="imageCaption"><a href="/urunler/9">Fotoselli Musluk Aparatı, detaylar için tıklayınız..</a></div>
      <div class="imageCaption"><a href="/urunler/8">Dokunmatik Musluk Pellatörü, detaylar için tıklayınız..</a></div>
      <!-- End image captions -->
      <div id="slideEnd"></div>
    </div>
  </div>
</div>
<!-- End thumbnails -->
