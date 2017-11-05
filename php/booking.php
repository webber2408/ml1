<?php
   $dbtype = $_POST['type'];
   $dbname = $_POST['name'];
   $dbemail = $_POST['email'];
   $dbaddress = $_POST['address'];
   $dbphone = $_POST['phone'];
   $dbpickupdate = $_POST['pickup_date'];
   $dbpickuptime = $_POST['pickuptime'];
   $dbpromo =  $_POST['promo'];
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

		 	   	   $query = "INSERT INTO booking (`Type`,`Name`,`Email`,`Address`,`Phone`,`pickup_date`,`pickup_time`,`promo`) VALUES('".$dbtype."','".$dbname."','".$dbemail."','".$dbaddress."','".$dbphone."','".$dbpickupdate."','".$dbpickuptime."','".$dbpromo."')";
		 	   	   echo $query;
	                  $new =  mysqli_query($conn,$query);
			 	   	  if(!$new){
			 	   	  	echo "dat1a unable to submit";
			 	   	  }
			 	   	  else{
			 	   	  	echo "hoho";
			 	   	  }
			   

?>