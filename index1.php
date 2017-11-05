<!DOCTYPE html>
<html>
<head>
	<title>Vendor Contact</title>
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
    <form class="well form-horizontal" action="php/vendor.php" method="post"  id="contact_form">
		<fieldset>

		<!-- Form Name -->
		<legend>Clothes Pick Up!</legend>

		<!-- Text input-->

		<div class="form-group">
		  <label class="col-md-4 control-label">Booking Id</label>  
		  <div class="col-md-4 inputGroupContainer">
		  <div class="input-group">
		  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		  <input  id= "Booking_id" name="Booking_id" placeholder="Booking_id" class="form-control"  type="text">
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
		
		<!-- Text input-->
		       <div class="form-group">
		  <label class="col-md-4 control-label">Num_Clothes</label>  
		    <div class="col-md-4 inputGroupContainer">
		    <div class="input-group">
		        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		  <input  id="Num_Clothes" name="Num_Clothes" placeholder="Number of Clothes" class="form-control"  type="text">
		    </div>
		  </div>
		</div>
		
		<!-- Text input-->
		       <div class="form-group">
		  <label class="col-md-4 control-label">Weight</label>  
		    <div class="col-md-4 inputGroupContainer">
		    <div class="input-group">
		        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		  <input  id="Weight" name="Weight" placeholder="Weight" class="form-control"  type="text">
		    </div>
		  </div>
		</div>
		
		<!-- Text input-->
		 <div class="form-group">
		  <label class="col-md-4 control-label">Comment</label>  
		    <div class="col-md-4 inputGroupContainer">
		    <div class="input-group">
		        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		  <input  id="Comment" name="Comment" placeholder="Comment" class="form-control"  type="text">
		    </div>
		  </div>
		</div>


		<!-- Success message -->
		<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

		<!-- Button -->
		<div class="form-group">
		  <label class="col-md-4 control-label"></label>
		  <div class="col-md-4">
		    <button type="submit" class="btn btn-warning" name="pickupSubmit">Send <span class="glyphicon glyphicon-send"></span></button>
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
<script type="text/javascript" src="js/vendor.js"></script>
</body>
</html>