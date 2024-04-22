<?php
	if(isset($_POST['id'])){
		$exitEmploye = new CompanyController();
		$employe = $exitEmploye->getOnecompany();
	}else{
		Redirect::to('home');
	}
	if(isset($_POST['submit'])){
		$exitEmploye = new CompanyController();
		$exitEmploye->updatecompany();
	}
?>
<div class="container">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">Update company</div>
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
					<form method="post">
						<div class="form-group">
							<label for="nom">name</label>
							<input type="text" name="name" class="form-control" value="<?php echo $employe->name;?>">
						</div>
						<div class="form-group">
							<label for="prenom">activity_sector</label>
							<input type="text" name="a_sector" class="form-control" value="<?php echo $employe->activity_sector;?>">
						</div>
						<div class="form-group">
							<label for="mat">NB_CESI_interns_accepted</label>
							<input type="text" name="nb_int" class="form-control" value="<?php echo $employe->NB_CESI_interns_accepted;?>">
						</div>
                        <div class="form-group">
							<input type="hidden" class="form-control" name="id" value="<?php echo $employe->company_id;?>"></input>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="submit">Valider</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>