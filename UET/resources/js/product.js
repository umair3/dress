/**
  product.js
  Defines the product landing page interactive bits
*/
var ProductLanding = {};

(function($) {
    $(function() {

    var device = navigator.userAgent.toLowerCase(),
        ios = device.match(/(iphone|ipod|ipad)/); // Is this an iOS device? 
        
        $.extend(ProductLanding, {
            $showcase: $('.showcase'),
            previousSlide: null,
            showcaseInterval: null,

            // Initialize the app with certain variables and interactions
            init: function() {

              var me = this; // save reference for use in closures

              // Let's hide all of the slideshow items that we plan to fade in later (make alpha 0)
              $('.fades').fadeOut(0);
              // Same as above but let's turn off their display
              $('.slide').children().hide();                

              // Configure the slideshow
              $('.flexslider').flexslider({
                animation: "slide",                   // the animation type, "fade" or "slide"
                controlsContainer: ".slide-control",  // ".slides-wrap",
                slideDirection: "horizontal",         // the sliding direction, "horizontal" or "vertical"
                slideshowSpeed: 7000 * 1.5,           // default time is 7000
                slideshow: true,                      // animate slider automatically?

                // Callback functions: before, end, start, and after
                /*before: function(slider){ },
                end: function(slider) { },
                start: function(slider) { },*/
                after: function(slider) {
                    ProductLanding.fx(slider.currentSlide, slider);
                }
              });
              
              // Bootstrap the process (activate the first slide)
              me.fx(0);              

              // Let's see if svg is supported. If it isn't, let's add a class of no-svg. This won't be necessary should we ever use modernizr
              if (!supportsSvg()){
                $("body").addClass('no-svg');
              }                            
            },

            /* Apply sweet fx to the slideshow's background.
               Each slide in the slideshow has a function associated with it. 
               This function is specified with the data-name attribute (defined in the HTML for the slide).
               This function also is called slightly differently if the slide is being introduced or "outro-duced".
               On introduction, the function will generally build visual effects assocated with the slide.
               On outro-duction, the function will destroy the objects and processes which were created in the introduction for this slide.
               This method "fx" manages the calling of that function
             */
            fx: function(slideNum, slider) {
              var slide = $('.slides .slide:eq('+(slideNum+1)+')'), // this slide
                  pslide = $('.slides .slide:eq('+(this.previousSlide+1)+')'), // previous slide
                  action = slide && slide.attr('data-name'), // the action associated with this slide
                  destroyaction = pslide && pslide.attr('data-name'); // the action associated with the previous slide

              // Get the action
              if (action === undefined && destroyaction === undefined && $('.slides .slide').length === 1) {
                slide = $(".slides .slide:eq(0)"); // the first slide
                action = slide && slide.attr('data-name'); // verify that the slide exists then get the data-name
              }

              // Put the previous slide to sleep
              if (destroyaction !== null) {
                this[destroyaction] && this[destroyaction](pslide, true);
                if (pslide.attr('data-class')) {
                  $('.animation-wrap, .showcase').removeClass(pslide.attr('data-class') || "nothing")
                }
                pslide.find('.fades').fadeOut();
                pslide.children().fadeOut();                
              }

              // Wake up the currently introduced slide
              if (action !== null) {
                this[action] && this[action](slide);
                $('.animation-wrap').addClass(slide.attr('data-class'));  
                slide.children().fadeIn();                
                slide.find('.fades').delay(500).fadeIn();
              } else {
                console.log("action was null "+slideNum)                
              }

              // Remember the current slide for when we need to put it to sleep
              this.previousSlide = slideNum;

            }

        });

    });
})(jQuery);
