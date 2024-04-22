<?php

class student{

    /**
     * return @void
     */

    static public function getAll(){
        $stmt = DB::connect()->prepare("SELECT * FROM student");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }

    public function getstudent($data)
    {
        $id = $data['id'];
        try {
            $query = "SELECT * FROM student WHERE student_id=:id";
            $statement = DB::connect()->prepare($query);
            $statement->execute(array(":id" => $id));
            $student = $statement->fetch(PDO::FETCH_OBJ);
            return $student;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    public function searchstudent($data)
    {
        $search = $data['search'];
        try {
            $query = "SELECT * FROM student WHERE name LIKE ?
                OR surname LIKE ?
            ";
            $statement = DB::connect()->prepare($query);
            $statement->execute(array('%'.$search.'%', '%' . $search . '%'));
            $students = $statement->fetchAll();
            return $students;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    static public function add($data)
    {
        $stmt = DB::connect()->prepare("INSERT INTO `student`(`user_id`, `rating`,`name`, `surname`, `center`, `login`, `password`, `company_id`,`promotion_id`,`location_id`) VALUES (:user_id,:rating,:name,:surname,:center,:login,:password,:company_id,:promotion_id,:location_id)");
        $stmt->bindParam(':user_id', $data['user_id'], PDO::PARAM_STR);
        $stmt->bindParam(':rating', $data['rating'], PDO::PARAM_STR);
        $stmt->bindParam(':name', $data['name'], PDO::PARAM_STR);
        $stmt->bindParam(':surname', $data['surname'], PDO::PARAM_STR);
        $stmt->bindParam(':center', $data['center'], PDO::PARAM_STR);
        $stmt->bindParam(':login', $data['login'], PDO::PARAM_STR);
        $stmt->bindParam(':password', $data['password'], PDO::PARAM_STR);
        $stmt->bindParam(':company_id', $data['company_id'], PDO::PARAM_STR);
        $stmt->bindParam(':promotion_id', $data['promotion_id'], PDO::PARAM_STR);
        $stmt->bindParam(':location_id', $data['location_id'], PDO::PARAM_STR);
        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
        $stmt->close();
        $stmt = null;
    }
    static public function update($data)
    {
        $stmt = DB::connect()->prepare("UPDATE student SET user_id = :user_id,rating = :rating,name = :name,surname = :surname,center = :center,login = :login,password = :password,company_id = :company_id,promotion_id = :promotion_id,location_id = :location_id WHERE student_id = :id");
        $stmt->bindParam(':user_id', $data['user_id'], PDO::PARAM_STR);
        $stmt->bindParam(':id', $data['id'], PDO::PARAM_STR);
        $stmt->bindParam(':rating', $data['rating'], PDO::PARAM_STR);
        $stmt->bindParam(':name', $data['name'], PDO::PARAM_STR);
        $stmt->bindParam(':surname', $data['surname'], PDO::PARAM_STR);
        $stmt->bindParam(':center', $data['center'], PDO::PARAM_STR);
        $stmt->bindParam(':login', $data['login'], PDO::PARAM_STR);
        $stmt->bindParam(':password', $data['password'], PDO::PARAM_STR);
        $stmt->bindParam(':company_id', $data['company_id'], PDO::PARAM_STR);
        $stmt->bindParam(':promotion_id', $data['promotion_id'], PDO::PARAM_STR);
        $stmt->bindParam(':location_id', $data['location_id'], PDO::PARAM_STR);
        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
        $stmt->close();
        $stmt = null;
    }
    static public function delete($data)
    {
        $id = $data['student_id'];
        try {
            $query = "DELETE FROM `student` WHERE student_id=:id";
            $statement = DB::connect()->prepare($query);
            $statement->execute(array(":id" => $id));
            if ($statement->execute()) {
                return 'ok';
            } else {
                return 'error';
            }
            $statement->close();
            $statement = null;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }
}
?>