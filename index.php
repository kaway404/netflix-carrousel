<!DOCTYPE html>
<html>
<head>
	<title>Netflix Carrousel</title>
	 <script src="/js/jquery.js"></script>
	 <link href="/css/style.css" rel="stylesheet">
	<meta charset="utf-8">
</head>
<body>

<?php
	for($a = 1; $a <= 1; $a++){
?>
<div class="movie-train">
<div class="scroll-wow" id="scroll">


<div id="roll-left" onclick="ScrollByRight()"> <h1> < </h1> </div>
<div id="roll-right" onclick="ScrollByLeft()"> <h1> > </h1> </div>

<?php
	for($x = 1; $x <= 20; $x++){
?>

<div class="movie" id="case<?php echo $x; ?>">
<img src="https://occ-0-1547-185.1.nflxso.net/art/db447/bfbef20f5f5240be8482e4dbce1416a0a10db447.webp"/>
<h1 class="view" id="movie<?php echo $x; ?>">Ver informações</h1>
</div>

<script type="text/javascript">

document.getElementById("case<?php echo $x; ?>").onmouseover = function() {showcase<?php echo $x; ?>()};
document.getElementById("roll-left").onmouseover = function() {roll()};
document.getElementById("roll-right").onmouseover = function() {roll()};

function roll(){
	document.getElementById("roll-left").style = "display: block;"
	document.getElementById("roll-right").style = "display: block;"
}

function showcase<?php echo $x; ?>(){
document.getElementById("movie<?php echo $x; ?>").style = "display: block;";
document.getElementById("roll-left").style = "display: block;"
document.getElementById("roll-right").style = "display: block;"
}

function showcase1(){
document.getElementById("movie1").style = "display: block;";
   document.getElementById("case1").style = "margin-left: 140px;"
   document.getElementById("roll-left").style = "transform: scale(1.6);"
   document.getElementById("roll-left").style = "display: block;"
	document.getElementById("roll-right").style = "display: block;"
}

$('#case<?php echo $x; ?>').on('mouseleave', function(){
        document.getElementById("movie<?php echo $x; ?>").style = "display: none; margin-left: 0;";
        document.getElementById("roll-left").style = "display: none;"
		document.getElementById("roll-right").style = "display: none;"
});


$('#case1').on('mouseleave', function(){
        document.getElementById("movie1").style = "display: none;";
        document.getElementById("case1").style = "margin-left: 0px;"
        document.getElementById("roll-left").style = "transform: scale(1);"
        document.getElementById("roll-left").style = "display: none;"
		document.getElementById("roll-right").style = "display: none;"
});

	  $('#movie<?php echo $x; ?>').click(function(){
	$("#infor<?php echo $a; ?>").fadeIn(600);
				$.post('/php/view.php?viewid=<?php echo $x ?>&show=<?php echo $a; ?>', function (html) {
				$('#infor<?php echo $a; ?>').html(html);
				});
    });

function ScrollByLeft() {
	document.getElementById("scroll").scrollBy(1500, 0);
}
function ScrollByRight() {
	document.getElementById("scroll").scrollBy(-1500, 0);
}

function ScrollLeft() {
	document.getElementById("scroll").scrollLeft=1500;
}
function ScrollRight() {
	document.getElementById("scroll").scrollLeft=-1500;
}

</script>

<?php } ?>

</div>

</div>

<div class="info" id="infor<?php echo $a; ?>">

</div>

<?php } ?>

</body>
</html>