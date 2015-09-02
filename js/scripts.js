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
             $('.newsletter').addClass('open');
             $('.newsletter').find('input').focus();
             return false;
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
     };

     var fixedHeaderAnimation = function() {
         if ($('body').scrollTop() > 420) {
             $('.header-wrap').addClass("sticky");
         } else {
             $('.header-wrap').removeClass("sticky");
         }
     };

     var animateVisitCounter = function() {
         if ($('#counter').isOnScreen() && !checked) {
             $('.count').each(function() {
                 $(this).prop('Counter', 0).animate({
                     Counter: parseInt($(this).text(),10)
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

     var setupCounter = function(){
        $(".counter").html(parseInt($("#stat").text(),10));
     }

     return {
         animateVisitCounter: animateVisitCounter,
         fixedHeaderAnimation: fixedHeaderAnimation,
         initialiseOwlCarousel: initialiseOwlCarousel,
         openNewsletterForm: openNewsletterForm,
         setupCounter : setupCounter
     };

 })();



 $(function() {

     LateBloomers.initialiseOwlCarousel();
     LateBloomers.openNewsletterForm();
     //LateBloomers.setupCounter();
    $(window).scroll(function() {

         //LateBloomers.animateVisitCounter();
         LateBloomers.fixedHeaderAnimation();

     }); 
 })


 
