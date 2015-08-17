/**
  ci.js
  Defines the product landing page interactive bits specifically for CodeIgniter. Requires product.js
*/
(function($) {
    $(function() {
        $.extend(ProductLanding, {

            callbacks: null,

            sparkInterval: undefined, /* Used in the CodeIgniter animation */

            // Initialize the app with certain variables and interactions
            prep: function() {
           
            },

            // Make background mosaic. Or destroy it if destroy === true
            introCodeIgniter: function (slide, destroy) {

              var me = this,
                  $wrapper = $('.animation-wrap');

              // Do these things if we're outroing this slide
              if (destroy === true) {
                $wrapper.find('#mask, .spark, .gradient.lower').remove();                
                $(window).off('scroll');
                this.stopSpark();
                return;
              }
              
              // Make a mask for flame streaks and a gradient
              var $mask = $('<div/>').attr('id', 'mask'),
                  $gradient = $('<div/>').addClass('gradient lower');

              // Adjust the mask opacity (this prevents a flash in the beginning)
              $mask.css({'opacity': .9, '-moz-opacity': .9})

              // Layering gradients and putting mask on the stage
              $wrapper.append($gradient, $gradient.clone().addClass('bonus'), $mask);

              // Let some sparks fly in a somewhat randomly timed fashion
              this.startSpark = function(){
                if (me.sparkInterval != null) return;
                me.sparkInterval = setInterval(function(){
                  var opac = Math.max(.15, Math.random() - .4),
                      size = Math.floor(Math.random() * 120 + 30),
                      spark = $('<div/>').addClass('spark')
                        .css({
                          'width': size,
                          'height': size,
                          'opacity': opac, 
                          '-moz-opacity': opac
                        });

                  $wrapper.append(
                    spark
                    .css(
                      {
                        "bottom": "-100px",
                        "left": (Math.random() * 100) + "%"
                      }
                    )
                    .animate(
                      {
                        "bottom": "800px",
                      },
                      Math.floor(Math.random()*3000+1000),
                      "linear",
                      function(){
                        $(this).remove(); // don't need the spark if we're in the dark
                      }
                    )
                  )
                }, 500)
              }

              this.stopSpark = function(){
                if (me.sparkInterval == null) return;                
                clearInterval(me.sparkInterval);
                me.sparkInterval = null;
                $wrapper.find('.spark').remove();
              }

              this.startSpark();

            }
        });

    // init for general landing page
    ProductLanding.init();

    });
})(jQuery);


