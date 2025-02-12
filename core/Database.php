<?php
namespace Core;

use PDO;

class Database {
    private static $db;

    public static function getConnection(){
        if(empty(self::$db)) {
            /*$pdo = new PDO(
                'mysql:host=localhost;dbname=administracionthakhi;charset=utf8',
                'root',
                ''
            );*/
            $pdo = new PDO(
                'mysql:host=54.39.105.50;dbname=ariwara_administracionthakhi;charset=utf8',
                'ariwara_thakhi',
                'Sistemas.123'
            );

            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            self::$db = $pdo;  
        }

        return self::$db;
    }
}