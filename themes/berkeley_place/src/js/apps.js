// SLICK
$('.single-slider').slick({
  dots: false,
  arrows: false,
  fade: true,
  autoplay: true
});

// INSTAFEED 
if (document.getElementById('instafeed')) {
  var feed = new Instafeed({
    accessToken: '1931828943.3a81a9f.a511c31d7d754c3380e746eabe92be97',
    get: "user",
    userId: "1931828943",
    template: '<a href="{{link}}" target="_blank" class="u-margin-right--10 c-sgl-feed o-content-block u-relative u-text-center"><div class="o-bgd-absolute"><div class="c-bg-insta" style="background-image: url({{image}});"></div></div><div class="o-bgd-absolute u-background--dark--transparent"></div><div class="u-relative u-text-white o-hover-layer u-opacity-hover"><img src="wp-content/themes/berkeley_place/img/instagram_lg.png" class=""></div></a>',
    limit: 4,
    resolution: 'standard_resolution'
  });
  feed.run();
}

//CLICK FUNCTION FOR MOBILE VIEW MENU
$('.c-menu-trigger').click(function(){
    $('.c-mobile-nav-wrap').toggleClass('u-show-menu');
    $('.c-menu-trigger').toggleClass('u-move-button');
});

// init Isotope
var $grid = $('.grid').isotope({
  itemSelector: '.element-item',
  layoutMode: 'fitRows'
});


// bind filter button click
$('.filters-button-group').on( 'click', 'button', function() {
  var filterValue = $( this ).attr('data-filter');
  // use filterFn if matches value
  filterValue = filterFns[ filterValue ] || filterValue;
  $grid.isotope({ filter: filterValue });
});
// change is-checked class on buttons
$('.button-group').each( function( i, buttonGroup ) {
  var $buttonGroup = $( buttonGroup );
  $buttonGroup.on( 'click', 'button', function() {
    $buttonGroup.find('.is-checked').removeClass('is-checked');
    $( this ).addClass('is-checked');
  });
});


// SCROLL FUNCTION FOR NAV

// Classie.js

/*!
 * classie v1.0.1
 * class helper functions
 * from bonzo https://github.com/ded/bonzo
 * MIT license
 * 
 * classie.has( elem, 'my-class' ) -> true/false
 * classie.add( elem, 'my-new-class' )
 * classie.remove( elem, 'my-unwanted-class' )
 * classie.toggle( elem, 'my-class' )
 */

/*jshint browser: true, strict: true, undef: true, unused: true */
/*global define: false, module: false */

( function( window ) {

'use strict';

// class helper functions from bonzo https://github.com/ded/bonzo

function classReg( className ) {
  return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
}

// classList support for class management
// altho to be fair, the api sucks because it won't accept multiple classes at once
var hasClass, addClass, removeClass;

if ( 'classList' in document.documentElement ) {
  hasClass = function( elem, c ) {
    return elem.classList.contains( c );
  };
  addClass = function( elem, c ) {
    elem.classList.add( c );
  };
  removeClass = function( elem, c ) {
    elem.classList.remove( c );
  };
}
else {
  hasClass = function( elem, c ) {
    return classReg( c ).test( elem.className );
  };
  addClass = function( elem, c ) {
    if ( !hasClass( elem, c ) ) {
      elem.className = elem.className + ' ' + c;
    }
  };
  removeClass = function( elem, c ) {
    elem.className = elem.className.replace( classReg( c ), ' ' );
  };
}

function toggleClass( elem, c ) {
  var fn = hasClass( elem, c ) ? removeClass : addClass;
  fn( elem, c );
}

var classie = {
  // full names
  hasClass: hasClass,
  addClass: addClass,
  removeClass: removeClass,
  toggleClass: toggleClass,
  // short names
  has: hasClass,
  add: addClass,
  remove: removeClass,
  toggle: toggleClass
};

// transport
if ( typeof define === 'function' && define.amd ) {
  // AMD
  define( classie );
} else if ( typeof exports === 'object' ) {
  // CommonJS
  module.exports = classie;
} else {
  // browser global
  window.classie = classie;
}

})( window );

function init() {
    window.addEventListener('scroll', function(e){
        var distanceY = window.pageYOffset || document.documentElement.scrollTop,
            shrinkOn = 300,
            header = document.querySelector("header");
        if (distanceY > shrinkOn) {
            classie.add(header,"smaller");
        } else {
            if (classie.has(header,"smaller")) {
                classie.remove(header,"smaller");
            }
        }
    });
}
window.onload = init();


// --- End Classie.js

// LIGHTBOX

lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    })

