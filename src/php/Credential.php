<?php

namespace Projeto\Cofre;

class Credential
{

    private string $credentialName;
    private Device $deviceOfCredential;
    private string $password;
    private string $comment;

    public function __construct(string $credentialName,
    Device $deviceOfCredential,
    string $password,
    string $comment)
    {
        
        $this->credentialName = $credentialName;
        $this->deviceOfCredential = $deviceOfCredential;
        $this->password = $password;
        $this->comment = $comment;

    }

    public function __toString()
    {
        return "Nome da credencial....".$this->credentialName. PHP_EOL .
        "Dispositivo....".$this->deviceOfCredential. PHP_EOL .
        "Senha....".$this->password. PHP_EOL .
        "Comentario....".$this->comment;

    }

}