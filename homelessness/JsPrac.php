<!DOCTYPE html>
<html>
<head>
<title>Catch me If you can</title>
<style>
#container{
	margin:0px auto;
	width:70px;
	height:500px;
	
}

button{
	border-radius:10px;
	font-size:25px;
	color:purple;
	border:2px solid black; 
	margin :20px;
}
#result{
	font-size:25px;
	color:purple;
}

#myCanvas{
	border:2px solid black;
	outline:none;
}
</style>
<script src="./assets/libs/jquery/dist/jquery.min.js"></script>
<head>
<body>
<div id = "container">
       <button id ="btnPlay">Play</button><span id ="result">Score:</span><br/>
	   <canvas id= "myCanvas" width ="600" height ="400" tabindex ="1"></canvas>
	   </div>
</body>
<html>
