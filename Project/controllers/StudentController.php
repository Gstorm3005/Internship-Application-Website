<?php


class StudentController
{

    public function getAllstudent(){
        $students = student::getAll();
        return $students;
    }

    public function getOnestudent()
    {
        if (isset($_POST['id'])) {
            $data = array(
                'id' => $_POST['id'],
            );
            $student = (new student)->getstudent($data);
            return $student;
        }
    }

    public function findstudent()
    {
        if (isset($_POST['search'])) {
            $data = array(
                'search' => $_POST['search'],
            );
            $students = (new student)->searchstudent($data);
            return $students;
        }
    }

    /**
     * return @void
     */

    public function addstudent()
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
            $result = student::add($data);
            if ($result === 'ok') {
                Session::set('success','student added');
                Redirect::to('managestudents');
            }else{
                echo $result;
            }
        }
    }

    /**
     * return @void
     */

    public function updatestudent()
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
            $result = student::update($data);
            if ($result === 'ok') {
                Session::set('success', 'student updated');
                Redirect::to('managestudents');
            } else {
                echo $result;
            }
        }
    }
    /**
     * return @void
     */

    public function deletestudent()
    {
        if (isset($_POST['student_id'])) {
            $data['student_id'] = $_POST['student_id'];
            $result = student::delete($data);
            if ($result === 'ok') {
                Session::set('success', 'student deleted');
                Redirect::to('managestudents');
            } else {
                echo $result;
            }
        }
    }
}
?>