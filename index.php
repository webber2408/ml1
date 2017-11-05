<!DOCTYPE html>
<html>
<head>
	<title>User Contact</title>
<link rel="stylesheet" type="text/css" href="css/customer.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <form class="well form-horizontal" action="php/booking.php" method="post"  id="contact_form">
		<fieldset>

		<!-- Form Name -->
		<legend>Contact Us Today!</legend>

		<!-- Text input-->

		<div class="form-group">
		  <label class="col-md-4 control-label">Name</label>  
		  <div class="col-md-4 inputGroupContainer">
		  <div class="input-group">
		  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		  <input  id= "name" name="name" placeholder="Name" class="form-control"  type="text">
		    </div>
		  </div>
		</div>

		<!-- Text input-->
		       <div class="form-group">
		  <label class="col-md-4 control-label">E-Mail</label>  
		    <div class="col-md-4 inputGroupContainer">
		    <div class="input-group">
		        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		  <input  id="email" name="email" placeholder="E-Mail Address" class="form-control"  type="text">
		    </div>
		  </div>
		</div>


		<!-- Text input-->
		       
		<div class="form-group">
		  <label class="col-md-4 control-label">Phone #</label>  
		    <div class="col-md-4 inputGroupContainer">
		    <div class="input-group">
		        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
		  <input id="phone" name="phone" placeholder="(845)555-1212" class="form-control" type="text">
		    </div>
		  </div>
		</div>

		<!-- Text input-->
		      
		<div class="form-group">
		  <label class="col-md-4 control-label">Address</label>  
		    <div class="col-md-4 inputGroupContainer">
		    <div class="input-group">
		        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
		  <input id="address" name="address" placeholder="Address" class="form-control" type="text">
		    </div>
		  </div>
		</div>

		<!-- Text input-->
		       <div class="form-group">
		  <label class="col-md-4 control-label">Promo (if any)</label>  
		    <div class="col-md-4 inputGroupContainer">
		    <div class="input-group">
		        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		  <input  id="promo" name="promo" placeholder="Promo Code" class="form-control"  type="text">
		    </div>
		  </div>
		</div>

		<!-- Text input-->
		       <div class="form-group">
		  <label class="col-md-4 control-label">Type</label>  
		    <div class="col-md-4 inputGroupContainer">
		    <div class="input-group">
		        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		  <input  id="type" name="type" placeholder="Type" class="form-control"  type="text">
		    </div>
		  </div>
		</div>
		<!-- pickup Date input-->
		       <div class="form-group">
		  <label class="col-md-4 control-label">Pickup Date</label>  
		    <div class="col-md-4 inputGroupContainer">
		    <div class="input-group">
		        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		  <input  id="pickup_date" name="pickup_date" placeholder="Pickup Date" class="form-control"  type="date">
		    </div>
		  </div>
		</div>		

		<!-- pickup time -->
		<div class="form-group"> 
		  <label class="col-md-4 control-label">Pickup Time</label>
		    <div class="col-md-4 selectContainer">
		    <div class="input-group">
		        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
		    <select name="pickuptime" id="pickuptime" class="form-control selectpicker" >
		      <option value=" " >Please select your time slot</option>
		      <option>2pm - 4pm</option>
		      <option>4pm - 6pm</option>
		      <option >6pm - 8pm</option>
		      <option >7am - 9am</option>
		    </select>
		  </div>
		</div>
		</div>


		<!-- Success message -->
		<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

		<!-- Button -->
		<div class="form-group">
		  <label class="col-md-4 control-label"></label>
		  <div class="col-md-4">
		    <button type="submit" class="btn btn-warning" name="bookingSubmit">Send <span class="glyphicon glyphicon-send"></span></button>
		  </div>
		</div>

		</fieldset>
		</form>
		</div>
    </div><!-- /.container -->
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.js"></script>
<script type="text/javascript" src="js/customer.js"></script>
</body>
</html>