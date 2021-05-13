<?php       

try{
     $db = new PDO( dsn: "mysql:host=localhost;dbname=mailaktivasyon;charset=utf8;", username:"root", password:"")
}catch (PDOException $hata){
    print_r($hata->getMessage());
}

?>