<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>
<body>
		<form action="<?php echo base_url('index.php/welcome/insert');?>" method="POST">
			<div class="col-md-10 col-md-offset-1 row">
				<div class="col-md-12 text-center">
					User Details
				</div>
				<div class="col-md-12 row">
					<div class="col-md-4">Name</div>
					<div class="col-md-4">Email</div>
					<div class="col-md-4">Phone No.</div>
				</div>
				<div class="col-md-12 row">
					<div class="col-md-4"><input type="text" name="name" required></div>
					<div class="col-md-4"><input type="email" name="email" required></div>
					<div class="col-md-4"><input type="tel" name="mobile" required></div>	
				</div>
				<div  class="col-md-12 row">
					<div class="col-md-4">Image</div>
				</div>
				<div  class="col-md-12 row">
					<div class="col-md-4"><input type="file" name="image" required></div>
				</div>
				<div  class="col-md-12 row text-center">
					<input type="submit" name="submit" value="Submit">
				</div>
			</div>
				<div  class="col-md-6 col-md-offset-2">
					<table class="table-bordered">
						<tr>
							<th>S No.</th>
							<th>Name</th>
							<th>Email ID</th>
							<th>Phone No.</th>
							<th>Image</th>
						</tr>
						<tr>
							<?php if(isset($name))
							{
								echo "<td>".$srno."</td>";
								echo "<td>".$name."</td>";
								echo "<td>".$email."</td>";
								echo "<td>".$mobile."</td>";
								echo "<td>".$image."</td>";
							}?>
						</tr>
					</table>
				</div>
		</form>
		
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
