<?php


class DeleguateController
{

    public function getAlldeleguate(){
        $deleguates = deleguate::getAll();
        return $deleguates;
    }

    public function getOnedeleguate()
    {
        if (isset($_POST['id'])) {
            $data = array(
                'id' => $_POST['id'],
            );
            $deleguate = (new deleguate)->getdeleguate($data);
            return $deleguate;
        }
    }

    public function finddeleguate()
    {
        if (isset($_POST['search'])) {
            $data = array(
                'search' => $_POST['search'],
            );
            $deleguates = (new deleguate)->searchdeleguate($data);
            return $deleguates;
        }
    }

    /**
     * return @void
     */

    public function adddeleguate()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'user_id' => $_POST['user_id'],
                'permission' => $_POST['permission'],
                'name' => $_POST['name'],
                'surname' => $_POST['surname'],
                'center' => $_POST['center'],
                'login' =>  $_POST['login'],
                'password' =>  $_POST['password'],
                'location_id' =>  $_POST['location_id']
            );
            $result = deleguate::add($data);
            if ($result === 'ok') {
                Session::set('success','deleguate added');
                Redirect::to('managedeleguates');
            }else{
                echo $result;
            }
        }
    }

    /**
     * return @void
     */

    public function updatedeleguate()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'user_id' => $_POST['user_id'],
                'id' =>  $_POST['id'],
                'permission' => $_POST['permission'],
                'name' => $_POST['name'],
                'surname' => $_POST['surname'],
                'center' => $_POST['center'],
                'login' => $_POST['login'],
                'password' =>  $_POST['password'],
                'location_id' =>  $_POST['location_id']
            );
            $result = deleguate::update($data);
            if ($result === 'ok') {
                Session::set('success', 'deleguate updated');
                Redirect::to('managedeleguates');
            } else {
                echo $result;
            }
        }
    }
    /**
     * return @void
     */

    public function deletedeleguate()
    {
        if (isset($_POST['deleguate_id'])) {
            $data['deleguate_id'] = $_POST['deleguate_id'];
            $result = deleguate::delete($data);
            if ($result === 'ok') {
                Session::set('success', 'deleguate deleted');
                Redirect::to('managedeleguates');
            } else {
                echo $result;
            }
        }
    }
}
?>