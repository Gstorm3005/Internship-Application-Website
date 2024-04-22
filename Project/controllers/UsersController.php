<?php

class UsersController {

    public function auth(){
        if(isset($_POST['submit'])){
            $data['username'] = $_POST['username'];
            $resultST = user::loginST($data);
            $resultDL = user::loginDL($data);
            $resultPI = user::loginPI($data);
            $adminLO = 'admin';
            $adminPS = 'admin';

            if($resultDL->login === $_POST['username'] && $_POST['password']===$resultDL->password){

                $_SESSION['logged'] = true;
                $_SESSION['username'] = $resultDL->login;
                $_SESSION['name'] = $resultDL->name;
                $_SESSION['surname'] = $resultDL->surname;
                $_SESSION['deleguation'] = $resultDL->permission;
                $_SESSION['role'] = 'deleguate';
                Redirect::to('home');
            }
            elseif($resultST->login === $_POST['username'] && $_POST['password']===$resultST->password){
                $_SESSION['logged'] = true;
                $_SESSION['username'] = $resultST->login;
                $_SESSION['name'] = $resultST->name;
                $_SESSION['surname'] = $resultST->surname;
                
                
                $_SESSION['role'] = 'student';
                Redirect::to('home');

            }
            elseif($resultPI->login === $_POST['username'] && $_POST['password']===$resultPI->password){

                $_SESSION['logged'] = true;
                $_SESSION['username'] = $resultPI->login;
                $_SESSION['name'] = $resultPI->name;
                $_SESSION['surname'] = $resultPI->surname;
                
                $_SESSION['role'] = 'promotionpilot';
                Redirect::to('home');

            }
            elseif($adminLO === $_POST['username'] && $_POST['password']===$adminPS){

                $_SESSION['logged'] = true;
                $_SESSION['username'] = $result->login;
                $_SESSION['name'] = 'admin';
                $_SESSION['surname']='';
                
                $_SESSION['role'] = 'admin';
                Redirect::to('home');

            }
            
            else{
                Session::set('error','Pseudo ou mot de passe est incorrect');
                Redirect::to('login');
            }
        }
    }



    static public function logout(){
        session_destroy();
    }


}
?>