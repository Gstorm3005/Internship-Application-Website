<?php
	if(isset($_POST['student_id'])){
		$exitEmploye = new StudentController();
		$exitEmploye->deletestudent();
	}
?>