<?php
class Database
{
    private static $connection;
    private const host = "localhost";
    private const username = "root";
    private const password = "";
    private const database = "db";

    public static function getConnection()
    {
        if(self::$connection == null){
            self::$connection = new mysqli(self::host, self::username, self::password, self::database);
            // Check connection
            if (self::$connection->connect_error) {
                die("Connection failed: " . self::$connection->connect_error);
            }
            //echo "Connected successfully";
        }
        return self::$connection;
    }

    public static function close()
    {
        self::$connection->close();
    }
}