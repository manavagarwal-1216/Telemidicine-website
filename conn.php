
<?php
//connection and registering the data is this page only, not sepaerate register action
//for now  
require 'vendor/autoload.php';  
// Creating Connection  
$con = new MongoDB\Client("mongodb://localhost:27017");  
// Creating Database  
$db = $con->NOSQL_Project;  
// Creating Document  
$collection = $db->user;  

