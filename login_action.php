<?php
session_start();

$collect=$db->user;

require_once('conn.php');

// if(isset($_SESSION['user'])){
//     header('Location: index1.php');
// }
if(isset($_POST['phone']) && isset($_POST['your_pass'])){
    $username = $_POST['phone'];
    $password = hash('sha256', $_POST['your_pass']);
    $result = $db->collection->findOne(array('Mobile'=>$username, 'password'=>$password));
    if(!result)
    {
        echo "fgdtfyhf";
    } else{
        $_SESSION['user']=$result->_id;
        echo "matched";
        header('Location: index1.html');
    }
}