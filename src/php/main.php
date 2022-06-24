<?php

use Projeto\Cofre\Domain\{Credential,Device};
use Projeto\Cofre\Process\Decrypt\Decrypt;
use Projeto\Cofre\Process\Encrypt\Encrypt;

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

$encrypt = new Encrypt($credencial);
$credencial->setPassword($encrypt->encryptPassword());
echo $credencial."<br>";

$decrypt = new Decrypt($credencial);
//var_dump($decrypt);
$passClean = $decrypt->decryptPassword();
echo "A senha...: $passClean";
