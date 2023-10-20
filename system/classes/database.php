
 <?php
include "../config/config.php";

class database
{
    private $host = HOST;
    // private $localhost = "LOCALHOST";
    // private $root = "ROOT";
    private $database = DATABASE;
    private $user = USER;
    private $password = PASSWORD;

    private $pdo;
    public $result;

    public function __construct()
    {
        try {
            $this->pdo = new PDO("mysql:host={$this->host};dbname={$this->database}", $this->user, $this->password);
        } catch (PDOException $e) {
            echo "Something wrong: {$e->getMessage()}";
        }
    }

    public function query($qry, $params = [])
    {
        $this->result = $this->pdo->prepare($qry);
        $this->result->execute($params);

        return $this->result;
    }
    public function rowCount(){
       return $this->result->rowCount();
    }
    public function fetchAll(){
        return $this->result->fetchAll(PDO::FETCH_OBJ);
    }
    public function fetch(){
        return $this->result->fetch(PDO::FETCH_OBJ);

        
    }
}