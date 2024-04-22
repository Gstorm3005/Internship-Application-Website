<?php

class pilot{

    /**
     * return @void
     */

    static public function getAll(){
        $stmt = DB::connect()->prepare("SELECT * FROM promotionpilot");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }

    public function getpilot($data)
    {
        $id = $data['id'];
        try {
            $query = "SELECT * FROM promotionpilot WHERE pilot_id=:id";
            $statement = DB::connect()->prepare($query);
            $statement->execute(array(":id" => $id));
            $pilot = $statement->fetch(PDO::FETCH_OBJ);
            return $pilot;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    public function searchpilot($data)
    {
        $search = $data['search'];
        try {
            $query = "SELECT * FROM promotionpilot WHERE name LIKE ?
                OR surname LIKE ?
            ";
            $statement = DB::connect()->prepare($query);
            $statement->execute(array('%'.$search.'%', '%' . $search . '%'));
            $pilots = $statement->fetchAll();
            return $pilots;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    static public function add($data)
    {
        $stmt = DB::connect()->prepare("INSERT INTO `promotionpilot`(`user_id`, `rating`, `name`, `surname`, `center`, `login`, `password`, `company_id`,`promotion_id`,`location_id`) VALUES (:user_id,:rating,:name,:surname,:center,:login,:password,:company_id,:promotion_id,:location_id)");
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
        $stmt = DB::connect()->prepare("UPDATE promotionpilot SET user_id = :user_id,rating = :rating,name = :name,surname = :surname,center = :center,login = :login,password = :password,company_id = :company_id,promotion_id = :promotion_id,location_id = :location_id WHERE pilot_id = :id");
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
        $id = $data['pilot_id'];
        try {
            $query = "DELETE FROM `promotionpilot` WHERE pilot_id=:id";
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