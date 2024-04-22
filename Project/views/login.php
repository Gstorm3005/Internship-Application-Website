<?php
	if(isset($_POST['submit'])){
		$loginUser = new UsersController();
		$loginUser->auth();
	}
?>
<h1 style="font-weight: bold;font-size: 5vw;"><span style="color: Orange">I</span>ntern<span style="color: Orange">C</span>hips</h1>
<div style="margin-top: 10%;"  class="container">
	<div class="row my-4">
		<div  class="col-md-6 mx-auto">
			<?php include('./views/includes/alerts.php');?>
			<div  class="card">
				<div style="background-color:#ffe599;" class="card-header">
					<h3 class="text-center">log in with your account</h3>
				</div>
				<div style="background-color:#ffe599;"  class="card-body">
			      	<form  method="post" class="mr-1">
			      		<div  class="form-group">
				      		<input type="text" name="username" placeholder="Email" class="form-control">
				      	</div>
				      	<div class="form-group">
				      		<input type="password" name="password" placeholder="Password" class="form-control">
				      	</div>
			      		<center><button style="font-size: 20px;" name="submit" class="btn btn-sm btn-warning">Log in</button></center>
			      	</form>
				</div>
			</div>
		</div>
	</div>
</div>