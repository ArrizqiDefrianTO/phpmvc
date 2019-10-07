<?php
class Mahasiswa_model {
    private $dbh, //mengelola database dengan pdo
            $stmt; //menyimpan query

    //koneksi ke database
    public function __construct(){
        // identitas source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';
        try{
            $this->dbh = new PDO($dsn, 'root', '');
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa(){
       // query
       $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
       $this->stmt->execute();
       return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}