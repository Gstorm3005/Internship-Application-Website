<meta charset="utf-8">
  <meta name="viewport"  content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible"content="ie=edge">
  <meta name= "apple-mobile-web-app-status-bar"content="#aa7700">
  <meta name="theme-color"content="black">
 
  <!-- Manifest File link -->
  <link rel="manifest" href="manifest.json">
  <script>
    window.addEventListener('load', () => {
      registerSW();
    });
 
    // Register the Service Worker
    async function registerSW() {
      if ('serviceWorker' in navigator) {
        try {
          await navigator
                .serviceWorker
                .register('serviceworker.js');
        }
        catch (e) {
          console.log('SW registration failed');
        }
      }
    }
  </script>
</head>
<?php
require_once './views/includes/header.php';
require_once './autoload.php';
require_once './controllers/HomeController.php';
require_once './controllers/UsersController.php';
require_once './models/User.php';
$home = new HomeController();


$pages = ["login","home","aboutus","add","update","delete","logout","manage","managecompanies","addcom","delcom","updcom","managedeleguates","adddel","deldel","upddel","managestudents","addstu","delstu","updstu","managepilots","addpil","delpil","updpil","manageoffers","addoff","deloff","updoff","pagepilot","pagestudent","pagedeleguate","exo"];
$pagesdl = ["login","home","aboutus","add","update","delete","logout","manage","managecompanies","addcom","delcom","updcom","managestudents","addstu","delstu","updstu","managepilots","addpil","delpil","updpil","manageoffers","addoff","deloff","updoff"];
$pagesst = ["login","home","logout","aboutus","exo"];
$pagespl = ["login","home","aboutus","add","update","delete","logout","manage","managecompanies","addcom","delcom","updcom","managedeleguates","adddel","deldel","upddel","managestudents","addstu","delstu","updstu","manageoffers","addoff","deloff","updoff"];

if(isset($_SESSION['logged']) && $_SESSION['logged'] === true && $_SESSION['role'] === 'admin'){

	if(isset($_GET['page'])){
		if(in_array($_GET['page'],$pages)){
			$pages = $_GET['page'];
			$home->index($pages);
		}else{
			include('views/includes/404.php');
		}
	}else{
		$home->index('home');
	}


require_once './views/includes/footer.php';



}
elseif(isset($_SESSION['logged']) && $_SESSION['logged'] === true && $_SESSION['role'] === 'deleguate'){

	if(isset($_GET['page'])){
		if(in_array($_GET['page'],$pagesdl)){
			$pagesdl = $_GET['page'];
			$home->index($pagesdl);
		}else{
			include('views/includes/denied.php');
		}
	}else{
		$home->index('home');
	}
require_once './views/includes/footer.php';
}
elseif(isset($_SESSION['logged']) && $_SESSION['logged'] === true && $_SESSION['role'] === 'student'){

	if(isset($_GET['page'])){
		if(in_array($_GET['page'],$pagesst)){
			$pagesst = $_GET['page'];
			$home->index($pagesst);
		}else{
			include('views/includes/denied.php');
		}
	}else{
		$home->index('home');
	}
require_once './views/includes/footer.php';
}
elseif(isset($_SESSION['logged']) && $_SESSION['logged'] === true && $_SESSION['role'] === 'promotionpilot'){

	if(isset($_GET['page'])){
		if(in_array($_GET['page'],$pagespl)){
			$pagespi = $_GET['page'];
			$home->index($pagespi);
		}else{
			include('views/includes/denied.php');
		}
	}else{
		$home->index('home');
	}

}
else{
	$home->index('login');
}
?>
