<?php

namespace Projeto\Cofre\Domain;

class Device
{

    private string $ip;

    public function __construct(string $ip)
    {
        $this->ip = $ip;    
    }

    public function __toString()
    {
       return "$this->ip";
    }

}