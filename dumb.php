<?php
$servername="localhost";
$username="root";
$password="";
$databasename="project";

$conn=mysqli_connect($servername,$username,$password) or die("error".mysqli_error($conn));
$db=mysqli_select_db($conn,$databasename) or die("error".mysqli_error($conn));


$name=$_POST["name"];
$email=$_POST["email"];
$age=$_POST["age"];
$city=$_POST["city"];
$password=$_POST["password"];



$query1="SELECT * from user WHERE email='".$email."' ";
$test=mysqli_query($conn,$query1);
if(mysqli_num_rows($test)>0
!-----------------------------------------------------
var mongo = require('mongodb');
var assert = require('assert');

var url = 'mongodb://localhost:27017/loodgieters';

router.get('/get-data', function(req, res, next) {
  var resultArray = [];
  mongo.connect(url, function(err, db){
    assert.equal(null, err);
    var cursor = db.collection('user-data').find();
    cursor.forEach(function(doc, err){
      assert.equal(null, err);
      resultArray.push(doc);
    }, function(){
      db.close();
      res.render('index', {items: resultArray});
  ----------------------------------------------------------------
  <?php

    $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
    $qry = new MongoDB\Driver\Query([]);
     
    $rows = $mng->executeQuery("productdb.products", $qry);
   
    foreach ($rows as $row) {
   
         foreach ($rows as $row) {
        echo nl2br("$row->item : $row->qty\n");
    }

    }
   
?>