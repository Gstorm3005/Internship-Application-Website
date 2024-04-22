
    <h1 style="font-weight: bold;font-size: 50px;"><span style="color: Orange;">I</span>ntern<span style="color: Orange">C</span>hips</h1>
    <a href="#!"role="button" style="color: black;"><span style="top: 40px;right: 30px; position: fixed;z-index:1;"><i class="fas fa-bell fa-2x"></i></span></a>
    <a href="<?php echo BASE_URL;?>logout"role="button" style="color: black;"><span style="top: 35px;right: 150px; position: absolute;font-weight: bold;" class="fa-2x">Log out</span><span style="top: 40px;right: 100px; position: absolute;z-index:1;"><i  class="fas fa-sign-out fa-2x"></i></span></a>
    <br><br>
    <div style="margin-right: 0px;font-size: 50px;"  class="row ">
        <a href="<?php echo BASE_URL;?>home" style="text-decoration: none;" class="col-sm-12 col-md-6 col-lg-3 btn-secondary"><center>Home</center></a>
        <a href="<?php echo BASE_URL;?>manage" style="text-decoration: none;" class="col-sm-12 col-md-6 col-lg-3 btn-primary"><center>Manage</center></a>
        <a href="/exo.php" style="text-decoration: none;" class="col-sm-12 col-md-6 col-lg-3 btn-secondary"><center>Offers</center></a>
        <a href="<?php echo BASE_URL;?>aboutus" style="text-decoration: none;" class="col-sm-12 col-md-6 col-lg-3 btn-secondary"><center>About us</center></a>
    </div><br>
<center>
    
<div style="top: 50%;" id="myCarousel" class="carousel slide" data-ride="carousel">

        <!-- Wrapper for slides -->
    <div class="carousel-inner" >
          <div class="item active" >
            <a class="btn btn-light" href="<?php echo BASE_URL;?>managecompanies" role="button" style="font-size:5vw;">Manage companies</a>
          </div>
      
          <div class="item">
            <a class="btn btn-light" href="<?php echo BASE_URL;?>managepilots" role="button" style="font-size:5vw;">Manage pilots</a>
          </div>
      
          <div class="item">
            <a class="btn btn-light" href="<?php echo BASE_URL;?>manageoffers" role="button" style="font-size:5vw;">Manage offers</a>
          </div>

          <div class="item">
            <a class="btn btn-light" href="<?php echo BASE_URL;?>managedeleguates" role="button" style="font-size:5vw;">Manage deleguates</a>
          </div>

          <div class="item">
            <a class="btn btn-light" href="<?php echo BASE_URL;?>managestudents" role="button" style="font-size:5vw;">Manage students</a>
          </div>
    </div>
      
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="font-size:10vw;">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next" style="font-size:10vw;">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
</div>
    
    </center>
