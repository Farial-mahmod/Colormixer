<html>
    
    <head> <title> Color Mixer</title>
    
    
<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="description" content="Color Mixer is an online application that virtually mixes Red, Green and Blue colors to produce a tertiary color." />
    <link rel="icon" type="image/png" href="m.png" alt="Color Mixer" />

<style>

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
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
  background-color: khaki;
  color: crimson;

  
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
<html>
<body>

<style>
body{
background-image: url("col.jpg");
background-position: center;
background-repeat: no-repeat;
background-attachment: fixed;
}
</style>

<center>
    <br/><br/>
    <h1><i><font color="aqua">Color Mixer Application</font></i> </h1><br><br>
<form method="POST" action=color.php>
    <br/><br/>
<font size=6 color="darkred"> Red: <input type="number" min=0 name="r" required /><br><br>
<font size=6 color="lime">Green: <input type="number" min=0 name="g" required /><br><br>
<font size=6 color="blue">Blue: <input type="number" min=0 name="b" required /> <br><br> </font>


<button style="background-color:coral;width:63;height:25" onClick="color.php"><b>Mix</b></button>

<br><br><br>
<marquee scrollamount=17 behavior=alternate><b><font size=6 color="salmon"> Mix </font> <font size=6 color="magenta">Any </font> <font size=6 color="gray">Color </font></marquee>

</form>
</center>
</body>
</html>

</form>
</body>
</html>