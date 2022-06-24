<?php

namespace Projeto\Cofre\Encrypt;

class Key
{
   private string $file;
   private string $key;
   private string $iv;

   public function __construct()
   {
    
        $this->file = 'C:\xampp\htdocs\projeto\src\archive\data.json';
        $data = $this->decodeJson(file_get_contents($this->file));
        $this->key = $data["data"]["key"];
        $this->iv = $data["data"]["iv"];
   }

   private function decodeJson(string $json)
   {
     return json_decode($json,true);
   }

   public function getKey(): string
   {
    return $this->key;
   }

   public function getIv(): string
   {
    return $this->iv;
   }

}