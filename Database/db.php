<?php



$db_server = 'localhost';
$db_user = 'root';
$db_pass ='22092209';
$db_name ='citizen_online';
$conn ='';



  try{

    $conn = mysqli_connect($db_server,$db_user,$db_pass, $db_name);

    // echo"connected successfuly!";
  }catch(mysqli_sql_exception){
    echo "could not connect to the database";
  }






?>