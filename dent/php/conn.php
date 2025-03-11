<?php
//طريقةربط بين قاعدة البيانات  و ملف الموجود في vs code
$conn=mysqli_connect("localhost","root","","dent");
//اختبار الاتصال
if(mysqli_connect_errno()){
echo"ليس هناك اتصال بقاعدة البيانات".mysqli_connect_errno();
}



?>