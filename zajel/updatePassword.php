<?php
session_start();
require_once('login/functions/connect.php');
$studentId=$_SESSION['studentId'];
$newPassword=$_POST['newPassword'];

$update="UPDATE student 
SET studentPassword='$newPassword'
where studentId='$studentId'";
if ($query=$conn->query($update)) {
    header('location: setting.php');
}
