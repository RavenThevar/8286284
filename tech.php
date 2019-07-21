<?php
$title = "Technical Specifications - DMW";
require('header.php');

$con = new mysqli("localhost","root","","car");
$stmt = $con->prepare($sql = "SELECT title, desc1, desc2, desc3, desc4 FROM tech"); 
$stmt -> execute();
$stmt ->bind_result($title,$desc1,$desc2,$desc3,$desc4);
$stmt ->fetch(); 
?>

<br/>
<br/>
<br/>

<div class="container-fluid">
	<div class="row">
		<div class="col" style="background-color: black;">
			<h1 class="display-4">
				<font color="black">_______________</font><font color="white" family = "Trajan"><u><?php print"$title";?></u></font><font color="black">_____________</font>
			</h1>
		</div>
	</div>
</div>

<div class="container-fluid">

	<div class="row">
		<div class="col" style="background-color: black;">
			<img width = "1250px" class="img-fluid" src="techResources/tech1.3.png">	
		</div>
	</div>

	<div class="row">
		<div class="col-lg-5" style="background-color: black;">
			<img class="img-fluid" src="techResources/tech1.1.jpg">	
		</div>
		<div class="col-lg-7" style="background-color: black;">
			<div class="row-lg-6">
				<img width = "700px" class="img-fluid" src="techResources/tech1.2.jpg">
			</div>
			<div class="row-lg-6" style="font-size: 20px; font-family: Trajan;">
				<br/>
				<font color="white"><?php print"$desc1";?></div>
		</div>
	</div>

	<br/>

	<div class="row">
		<div class="col-lg-6" style="background-color: black;">
			<img width = "" class="img-fluid" src="techResources/tech4.1.jpg">
		</div>

		<div class="col-lg-6" style="background-color: black;">
			<img width = "" class="img-fluid" src="techResources/tech4.2.jpg">
		</div>
	</div>

	<div class="row" style="background-color: black;">
		<font color = "white" family = "Trajan" size = "5px"><?php print"$desc2";?></font>	
	</div>


	<div class="row">
		<div class="col" style="background-color: black;">
			<img width = "1200px" class="img-fluid" src="techResources/tech4.3.jpg">	
		</div>
	</div>

	<br/>


	<div class="row">
		<div class="col" style="background-color: black;">
			<img class="img-fluid" src="techResources/tech5.1.jpg">	
		</div>

		<div class="col" style="background-color: black;">
			<img class="img-fluid" src="techResources/tech5.2.jpg">	
		</div>		
	</div>

	<div class="row" style="background-color: black;">
		
		<div class="col-lg-5">
			<font color = "white" family = "Trajan" size = "4px"><?php print"$desc3";?></font>
		</div>

		<div class="col-lg-1">
		</div>

		<div class="col-lg-6">
			<font color = "white" family = "Trajan" size = "4px"><?php print"$desc4";?></font>	
		</div>
	</div>

</div>

<?php
require('footer.php');
?>