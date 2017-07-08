<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!---BS FILES-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!---->


<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">


      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>


  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
<body>


<nav style="background-color: #f44336 ">
    <div class="nav-wrapper">
      <a href="homee.php" class="brand-logo">DietBook</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        
        <li><a href="index.php">Home</a></li>
      </ul>
    </div>
  </nav>




<div class="w3-container">

<?php
	require 'demo.php';
	require 'fnneed.php';

	$cursor=$collection2->find();
	$grid=$db->getGridFS();
?>
<div clas="row">

<?php
	foreach ($cursor as $doc)
	{
		$info1=$doc['title'];
		$info2=$doc['imageid'];
		$info3=$doc['content'];
		$info4=$doc['filetype'];
		$image =$grid->findOne(array('_id'=>new MongoID($info2)))->getBytes();
		echo "<br>";
		echo "<br>";
		$im=base64_encode($image);

		?>
		  			
  
<div class="col-sm-6">
  <div class="w3-card-4" style="width:100%">
  <center><h2 style="font-size:40px "><?php echo $info1; ?></h2></center><br>
    <img class="img-responsive" src= "data:<?php echo $info4 ?>;base64,<?php echo $im ?>" style="width:100%; "></div><br>
    <div class="w3-container w3-center">
      <p><?php echo $info3 ?></p>
    </div>
  </div>
      	</div>			
      			
      	<?php
	}
	?>
	
	</div>
	</div>

</body>
</html>
