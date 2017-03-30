<?php  
   $response = array();  
   if (isset($_POST['name']) && isset($_POST['password'])) {  
      $name = $_POST['name'];  
      $password = $_POST['password'];  
      // include db connect class  
      require_once __DIR__ . '/ database_connect.php';  
      // connecting to db  
      $db = new DB_CONNECT();  
      $result = mysql_query("INSERT INTO players(name, price) VALUES('$name', '$password')");  
      // check if row inserted or not  
      if ($result) {  
         $response["success_msg"] = 1;  
         $response["message"] = "Product successfully Insert.";  
         echo json_encode($response);  
      } else {  
         // failed to insert row  
         $response["success_msg "] = 0;  
         $response["message"] = "Product not insert because Oops! An error occurred.";  
         // echoing JSON response  
         echo json_encode($response);  
      }  
   }  
?>  