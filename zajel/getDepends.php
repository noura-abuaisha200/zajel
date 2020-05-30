<?php
 require_once('login/functions/connect.php');
$Thiscourse=$course['courseId'];
$getDepSQL="SELECT * FROM courseDepends inner join course on course.courseId=courseDepends.courseId where course.courseId=$Thiscourse
";
$getDepResult=$conn->query($getDepSQL);

