<?php
class companyoffer{

/**
 * return @void
 */

static public function getAll(){
    $stmt = DB::connect()->prepare("SELECT * FROM company");
    $stmt->execute();
    return $stmt->fetchAll();
    $stmt->close();
    $stmt = null;
}

public function getcompanyoffer($data)
{
    $id = $data['id'];
    try {
        $query = "SELECT * FROM company WHERE company_id=:id";
        $statement = DB::connect()->prepare($query);
        $statement->execute(array(":id" => $id));
        $companyoffer = $statement->fetch(PDO::FETCH_OBJ);
        return $companyoffer;
    } catch (PDOException $ex) {
        echo 'erreur' . $ex->getMessage();
    }
}

public function searchcompanyoffer($data)
{
    $search = $data['search'];
    try {
        $query = "SELECT * FROM company WHERE name LIKE ?
            OR activity_sector LIKE ? ";
        $statement = DB::connect()->prepare($query);
        $statement->execute(array('%'.$search.'%', '%' . $search . '%'));
        $companyoffers = $statement->fetchAll();
        return $companyoffers;
    } catch (PDOException $ex) {
        echo 'erreur' . $ex->getMessage();
    }
}
}
?>