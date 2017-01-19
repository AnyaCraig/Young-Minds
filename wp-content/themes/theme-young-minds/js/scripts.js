// VARIABLES

var ym = {};

var $faqQuestion = $(".faq .faq-question-box");
var $programName = $(".programs .program-name-box");
var $nav = $("nav.header-nav");
var $navMenu = $(".nav-menu-hamburger");
var $navLinks = $(".nav-menu-hamburger a");

// FUNCTIONS

// make the dropdown menu appear
ym.dropdownAppear = function(menu) {
	menu.slideDown();
}

// make the dropdown menu disappear
ym.dropdownDisappear = function(menu) {
	menu.slideUp();
}

// fade the menu out
ym.dropdownFadeOut = function(menu) {
	menu.fadeOut();
}

// hide and show the plus and minus icons
ym.expandContract = function(specific) {
	var $thisHideShow = specific.siblings(".hide-show");
	var $thisFaqMinus = specific.find(".fa-minus-circle");
	var $thisFaqPlus = specific.find(".fa-plus-circle");

	if ($thisHideShow.is(":visible")) {

		$thisHideShow.hide();
		$thisFaqPlus.show();
		$thisFaqMinus.hide();

	} else {

		$thisHideShow.show();
		$thisFaqPlus.hide();
		$thisFaqMinus.show();
	}
}

// GOOGLE MAP FUNCTIONS

// load the map
ym.loadMap = function() {
  // all the options for the google map are held in an object
  var mapOptions = {
    center: { lat: 43.673566, lng: -79.315627},
    zoom: 15,
    scrollwheel: false
  };

  // we also select the map div with jquery, but only the first item in the array
  var mapDiv = $('.map')[0];

  // which we then pass to the map method.
  ym.map = new google.maps.Map(mapDiv , mapOptions);

} // end ym.loadMap definition

// load the map marker
ym.loadMarkers = function() {

  var home = new google.maps.Marker({
    position: new google.maps.LatLng(43.673566, -79.315627),
    map: ym.map, // this is how it knows which map to put the marker on
    icon : 'https://maps.google.com/mapfiles/kml/shapes/schools_maps.png'
  });

}


// EVENT HANDLERS

$(function(){

	// sticky header
	$(window).scroll(function() {

		if($(this).scrollTop() > (window.innerHeight - 90)) {
			$nav.addClass("nav-scrolled");
		}
		else {
			$nav.removeClass("nav-scrolled");
		}
	});

	// dropdown menu 
	$(".fa-bars").on("click", function(){
		if ($navMenu.is(":visible")){
			ym.dropdownDisappear($navMenu);
		} else {
			$('html,body').animate({
			  scrollTop: $nav.offset().top
			}, 1000);
			$nav.addClass("nav-scrolled");
			ym.dropdownAppear($navMenu);
		}
	});

	// close the dropdown on click of page (but not click of dropdown)
	$(document).on('click', function(event) {
	  if (!$(event.target).closest($navMenu).length && !$(event.target).closest(".fa-bars").length) {
	    ym.dropdownDisappear($navMenu);
	  }
	});

	// fade the dropdown out when one of its links is clicked
	$navLinks.on("click", function() {
		ym.dropdownFadeOut($navMenu);
	});
	
	// on click of faq question, handle the expanding/contracting
	$faqQuestion.on("click", function(){

		var self = $(this);

		ym.expandContract(self);
	});

	// on click of program name, handle the expanding/contracting
	$programName.on("click", function(){
		
		var self = $(this);

		ym.expandContract(self);
	});

	// load the googlemap and markers
      ym.loadMap();	
      ym.loadMarkers();


	// SMOOTHSCROLL 

	$('a[href*=#]:not([href=#])').click(function() {
	  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

	    var target = $(this.hash);
	    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	    if (target.length) {
	      $('html,body').animate({
	        scrollTop: target.offset().top
	      }, 1000);
	      return false;
	    }
	  }
	});

}); // document.ready function