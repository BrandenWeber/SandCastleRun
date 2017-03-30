<?php  
  
   /* 
 
   * Following code will get single player details 
 
   * A player is identified by player username (username) 
 
   */  
  
   // array for JSON response  
  
   $response = array();  
  
   // include db connect class  
  
   require_once __DIR__ . '/database_connect.php';  
  
   // connecting to db  
  
   $db = new DB_CONNECT();  
  
   // check for post data  
  
   if (isset($_GET["username"])) {  
  
      $username = $_GET['username'];  
  
      // get a player from players table  
  
      $result = mysql_query("SELECT *FROM players WHERE username = $username");  
  
      if (!emptyempty($result)) {  
  
         // check for empty result  
  
         if (mysql_num_rows($result) > 0) {  
  
            $result = mysql_fetch_array($result);  
  
            $player = array();  
  
            $player["pid"] = $result["pid"];  
  
            $player["name"] = $result["name"];  
  
            $player["password"] = $result["password"];  
  
  
            // success  
  
            $response["success"] = 1;  
  
            // user node  
  
            $response["player"] = array();  
  
            array_push($response["player"], $player);  
  
            // echoing JSON response  
  
            echo json_encode($response);  
  
         } else {  
  
            // no player found  
  
            $response["success"] = 0;  
  
            // echo no users JSON  
  
            echo json_encode($response);  
  
         }  
  
      } else {  
  
         // no player found  
  
         $response["success"] = 0;  
  
         // echo no users JSON  
  
         echo json_encode($response);  
  
      }  
  
   }  
  
?>  
  
{  
  
   "success": 1,  
  
   "player": [  
  
      {  
  
         "pid": "1",  
  
         "username": "pez",  
  
         "password": "hello",  
  
      }  
  
   ]  
  
}  