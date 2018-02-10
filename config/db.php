<?php
/**
 *class connection
 */

class db
{
    private $connection;

    public function __construct()
    {
        global $config;
        $host = $config['db']['host'];
        $user = $config['db']['user'];
        $pass = $config['db']['pass'];
        $name = $config['db']['name'];
        $this->connection = new mysqli($host, $user, $pass, $name);
        if ($this->connection->connect_error) {
            echo "Connection failed: " . $this->connection->connect_error;
            exit;
        }
        $this->connection->set_charset('utf8');
    }

    public function query($sql)
    {
        $connection = $this->connection;
        return $connection->query($sql);
    }

    public function connection(){
        return $this->connection;
    }

    public function close(){
        $this->connection->close();
    }
}