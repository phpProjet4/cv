<?php



/**
 * class Database gère la connexion à la base de donnée
 */
class Database{

    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;


    /**
     * @param string $db_name -> nom de la base de donnée
     * @param string $db_user -> nom d'utilisateur
     * @param string $db_pass -> mot de passe
     * @param string $db_host -> adresse de l'hôte
     */
    public function __construct($db_name, $db_user = 'root', $db_pass = 'root', $db_host){
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
    }
    


    /**
     * @return object retourne l'objet pdo
     */
    private function getPDO() {
            $pdo = new PDO('mysql:dbname=' . $this->db_name . ';host=' . $this->db_host . '', $this->db_user, $this->db_pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
            return $pdo;
    }


    /**
     * @param [string] $statement contient la requête SQL à executer
     * @return array retourne un tableau associatif contenant les données issues de la requête
     */
    public function query($statement) {
        $req = $this->getPDO()->query($statement);
        $datas = $req->fetchAll(PDO::FETCH_OBJ);
        return $datas;
    }

    
    /**
     * @param [string] $statement contient la requête sql
     * @param [array] $array contient le tableau des attributs à passé dans la requête
     * @return void
     */
    public function prepare($statement,$array) {
        $req = $this->getPDO()->prepare($statement);
        $req->execute($array);
        $datas = $req->fetchAll();
        return $datas;
    }


    

    
}

?>

