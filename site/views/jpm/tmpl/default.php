<?php

// No direct access

defined('_JEXEC') or die('Restricted access'); ?>

<div id="dhtmlgoodies_slideshow">
  <div id="previewPane">
    <img src="http://localhost/siteler/joomla/<?php echo $this->items[0]->pic_big ?>" />
    <span id="waitMessage">Resim yükleniyor. Lütfen bekleyin</span>
    <div id="largeImageCaption">
      <a href="<?php echo $this->items[1]->page_url ?>"><?php echo $this->items[0]->page_title ?>, detaylar için tıklayınız..</a>
    </div>
  </div>
  <div id="galleryContainer">
    <div id="arrow_left"><img src="http://localhost/siteler/joomla/images/arrow_left.gif"></div>
    <div id="arrow_right"><img src="http://localhost/siteler/joomla/images/arrow_right.gif"></div>
    <div id="theImages">
      <!-- Thumbnails -->
      <?php for ($i=0, $n=count( $this->items ); $i < $n; $i++) { ?>
      <a href="#" onclick="showPreview('http://localhost/siteler/joomla/<?php echo $this->items[$i]->pic_big ?>','<?php echo $this->items[$i]->ID ?>');return false">
        <img src="http://localhost/siteler/joomla/<?php echo $this->items[$i]->pic_small ?>">
      </a>
      <?php } ?>
      <!-- Image captions -->
      <?php for ($i=0, $n=count( $this->items ); $i < $n; $i++) { ?>
      <div class="imageCaption">
           <a href="<?php echo $this->items[1]->page_url ?>"><?php echo $this->items[1]->page_title ?>, detaylar için tıklayınız..</a>
      </div>
      <?php } ?>
      <!-- End image captions -->
      <div id="slideEnd"></div>
    </div>
  </div>
</div>
<!-- End thumbnails -->
