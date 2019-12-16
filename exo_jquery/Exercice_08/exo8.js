$(document).ready(function() {
    $("ol li").on({
      mouseover: function() {
         $(this).css({"color": "red"});
      }
    });    
 });