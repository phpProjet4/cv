<?php


/**
 * sss dddss
 * class App gère l'initialisation de la base de donnée
 */
class App {
    /**
     * @var string DB_NAME -> nom de la base de donnée
     */
    const DB_NAME = 'afipcv';
    /**
     * @var string DB_USER -> nom d'utilisateur
     */
    const DB_USER = 'root';
    /**
     * @var string DB_PASS -> mot de passe de connexion
     */
    const DB_PASS = 'root';
    /**
     * @var string DB_HOST -> hôte de connexion
     */
    const DB_HOST = 'localhost';


    private static $database;

    
    /**
     * @return object 
     */
    public static function getDb() {
        if(self::$database === null) {
            self::$database = new Database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST);
        }
        return self::$database;
    }


}



?>