<?php

namespace Projeto\Cofre\Encrypt;

use Projeto\Cofre\Credential;

class Encrypt
{

    private string $password;
    private string $key;

    public function __construct(Credential $credential, $key)
    {
        $this->password = $credential->getPassword();
        $this->key = $key;
    }

    public function encryptPassword(): string
    {
        $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length("aes256"));
        $passwordEncrypted = openssl_encrypt(
            $this->password,
            "aes256",
            $this->key,
            OPENSSL_RAW_DATA,
            $iv
        );

        return base64_encode($passwordEncrypted);
    }

}