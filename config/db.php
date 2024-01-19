<?php
class db{

    private $host="localhost";
    private $dbname="dbporoyecto";
    private $user="root";
    private $password="";
    
   
    public function conexion() {
        try {
            $PDO = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->user, $this->password);
            // Configurando el modo de error para que PDO lance excepciones en lugar de mostrar warnings
            $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $PDO;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

}
?>