<?php
	if(isset($_POST['offer_id'])){
		$exitEmploye = new OfferController();
		$exitEmploye->deleteoffer();
	}
?>