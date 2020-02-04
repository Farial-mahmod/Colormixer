<html>
    <head> <title> Color Mixer</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Color Mixer is an online web application to mix colors. You can virtually mix certain amounts of Red, Green and Blue to produce a tertiary color."> 

<link rel="icon" href="m.png" alt="Color Mixer">

<style>

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  text-decoration: none;
}

.topnav {
  overflow: hidden;
  background-color: ;

}

.topnav a {
  float: center;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: red;
  
}

.topnav a.active {
  background-color: lavender;
  color: teal;
}
  
  .button {
  background-color: grey;
  border: none;
  color: lightblue;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
</style>
</head>
<center> <br/>


<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a class="active" href="about.php">About</a>
  <a class="active" href="contact.php">Contact</a>
  
</div>

<div style="padding-left:16px">
</div>


</head>
<body>
<br>
<center>

<?php

$r = htmlspecialchars($_POST['r']);
$g = htmlspecialchars($_POST['g']);
$b = htmlspecialchars($_POST['b']);

if(!is_numeric($r) || !is_numeric($g) || !is_numeric($b))
{
echo "Enter numbers in each field and try again."; }
else{


$rgb = $r . ',' . $g . ',' . $b; 
?>
<?php


?>
<br/><br/><br/><br/>

<font color="red">Red <?php echo $r; ?> </font>,<font color="green"> Green <?php echo $g; ?> </font> and <font color="blue">Blue <?php echo $b; ?> </font> become:

<p />

<div style="width:371px; height: 371px;
background-color: rgb(<?php echo $rgb; ?> )" />
<?php } ?>

<br/><br/><br><br><br><br><br><br><br><br><br><br><br><br><br><br/>
<br/><br><br><br><br/><br/>

<form action="index.php">
<button type="submit">Mix Again</button>
</form>

</body>
</html>

</body>
</html>