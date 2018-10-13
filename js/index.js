//Hover div movie
$( ".movie" ).hover(
  function() {
  	var hoverid =  $(this).data("id");
  	var name = "#hover";
  	var name2 = "#name";
  	var total = name + hoverid;
  	var total2 = name2 + hoverid;
  	var namemovie = $(this).data("name");
	$(this).css("transform", "scale(1.7)");
	$(this).css("margin-left", "90px");
	$(this).css("margin-right", "90px");
	$(total).css("opacity", "1");
	$(total2).html(namemovie);
});

$( ".movie" ).mouseleave(
  function() {
	$(this).css("transform", "scale(1)");
	$(this).css("margin-left", "0px");
	$(this).css("margin-right", "0px");
	$(".hover").css("opacity", "0");
});




 //Click scroll prev and next
 $('.horizon-prev').click(function() {
   event.preventDefault();
   $('#scroll').animate({
     scrollLeft: "-=775px"
   }, "slow");
 });

  $('.horizon-next').click(function() {
   event.preventDefault();
   $('#scroll').animate({
    scrollLeft: "+=775px"
   }, "slow");
 });