<?php
require_once('conn.php');

$collection=$db->appointment;

if($_POST['book'])
{
  $insert=array(
    'Speciality'=> $_POST['Speciality'],
    'symptoms'=> $_POST['symptoms'],
    'date'=>$_POST['date'],
    'time'=>$_POST['time']

  );
  if($collection->insertOne($insert))
  {
    header("Location:appointment.php");
  }
}
else{
  echo"data not inserted";
}
?> 