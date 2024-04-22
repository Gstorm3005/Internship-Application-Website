<?php
	if(isset($_POST['id'])){
		$exitEmploye = new OfferController();
		$employe = $exitEmploye->getOneoffer();
	}else{
		Redirect::to('home');
	}
	if(isset($_POST['submit'])){
		$exitEmploye = new OfferController();
		$exitEmploye->updateoffer();
	}
?>
<div class="container">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">Update offer</div>
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
					<form method="post">
					<div class="form-group">
							<label for="nom">skills</label>
							<input type="text" name="skills" class="form-control" value="<?php echo $employe->skills;?>">
						</div>
                        <div class="form-group">
							<label for="nom">duration</label>
							<input type="text" name="duration" class="form-control" value="<?php echo $employe->duration;?>">
						</div>
						<div class="form-group">
							<label for="nom">compensation_basis</label>
							<input type="text" name="compensation_basis" class="form-control" value="<?php echo $employe->compensation_basis;?>">
						</div>
						<div class="form-group">
							<label for="nom">date</label>
							<input type="text" name="date" class="form-control" value="<?php echo $employe->date;?>">
						</div>
                        <div class="form-group">
							<label for="nom">NB_places_offered</label>
							<input type="text" name="NB_places_offered" class="form-control" value="<?php echo $employe->NB_places_offered;?>">
						</div>
                        <div class="form-group">
							<label for="nom">promotion_type</label>
							<input type="text" name="promotion_type" class="form-control" value="<?php echo $employe->promotion_type;?>">
						</div>
                        <div class="form-group">
							<label for="nom">adress</label>
							<input type="text" name="adress" class="form-control" value="<?php echo $employe->adress;?>">
						</div>
						<div class="form-group">
							<label for="mat">company_id</label>
							<input type="text" name="company_id" class="form-control" value="<?php echo $employe->company_id;?>">
						</div>
                        <div class="form-group">
							<input type="hidden" class="form-control" name="id" value="<?php echo $employe->offer_id;?>"></input>
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