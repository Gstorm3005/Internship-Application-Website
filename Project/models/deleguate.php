<?php

class deleguate{

    /**
     * return @void
     */

    static public function getAll(){
        $stmt = DB::connect()->prepare("SELECT * FROM deleguate");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }

    public function getdeleguate($data)
    {
        $id = $data['id'];
        try {
            $query = "SELECT * FROM deleguate WHERE deleguate_id=:id";
            $statement = DB::connect()->prepare($query);
            $statement->execute(array(":id" => $id));
            $deleguate = $statement->fetch(PDO::FETCH_OBJ);
            return $deleguate;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    public function searchdeleguate($data)
    {
        $search = $data['search'];
        try {
            $query = "SELECT * FROM deleguate WHERE name LIKE ?
                OR surname LIKE ?
            ";
            $statement = DB::connect()->prepare($query);
            $statement->execute(array('%'.$search.'%', '%' . $search . '%'));
            $deleguates = $statement->fetchAll();
            return $deleguates;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    static public function add($data)
    {
        $stmt = DB::connect()->prepare("INSERT INTO `deleguate`(`user_id`, `permission`, `name`, `surname`, `center`, `login`, `password`, `location_id`) VALUES (:user_id,:permission,:name,:surname,:center,:login,:password,:location_id)");
        $stmt->bindParam(':user_id', $data['user_id'], PDO::PARAM_STR);
        $stmt->bindParam(':permission', $data['permission'], PDO::PARAM_STR);
        $stmt->bindParam(':name', $data['name'], PDO::PARAM_STR);
        $stmt->bindParam(':surname', $data['surname'], PDO::PARAM_STR);
        $stmt->bindParam(':center', $data['center'], PDO::PARAM_STR);
        $stmt->bindParam(':login', $data['login'], PDO::PARAM_STR);
        $stmt->bindParam(':password', $data['password'], PDO::PARAM_STR);
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
        $stmt = DB::connect()->prepare("UPDATE deleguate SET user_id = :user_id,permission =:permission,name = :name,surname = :surname,center = :center,login = :login,password = :password,location_id = :location_id WHERE deleguate_id = :id");
        $stmt->bindParam(':user_id', $data['user_id'], PDO::PARAM_STR);
        $stmt->bindParam(':id', $data['id'], PDO::PARAM_STR);
        $stmt->bindParam(':permission', $data['permission'], PDO::PARAM_STR);
        $stmt->bindParam(':name', $data['name'], PDO::PARAM_STR);
        $stmt->bindParam(':surname', $data['surname'], PDO::PARAM_STR);
        $stmt->bindParam(':center', $data['center'], PDO::PARAM_STR);
        $stmt->bindParam(':login', $data['login'], PDO::PARAM_STR);
        $stmt->bindParam(':password', $data['password'], PDO::PARAM_STR);
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
        $id = $data['deleguate_id'];
        try {
            $query = "DELETE FROM `deleguate` WHERE deleguate_id=:id";
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