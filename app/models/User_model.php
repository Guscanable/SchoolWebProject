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

    public function getAllBerita()
    {
        $query = $this->dbh->prepare("SELECT * FROM berita");
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function insertNews($data)
    {
        $query = $this->dbh->prepare("INSERT INTO berita VALUES ('', :judul, :penulis, :deskripsi, :tanggal)");
        $query->execute([
            'judul' => $data['judul'],
            'penulis' => $data['penulis'],
            'deskripsi' => $data['deskripsi'],
            'tanggal' => $data['tanggal']
        ]);
    }
}
