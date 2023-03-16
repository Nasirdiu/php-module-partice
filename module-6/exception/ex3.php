<?php
class ServerLoadException extends Exception
{
}
class NetworkException extends Exception
{
}
class DiskFullException extends Exception
{
}

interface NetworkStorage
{
    function connect();
    function getName();

}

class MySQLServer implements NetworkStorage
{
    function connect()
    {
        throw new DiskFullException;
    }
    function getName(){
        return "MySQL";
    }
}

class PostgreServer implements NetworkStorage
{
    function connect()
    {
        return $this;
    }

    function getName(){
        return "PostgreSQl";
    }
}


class MySSQLServer implements NetworkStorage
{
    function connect()
    {
        throw new NetworkException;
    }

    function getName(){
        return "MSSQL";
    }
}


class ConnectionPool{
    private $connection;
    private $storage;
    function __construct(){
        $this ->storage=array();
    }
    function addStorage(NetworkStorage $storage)
{
    array_push($this->storage, $storage);
}
function getConnetion(){
      foreach($this->storage as $storage){
        try{
           $connection= $storage->connect();
        }catch(ServerLoadException $e){
            echo $storage->getName()."is frcing huge load";
        }catch(NetworkException $e){
            echo $storage->getName()."is frcing huge load problem network";
        }catch(DiskFullException $e){
            echo $storage->getName()."it's disk full";
        }
        if($this->connection){
            break;
          }
      }
     
      if($this->connection){
        return $this->connection;
      }
      return false;
}


}

$mysql=new MySQLServer();
$pgsql=new PostgreServer();
$cp=new MySSQLServer();

$cp=new ConnectionPool();
$cp->addStorage($mysql);
$cp->addStorage($pgsql);
$cp->addStorage($mssql);

$connection=$cp->getConnetion();

print_r($connection);