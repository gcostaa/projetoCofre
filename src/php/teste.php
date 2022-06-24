<?php

use Projeto\Cofre\Credential;
use Projeto\Cofre\Device;
use Projeto\Cofre\Encrypt\Encrypt;

require_once '../../vendor/autoload.php';

$credentialName = $_POST['name'];
$deviceOfCredential = new Device($_POST['device']);
$password = $_POST['password'];
$comment = $_POST['message'];

$credencial = new Credential(
    $credentialName,
    $deviceOfCredential,
    $password,
    $comment
);

$teste = new Encrypt($credencial,"fgddgbvb");

echo $teste->encryptPassword();

