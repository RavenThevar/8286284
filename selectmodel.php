<?php
$title = "Select Model - DMW";
require('header.php'); 

$con = new mysqli("localhost","root","","car");
$stmt = $con->prepare($sql = "SELECT title1,title1b,title2,title3,title4,title5,title6 FROM selectd"); 
$stmt -> execute();
$stmt ->bind_result($title1,$title1b,$title2,$title3,$title4,$title5,$title6);
$stmt ->fetch(); 

$con1 = new mysqli("localhost","root","","car");
$sql1 = "SELECT * FROM model";
$data1 = $con1->query($sql1);
while ($row1 = $data1->fetch_assoc())
{
  $model[] = "$row1[model]";
}

$con2 = new mysqli("localhost","root","","car");
$sql2 = "SELECT * FROM colour";
$data2 = $con2->query($sql2);
while ($row2 = $data2->fetch_assoc())
{
  $colour[] = "$row2[colour]";
}

$con3 = new mysqli("localhost","root","","car");
$sql3 = "SELECT * FROM interior";
$data3 = $con3->query($sql3);
while ($row3 = $data3->fetch_assoc())
{
  $interior[] = "$row3[interior]";
}

$con4 = new mysqli("localhost","root","","car");
$sql4 = "SELECT * FROM trimm";
$data4 = $con4->query($sql4);
while ($row4 = $data4->fetch_assoc())
{
  $trim[] = "$row4[trim]";
}

$con5 = new mysqli("localhost","root","","car");
$sql5 = "SELECT * FROM acc";
$data5 = $con5->query($sql5);
while ($row5 = $data5->fetch_assoc())
{
  $acc[] = "$row5[acc]";
}

?>

<script language="javascript">

function Img()
{
  document.getElementById("colour").src = "selectMResources/white.png";
}

function Img2()
{
  document.getElementById("colour").src = "selectMResources/black.png";
}

function Img3()
{
  document.getElementById("colour").src = "selectMResources/orange.png";
}

function Img4()
{
  document.getElementById("colour").src = "selectMResources/blue.png";
}

function Img5()
{
  document.getElementById("interior").src = "selectMResources/WhiteI.png";
}

function Img6()
{
  document.getElementById("interior").src = "selectMResources/BeigeI.png";
}

function Img7()
{
  document.getElementById("interior").src = "selectMResources/MochaI.png";
}

function Img8()
{
  document.getElementById("trim").src = "selectMResources/CarbonT.png";
}

function Img9()
{
  document.getElementById("trim").src = "selectMResources/BlackT.png";
}

function summary()
{
	alert("You have selected a build.! Click 'Summary' to confirm.!");
}

</script>

<nav class="navbar navbar-expand-lg navbar-dark fixed-bottom" style="background-color: black;">  
  <ul class="navbar-nav" style="font-size: 30px;">
    <li class="nav-item">
      <a class="nav-link" href="#section1"><?php print"$title1";?></a>
    </li>
    <font color="black">~~~</font>
    <li class="nav-item"> 
      <a class="nav-link" href="#section2"><?php print"$title2";?></a>
    </li>
    <font color="black">~~~</font>
    <li class="nav-item">
      <a class="nav-link" href="#section3"><?php print"$title3";?></a>
    </li>
    <font color="black">~~~</font>
    <li class="nav-item">
      <a class="nav-link" href="#section4"><?php print"$title4";?></a>
    </li>
    <font color="black">~~~</font>
    <li class="nav-item">
      <a class="nav-link" href="#section5"><?php print"$title5";?></a>
    </li>
    <font color="black">~~~</font>
    <li class="nav-item">
      <a class="nav-link" href="#section6" style="background-color: brown"><?php print"$title6";?></a>
    </li>
  </ul>
</nav>  

<div id="section1" style="padding-top:70px;padding-bottom:70px">

    <div class="row">
      <div class="col">
        <h1 class="display-3">
         <font color="white">_________________</font><font color="black" family = "Trajan"><u><?php print"$title1";?>
         </u></font>
        </h1>
      </div>
    </div>
  
  <br/>
  <p class="lead" style="font-size: 40px;"><?php print"$title1b";?></p>
  <br />

  <form name="Models" method="POST">

    <div class="row">
    <div class="col-lg-6">
    <div class="custom-control custom-radio">
      <input type="radio" id="customRadio1" name="model" class="custom-control-input" value = "<?php echo"$model[0]";?>"/>
      <label class="custom-control-label" for="customRadio1"><?php print"$model[0]";?><img src="selectMResources/Model1.png" class="img-responsive"/></label>
    </div>
    </div>

    <div class="col-lg-6">
    <div class="custom-control custom-radio">
      <input type="radio" id="customRadio2" name="model" class="custom-control-input" value = "<?php echo"$model[1]";?>"/>
      <label class="custom-control-label" for="customRadio2"><?php print"$model[1]";?><img src="selectMResources/Model2.png" class="img-responsive" /></label>
    </div>
    </div>
    </div>
</div>

<div id="section2" style="padding-top:70px;padding-bottom:70px">
  
  <div class="row-lg">
    <h1 class="display-3">
       <font color="white">_________________</font><font color="black" family = "Trajan"><u><?php print"$title2";?>
       </u></font>
    </h1>
  </div>

  <br/>

    <div class="row" style="background-color: black">
      <div class="col-lg-2">      
      </div>

      <div class="col-lg-4">
        <label><img id="colour" src="selectMResources/white.png" class="img-responsive"/></label>
      </div>
    </div>

  <br/>
  <br/> 

    <div  class="row">
     
      <div class="col-lg-3" style="background-color: grey">
          <div class="custom-control custom-radio">
          <input type="radio" id="customRadio3" name="clr" class="custom-control-input" onclick="Img()" value = "<?php echo"$colour[0]";?>"/>
          <label class="custom-control-label" for="customRadio3"><font color="white"><?php print"$colour[0]";?></font></label>
          </div>
      </div>

      <div class="col-lg-3" style="background-color: black">
          <div class="custom-control custom-radio">
          <input type="radio" id="customRadio4" name="clr" class="custom-control-input" onclick="Img2()" value = "<?php echo"$colour[1]";?>"/>
          <label class="custom-control-label" for="customRadio4"><font color="white"><?php print"$colour[1]";?></font></label>
          </div>
      </div>

      <div class="col-lg-3" style="background-color: #eb6b15">
          <div class="custom-control custom-radio">
          <input type="radio" id="customRadio5" name="clr" class="custom-control-input" onclick="Img3()" value = "<?php echo"$colour[2]";?>"/>
          <label class="custom-control-label" for="customRadio5"><font color="white"><?php print"$colour[2]";?></font></label>
          </div>
      </div>

      <div class="col-lg-3" style="background-color: #137dba">
          <div class="custom-control custom-radio">
          <input type="radio" id="customRadio6" name="clr" class="custom-control-input" onclick="Img4()" value = "<?php echo"$colour[3]";?>"/>
          <label class="custom-control-label" for="customRadio6"><font color="white"><?php print"$colour[3]";?></font></label>
          </div>
      </div>

    </div>

</div>


<div id="section3" style="padding-top:70px;padding-bottom:70px">

  <div class="row-lg">
    <h1 class="display-3">
       <font color="white">_________________</font><font color="black" family = "Trajan"><u><?php print"$title3";?>
       </u></font>
    </h1>
  </div>

  <br/>

<div class="row" style="background-color: white">
      <div class="col-lg-1">      
      </div>

      <div class="col-lg-4">
        <label><img id="interior" width = "1050px" src="selectMResources/WhiteI.png" class="img-responsive"/></label>
      </div>
    </div>

  <br/>
  <br/> 

    <div  class="row">

      <div class="col-lg-2"></div>
     
      <div class="col-lg-3">
          <div class="custom-control custom-radio">
          <input type="radio" id="customRadio7" name="int" class="custom-control-input" onclick="Img5()" value = "<?php echo"$interior[0]";?>"/> 
          <label class="custom-control-label" for="customRadio7"><?php print"$interior[0]";?></label>
          </div>
      </div>

      <div class="col-lg-3">
          <div class="custom-control custom-radio">
          <input type="radio" id="customRadio8" name="int" class="custom-control-input" onclick="Img6()" value = "<?php echo"$interior[1]";?>"/>
          <label class="custom-control-label" for="customRadio8"><?php print"$interior[1]";?></label>
          </div>
      </div>

      <div class="col-lg-3">
          <div class="custom-control custom-radio">
          <input type="radio" id="customRadio9" name="int" class="custom-control-input" onclick="Img7()" value = "<?php echo"$interior[2]";?>"/>
          <label class="custom-control-label" for="customRadio9"><?php print"$interior[2]";?></label>
          </div>
      </div>

    </div>
</div>

<div id="section4" style="padding-top:70px;padding-bottom:70px">

  <div class="row-lg">
    <h1 class="display-3">
       <font color="white">___________________</font><font color="black" family = "Trajan"><u><?php print"$title4";?>
       </u></font>
    </h1>
  </div>

  <br/>

<div class="row" style="background-color: white">
      <div class="col-lg-1">      
      </div>

      <div class="col-lg-4">
        <label><img id="trim" width = "1050px" src="selectMResources/CarbonT.png" class="img-responsive"/></label>
      </div>
    </div>

  <br/>
  <br/> 

    <div  class="row">

      <div class="col-lg-3"></div>
     
      <div class="col-lg-3">
          <div class="custom-control custom-radio">
          <input type="radio" id="customRadio10" name="tri" class="custom-control-input" onclick="Img8()" value = "<?php echo"$trim[0]";?>"/>
          <label class="custom-control-label" for="customRadio10"><?php print"$trim[0]";?></label>
          </div>
      </div>

      <div class="col-lg-3">
          <div class="custom-control custom-radio">
          <input type="radio" id="customRadio11" name="tri" class="custom-control-input" onclick="Img9()" value = "<?php echo"$trim[1]";?>"/>
          <label class="custom-control-label" for="customRadio11"><?php print"$trim[1]";?></label>
          </div>
      </div>

    </div>

</div>

<div id="section5" style="padding-top:70px;padding-bottom:70px">

  <div class="row-lg">
    <h1 class="display-3">
       <font color="white">_______________</font><font color="black" family = "Trajan"><u><?php print"$title5";?>
       </u></font>
    </h1>
  </div>

  <br/>

  <div class="row">

  	<div class="col-lg-1"></div>

  	<div class="col-lg-3">
	<div class="custom-control custom-checkbox">
    	<input type="checkbox" class="custom-control-input" id="customCheck1" name="A1" value = "<?php echo"$acc[0]";?>"/>
    	<label class="custom-control-label" for="customCheck1"><?php print"$acc[0]";?><img src="selectMResources/A1.png" class="img-responsive"/></label>
  	</div>
    </div>

    <div class="col-lg-1"></div>

    <div class="col-lg-3">
  	<div class="custom-control custom-checkbox">
    	<input type="checkbox" class="custom-control-input" id="customCheck2" name="A2" value = "<?php echo"$acc[1]";?>"/>
    	<label class="custom-control-label" for="customCheck2"><?php print"$acc[1]";?><img src="selectMResources/A2.png" class="img-responsive"/></label>
  	</div>
    </div>

    <div class="col-lg-1"></div>

  	<div class="col-lg-3">
  	<div class="custom-control custom-checkbox">
    	<input type="checkbox" class="custom-control-input" id="customCheck3" name="A3" value = "<?php echo"$acc[2]";?>"/>
    	<label class="custom-control-label" for="customCheck3"><?php print"$acc[2]";?><img src="selectMResources/A3.png" class="img-responsive"/></label>
  	</div>
    </div>

  </div>
  
</div>

<div id="section6" style="padding-top:70px;padding-bottom:70px">

<div class="row">

<div class="col-lg-5"><font color="white">____________</font></div>

<div class="col-lg-7">

<input type="hidden" name="secret3" value="true">
  <?php

  if(!isset($_POST['secret3']))
  {
 	print"<button type='submit' class='btn btn-warning' onclick='summary()'><font size='7px'> BUILD </font></button>";
  }

  else
  {
  	print"<button type='button' class='btn btn-danger' data-toggle='modal' data-target='#Summary'><font size='7px'>$title6	</font></button>";
  }

  ?>
</form>
    <div class="modal fade" id="Summary">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><?php print"$title6";?></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
  

     <div class="modal-body">
     	<?php 
     		if(isset($_POST['secret3']))
     		{
     			$problem3 = false;

     			if(empty($_POST['model']))
     			{
     				$problem3 = true;
     				print"<ul><font color='red'>Model cannot be empty.!</font></ul>";
     			}
     			
     			if(empty($_POST['clr']))
     			{
     				$problem3 = true;
     				print"<ul><font color='red'>Model Colour cannot be empty.!</font></ul>";
     			}
     			
     			if(empty($_POST['int']))
     			{
     				$problem3 = true;
     				print"<ul><font color='red'>Model Interior cannot be empty.!</font></ul>";
     			}

     			if(empty($_POST['tri']))
     			{
     				$problem3 = true;
     				print"<ul><font color='red'>Model Trim cannot be empty.!</font></ul>";
     			} 

     			if($problem3 == false)
     			{
     				$con = new mysqli("localhost","root","","car");
  					$stmt = $con->prepare($sql = "INSERT INTO ordert (model, colour, interior, trimm, acc1, acc2, acc3, username) VALUES (?,?,?,?,?,?,?,?)");
  					$stmt -> bind_param("ssssssss", $_POST['model'], $_POST['clr'], $_POST['int'], $_POST['tri'], $_POST['A1'], $_POST['A2'], $_POST['A3'], $userA);
  					$stmt -> execute();

  					$p1 = $_POST['model'];
  					$p2 = $_POST['clr'];
  					$p3 = $_POST['int'];
  					$p4 = $_POST['tri'];
  					$p5 = $_POST['A1'];
  					$p6 = $_POST['A2'];
  					$p7 = $_POST['A3'];

  					print"
  					<font size='5px'>Hello Mr/Mrs. $userA, the following is your summary:</font>
  					<br/>
  					<li><font size='4px'>$p1</font></li>
  					<li><font size='4px'>$p2</font></li>
  					<li><font size='4px'>$p3</font></li>
  					<li><font size='4px'>$p4</font></li>
  					";

  					if(!empty($p5))
  					{
  						print"<li><font size='4px'>$p5</font></li>";
  					} 
   					if(!empty($p6))
  					{
  						print"<li><font size='4px'>$p6</font></li>";
  					}  				
   					if(!empty($p7))
  					{
  						print"<li><font size='4px'>$p7</font></li>";
  					}  	
     			}
     		}

     	?>
     </div>

     <div class="modal-footer">
        <a type="button" class="btn btn-danger" style="background-color: brown;" href="home.php">CLOSE</a>
     </div>

 	</div>
 	</div>
    </div>

</div>
</div>
</div>

<?php
require('footer.php');
?>