<?php

class DBcontroller
{
    //database connection properties
    protected $host="localhost";
    protected $user="root";
    protected $password="rajashri";
    protected $database="mobileshopee";

    //connection property
    public $con=null;

    //call construcotr
    public function __construct()
    {
        $this->con= mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if($this->con->connect_error){
            echo "fail".$this->con->connect_error;
        }
    }

    public function __destruct(){
        $this->closeConnection();
    }

    //for mysqli closing connection
    protected function closeConnection(){
        if($this->con !=null){
            $this->con->close();
            $this->con=null;
        }
    }
}

