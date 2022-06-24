<?php

namespace Projeto\Cofre\Domain;

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

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    public function __toString()
    {
        return "Nome da credencial....".$this->credentialName. "<br>" .
        "Dispositivo....".$this->deviceOfCredential. "<br>" .
        "Senha....".$this->password. "<br>" .
        "Comentario....".$this->comment;

    }

}