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
            <p class="main-p tour-contact">Book now, deposit of $500 NZD secures your place</p>
            <p class="main-p tour-contact">Any questions? Contact us, we'd love to hear from you.</p>
            <p class="main-p tour-contact">Phone 0800 488 753</p>
            <p class="main-p tour-contact">eurolink@xtra.co.nz</p>

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
              <a href="gallery.php" id="galleryLink" class="gallery-link">View more photos <i class="fas fa-long-arrow-alt-right"></i></a>
          </div>

      </div>
  </div>

  <script>
      var page = 'tours';
      var pageID = <?= $id ?>;
  </script>
<?php require 'templates/footer.php'; ?>
