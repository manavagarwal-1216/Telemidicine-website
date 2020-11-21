<?php
session_start();

require_once('conn.php');

// if(isset($_SESSION['user'])){
//     header('Location: index1.php');
// }
if($_POST['signin'])
{
  $userName = $_POST['phone'];
  $userPass = $_POST['your_pass'];

  $find=array('Mobile'=> $userName , 'password'=> $userPass);

  $user = $collection->findOne($find);
  var_dump($user);
  //$user->limit(1);
  if($user){
    $success = "You are successully loggedIn";
    header('Location: index1.html');
    }
    else {
    die("Mongo DB not installed");
    }
  //if ($user->count(true) > 0){

 
    //header("Location: index1.html")
  //}
  }

