<!DOCTYPE html>
<html>
<head>
	<title>Fly in</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<ul class="fly hidden">
	<li>T</li>
	<li>a</li>
	<li>i</li>
	<li>t</li>
	<li style="width: 20px"> </li>
	<li>X</li>
	<li>t</li>
	<li>e</li>
	<li>n</li>
	<li>d</li>
	<li>e</li>
	<li>d</li>
	
</ul>

<div>
    <a href="dice.php">DICE</a>
</div>
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">

	$(function(){
		setTimeout(function(){
			$('.fly').removeClass('hidden');
		}, 1100);
	})();
</script>
</body>
</html>