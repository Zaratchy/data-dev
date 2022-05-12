<?php

class Manager
{
    protected function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=poteau_bastin;charset=utf8', 'root', '');
        return $db;
    }
}