<?php

require_once('conn.php'); 

$collect=$db->patient_info;
 
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
    if($collect->insertOne($insert))
    {
        
        header("Location:patientinfo.php");
    }
}
else{
    echo"data not inserted";
}
?>