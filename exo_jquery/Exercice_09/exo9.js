$(document).ready(function() {
    $("#firstText, #thirdText").on({
      mouseover: function() {
         $(this).css({"border": "5px green dashed"});
      }
    });    
 });
