<?php
ob_start();
require_once('connect.php');
session_start();
$userId=$_POST['userId'];
$userPassword=$_POST['userPassword'];

$checkDataSQL="SELECT * FROM student where 	studentId='$userId' and studentPassword='$userPassword'";
$checkkDataResult=$conn->query($checkDataSQL);
$count=mysqli_num_rows($checkkDataResult);
if ($count==1) {
    $_SESSION['studentId']=$userId;
    header('Refresh:1;url=../../index.php');
} else {?>
<script>
    alert('خطا في ادخال الرقم او كلمه المرور');</script>
<?php     header('Refresh:0;url=../new_user.php');

}
