<?php

namespace Projeto\Cofre\Process\Decrypt;

use Projeto\Cofre\Domain\Credential;
use Projeto\Cofre\Process\Encrypt\Key;

class Decrypt
{

    private string $password;

    public function __construct(Credential $credential)
    {
        $this->password = $credential->getPassword();
        $this->key = new Key();
    }

    public function decryptPassword(): string
    {
        $pass = base64_decode($this->password);
    
        $passwordDecrypted = openssl_decrypt(
            $pass,
            "aes256",
            "632AC97D8D04301DE2FA4AEA5CC31E86C362F738E5197C0C1F74E65E044B2AA2",
            OPENSSL_RAW_DATA,
            "DD75A841923077CF"
        );

        return $passwordDecrypted;

    }

}