
$( document ).ready(function() {
console.log( "ready!" );
$(function() {
function loop(){
$('#arrow').animate({height:40},2000).animate({height:20},2000,loop);
}
loop(); 
}); 
});
