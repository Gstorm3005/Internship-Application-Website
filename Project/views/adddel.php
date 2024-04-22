<?php
	if(isset($_POST['submit'])){
		$newEmploye = new DeleguateController();
		$newEmploye->adddeleguate();
	}

?>
<div class="container">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">Add deleguate</div>
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
					<form method="post">
						<div class="form-group">
							<label for="nom">user_id</label>
							<input type="text" name="user_id" class="form-control" placeholder="user_id">
						</div>
						<div class="form-group">
							<label for="nom">permission</label>
							<input type="text" name="permission" class="form-control" placeholder="permission">
						</div>
                        <div class="form-group">
							<label for="nom">name</label>
							<input type="text" name="name" class="form-control" placeholder="name">
						</div>
                        <div class="form-group">
							<label for="nom">surname</label>
							<input type="text" name="surname" class="form-control" placeholder="surname">
						</div>
                        <div class="form-group">
							<label for="nom">center</label>
							<input type="text" name="center" class="form-control" placeholder="center">
						</div>
                        <div class="form-group">
							<label for="nom">login</label>
							<input type="text" name="login" class="form-control" placeholder="login">
						</div>
						<div class="form-group">
							<label for="prenom">password</label>
							<input type="text" name="password" class="form-control" placeholder="password">
						</div>
						<div class="form-group">
							<label for="mat">location_id</label>
							<input type="text" name="location_id" class="form-control" placeholder="location_id">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="submit">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>