$(document).ready(function(){
    var clicks = 0;
    $("#button1").click(function(){

clicks = clicks+1;
document.getElementById('txtarea').value=clicks;
});

$("#button-").click(function(){

clicks = clicks-1;
document.getElementById('txtarea').value=clicks;
});

});