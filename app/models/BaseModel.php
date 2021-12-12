<?php
include_once "DBConnect.php";

class BaseModel
{
    protected $dbConnect;
    protected $table;

    public function __construct()
    {
        $db = new DBConnect();
        $this->dbConnect = $db->connect();
    }

    public function getAll()
    {
        $sql = "select * from $this->table" ;
        $stmt = $this->dbConnect->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getById($id)
    {
        $sql = "select * from $this->table where id=".$id;
        $stmt = $this->dbConnect->query($sql);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function delete($id)
    {
        $sql = "delete from $this->table where id=".$id;
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->execute();
//        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}