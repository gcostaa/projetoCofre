<?php

$con = new PDO(
    "mysql:host=localhost;dbname=projetocofre",
    "cofre",
    "gWU^RADkdaAN"
);

var_dump($con);

$ip = "127.0.0.2";
$id_disp = 2;
$cred = "mt4";
$senha = "dvsomk5651";
$com = "Comentario dois";

$query = $con->prepare("INSERT INTO device (ip_device) values (?);");
$query->bindParam(1,$ip);
$query->execute();

$query = $con->prepare("INSERT INTO credential (FK_id_device,credential_name,credential_password,credential_comment) value 
(?,?,?,?);");
$query->bindParam(1,$id_disp);
$query->bindParam(2,$cred);
$query->bindParam(3,$senha);
$query->bindParam(4,$com);
$query->execute();


