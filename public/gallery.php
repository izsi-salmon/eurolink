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
        <?php foreach ($images as $image):?>
          <img src="<?= $image ?>" class="gallery-img">
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

  <script>
      var page = 'gallery';
      var pageID = <?= $id ?>;
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="js/global.js"></script>
</body>
</html>
