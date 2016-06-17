// toggle btn fade
$(document).ready(function(){
    $("#no-expand").hide();
    $("#expand").show();

      $("#expand").click(function(){
        $("#no-expand").show(1500);
      $("#expand").hide();
      
    });

      $("#no-expand").click(function(){
        $("#expand").show(1500);
      $("#no-expand").hide();
      
    });
  });
// navbar collapse fade
$(document).ready(function() {
        $(".navbar-toggle").click(function () {
        $( ".navbar-collapse" ).toggle({
          duration: 1500,
        });
      });  
  });
// image gallery
$(function(){
  setInterval("rotateImages()", 2500);
});

function rotateImages(){
  var oCurPhoto = $('#photoShow div.current');
  var oNxtPhoto = oCurPhoto.next();
  if(oNxtPhoto.length == 0)
    oNxtPhoto = $('#photoShow div:first');
    oCurPhoto.removeClass('current') .addClass('previous');
    oNxtPhoto.css({ opacity: 0.0}) .addClass('current') .animate({ opacity: 1.0 }, 1500,
    function(){
      oCurPhoto.removeClass('previous');
    });
}