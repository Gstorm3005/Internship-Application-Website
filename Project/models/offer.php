<?php

class offer{

    /**
     * return @void
     */

    static public function getAll(){
        $stmt = DB::connect()->prepare("SELECT * FROM internshipoffer");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }

    public function getoffer($data)
    {
        $id = $data['id'];
        try {
            $query = "SELECT * FROM internshipoffer WHERE offer_id=:id";
            $statement = DB::connect()->prepare($query);
            $statement->execute(array(":id" => $id));
            $offer = $statement->fetch(PDO::FETCH_OBJ);
            return $offer;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    public function searchoffer($data)
    {
        $search = $data['search'];
        try {
            $query = "SELECT * FROM internshipoffer WHERE skills LIKE ?
                OR adress LIKE ?
            ";
            $statement = DB::connect()->prepare($query);
            $statement->execute(array('%'.$search.'%', '%' . $search . '%'));
            $offers = $statement->fetchAll();
            return $offers;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    static public function add($data)
    {
        $stmt = DB::connect()->prepare("INSERT INTO `internshipoffer`(`skills`, `duration`,`compensation_basis`, `date`, `NB_places_offered`, `promotion_type`, `adress`,`company_id`) VALUES (:skills,:duration,:compensation_basis,:date,:NB_places_offered,:promotion_type,:adress,:company_id)");
        $stmt->bindParam(':skills', $data['skills'], PDO::PARAM_STR);
        $stmt->bindParam(':duration', $data['duration'], PDO::PARAM_STR);
        $stmt->bindParam(':compensation_basis', $data['compensation_basis'], PDO::PARAM_STR);
        $stmt->bindParam(':date', $data['date'], PDO::PARAM_STR);
        $stmt->bindParam(':NB_places_offered', $data['NB_places_offered'], PDO::PARAM_STR);
        $stmt->bindParam(':promotion_type', $data['promotion_type'], PDO::PARAM_STR);
        $stmt->bindParam(':adress', $data['adress'], PDO::PARAM_STR);
        $stmt->bindParam(':company_id', $data['company_id'], PDO::PARAM_STR);
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
        $stmt = DB::connect()->prepare("UPDATE internshipoffer SET skills = :skills,duration = :duration,compensation_basis = :compensation_basis,date = :date,NB_places_offered = :NB_places_offered,promotion_type = :promotion_type,adress = :adress,company_id = :company_id WHERE offer_id = :id");
        $stmt->bindParam(':id', $data['id'], PDO::PARAM_STR);
        $stmt->bindParam(':skills', $data['skills'], PDO::PARAM_STR);
        $stmt->bindParam(':duration', $data['duration'], PDO::PARAM_STR);
        $stmt->bindParam(':compensation_basis', $data['compensation_basis'], PDO::PARAM_STR);
        $stmt->bindParam(':date', $data['date'], PDO::PARAM_STR);
        $stmt->bindParam(':NB_places_offered', $data['NB_places_offered'], PDO::PARAM_STR);
        $stmt->bindParam(':promotion_type', $data['promotion_type'], PDO::PARAM_STR);
        $stmt->bindParam(':adress', $data['adress'], PDO::PARAM_STR);
        $stmt->bindParam(':company_id', $data['company_id'], PDO::PARAM_STR);
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
        $id = $data['offer_id'];
        try {
            $query = "DELETE FROM `internshipoffer` WHERE offer_id=:id";
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