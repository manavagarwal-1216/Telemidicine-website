<?php
require_once('conn.php');

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
    header("Location:login.php");
  }
}
else{
  echo"data not inserted";
}
?> 