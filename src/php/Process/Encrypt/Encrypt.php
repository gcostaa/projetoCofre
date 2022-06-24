<?php

namespace Projeto\Cofre\Process\Encrypt;

use Projeto\Cofre\Domain\Credential;

class Encrypt
{

    private string $password;
    private Key $key;

    public function __construct(Credential $credential)
    {
        $this->password = $credential->getPassword();
        $this->key = new Key();
    }

    public function encryptPassword(): string
    {
        
        $passwordEncrypted = openssl_encrypt(
            $this->password,
            "aes256",
            $this->key->getKey(),
            OPENSSL_RAW_DATA,
            $this->key->getIv()
        );

        return base64_encode($passwordEncrypted);
    }

}