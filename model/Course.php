<?php
class Team{
    private $ConDB;
    public function __construct(){
        $con = new ConDB();
        $con->connect();
        $this->ConDB = $con->conn;
    }

    public function getTeam()
    {
        $sql = "SELECT * FROM user";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            $data = json_encode($result);
            return $data;
        }else {
            return false;
        }
    }

    public function getUserDetail($identifier)
    {
        $sql = "SELECT * FROM user where identifier = ".$identifier;
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            $result = $query->fetch(PDO::FETCH_ASSOC);
            $data = json_encode($result);
            return $data;
        }else {
            return false;
        }
    }

}
?>