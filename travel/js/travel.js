/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function($, Drupal, window, document, undefined) {

  "use strict";
  // To understand behaviors, see https://drupal.org/node/756722#behaviors
  //


  Drupal.behaviors.scrollSpy = {
    attach: function(context, settings) {
      $('.scrollspy').scrollSpy();
    }
  };

  Drupal.behaviors.slider = {
    attach: function(context, settings) {
      $('.slider').slider({
        height: 560,
      });
    }
  };

  Drupal.behaviors.sidenav = {
    attach: function(context, settings) {
      // Initialize collapse button
      $('.button-collapse').sideNav({
        menuWidth: 240, // Default is 240
        closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
      });
      // Initialize collapsible (uncomment the line below if you use the dropdown variation)
      //$('.collapsible').collapsible();
    }
  };

  Drupal.behaviors.parallax = {
    attach: function(context, settings) {
      $('.parallax').parallax();
    }
  };

  Drupal.behaviors.card = {
    attach: function(context, settings) {

      var card = document.querySelectorAll('.card-work');
      var transEndEventNames = {
          'WebkitTransition': 'webkitTransitionEnd',
          'MozTransition': 'transitionend',
          'transition': 'transitionend'
        },
        transEndEventName = transEndEventNames[Modernizr.prefixed('transition')];

      function addDashes(name) {
        return name.replace(/([A-Z])/g, function(str, m1) {
          return '-' + m1.toLowerCase();
        });
      }

      function getPopup(id) {
        return document.querySelector('.popup[data-popup="' + id + '"]');
      }

      function getDimensions(el) {
        return el.getBoundingClientRect();
      }

      function getDifference(card, popup) {
        var cardDimensions = getDimensions(card),
          popupDimensions = getDimensions(popup);

        return {
          height: popupDimensions.height / cardDimensions.height,
          width: popupDimensions.width / cardDimensions.width,
          left: popupDimensions.left - cardDimensions.left,
          top: popupDimensions.top - cardDimensions.top
        };
      }

      function transformCard(card, size) {
        return card.style[Modernizr.prefixed('transform')] = 'translate(' + size.left + 'px,' + size.top + 'px)' + ' scale(' + size.width + ',' + size.height + ')';
      }

      function hasClass(elem, cls) {
        var str = " " + elem.className + " ";
        var testCls = " " + cls + " ";
        return (str.indexOf(testCls) != -1);
      }

      function closest(e) {
        var el = e.target || e.srcElement;
        if (el = el.parentNode)
          do { //its an inverse loop
            var cls = el.className;
            if (cls) {
              cls = cls.split(" ");
              if (-1 !== cls.indexOf("card-work")) {
                return el;
                break;
              }
            }
          } while (el = el.parentNode);
      }

      function scaleCard(e) {
        var el = closest(e);
        var target = el,
          id = target.getAttribute('data-popup-id'),
          popup = getPopup(id);

        var size = getDifference(target, popup);

        target.style[Modernizr.prefixed('transitionDuration')] = '0.5s';
        target.style[Modernizr.prefixed('transitionTimingFunction')] = 'cubic-bezier(0.4, 0, 0.2, 1)';
        target.style[Modernizr.prefixed('transitionProperty')] = addDashes(Modernizr.prefixed('transform'));
        target.style['borderRadius'] = 0;

        transformCard(target, size);
        onAnimated(target, popup);
        onPopupClick(target, popup);
      }

      function onAnimated(card, popup) {
        card.addEventListener(transEndEventName, function transitionEnded() {
          card.style['opacity'] = 0;
          popup.style['visibility'] = 'visible';
          popup.style['zIndex'] = 9999;
          card.removeEventListener(transEndEventName, transitionEnded);
        });
      }

      function onPopupClick(card, popup) {
        popup.addEventListener('click', function toggleVisibility(e) {
          var size = getDifference(popup, card);

          card.style['opacity'] = 1;
          card.style['borderRadius'] = '6px';
          hidePopup(e);
          transformCard(card, size);
        }, false);
      }


      function hidePopup(e) {
        e.target.style['visibility'] = 'hidden';
        e.target.style['zIndex'] = 2;
      }

      // [].forEach.call(card, function(card) {
      //  card.addEventListener('click', scaleCard, false);
      // });
      //
    }
  };

})(jQuery, Drupal, this, this.document);