<?php
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="index.css">
</head>
<body>
	<div class="head">
		<button class="logout">Logout</button>

</div>
<div class="topbar">
	<a href="home">HOME</a>
	<a href="marks">MARKS</a>
	<a href="Library">LIBRARY</a>
	<a href="about">ABOUT</a>
	<input type="text" name="serach" placeholder="search...">
</div>
<div class="main" id="main">
	<button class="show" id="show" onclick="showside()">☰</button>
</div>
<div class="sidebar" id="side">
	<h3>School-moto</h3>
	<h1  id="hie" onclick="hideside()">X<h2>
<script>
	function hideside(){
		document.getElementById('side').style.width="0px";
		document.getElementById('main').style.marginLeft="0px";
		
		document.getElementById('show').style.display="block";
	}
	function showside(){
		document.getElementById('side').style.width="250px";
		document.getElementById('main').style.marginLeft="25px";
		
		document.getElementById('hie').style.display="block";
	}
</script>
</div>
<div class="bottom">

</div>
</body>
</html>
