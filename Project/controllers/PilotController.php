<?php


class PilotController
{

    public function getAllpilot(){
        $pilots = pilot::getAll();
        return $pilots;
    }

    public function getOnepilot()
    {
        if (isset($_POST['id'])) {
            $data = array(
                'id' => $_POST['id'],
            );
            $pilot = (new pilot)->getpilot($data);
            return $pilot;
        }
    }

    public function findpilot()
    {
        if (isset($_POST['search'])) {
            $data = array(
                'search' => $_POST['search'],
            );
            $pilots = (new pilot)->searchpilot($data);
            return $pilots;
        }
    }

    /**
     * return @void
     */

    public function addpilot()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'user_id' => $_POST['user_id'],
                'rating' => $_POST['rating'],
                'name' => $_POST['name'],
                'surname' => $_POST['surname'],
                'center' => $_POST['center'],
                'login' =>  $_POST['login'],
                'password' =>  $_POST['password'],
                'company_id' =>  $_POST['company_id'],
                'promotion_id' =>  $_POST['promotion_id'],
                'location_id' =>  $_POST['location_id'],
            );
            $result = pilot::add($data);
            if ($result === 'ok') {
                Session::set('success','pilot added');
                Redirect::to('managepilots');
            }else{
                echo $result;
            }
        }
    }

    /**
     * return @void
     */

    public function updatepilot()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'user_id' => $_POST['user_id'],
                'id' =>  $_POST['id'],
                'rating' => $_POST['rating'],
                'name' => $_POST['name'],
                'surname' => $_POST['surname'],
                'center' => $_POST['center'],
                'login' =>  $_POST['login'],
                'password' =>  $_POST['password'],
                'company_id' =>  $_POST['company_id'],
                'promotion_id' =>  $_POST['promotion_id'],
                'location_id' =>  $_POST['location_id'],
            );
            $result = pilot::update($data);
            if ($result === 'ok') {
                Session::set('success', 'pilot updated');
                Redirect::to('managepilots');
            } else {
                echo $result;
            }
        }
    }
    /**
     * return @void
     */

    public function deletepilot()
    {
        if (isset($_POST['pilot_id'])) {
            $data['pilot_id'] = $_POST['pilot_id'];
            $result = pilot::delete($data);
            if ($result === 'ok') {
                Session::set('success', 'pilot deleted');
                Redirect::to('managepilots');
            } else {
                echo $result;
            }
        }
    }
}
?>