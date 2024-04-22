<?php
	if(isset($_POST['find'])){
		$data = new StudentController();
		$students = $data->findstudent();
	}else{
		$data = new StudentController();
		$students = $data->getAllstudent();
	}
?>
    <h1 style="font-weight: bold;font-size: 50px;"><span style="color: Orange;">I</span>ntern<span style="color: Orange">C</span>hips</h1>
    <a href="#!"role="button" style="color: black;"><span style="top: 40px;right: 30px; position: fixed;z-index:1;"><i class="fas fa-bell fa-2x"></i></span></a>
    <a href="<?php echo BASE_URL;?>logout"role="button" style="color: black;"><span style="top: 35px;right: 150px; position: absolute; font-weight: bold;" class="fa-2x">Log out</span><span style="top: 40px;right: 100px; position: absolute;z-index:1;"><i  class="fas fa-sign-out fa-2x"></i></span></a>
    <br><br>
    <div style="margin-right: 0px;font-size: 50px;"  class="row ">
        <a href="<?php echo BASE_URL;?>home" style="text-decoration: none;" class="col-sm-12 col-md-6 col-lg-3 btn-secondary"><center>Home</center></a>
        <a href="<?php echo BASE_URL;?>manage" style="text-decoration: none;" class="col-sm-12 col-md-6 col-lg-3 btn-primary"><center>Manage</center></a>
        <a href="/exo.php" style="text-decoration: none;" class="col-sm-12 col-md-6 col-lg-3 btn-secondary"><center>Offers</center></a>
        <a href="<?php echo BASE_URL;?>aboutus" style="text-decoration: none;" class="col-sm-12 col-md-6 col-lg-3 btn-secondary"><center>About us</center></a>
    </div><br>

    <center><h3 style="font-size: 30px;">Manage students</h3></center>
    
<div class="container-fluid">
	<div class="row my-4">
		<div class="col-md-10 mx-auto">
			<?php include('./views/includes/alerts.php');?>
			<div class="card">
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>addstu" class="btn btn-sm btn-primary mr-2 mb-2">
						<i class="fas fa-plus"></i>
					</a>
					<a href="<?php echo BASE_URL;?>home" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
					<a href="<?php echo BASE_URL;?>logout" title="Déconnexion" class="btn btn-link mr-2 mb-2">
						<i class="fas fa-user mr-2"> <?php echo $_SESSION['username'];?></i>
					</a>
					<form method="post" class="float-right mb-2 d-flex flex-row">
						<input type="text" class="form-control" name="search" placeholder="Recherche">
						<button class="btn btn-info btn-sm" name="find" type="submit"><i class="fas fa-search"></i></button>
					</form>
					<table style="font-size: 0.8vw;" class="table table-hover">
					  <thead>
					    <tr>
					      <th scope="col">user_id</th>
						  <th scope="col">student_id</th>
					      <th scope="col">rating</th>
                          <th scope="col">name</th>
					      <th scope="col">surname</th>
					      <th scope="col">center</th>
						  <th scope="col">login</th>
					      <th scope="col">password</th>
                          <th scope="col">company_id</th>
                          <th scope="col">promotion_id</th>
						  <th scope="col">location_id</th>
					    </tr>
					  </thead>
					  <tbody>
					    <?php foreach($students as $student):?>
					    	<tr>
						      <td><?php echo $student['user_id'];?></td>
							  <td><?php echo $student['student_id'];?></td>
                              <td><?php echo $student['rating'];?></td>
						      <td><?php echo $student['name'];?></td>
						      <td><?php echo $student['surname'];?></td>
						      <td><?php echo $student['center'];?></td>
							  <td><?php echo $student['login'];?></td>
						      <td><?php echo $student['password'];?></td>
                              <td><?php echo $student['company_id'];?></td>
                              <td><?php echo $student['promotion_id'];?></td>
						      <td><?php echo $student['location_id'];?></td>
						      
						      <td class="d-flex flex-row">
						      	<form method="post" class="mr-1" action="updstu">
						      		<input type="hidden" name="id" value="<?php echo $student['student_id'];?>">
						      		<button style="margin-right:5px;" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
						      	</form>
						      	<form method="post" class="mr-1" action="delstu">
						      		<input type="hidden" name="student_id" value="<?php echo $student['student_id'];?>">
						      		<button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
						      	</form>
						      </td>
						    </tr>
					   	<?php endforeach;?>
					  </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>