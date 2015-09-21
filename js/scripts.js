 $.fn.isOnScreen = function() {

     var win = $(window);

     var viewport = {
         top: win.scrollTop(),
         left: win.scrollLeft()
     };
     viewport.right = viewport.left + win.width();
     viewport.bottom = viewport.top + win.height();

     var bounds = this.offset();
     bounds.right = bounds.left + this.outerWidth();
     bounds.bottom = bounds.top + this.outerHeight();

     return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));

 };




 var LateBloomers = (function() {
     var checked = false;

     var openNewsletterForm = function() {
         $('.open-form').on('click', function() {
             if (!checked) {
                 $('.newsletter').addClass('open');
                 $('.newsletter').find('input').focus();
                 checked = true;
                 return false;
             }

         });
     };

     var initialiseOwlCarousel = function() {
         $(".owl-carousel").owlCarousel({
             loop: true,
             margin: 10,
             responsiveClass: true,
             dots: true,
             autoplay: true,
             nav: false,
             responsive: {
                 0: {
                     items: 1,
                     nav: true
                 },
                 600: {
                     items: 1,
                     nav: false
                 },
                 1000: {
                     items: 1,
                     nav: true,
                     loop: false
                 }
             }
         });
         $('#myModal').on('shown.bs.modal', function(e) {
             $("#questionaire").owlCarousel({
                 responsive: {
                     0: {
                         items: 1,
                         nav: true
                     },
                     600: {
                         items: 1,
                         nav: false
                     },
                     1000: {
                         items: 1,
                         nav: true,
                         loop: false
                     }
                 }
             });

         })
         

     };

     var fixedHeaderAnimation = function() {
         if ($('body').hasClass('home')) {
             if ($('body').scrollTop() > 420) {
                 $('.header-wrap').addClass("sticky");
             } else {
                 $('.header-wrap').removeClass("sticky");
             }
         } else {
             if ($('body').scrollTop() > 100) {
                 $('.header-wrap').addClass("sticky");
             } else {
                 $('.header-wrap').removeClass("sticky");
             }
         }

     };

     var animateVisitCounter = function() {
         if ($('#counter').isOnScreen() && !checked) {
             $('.count').each(function() {
                 $(this).prop('Counter', 0).animate({
                     Counter: parseInt($(this).text(), 10)
                 }, {
                     duration: 1000,
                     easing: 'swing',
                     step: function(now) {
                         $(this).text(Math.ceil(now));
                     }
                 });
             });
             checked = true
         }
     };



     var setupCounter = function() {
         $(".counter").html(parseInt($("#stat").text(), 10));
     }

     return {
         animateVisitCounter: animateVisitCounter,
         fixedHeaderAnimation: fixedHeaderAnimation,
         initialiseOwlCarousel: initialiseOwlCarousel,
         openNewsletterForm: openNewsletterForm,
         setupCounter: setupCounter,
         //submitContactForm: submitContactForm
     };

 })();



 $(function() {

     LateBloomers.initialiseOwlCarousel();
     LateBloomers.openNewsletterForm();

     $(window).scroll(function() {
         LateBloomers.fixedHeaderAnimation();
     });
     
     $("#getStarted").on("click", function(){
        var owl = $("#questionaire").data('owlCarousel');
        owl.next();

     });
 });









 (function() {
     // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
     if (!String.prototype.trim) {
         (function() {
             // Make sure we trim BOM and NBSP
             var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
             String.prototype.trim = function() {
                 return this.replace(rtrim, '');
             };
         })();
     }

     [].slice.call(document.querySelectorAll('.input__field')).forEach(function(inputEl) {
         // in case the input is already filled..
         if (inputEl.value.trim() !== '') {
             //classie.add(inputEl.parentNode, 'input--filled');
         }

         // events:
         inputEl.addEventListener('focus', onInputFocus);
         inputEl.addEventListener('blur', onInputBlur);
     });

     function onInputFocus(ev) {
         classie.add(ev.target.parentNode, 'input--filled');
     }

     function onInputBlur(ev) {
         if (ev.target.value.trim() === '') {
             classie.remove(ev.target.parentNode, 'input--filled');
         }
     }
 })();
