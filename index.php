<?php
require_once ('lista.php');
$dir =('videos/');
$listv = Listavideos($dir);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>VIDEOS</title>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>

var list = JSON.parse('<?php echo json_encode($listv); ?>');
var index = 0;
var p = null;

$( document ).ready(function() {
	console.log('video loaded');
	p = $('#v');
	p.attr('src', list[index]);
	//p.play();    //if autoplay="true" not defined
});

function Ended() {
	console.log('video ended');
	(index < list.length - 1) ? index++ : index=0;
	p.attr('src', list[index])
	//p.play();    //if autoplay="true" not defined
}

</script>
<body style="min-height: 100vh; margin: 0; padding: 0; box-sizing: border-box;">
	<video id="v" playsinline muted preload contorls height="auto" width="auto" autoplay="true" onended="Ended();"></video>
</body>
</html>