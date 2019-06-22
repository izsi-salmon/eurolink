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
    <h2 class="gallery-title text-secondary" id="galleryTitle"></h2>
    <!-- <span id="galleryBlurb"></span></p><br> -->
    <hr class="gallery-divider">
      <div id="gallery">
        <?php foreach ($thumbnails as $key => $thumbnail):?>
          <img src="<?= $thumbnail ?>" class="gallery-img" id="<?= $key ?>">
        <?php endforeach; ?>
      </div>
  </div>

  <!-- Modals here! :) -->
  <div class="drop-shadow">

    <div class="close-icon"><i class="fas fa-times"></i></div>

      <div class="aligner-top"></div>
        <div class="image-modal">
          <div class="chevron"><i class="fas fa-chevron-left chevron chevron-left" id="imagePrev"></i></div> <div id="imageContainer"></div> <div class="chevron"><i class="fas fa-chevron-right chevron chevron-right" id="imageNext"></i></div>
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
