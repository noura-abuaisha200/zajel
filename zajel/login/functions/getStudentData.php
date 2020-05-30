<?php
require_once('connect.php');
 $studentId=$_SESSION['studentId'];
$getStudentDataSQL="SELECT * FROM student
INNER JOIN major 
on student.studentMajorId=Major.majorId
inner join superviser
on student.superviserId=superviser.superviserId 
where student.studentId='$studentId'";
$getStudentResult=$conn->query($getStudentDataSQL);
$studentData=$getStudentResult->fetch_assoc();
