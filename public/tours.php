<?php require 'templates/header.php'; ?>
<?php
  $id = $_GET['id'];
?>
  <div id="bannerImg">
  </div>
  <div class="wrapper">
      <div class="main-content-tours">
          <div class="col-left">

            <h2 class="heading" id="tourTitle"></h2>
            <p class="tour-status" id="tourStatus"></p>
            <p class="main-p tour-info">Next Tour Departs <span id="tourDepart"></span> <span id="tourDate"></span>, $<span id="tourPrice"></span> per person.<br>
            <span id="tourBlurb"></span></p><br>
            <div id="tourDescription"></div><br>
            <p class="main-p tour-info">Book now, deposit of $500 NZD secures your place</p>
            <p class="main-p tour-info">Any questions? Contact us, we'd love to hear from you.
            Phone 0800 488 753</p>
            <p class="main-p tour-info">eurolink@xtra.co.nz</p>

            <div class="itinerary-box">
                <div class="itinerary-box-title">Full Itinerary</div>
                <a href="" target="_blank" class="itinerary-link" id="tourItinerary"><span id="tourMonth"></span> tour</a>
            </div>

          </div>

          <div class="col-right">
              <div class="preview-photos-wrapper">
                <div class="preview-photo" id="tourImg1"></div>
                <div class="preview-photo" id="tourImg2"></div>
                <div class="preview-photo" id="tourImg3"></div>
              </div>
              <a href="gallery.php" id="galleryLink" class="gallery-link">View more photos</a>
          </div>

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
      var page = 'tours';
      var pageID = <?= $id ?>;
  </script>
<?php require 'templates/footer.php'; ?>
