<?php

require 'vendor/autoload.php';

class Database
{

    private static $instance;
    private $mysqli;

    private function __construct()
    {

        $hostname = '127.0.0.1';
        $username = '';
        $password = '';
        $database = '';

        $this->mysqli = new mysqli($hostname, $username, $password, $database);

        if ($this->mysqli->connect_error) {

            die('Connection failed: ' . $this->mysqli->connect_error);

        }

    }

    private function __clone()
    {



    }

    function __wakeup()
    {

        throw new \Exception('Cannot unserialize a singleton.');

    }

    static function getInstance(): Database
    {

        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;

    }

    public function getConnection()
    {

        return $this->mysqli;

    }

}