<?php

class CompanyofferController {
    public function getAllcompanyoffer(){
        $companyoffers = companyoffer::getAll();
        return $companyoffers;
    }

    public function getOnecompanyoffer()
    {
        if (isset($_POST['id'])) {
            $data = array(
                'id' => $_POST['id'],
            );
            $companyoffer = (new companyoffer)->getcompanyoffer($data);
            return $companyoffer;
        }
    }

    public function findcompanyoffer()
    {
        if (isset($_POST['search'])) {
            $data = array(
                'search' => $_POST['search'],
            );
            $companyoffers = (new companyoffer)->searchcompanyoffer($data);
            return $companyoffers;
        }
    }
}
?>