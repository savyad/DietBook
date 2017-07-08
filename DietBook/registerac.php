<?php require 'demo.php';?>
	<?php require  'fnneed.php';?>
<?php  
 if(isset($_POST['regup']))
 {
 	

 	$fname = $_POST['fname'];
 	$lname = $_POST['lname'];
 	$email = $_POST['email'];
 	$mno = $_POST['mno'];
 	$temp  = $_POST['pass'];
 	$options =array('cost'=>10);
 	$pass= password_hash($temp, PASSWORD_BCRYPT, $options);
 	$stat=0;
 	


 	$array=array(
 		"fname" => $fname,
 		"lname" => $lname,
 		"email" => $email,
 		"mno" => $mno,
 	 	"pass" => $pass,
 	 	"status" => $stat
   );
 	$qry=chckmail($email);
 	if($qry)
 		{
 			register($array);
 			?>
			<script type="text/javascript">
						alert("Successfully Registered");	
			</script>
			<?php 
 		}
 	else
 		{
 			echo "Email already Registered";
 			  echo"<br>";
        echo "Please <a href='register1.php'>Register</a> with another email ID";


 		}
 		header("Location:index.php");




 }



 ?>