<?php


class HomeController {

    /**
     * return @void
     */

    public function index($page){
        include ('views/'.$page.'.php');
    }
    public function indexst($pagest){
        include ('views/'.$pagest.'.php');
    }
    public function indexdl($pagedl){
        include ('views/'.$pagedl.'.php');
    }
    public function indexpi($pagepi){
        include ('views/'.$pagepi.'.php');
    }

}
?>