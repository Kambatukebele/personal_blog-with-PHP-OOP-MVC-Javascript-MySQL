<?php 

  class Database 
  {
    private function db_connect ()
    {
      try {
        $query = db_DRIVER . ":host=" . db_HOST .";dbname=" . db_NAME; 

        $conn = new PDO($query, db_USER, db_PASS); 
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        showPrint($conn);
        echo "Connected successfully";
        
      } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }    
      
      if($conn){
        return $conn;
      }
    }

    public function db_Read (string $query, array $data)
    {
      // here we going to read from the data
      $conn = $this->db_connect();
    
      $stmt = $conn->prepare($query);
      $stmt->execute($data);
      $result = $stmt->fetchAll(PDO::FETCH_OBJ);

      if(isset($result) && is_array($result)) {
        return $result;
      }

      return false;
    }

    public function db_ReadRow (string $query, array $data)
    {
      // here we going to read from the data
      $conn = $this->db_connect();
    
      $stmt = $conn->prepare($query);
      $stmt->execute($data);
      $result = $stmt->fetchAll(PDO::FETCH_OBJ);

      if(isset($result) && is_array($result)) {
        return $result[0];
      }

      return false;
    }


    public function db_Write (string $query, array $data)
    {
      //Here we going to save to the db

      $conn = $this->db_connect();

      $stmt = $conn->prepare($query);
      $stmt->execute($data);
      
      if(isset($result)) {
        return $result;
      }

      return false;
    }


  }

  $db = new Database();
 