<?php
class basedonnees
{
    private $host = 'localhost';
    private $dbname = 'dsi22_g11';
    private $user = 'root';
    private $pwd = '';
    
    public $pdo = null;
     
    public function connectdb()
    {
        try {
            $this->pdo = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname, $this->user, $this->pwd);
            
        } catch (EDOException $e) {
           echo $e->getMessage();

        }
        return $this->pdo;
    }
}

?>
