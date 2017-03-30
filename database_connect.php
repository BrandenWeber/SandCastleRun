define('DB_USER', "root"); // db user  
define('DB_PASSWORD', "j7yj2p7rxfd"); // db password  
define('DB_DATABASE', "sandcastlerun"); // database name  
define('DB_SERVER', "35.184.235.130"); // db server/ host name  
<?php  
/** 
* A class file to connect to database 
*/  
class DATABASE_CONNECT {  
// constructor  
function __construct() {  
// connecting to database  
$this->connect();  
}  
// destructor  
function __destruct() {  
// closing db connection  
$this->close();  
}  
function connect() {  
$con = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD) or die(mysql_error());  
$db = mysql_select_db(DB_DATABASE) or die(mysql_error()) or die(mysql_error());  
return $con;  
}  
/** 
* Function to close db connection 
*/  
function close() {  
// closing db connection  
mysql_close();  
}  
}  
?>  
$MY_DB = new DB_CONNECT();  