<?php
	if(isset($_POST['submit'])){
		$newEmploye = new OfferController();
		$newEmploye->addoffer();
	}

?>
<div class="container">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">Add offer</div>
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
					<form method="post">
						<div class="form-group">
							<label for="nom">skills</label>
							<input type="text" name="skills" class="form-control" placeholder="skills">
						</div>
                        <div class="form-group">
							<label for="nom">duration</label>
							<input type="text" name="duration" class="form-control" placeholder="duration">
						</div>
                        <div class="form-group">
							<label for="nom">compensation_basis</label>
							<input type="text" name="compensation_basis" class="form-control" placeholder="compensation_basis">
						</div>
						<div class="form-group">
							<label for="nom">date</label>
							<input type="text" name="date" class="form-control" placeholder="date">
						</div>
                        <div class="form-group">
							<label for="nom">NB_places_offered</label>
							<input type="text" name="NB_places_offered" class="form-control" placeholder="NB_places_offered">
						</div>
                        <div class="form-group">
							<label for="nom">promotion_type</label>
							<input type="text" name="promotion_type" class="form-control" placeholder="promotion_type">
						</div>
                        <div class="form-group">
							<label for="nom">adress</label>
							<input type="text" name="adress" class="form-control" placeholder="adress">
						</div>
						<div class="form-group">
							<label for="mat">company_id</label>
							<input type="text" name="company_id" class="form-control" placeholder="company_id">
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