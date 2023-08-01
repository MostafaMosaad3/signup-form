<?php
namespace Core\Databases;
use PDO;
use PDOException;
class Connection
{
    public  static  function Make($config)
    {
        try
        {
            return new PDO(
                $config['connection'].";dbname=".$config['dbname'],
                $config['username'],
                $config['password'],
                $config['option']
            );
        }
        catch (PDOException $e)
        {
            die($e->getMessage());
        }
    }
}