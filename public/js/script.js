// ---------------------------------- DOM QUERIES ----------------------------------

// Dropdown tabs
var navTabButton = document.getElementById('navButton');
var navTabContent = document.getElementById('navTab');
var navTabCaret = document.getElementById('navTabCaret');

var toursTabButton = document.getElementById('toursTab');
var toursTabContent = document.getElementById('toursContent');
var toursTabCaret = document.getElementById('toursTabCaret');

// Index content

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
        console.log(tourData);
        initIndexContent();
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

function toggleToursTab(){
    console.log('Working');
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

function initIndexContent(){
    console.log('Working');
    for(i = 0; i < tourData.length; i++) {
        toursTabContent.innerHTML += '<div class="tour-block"><div class="tour-block-title-flex"><a href="#" class="tour-block-title link">'+tourData[i].title+'</a><span class="tour-block-title">$'+tourData[i].price +' NZD</span></div><p><span class="black">Next tour departs: </span>'+tourData[i].depart+' '+tourData[i].date.day+' '+tourData[i].date.month+' '+tourData[i].date.year+'</p><p>'+tourData[i].blurb+'</p></div>';
    }
}




















