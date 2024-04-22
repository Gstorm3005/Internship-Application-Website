<h1 style="font-weight: bold;font-size: 50px;"><span style="color: Orange;">I</span>ntern<span style="color: Orange">C</span>hips</h1>
    <a href="#!"role="button" style="color: black;"><span style="top: 40px;right: 30px; position: fixed;z-index:1;"><i class="fas fa-bell fa-2x"></i></span></a>
    <a href="<?php echo BASE_URL;?>logout"role="button" style="color: black;"><span style="top: 35px;right: 150px; position: absolute; font-weight: bold;" class="fa-2x">Log out</span><span style="top: 40px;right: 100px; position: absolute;z-index:1;"><i  class="fas fa-sign-out fa-2x"></i></span></a>
    <h3 style="color:green;">wellcome back, <?php echo $_SESSION['name']; echo ' '.$_SESSION['surname']; ?> !</h3>
    <div style="margin-right: 0px;font-size: 50px;"  class="row ">
        <a href="<?php echo BASE_URL;?>home" style="text-decoration: none;" class="col-sm-12 col-md-6 col-lg-3 btn-primary"><center>Home</center></a>
        <a href="<?php echo BASE_URL;   ?>manage" style="text-decoration: none;" class="col-sm-12 col-md-6 col-lg-3 btn-secondary"><center>Manage</center></a>
        <a href="/exo.php" style="text-decoration: none;" class="col-sm-12 col-md-6 col-lg-3 btn-secondary"><center>Offers</center></a>
        <a href="<?php echo BASE_URL;?>aboutus" style="text-decoration: none;" class="col-sm-12 col-md-6 col-lg-3 btn-secondary"><center>About us</center></a>
    </div>
    
    
    
      <br><br>
      <form method="post" class="float-right mb-2 d-flex flex-row">
						<input type="text" class="form-control" name="search" placeholder="Search your favorite company">
						<button class="btn btn-info btn-sm" name="find" type="submit"><i class="fas fa-search"></i></button>
					</form>
      <div style="margin-right: 0px;" class="row">
        <div   class="col-sm-12 col-md-6">
            <center><p style="font-size: 40px; font-style: oblique;">Welcome to our website</p></center>
            <center><p style="font-size: 25px;">Doing an internship abroad is much more hands-on than anything you might learn at university. You actually get to experience the job, rather than learn about it in the classroom, and you’re presented with real responsibilities.</p></center>
        </div>
        <div  class="col-sm-12 col-md-6">
            <center><img src='<?php echo BASE_URL;   ?>views/includes/assets/picture/internship.jpg' width="500" height="300"></center>
        </div>
      </div>
      
      <?php
	if(isset($_POST['find'])){
		$data = new CompanyofferController();
		$companyoffers = $data->findcompanyoffer();
	}else{
		$data = new CompanyofferController();
		$companyoffers = $data->getAllcompanyoffer();
	}
?>
    
<div>
    <center><h3 style="font-size: 30px;"> Our companies:</h3></center>
			<?php include('./views/includes/alerts.php');?>
					<style>
                                
                                .star-wrapper a {
                                font-size: 20px;
                                color: grey;
                                text-decoration: none;
                                
                                margin: 1px;
                                direction: rtl;
                                }
                                .star-wrapper a:hover {
                                color: gold;
                                transform: scale(1.3);
                                transition: all 0.5s;
                                }
                                .s4:hover ~ a {
                                color: gold;
                                }
                                .s5:hover ~ a {
                                color: gold;
                                }
                                .s1:hover ~ a {
                                color: gold;
                                }
                                .s2:hover ~ a {
                                color: gold;
                                }
                                .s3:hover ~ a {
                                color: gold;
                                }
                                
                                
                                .wraper {
                                position: absolute;
                                bottom: 30px;
                                right: 50px;
                            }
                    </style>
                      <?php foreach($companyoffers as $companyoffer):?>
                        <center><div style="margin:10px;">
                        <fieldset class="card col-sm-12 col-md-6 col-lg-4 p-3 border bg-light">
                            <h1>company n°<?php echo $companyoffer['company_id'];?></h1>
                            <label for="fname">name: <?php echo $companyoffer['name'];?></label>
                            <br>
                            <label for="fname">activity sector: <?php echo $companyoffer['activity_sector'];?></label>
                            <br>
                            <label for="fname">Number of CESI students accepted: <?php echo $companyoffer['NB_CESI_interns_accepted'];?></label>
                            <br>
                            <div class="star-wrapper">
                            
                            <a href="#" class="fas fa-star s5"></a>
                            <a href="#" class="fas fa-star s4"></a>
                            <a href="#" class="fas fa-star s3"></a>
                            <a href="#" class="fas fa-star s2"></a>
                            <a href="#" class="fas fa-star s1"></a>
                            </div>
                            <script src="https://kit.fontawesome.com/5ea815c1d0.js"></script>
                            <br>
						    <form method="post" class="mr-1">
						      	<input type="hidden" name="companyoffer_id" value="<?php echo $companyoffer['company_id'];?>">
						      	<button class="btn btn-sm btn-warning ">see stats</button>
						    </form>
                        </fieldset>
					    </div>
                        </center>
					   	<?php endforeach;?>