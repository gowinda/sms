<!DOCTYPE html>
<html>
<head>
	<title>SMS</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="text-align:center">

	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<h1 class="text-center"> SMS </h1>
				<form action="sms_send.php" method="post">
					<div class="form-group">
						<label>Mobile No </label>
						<input type="number" name="mnumber" class="form-control" placeholder="Mobile No">
					</div>
					<div class="form-group">
						<label>Message </label>
						<textarea frame="message" class="form-control" placeholder="Type message here.." ></textarea> 
					</div>
					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-primary" value="Send"></input> 
					</div>
					
				</form>

			</div>
			
		</div>
	</div>
</body>
</html>