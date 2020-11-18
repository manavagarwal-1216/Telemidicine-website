<?php  
require 'vendor/autoload.php';  
// Creating Connection  
$con = new MongoDB\Client("mongodb://localhost:27017");  
// Creating Database  
$db = $con->Project;  
// Creating Document  
$collection = $db->user;  
// Insering Record 
if($_POST)
{
  $insert=array(
    'name'=> $_POST['name'],
    'email'=> $_POST['email'],
    'Mobile'=>$_POST['phone'],
    'password'=>$_POST['pass']

  );
  if($collection->insertOne($insert))
  {
    echo "data inserted successfully";
  }
}
else{
  echo"data not inserted";
} 
// $collection->insertOne( [ 'name' =>'Peter', 'email' =>'kavin@abc.com' ] );  
// Fetching Record  
//$record = $collection->find( [ 'name' =>'kavin'] );  
// foreach ($record as $employe) {  
// echo $employe['name'], ': ', $employe['email']."<br>";  
// }  
?>
