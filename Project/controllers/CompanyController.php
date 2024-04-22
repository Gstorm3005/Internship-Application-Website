<?php


class CompanyController
{

    public function getAllcompany(){
        $companys = company::getAll();
        return $companys;
    }

    public function getOnecompany()
    {
        if (isset($_POST['id'])) {
            $data = array(
                'id' => $_POST['id'],
            );
            $company = (new company)->getcompany($data);
            return $company;
        }
    }

    public function findcompany()
    {
        if (isset($_POST['search'])) {
            $data = array(
                'search' => $_POST['search'],
            );
            $companys = (new company)->searchcompany($data);
            return $companys;
        }
    }

    /**
     * return @void
     */

    public function addcompany()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'name' => $_POST['name'],
                'a_sector' => $_POST['a_sector'],
                'nb_int' => $_POST['nb_int']
            );
            $result = company::add($data);
            if ($result === 'ok') {
                Session::set('success','company added');
                Redirect::to('managecompanies');
            }else{
                echo $result;
            }
        }
    }

    /**
     * return @void
     */

    public function updatecompany()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'id' => $_POST['id'],
                'name' => $_POST['name'],
                'a_sector' => $_POST['a_sector'],
                'nb_int' => $_POST['nb_int']
            );
            $result = company::update($data);
            if ($result === 'ok') {
                Session::set('success', 'company updated');
                Redirect::to('managecompanies');
            } else {
                echo $result;
            }
        }
    }
    /**
     * return @void
     */

    public function deletecompany()
    {
        if (isset($_POST['company_id'])) {
            $data['company_id'] = $_POST['company_id'];
            $result = company::delete($data);
            if ($result === 'ok') {
                Session::set('success', 'company deleted');
                Redirect::to('managecompanies');
            } else {
                echo $result;
            }
        }
    }
}
?>