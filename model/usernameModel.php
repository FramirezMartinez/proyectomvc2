<?php 
  class usernameModel
  {
      private $PDO;
  
      public function __construct()
      {
          require_once ("c://xampp/htdocs/proyectoSL2/config/db.php");
          $con = new db();
          $this->PDO = $con->conexion();
      }
  
      public function insertar($nombretipo)
      {
          try {
              $stament = $this->PDO->prepare("INSERT INTO tiposproductos (NombreTipo) VALUES (:NombreTipo)");
              $stament->bindParam(":NombreTipo", $nombretipo);
              return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
          } catch (PDOException $e) {
              // Manejo de excepciones: Mostrar un mensaje de error o log, o redirigir a una página de error
              echo "Error al insertar en la base de datos: " . $e->getMessage();
              return false;
          }
      }

      public function show($id)
      {
          try {
              $statement = $this->PDO->prepare("SELECT * FROM tiposproductos WHERE Idtip = :id ");
              $statement->bindParam(":id", $id);
  
              echo "SQL: " . $statement->queryString; // Muestra la consulta SQL
  
              if ($statement->execute()) {
                  $data = $statement->fetch();
                  var_dump($data);
                  return $data;
              } else {
                  var_dump($statement->errorInfo());
                  return false;
              }
          } catch (PDOException $e) {
              // Registra el error en un archivo de registro, muestra un mensaje de error o redirige a una página de error según tus necesidades.
              error_log("Error al obtener datos de la base de datos: " . $e->getMessage());
              return false;
          }
      }
  

      
      
  }
  
?>
