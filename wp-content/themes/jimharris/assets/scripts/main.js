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
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page

        $('#EmailForm').on('submit', function(e){
			e.preventDefault();
			$.ajax({
				type: 'POST',
				url: 'https://wideeye.bsd.net/page/sapi/jharris',

				data: $('#EmailForm').serialize(),
				error: function (error) {
					console.debug('error');
				},
				success: function (data) {
					console.debug('success');
				}
			});
			$('#EmailForm button').html('Thank you');
			$('#EmailForm .glyphicon-ok').removeClass('glyphicon-ok');
			$('#EmailForm')[0].reset();
			$('#EmailForm input').on('focus', function(){
				$('#EmailForm button').html('Submit').attr('disabled', false);
				$(this).off('focus');			
			});
        });
        
		$('#EmailForm').bootstrapValidator({
			container: "popover",
			message: 'This value is not valid',
			feedbackIcons: {
				valid: 'glyphicon glyphicon-ok',
				invalid: 'glyphicon glyphicon-remove',
				validating: 'glyphicon glyphicon-refresh'
			},
			fields: {
				email: {
					validators: {
						notEmpty: {
							message: "An email address is mandatory."
						}, // notEmpty
						emailAddress: {
							message: "This is not a valid email address"
						} // emailAddress		  
					} // validators
				},  // email
				zip: {
					validators: {
						notEmpty: {
							message: 'A Zip Code is required'
						}, // notEmpty					
						zipCode: {
							country: 'US',
							message: "This is not a valid Zip Code"
						}
					}
				}										  
			}
		});
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
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
