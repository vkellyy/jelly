<!DOCTYPE html>

<?php    
if(isset($_POST['SubmitButton'])){ 
  $input = $_POST['inputText'];
  $message = "Success! You entered: ".$input;
}    
?>
<html>

<head>
<title> jelly </title>

	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$(document).ready(function(){
  $("form input").mouseover(function(){
    $("form input").css("background-color", "white");
  });
  $("form input").mouseout(function(){
    $("form input").css("background-color", "transparent");
  });
  $("form input").mouseover(function(){
    $("form input").css("color", "black");
  });
    $("form input").mouseout(function(){
    $("form input").css("color", "white");
  });
});
</script>

</head>

<body>


	<div id="bubble-background">
    <div class="bubble x1"></div>
    <div class="bubble x2"></div>
    <div class="bubble x3"></div>
    <div class="bubble x4"></div>
    <div class="bubble x5"></div>
    <div class="bubble x6"></div>
    <div class="bubble x7"></div>
    <div class="bubble x8"></div>
    <div class="bubble x9"></div>
    <div class="bubble x10"></div>

<div class id="center">

<h1><div class id="gif">
 <img src="output-3.gif" style="max-width:100%;height:auto;">
</div>
</h1>m
<form autocomplete="off" action="" method="post">	

<input type="text" autocomplete="off"/>
<input type="text" name="">
<input type="button" class="button" value="I won't tell">
</form>

</div>


<div class id="jelly">
<div class="pulse">    
<img src="jelly-01.png" style="max-width:100%;height:auto;"> 
</div>
</div>
</div>
</body>
</html>
