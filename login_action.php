<?php
session_start();



require_once('conn.php');

$collection=$db->user;
// if(isset($_SESSION['user'])){
//     header('Location: index1.php');
// }
if($_POST['signin'])
{
  $userName = $_POST['phone'];
  $userPass = $_POST['your_pass'];

  $find=array('Mobile'=> $userName , 'password'=> $userPass);

  $user = $collection->findOne($find);
  //var_dump($user);
  //$user->limit(1);
  if($user){
    $_SESSION["username"]=$user["name"];
    $_SESSION["userphone"]=$userName;
    $_SESSION["email"]=$user["email"];
    //echo  $_SESSION["userphone"];
    header('Location: index1.php');
    }
    else {
      //echo  $_SESSION["username"];
    echo "Wrong credential,<a href='login.php'>Login again?</a> ";
    }
  //if ($user->count(true) > 0){

 
    //header("Location: index1.html")
  //}
  }

