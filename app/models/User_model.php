<?php

class User_model extends Controller
{
    public function getAdminById($id)
    {
        $query = $this->dbh->prepare("SELECT * FROM admin WHERE id=:id");
        $query->execute([
            'id' => htmlentities($id)
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllAdmin()
    {
        $query = $this->dbh->prepare("SELECT * FROM admin");
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }
}
