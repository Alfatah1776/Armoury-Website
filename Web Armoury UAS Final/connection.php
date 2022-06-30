<?php

//For OOP
class Connection
{
    private $host = 'sql307.epizy.com',
            $user = 'epiz_30938511',
            $password = 'fY26OkK5YC',
            $database = 'epiz_30938511_armoury_db';

    protected $connection;

    function __construct()
    {
        if(!isset($this->connection))
        {
            $this->connection = new mysqli($this->host, $this->user, $this->password, $this->database);
        }
        if(!$this->connection)
        {
            print "An error occurred";
        }
        // else
        // {
        //     print "Success";
        // }
    }
}

$callConnection = new Connection ();
?>

