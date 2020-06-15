<?php
namespace Core;

use PDO;

class Database {
    private static $db;

    public static function getConnection(){
        if(empty(self::$db)) {
            $pdo = new PDO(
                'mysql:host=localhost;dbname=administracionthakhi;charset=utf8',
                'root',
                ''
            );

            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            self::$db = $pdo;  
        }

        return self::$db;
    }
}