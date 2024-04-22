<?php
	if(isset($_POST['submit'])){
		$newEmploye = new CompanyController();
		$newEmploye->addcompany();
	}

?>
<div class="container">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">Add company</div>
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
					<form method="post">
						<div class="form-group">
							<label for="nom">name</label>
							<input type="text" name="name" class="form-control" placeholder="name">
						</div>
						<div class="form-group">
							<label for="prenom">activity_sector</label>
							<input type="text" name="a_sector" class="form-control" placeholder="activity_sector">
						</div>
						<div class="form-group">
							<label for="mat">NB_CESI_interns_accepted</label>
							<input type="text" name="nb_int" class="form-control" placeholder="NB_CESI_interns_accepted">
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