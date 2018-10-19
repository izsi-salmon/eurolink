<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
    <title>Tour Title</title>
</head>
<body>
    <div class="header">
    <div class="header-child"><a href="index.php"><img src="http://eurolinktours.co.nz/images/eurolink_logo.jpg" alt="Eurolink Logo"></a></div>
    <div class="header-child">
        <div id="navButton" class="nav-button"><span class="tab nav-tab">Our Tours <i class="fas fa-caret-down" id="navTabCaret"></i></span></div>
        <div class="header-contact">
            <div class="header-contact-text"><span class="strong">Enquiries/bookings: </span><span>0800 488 753</span></div>
            <div class="header-sm"><a href="https://www.instagram.com/eurolinktours/" target="_blank"><i class="fab fa-instagram"></i></a> <a href="https://www.facebook.com/eurolinktoursnz/"  target="_blank"><i class="fab fa-facebook-square"></i></a></div>
        </div>
    </div>
  </div>
  <div id="navTab" class="nav-menu nav-tab-closed">
        <a href="tours.php" class="nav-menu-item">Adriatic Adventure</a>
        <a href="tours.php" class="nav-menu-item">Sicily Puglia</a>
        <a href="tours.php" class="nav-menu-item">Czech Romance</a>
        <a href="tours.php" class="nav-menu-item">Essence Of Crete</a>
        <a href="tours.php" class="nav-menu-item">Sri Lanka</a>
        <a href="tours.php" class="nav-menu-item">Timeless Turkey</a>
    </div>
    <div class="banner-img">
  </div>
  <div class="wrapper">
      <div class="main-content-tours">
          <div class="col-left">
             
            <h2 class="heading" id="tourTitle"></h2>
            <p class="main-p tour-info">Next Tour Departs <span id="tourDepart"></span> <span id="tourDate"></span>, $<span id="tourPrice"></span> per person.<br> 
            <span id="tourBlurb"></span></p><br>
            <div id="tourDescription"></div><br>
            <p class="main-p tour-info">Book now, deposit of $500 NZD secures your place</p>
            <p class="main-p tour-info">Any questions? Contact us, we'd love to hear from you. 
            Phone 0800 488 753</p>
            <p class="main-p tour-info">eurolink@xtra.co.nz</p>

            <div class="itinerary-box">
                <div class="itinerary-box-title">Full Itinerary</div>
                <a href="" class="itinerary-link" id="tourItinerary"><span id="tourMonth"></span> tour</a>
            </div>
              
          </div>
           
          <div class="col-right">
              <div class="preview-photos-wrapper">
                <div class="preview-photo"></div>
                <div class="preview-photo"></div>
                <div class="preview-photo"></div>
              </div>
              <a href="#" class="gallery-link">View more photos</a>
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
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<!--  <script src="js/tours.js"></script>-->
  <script src="js/global.js"></script>
</body>
</html>