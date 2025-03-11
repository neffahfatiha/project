


<?php
include "conn.php";
$id=$_GET['id_edit'];
// التحقق من أن المتغيرات تم إرسالها عبر POST

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $numberT = $_POST['numberT'];
    $sex = $_POST['sex'];
    $num_of_visite = $_POST['num_of_visite'];

    // تصحيح جملة SQL وإضافة تحقق من نجاح الاستعلام
    mysqli_query($conn, "update `user_dent` set firstname='$firstname', lastname='$lastname', age='$age', numberT='$numberT', sex='$sex' , num_of_visite='$num_of_visite' where id='$id'");
   
        header('Location: index.php');
       
?>
