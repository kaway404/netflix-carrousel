<?php
$show = $_GET['show'];
$movie = $_GET['viewid'];
?>

<div class="showmovie">
	<button class="close" id="close<?php echo $show; ?>">X</button>
	<h1>Fullmetal Alchemist: Brotherhood</h1>
	<div class="background">

	</div>
</div>

<script type="text/javascript">
	 $('#close<?php echo $show; ?>').click(function(){
	 	$("#infor<?php echo $show; ?>").fadeOut(600);
	 });
</script>