<?php
include "db_connection.php";
if(isset ($_POST ["name"]) && isset ($_POST ["age"]) && isset ($_POST ["email"]) && isset ($_POST ["phone"])) 
{
    $name = $_POST["name"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $SQL = "INSERT INTO student.list(name, age, email, phone)VALUES(????)";
    $STMT = $conn ->prepare($SQL);
    $STMT -> execute([$name, $age, $email, $phone]);
}
?>