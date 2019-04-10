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
           offset: 100,
           once: 'true',
           duration: 700,
        });

        // init Smooth Scroll
        var scroll = new SmoothScroll('a[href*="#"]', {
          updateURL: false,
          topOnEmptyHash: true,
          ignore: '.nav-link',
          header: '#header'
        });

        // Setup galleries
        $('.slick-slider').each(function(){

          // Current gallery
          var gallery = $(this);

          // Current gallery navigation
          var galleryNav = $(this).siblings('.gallery-nav');

          // Set next/Prev buttons
          var galleryNext = galleryNav.children('.gallery-next');
          var galleryPrev = galleryNav.children('.gallery-prev');

          // Set paging
          var galleryPaging = galleryNav.children('.gallery-paging');

          // Setup Slick
          gallery.on('init reInit', function(event, slick){
            galleryPaging.text('1/' + slick.slideCount);
          }).slick({
            infinite: true,
            dots: false,
            arrows: false,
            draggable: true,
            speed: 500,
            fade: true,
            adaptiveHeight: true
          }).on('beforeChange', function(event, slick, currentSlide, nextSlide){
            galleryPaging.text( (nextSlide + 1) + '/' + slick.slideCount);
          });

          // Setup next button
          galleryNext.on('click', function(){
            gallery.slick('slickNext');
          });

          // Setup previous button
          galleryPrev.on('click', function(){
            gallery.slick('slickPrev');
          });
        });

        // Setup videos
        $('video').each(function(){

          var video = $(this);
          var play = video.siblings('.btn-play');
          var progress = video.siblings('.video-progress').children('.progress-bar');

          play.on('click',function(){
            video.trigger('play');
            video.parent().toggleClass('playing');
          });

          video.on('click',function(){
            this[this.paused ? 'play' : 'pause']();
            video.parent().toggleClass('playing');
          });

          video.on('loadedmetadata', function(event){
            progress.attr('aria-valuemax', event.target.duration);
          });

          video.on('timeupdate', function() {

            var duration = this.duration;
            var currentTime = this.currentTime;
            var percentage = (currentTime / duration) * 100;

            progress.width(percentage + '%');
            progress.attr('aria-valuenow', this.currentTime);

          });

          video.on('ended', function(){
            video.parent().toggleClass('playing');
          });

        });

        // Reinit Slick on tab change.
        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
          $('.slick-slider').slick('setPosition');
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
