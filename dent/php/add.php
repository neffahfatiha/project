<?php
include "conn.php";

// التحقق من أن المتغيرات تم إرسالها عبر POST

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $numberT = $_POST['numberT'];
    $sex = $_POST['sex'];
    $num_of_visite = $_POST['num_of_visite'];
    // تصحيح جملة SQL وإضافة تحقق من نجاح الاستعلام
    $query = "INSERT INTO user_dent (firstname, lastname, age, numberT ,sex , num_of_visite) VALUES ('$firstname', '$lastname',  '$age' ,'$numberT', '$sex' ,'$num_of_visite')";
    if (mysqli_query($conn, $query)) {
        header('Location: index.php');
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
       
?>