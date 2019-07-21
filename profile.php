<?php
$title = "Profile - DMW";
require('header.php'); 

$con = new mysqli("localhost","root","","car");
$stmt = $con->prepare($sql = "SELECT email, fname, lname, age FROM userinfo WHERE username = '$userA'"); 
$stmt -> execute();
$stmt ->bind_result($email, $fname, $lname, $age);
$stmt ->fetch();  

$con = new mysqli("localhost","root","","car");
$sql= "SELECT * FROM ordert WHERE username = '$userA'";
$dataP = $con->query($sql);

?>

<br/>
<br/>
<br/>


<div class="row">
	
	<div class="col-lg-4">	
		<font color="white">____________</font>
	</div>

	<div class="col-lg-8">
		<p class="lead" style="font-size: 60px;"><u><?php echo"$fname";?>'s Profile</u></p>
	</div>

</div>

<div class="container-fluid" style="background-color: brown;">
	<br/>
	<p class="lead" style="font-size: 40px;"><font color="white">First Name: <?php echo"$fname";?></font></p>
	<p class="lead" style="font-size: 40px;"><font color="white">Last Name: <?php echo"$lname";?></font></p>
	<p class="lead" style="font-size: 40px;"><font color="white">Age: <?php echo"$age";?></font></p>
	<p class="lead" style="font-size: 40px;"><font color="white">Email: <?php echo"$email";?></font></p>
</div>

<div class="row">
	
	<div class="col-lg-4">	
		<font color="white">____________</font>
	</div>

	<div class="col-lg-8">
		<p class="lead" style="font-size: 60px;"><u>Order Summary</u></p>
	</div>

</div>

<div class="container-fluid" style="background-color: brown;">
	
	<table class="table table-hover table-striped table-bordered">
    	<thead class="thead-light">
    		<tr>
    			<th>#</th>
    			<th>Model</th>
    			<th>Colour</th>
    			<th>Interior</th>
    			<th>Trim</th>
    			<th>Accessory A</th>
    			<th>Accessory B</th>
    			<th>Accessory C</th>
    		</tr>
    	</thead>
    	<tbody>
    		<?php
    			while ($row = $dataP->fetch_assoc())
    			{
    				echo "<tr>";
    				echo"<td><font color='white'>$row[ID]</font></td>";
    				echo"<td><font color='white'>$row[model]</font></td>";
    				echo"<td><font color='white'>$row[colour]</font></td>";
    				echo"<td><font color='white'>$row[interior]</font></td>";
    				echo"<td><font color='white'>$row[trimm]</font></td>";
    				echo"<td><font color='white'>$row[acc1]</font></td>";
    				echo"<td><font color='white'>$row[acc2]</font></td>";
    				echo"<td><font color='white'>$row[acc3]</font></td>";
    				echo "</tr>";
    			}
    		?>
    	</tbody>
    </table>
    	
</div>


<?php
require('footer.php');
?>