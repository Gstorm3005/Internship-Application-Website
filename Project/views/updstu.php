<?php
	if(isset($_POST['id'])){
		$exitEmploye = new StudentController();
		$employe = $exitEmploye->getOnestudent();
	}else{
		Redirect::to('home');
	}
	if(isset($_POST['submit'])){
		$exitEmploye = new StudentController();
		$exitEmploye->updatestudent();
	}
?>
<div class="container">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">Update student</div>
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
					<form method="post">
                    <div class="form-group">
							<label for="nom">user_id</label>
							<input type="text" name="user_id" class="form-control" value="<?php echo $employe->user_id;?>">
						</div>
                        <div class="form-group">
							<label for="nom">rating</label>
							<input type="text" name="rating" class="form-control" value="<?php echo $employe->rating;?>">
						</div>
                        <div class="form-group">
							<label for="nom">name</label>
							<input type="text" name="name" class="form-control" value="<?php echo $employe->name;?>">
						</div>
                        <div class="form-group">
							<label for="nom">surname</label>
							<input type="text" name="surname" class="form-control" value="<?php echo $employe->surname;?>">
						</div>
                        <div class="form-group">
							<label for="nom">center</label>
							<input type="text" name="center" class="form-control" value="<?php echo $employe->center;?>">
						</div>
                        <div class="form-group">
							<label for="nom">login</label>
							<input type="text" name="login" class="form-control" value="<?php echo $employe->login;?>">
						</div>
						<div class="form-group">
							<label for="prenom">password</label>
							<input type="text" name="password" class="form-control" value="<?php echo $employe->password;?>">
						</div>
                        <div class="form-group">
							<label for="mat">company_id</label>
							<input type="text" name="company_id" class="form-control" value="<?php echo $employe->company_id;?>">
						</div>
                        <div class="form-group">
							<label for="mat">promotion_id</label>
							<input type="text" name="promotion_id" class="form-control" value="<?php echo $employe->promotion_id;?>">
						</div>
						<div class="form-group">
							<label for="mat">location_id</label>
							<input type="text" name="location_id" class="form-control" value="<?php echo $employe->location_id;?>">
						</div>
                        <div class="form-group">
							<input type="hidden" class="form-control" name="id" value="<?php echo $employe->student_id;?>"></input>
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