<?php

class User{
    static public function loginDL($data){
        $username = $data['username'];
        try{
            $query = 'SELECT * FROM deleguate WHERE login=:username';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":username" => $username));
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            return $user;
        }catch(PDOException $ex){
            echo 'erreur' . $ex->getMessage();
        }
    }
    static public function loginST($data){
        $username = $data['username'];
        try{
            $query = 'SELECT * FROM student WHERE login=:username';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":username" => $username));
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            return $user;
        }catch(PDOException $ex){
            echo 'erreur' . $ex->getMessage();
        }
    }
    
    static public function loginPI($data){
        $username = $data['username'];
        try{
            $query = 'SELECT * FROM promotionpilot WHERE login=:username';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":username" => $username));
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            return $user;
        }catch(PDOException $ex){
            echo 'erreur' . $ex->getMessage();
        }
    }



}

 ?>