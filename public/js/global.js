// ---------------------------------- DOM QUERIES ----------------------------------

// Dropdown tabs
var navTabButton = document.getElementById('navButton');
var navTabContent = document.getElementById('navTab');
var navTabCaret = document.getElementById('navTabCaret');

var toursTabButton = document.getElementById('toursTab');
var toursTabContent = document.getElementById('toursContent');
var toursTabCaret = document.getElementById('toursTabCaret');

// All pages content
var bannerImg = document.getElementById('bannerImg');

// Index content
var quote = document.getElementById('quote');
var slideName = document.getElementById('slideName');

// Tour page content
var tourTitle = document.getElementById('tourTitle');
var tourStatus = document.getElementById('tourStatus');
var tourDepart = document.getElementById('tourDepart');
var tourDate = document.getElementById('tourDate');
var tourPrice = document.getElementById('tourPrice');
var tourBlurb = document.getElementById('tourBlurb');
var tourDescription = document.getElementById('tourDescription');
var tourItinerary = document.getElementById('tourItinerary');
var tourMonth = document.getElementById('tourMonth');
var galleryLink = document.getElementById('galleryLink');
var tourImg1 = document.getElementById('tourImg1');
var tourImg2 = document.getElementById('tourImg2');
var tourImg3 = document.getElementById('tourImg3');

// Gallery page CONTENT
var galleryTitle = document.getElementById('galleryTitle');
var imageContainer = document.getElementById('imageContainer');

// ------------------------------- AJAX CALL ----------------------------------

var tourData = [];

$.ajax({
    type: "GET",
    url: "data/tour-data.json",
    dataType: "json",
    success: function(dataFromJSON){
        for(i = 0; i < dataFromJSON.length; i++) {
            tourData.push(dataFromJSON[i]);
        }
        if (page === 'home'){
            initIndexContent();
        } else if(page === 'tours'){
            initTourPage(pageID);
        } else if(page === 'gallery'){
            initGalleryPage(pageID);
        }

    },
    error: function(error){
        console.log(error);
        console.log("Error getting data.");
    }
});





// ------------------------------- BASIC PAGE FUNCTIONS ----------------------------------

// Toggle Nav menu opening

function toggleNavTab(){
  if (navTabContent.classList.item(1) === 'nav-tab-closed'){
    navTabContent.classList.add('nav-tab-open');
    navTabContent.classList.remove('nav-tab-closed');

    // Change caret orientation
    navTabCaret.classList.add('fa-caret-up');
    navTabCaret.classList.remove('fa-caret-down');

  } else{
    navTabContent.classList.remove('nav-tab-open');
    navTabContent.classList.add('nav-tab-closed');

    // Change caret orientation
    navTabCaret.classList.add('fa-caret-down');
    navTabCaret.classList.remove('fa-caret-up');
  }

}

navTabButton.addEventListener('click', toggleNavTab, false);

// Toggle tour block opening

if(page === 'home'){
    function toggleToursTab(){
      if (toursTabContent.classList.item(0) === 'tours-tab-open'){
        toursTabContent.classList.add('tours-tab-closed');
        toursTabContent.classList.remove('tours-tab-open');

        // Change caret orientation
        toursTabCaret.classList.add('fa-caret-down');
        toursTabCaret.classList.remove('fa-caret-up');

      } else{
        toursTabContent.classList.remove('tours-tab-closed');
        toursTabContent.classList.add('tours-tab-open');

        // Change caret orientation
        toursTabCaret.classList.add('fa-caret-up');
        toursTabCaret.classList.remove('fa-caret-down');
      }
    }

    toursTabButton.addEventListener('click', toggleToursTab, false);
}

// SLIDESHOW

var arrSlideImages = ["images/adriatic.jpg","images/czech-banner.jpg","images/crete-banner.jpg","images/turkey-banner.jpg"];
var arrSlideQuotes = ["A fantastic holiday filled with beautiful scenery, history and great travelling companions. Karen and Russel were our tour guides par excellence and we would not hesitate to recommend or travel with them again.", "What a great tour we wished we could go around again!", "Our third tour with Eurolink and Russel and Karen always manage to make it special. Great communicators, they make everything flow so easily", "What an amazing trip everyday a surprise! Thanks to you both for knowing what would comprise a brilliant look and taste of Turkey. A treasure of a trip."];
var arrSlideNames = ['– Ingrid and George 2015', '– Jim and Jill 2013', '– Pam and Geoff 2014', '– Sandie 2012'];

index = 0;

function slideShow(){
  bannerImg.style.backgroundImage = "url('"+arrSlideImages[0]+"')";
  quote.innerHTML = '"'+arrSlideQuotes[0]+'"';
  slideName.innerHTML = arrSlideNames[0];
  window.setInterval('auto()', 5000);
}

function auto(){
  ++index;
  if(index === arrSlideImages.length){
    index = 0;
  }
  bannerImg.style.backgroundImage = "url('"+arrSlideImages[index]+"')";
  quote.innerHTML = '"'+arrSlideQuotes[index]+'"';
  slideName.innerHTML = arrSlideNames[index];
}

// ------------------------------- INIT INDEX CONTENT ----------------------------------

function initIndexContent(){
    slideShow();
    for(i = 0; i < tourData.length; i++) {
        toursTabContent.innerHTML += '<div class="tour-block"><div class="tour-block-title-flex"><a href="tours.php?id='+tourData[i].id+'" class="tour-block-title link" id="tourLink'+tourData[i].id+'">'+tourData[i].title+'</a><span class="tour-block-title">$'+tourData[i].price +' NZD</span></div><p><span class="black wrap-text">Next tour departs: </span>'+tourData[i].depart+' '+tourData[i].date.day+' '+tourData[i].date.month+' '+tourData[i].date.year+'</p><p class="allcaps">'+tourData[i].status+'</p><p>'+tourData[i].blurb+'</p></div>';
    }
}




// ------------------------------- INIT TOUR PAGE CONTENT ----------------------------------

function initTourPage(x){
    // console.log('initTourPage is invoked on: '+x);
    bannerImg.style.backgroundImage = "url('"+tourData[x].banner+"')";

    tourTitle.innerHTML = tourData[x].title;
    if(tourData[x].status){
        tourStatus.innerHTML = tourData[x].status;
    }
    tourDepart.innerHTML = tourData[x].depart;
    tourDate.innerHTML = tourData[x].date.day+' '+tourData[x].date.month+' '+tourData[x].date.year;
    tourPrice.innerHTML = tourData[x].price;
    tourBlurb.innerHTML = tourData[x].blurb;
    tourItinerary.setAttribute('href', tourData[x].itinerary);
    tourMonth.innerHTML = tourData[x].date.month;
    galleryLink.setAttribute('href', 'gallery.php?id='+tourData[x].id);

    tourImg1.style.backgroundImage = "url('"+tourData[x].images[0]+"')";
    tourImg2.style.backgroundImage = "url('"+tourData[x].images[1]+"')";
    tourImg3.style.backgroundImage = "url('"+tourData[x].images[2]+"')";

    for(i = 0; i < tourData[x].description.length; i++) {
        tourDescription.innerHTML += '<p class="main-p">'+tourData[x].description[i]+'</p>';
    }
}




// ------------------------------- INIT GALLERY PAGE CONTENT ----------------------------------

function initGalleryPage(y){
    bannerImg.style.backgroundImage = "url('"+tourData[y].banner+"')";
    galleryTitle.innerHTML = '<a href="tours.php?id='+tourData[y].id+'"><i class="fas fa-chevron-left"></i></a>' + tourData[y].title + '<span></span>';
    // galleryBlurb.innerHTML = tourData[y].blurb;
    initModal();
}

// ------------------------------- INIT MODAL ----------------------------------

// Add key press controls: esc, < >

function initModal(){

  var increment;
  var modalOpen = false;

  // OPEN
  $('.gallery-img').click(function(){
    increment = this.id;
    $('.drop-shadow').css('display', 'flex');
    imageContainer.innerHTML = '<img src="'+imagesArray[this.id]+'">';
    $('body').css('overflow', 'hidden');
    modalOpen = true;
  });

  // closed

  function closeModal(){
    $('body').find('.drop-shadow').css('display', 'none');
    $('body').css('overflow', 'auto');
    modalOpen = false;
  }

  $('.drop-shadow').click(function(event) {
    if (!$(event.target).closest('#imageContainer').length && !$(event.target).closest('.chevron').length ) {
      closeModal();
    }
  });

  // Next Image
  $('#imageNext').click(function(){
    nextImage();
  });

  function nextImage(){
    ++increment;
    if(increment === imagesArray.length){
      increment = 0;
      imageContainer.innerHTML = '<img src="'+imagesArray[increment]+'">';
    } else{
      imageContainer.innerHTML = '<img src="'+imagesArray[increment]+'">';
    }
  }



  // Previous Image
  $('#imagePrev').click(function(){
    prevImage();
  });

  function prevImage(){
    --increment;
    console.log(increment);
    if(increment === -1){
      increment = (imagesArray.length - 1);
      imageContainer.innerHTML = '<img src="'+imagesArray[increment]+'">';
    } else{
      imageContainer.innerHTML = '<img src="'+imagesArray[increment]+'">';
    }
  }

  $(document).keydown(function(e) {
      if (modalOpen === true) {

        if (e.keyCode === 37) {
          prevImage();
        } else if (e.keyCode === 39){
          nextImage();
        } else if (e.keyCode === 27){
          closeModal();
        }
        
      }
  });

}





// ------------------------------- END ----------------------------------
