<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Form Test</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.3.min.js"></script>
  </head>
  <body>
	<div class="container">
		<h1>PHP Form</h1>
		<form id="estimateForm" name="estimateForm" method="POST" enctype="multipart/form-data" action="#">
			<div class="row">
				<div class="col-sm-4">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Please enter your name." required maxlength="50">
					</div>
					
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label for="name">Email</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Please enter your email address." required maxlength="100">
					</div>
					
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label for="phone">Phone Number</label>
						<input type="text" class="form-control" id="phone" name="phone" placeholder="(XXX) XXX-XXXX"  maxlength="15" pattern="\(?\d{3}\)?[- ]?\d{3}[- ]?\d{4}">
					</div>
					
				</div>
			</div>

			<div class="form-group">
				<label for="city">City</label>
				<input type="text" class="form-control" id="city" name="city" placeholder="City" required maxlength="25" list="cities">
				
				<datalist id="cities">
					<option value="Auburn"></option>
					<option value="Cameron Park"></option>
					<option value="Camino"></option>
					<option value="Carmichael"></option>
					<option value="Citrus Heights"></option>
					<option value="Davis"></option>
					<option value="El Dorado Hills"></option>
					<option value="Elk Grove"></option>
					<option value="Fair Oaks"></option>
					<option value="Folsom"></option>
					<option value="Granite Bay"></option>
					<option value="Orangevale"></option>
					<option value="Placerville"></option>
					<option value="Rancho Cordova"></option>
					<option value="Rancho Murieta"></option>
					<option value="Rocklin"></option>
					<option value="Roseville"></option>
					<option value="Sacramento"></option>
					<option value="Shingle Springs"></option>
				</datalist>
			</div>

			<label>Services</label>
			<label class="checkbox-inline">
				<input type="checkbox" id="window" name="window" value="window"> Window Cleaning
			</label>
			<label class="checkbox-inline">
				<input type="checkbox" id="gutter" name="gutter" value="gutter"> Gutter Cleaning
			</label>
			<label class="checkbox-inline">
				<input type="checkbox" id="pressure" name="pressure" value="pressure"> Pressure Washing
			</label>
					
			
			<div class="form-group">
				<label for="squareFeet">Square Feet</label>
				<input type="number" class="form-control" id="squareFeet" name="squareFeet" placeholder="Please enter the square feet of your building." required min="0" max="100000">
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>

	</div>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
  </body>
</html>