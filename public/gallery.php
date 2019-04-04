<?php require 'templates/header.php'; ?>
<?php
  $id = $_GET['id'];
  $directory = "images/".$id;
  $images = glob($directory . "/*.jpg");
 ?>
  <div id="bannerImg">
  </div>
  <div class="wrapper-gallery">
    <h2 class="gallery-title text-secondary" id="galleryTitle"></h2>
    <!-- <span id="galleryBlurb"></span></p><br> -->
    <hr class="gallery-divider">
      <div id="gallery">
        <?php foreach ($images as $key => $image):?>
          <img src="<?= $image ?>" class="gallery-img" id="<?= $key ?>">
        <?php endforeach; ?>
      </div>
  </div>

  <div class="footer">
    <p>CONTACT US:</p>
    <div class="contact-details"><i class="fas fa-envelope contact-icon"></i><span class="contact-text">eurolink@xtra.co.nz</span></div>
    <div class="contact-details"><i class="fas fa-phone contact-icon"></i><span class="contact-text">0800 488 753 OR +64 3 525 9770</span></div>
    <div class="sm-icons">
      <a href="https://www.instagram.com/eurolinktours/" target="_blank"><i class="fab fa-instagram"></i></a> <a href="https://www.facebook.com/eurolinktoursnz/"  target="_blank"><i class="fab fa-facebook-square"></i></a>
    </div>
    <p class="copyright-text"> &copy; Copyright 2011 &copy; EuroLink Tours. All Rights Reserved</p>
  </div>

  <!-- Modals here! :) -->
  <div class="drop-shadow">

    <div class="close-icon"><i class="fas fa-times"></i></div>

      <div class="aligner-top"></div>
        <div class="image-modal">
          <div class="chevron"><i class="fas fa-chevron-left chevron" id="imagePrev"></i></div> <div id="imageContainer"></div> <div class="chevron"><i class="fas fa-chevron-right chevron" id="imageNext"></i></div>
        </div>
      <div class="aligner-bottom"></div>

  </div>

  <script>
      var imagesArray = <?php echo json_encode($images); ?>;
      var page = 'gallery';
      var pageID = <?= $id ?>;
  </script>
<?php require 'templates/footer.php'; ?>
