<?php
session_start();
ob_start();
require_once('connect.php');#استدعاء صفحه الاتصال بقاعده البيانات
#جلب البيانات التي قام المستخدم بادخالها في النموذج
$id=$_POST['nombre'];
$userName=$_POST['userName'];
$password=$_POST['password'];
$conPassword=$_POST['conPass'];
$email=$_POST['email'];
$idCard=$_POST['ide'];
$phone_intro=$_POST['phone_intro'];
$phoneNumber=$_POST['phoneNumber'];
$major=$_POST['major'];
# ادخال البيانات الى قاعده البيانات
if ($password==$conPassword) {
    $insertStudentDataSQL="INSERT INTO student(studentId,studentName,stuudentPhoneIntro,studentMobile,studentEmail,studentPassword,studentMajorId,idCard)
 VALUES('$id','$userName','$phone_intro','$phoneNumber','$email','$password','$major','$idCard')
";

    if ($conn->query($insertStudentDataSQL)) { ?>
    <script>alert('تم ادخال البيانات بشكل صحيح');</script>
<?php

    $_SESSION['studentId']=$id;
    header('Refresh:1;url=../../index.php');
    
} else {
    echo mysqli_error($conn);
}
} else {?>
    <script>alert('كلمه السر غير متطابقه');</script>
<?php
    header('Refresh:0;url=../new_user.php');

}
