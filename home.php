<?php
$title = "Home - DMW";
require("header.php");

$con = new mysqli("localhost","root","","car");
$stmt = $con->prepare($sql = "SELECT desc1,desc2,desc3,desc4 FROM home"); 
$stmt -> execute();
$stmt ->bind_result($desc1,$desc2,$desc3,$desc4);
$stmt ->fetch();

?>


<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    
    <div class="carousel-item active">
      <img class="img-responsive" src="homeResources/car1.jpg" width="1280px" height="688px">
      <div class="carousel-caption">
    	<h1 style="color: black; font-family: Trajan; font-size: 50px;"><?php print"$desc1";?></h1>
  	  </div>
    </div>
    
    <div class="carousel-item">
      <img class="img-responsive" src="homeResources/car2.jpg" width="1280px" height="688px">
      <div class="carousel-caption">
    	<h1 style="color: white; font-family: Trajan; font-size: 40px; font-style: bold;"><?php print"$desc2";?></h1>
  	  </div> 	
    </div>
    
    <div class="carousel-item">
      <img class="img-responsive" src="homeResources/car3.jpg" width="1280px" height="688px">
      <div class="carousel-caption">
    	<h1 style="color: #b4b6ba; font-family: Trajan; font-size: 40px;"><?php print"$desc3";?></h1>
  	  </div>
    </div>
    
    <div class="carousel-item">
      <img class="img-responsive" src="homeResources/car4.jpg" width="1280px" height="688px">
      <div class="carousel-caption">
    	<h1 style="color: white; font-family: Trajan; font-size: 50px;"><?php print"$desc4";?></h1>
  	  </div>
    </div>
  
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

<?php
require("footer.php");
?>