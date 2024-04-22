<?php
	if(isset($_POST['company_id'])){
		$exitEmploye = new CompanyController();
		$exitEmploye->deletecompany();
	}
?>