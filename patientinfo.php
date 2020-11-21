<?php
//connection and registering the data is this page only, not sepaerate register action
//for now  
require 'vendor/autoload.php';  
// Creating Connection  
$con = new MongoDB\Client("mongodb://localhost:27017");  
// Creating Database  
$db = $con->NOSQL_Project;  
// Creating Document  
$collection = $db->patient_info;  
// Insering Record
if($_POST['submit'])
{
    $insert=array(
        'first_name'=>$_POST['fname'],
        'last_name'=>$_POST['lname'],
        'age'=>$_POST['age'],
        'gender'=>$_POST['gender'],
        'date_of_birth'=>$_POST['dob'],
        'blood_group'=>$_POST['blood_group'],
        'email'=>$_POST['email'],
        'Phone_no'=>$_POST['phoneno'],
        'telephone_no'=>$_POST['teleno'],
        'House_no'=>$_POST['houseno'],
        'Area'=>$_POST['area'],
        'city'=>$_POST['city'],
        'state'=>$_POST['state'],
        'country'=>$_POST['country'],
        'pincode'=>$_POST['pincode'],
    );
    if($collection->insertOne($insert))
    {
        header("Location:patientinfo.html");
    }
}
else{
    echo"data not inserted";
}
?>