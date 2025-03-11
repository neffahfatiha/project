<?php
include "conn.php";
$id=$_GET['id_del'];
// التحقق من أن المتغيرات تم إرسالها عبر POST

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$numberT = $_POST['numberT'];
$sex = $_POST['sex'];
$num_of_visite = $_POST['num_of_visite'];

    // تصحيح جملة SQL وإضافة تحقق من نجاح الاستعلام
    mysqli_query($conn, "delete from `user_dent`  where id='$id'");
   
        header('Location: index.php');
       
?>