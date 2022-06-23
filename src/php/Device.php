<?php

namespace Projeto\Cofre;

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