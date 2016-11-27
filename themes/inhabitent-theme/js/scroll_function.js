/**
 * scroll_function.js
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://github.com/Automattic/RED Starter Theme/pull/136
 */

(function($){
    $(window).on("scroll", function() {
       
        if ($(this).scrollTop() >0  && $(this).scrollTop() <=75) {  
            $('.site-header').css("visibility", "visible");
            $('.site-header').removeClass("green a");
            $('.site-header').removeClass("background");
            $('.site-header').css("visibility", "visible");
        }
        
        else if ($(this).scrollTop() > 75 && $(this).scrollTop() <450) {  
           $('.site-header').css("visibility", "hidden");
      } else if
      ($(this).scrollTop() >= 450) {
         $('.site-header').css("visibility", "visible");
         $('.site-header').addClass("green a");
         $('.site-header').addClass("background");
     
      }
 
});
        
         }) (jQuery);
