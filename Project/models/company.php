<?php

class company{

    /**
     * return @void
     */

    static public function getAll(){
        $stmt = DB::connect()->prepare("SELECT * FROM `company`");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }

    public function getcompany($data)
    {
        $id = $data['id'];
        try {
            $query = "SELECT * FROM company WHERE company_id=:id";
            $statement = DB::connect()->prepare($query);
            $statement->execute(array(":id" => $id));
            $company = $statement->fetch(PDO::FETCH_OBJ);
            return $company;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    public function searchcompany($data)
    {
        $search = $data['search'];
        try {
            $query = "SELECT * FROM company WHERE name LIKE ?";
            $statement = DB::connect()->prepare($query);
            $statement->execute(array('%'.$search.'%'));
            $companys = $statement->fetchAll();
            return $companys;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    static public function add($data)
    {
        $stmt = DB::connect()->prepare("INSERT INTO `company`(`name`, `activity_sector`, `NB_CESI_interns_accepted`) VALUES (:name,:a_sector,:nb_int)");
        $stmt->bindParam(':name', $data['name'], PDO::PARAM_STR);
        $stmt->bindParam(':a_sector', $data['a_sector'], PDO::PARAM_STR);
        $stmt->bindParam(':nb_int', $data['nb_int'], PDO::PARAM_STR);

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
        $stmt = DB::connect()->prepare("UPDATE `company` SET `name`=:name,`activity_sector`=:a_sector,`NB_CESI_interns_accepted`=:nb_int WHERE company_id = :id");
        $stmt->bindParam(':id', $data['id'], PDO::PARAM_STR);
        $stmt->bindParam(':name', $data['name'], PDO::PARAM_STR);
        $stmt->bindParam(':a_sector', $data['a_sector'], PDO::PARAM_STR);
        $stmt->bindParam(':nb_int', $data['nb_int'], PDO::PARAM_STR);
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
        $id = $data['company_id'];
        try {
            $query = "DELETE FROM company WHERE company_id=:id";
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