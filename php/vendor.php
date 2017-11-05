<?php
   $dbbid = $_POST['Booking_id'];
   $dbtype = $_POST['type'];
   $dbNum_Clothes = $_POST['Num_Clothes'];
   $dbWeight = $_POST['Weight'];
   $dbComment = $_POST['Comment'];
$servername = "localhost";	
$username = "root";
$password = "";
$database = "ml1";
// Create connection
$conn = mysqli_connect($servername, $username, $password , $database);

// // Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
	echo "str";
}             

		 	   	   $query = "INSERT INTO `vendor_detail`( `Booking_id`, `Type`, `Num_clothes`, `Weight`, `Comment`) VALUES ('".$dbbid."','".$dbtype."','".$dbNum_Clothes."','".$dbWeight."','".$dbComment."')";
		 	   	   echo $query;
	                  $new =  mysqli_query($conn,$query);
			 	   	  if(!$new){
			 	   	  	echo "dat1a unable to submit";
			 	   	  }
			 	   	  else{
			 	   	  	echo "hoho";
			 	   	  }
			   

?>