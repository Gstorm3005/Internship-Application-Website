<?php
	if(isset($_POST['deleguate_id'])){
		$exitEmploye = new DeleguateController();
		$exitEmploye->deletedeleguate();
	}
?>