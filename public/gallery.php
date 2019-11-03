<?php require 'templates/header.php'; ?>
<?php
  $id = $_GET['id'];
  $thumbnailDirectory = "images/".$id."/thumbnails";
  $thumbnails = glob($thumbnailDirectory . "/*.jpg");
  $imageDirectory = "images/".$id;
  $images = glob($imageDirectory . "/*.jpg");
 ?>
  <div id="bannerImg">
  </div>
  <div class="wrapper-gallery">
    <p id="galleryBackBtn" class="gallery-back-btn text-secondary"></p>
    <h2 class="gallery-title" id="galleryTitle"></h2>
    <!-- <span id="galleryBlurb"></span></p><br> -->
    <hr class="gallery-divider">
      <div id="gallery">
        <?php foreach ($thumbnails as $key => $thumbnail):?>
         <span class="gallery-img-container"><img src="<?= $thumbnail ?>" class="gallery-img" id="<?= $key ?>"></span>
        <?php endforeach; ?>
      </div>
  </div>

  <!-- Modals here! :) -->
  <div class="drop-shadow">

    <div class="close-icon"><img src="images/cross.png" alt="close icon"></div>

      <div class="aligner-top"></div>
        <div class="image-modal">
          <div class="chevron"><img src="images/arrow-left.png" class="chevron chevron-left" id="imagePrev" alt="arrow left"></div>
          <div id="imageContainer"></div>
          <div class="chevron"><img src="images/arrow-right.png" class="chevron chevron-right" id="imageNext" alt=" arrow right"></div>
        </div>
      <div class="aligner-bottom"></div>

  </div>

  <script>
      var thumbnailsArray = <?php echo json_encode($thumbnails); ?>;
      var imagesArray = <?php echo json_encode($images); ?>;
      var page = 'gallery';
      var pageID = <?= $id ?>;
  </script>
<?php require 'templates/footer.php'; ?>
