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
		<form method="get" enctype="multipart/form-data" action="#">
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" class="form-control" id="name" placeholder="Please enter your name" required>
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>

	</div>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
  </body>
</html>