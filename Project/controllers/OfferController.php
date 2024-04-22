<?php


class OfferController
{

    public function getAlloffer(){
        $offers = offer::getAll();
        return $offers;
    }

    public function getOneoffer()
    {
        if (isset($_POST['id'])) {
            $data = array(
                'id' => $_POST['id'],
            );
            $offer = (new offer)->getoffer($data);
            return $offer;
        }
    }

    public function findoffer()
    {
        if (isset($_POST['search'])) {
            $data = array(
                'search' => $_POST['search'],
            );
            $offers = (new offer)->searchoffer($data);
            return $offers;
        }
    }

    /**
     * return @void
     */

    public function addoffer()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'skills' => $_POST['skills'],
                'duration' => $_POST['duration'],
                'compensation_basis' => $_POST['compensation_basis'],
                'date' => $_POST['date'],
                'NB_places_offered' => $_POST['NB_places_offered'],
                'promotion_type' => $_POST['promotion_type'],
                'adress' =>  $_POST['adress'],
                'company_id' =>  $_POST['company_id'],
            );
            $result = offer::add($data);
            if ($result === 'ok') {
                Session::set('success','offer added');
                Redirect::to('manageoffers');
            }else{
                echo $result;
            }
        }
    }

    /**
     * return @void
     */

    public function updateoffer()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'id' =>  $_POST['id'],
                'skills' => $_POST['skills'],
                'duration' => $_POST['duration'],
                'compensation_basis' => $_POST['compensation_basis'],
                'date' => $_POST['date'],
                'NB_places_offered' => $_POST['NB_places_offered'],
                'promotion_type' => $_POST['promotion_type'],
                'adress' =>  $_POST['adress'],
                'company_id' =>  $_POST['company_id'],
            );
            $result = offer::update($data);
            if ($result === 'ok') {
                Session::set('success', 'offer updated');
                Redirect::to('manageoffers');
            } else {
                echo $result;
            }
        }
    }
    /**
     * return @void
     */

    public function deleteoffer()
    {
        if (isset($_POST['offer_id'])) {
            $data['offer_id'] = $_POST['offer_id'];
            $result = offer::delete($data);
            if ($result === 'ok') {
                Session::set('success', 'offer deleted');
                Redirect::to('manageoffers');
            } else {
                echo $result;
            }
        }
    }
}
?>