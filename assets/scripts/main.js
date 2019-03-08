/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var IMAGA = {
    // All pages
    'common': {
      init: function() {

        // init Animate On Scroll
        AOS.init({
           offset: 300,
           startEvent: 'load',
           once: 'true',
           duration: 700,
        });

        // init Smooth Scroll
        var scroll = new SmoothScroll('a[href*="#"]', {
          updateURL: false,
          offset: -2,
          topOnEmptyHash: true,
          ignore: '.nav-link'
        });

        var paging = $('.slick-paging');
        var prev = $('.slick-prev');
        var next = $('.slick-next');
        var gallery = $('.slick-slider');

        gallery.on('init reInit', function(event, slick){
          paging.text('1/' + slick.slideCount);
        }).slick({
          infinite: true,
          dots: false,
          arrows: false,
          draggable: true,
          mobileFirst: true,
          speed: 500,
          fade: true,
        }).on('beforeChange', function(event, slick, currentSlide, nextSlide){
          paging.text( (nextSlide + 1) + '/' + slick.slideCount);
        });

        prev.on('click', function(){
          gallery.slick('slickPrev');
        });

        next.on('click', function(){
          gallery.slick('slickNext');
        });

        var video = $('video');
        var progress = $('.video-progress > .progress-bar');

        $('.btn-play').on('click',function(){
          video.trigger('play');
          video.parent().toggleClass('playing');
        });

        video.on('click',function(){
          this[this.paused ? 'play' : 'pause']();
          video.parent().toggleClass('playing');
        });

        video.on('loadedmetadata', function(event){
          progress.attr('aria-valuemax',event.target.duration);
        });

        video.on('timeupdate', function(event) {

          var duration = event.target.duration;
          var currentTime = event.target.currentTime;
          var percentage = (currentTime / duration) * 100;

          progress.width(percentage);
          progress.attr('aria-valuenow',event.target.currentTime);
        });
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired

        // Set the offset when entering page with hash present in the url
        window.setTimeout(function(){
          if (location.hash.length !== 0) {
            window.scrollTo(window.scrollX, window.scrollY + 2 );
          }
        }, 0);

        $('#navigation_container').on('show.bs.collapse', function () {

          $('#header').addClass('open');
          $('.animated-toggler').addClass('open');

        });

        $('#navigation_container').on('hide.bs.collapse', function () {

          $('#header').removeClass('open');
          $('.animated-toggler').removeClass('open');

        });

      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = IMAGA;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
