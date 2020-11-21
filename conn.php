
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
// Insering Record 
if($_POST['signup'])
{
  $insert=array(
    'name'=> $_POST['name'],
    'email'=> $_POST['email'],
    'Mobile'=>$_POST['phone'],
    'password'=>$_POST['pass']

  );
  if($collection->insertOne($insert))
  {
    header("Location:login.html");
  }
}
else{
  echo"data not inserted";
} 

if($POST['signin'])
{
  $userName = $_POST['phone'];
  $userPass = $_POST['your_pass'];


  $user = $db->user->findOne(array('Mobile'=> $userName , 'password'=> $userPass));
  $user->limit(1);
  if ($user->count(true) > 0){

 
    header("Location: index1.html")
  }
  }
}

if($POST['submit'])
{
  $insert=array(
    'first_name' =>
  )
}
// $collection->insertOne( [ 'name' =>'Peter', 'email' =>'kavin@abc.com' ] );  
// Fetching Record  
//$record = $collection->find( [ 'name' =>'kavin'] );  
// foreach ($record as $employe) {  
// echo $employe['name'], ': ', $employe['email']."<br>";  
// }  
?>
