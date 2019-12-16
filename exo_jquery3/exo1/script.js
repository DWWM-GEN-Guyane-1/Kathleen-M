$(document).ready(function(){
    var clicks = 0;
    $("#button").click(function(){

clicks = clicks+1;
document.getElementById('txtarea').value=clicks;
});
});