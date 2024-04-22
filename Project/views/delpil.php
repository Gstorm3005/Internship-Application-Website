<?php
	if(isset($_POST['pilot_id'])){
		$exitEmploye = new PilotController();
		$exitEmploye->deletepilot();
	}
?>