<?php
require_once('login/functions/connect.php');
$getSignUpSQL="SELECT * FROM signup 
inner join course on signup.courseId=course.courseId
inner JOIN student on signup.studentId=student.studentId
inner join courseSection on signup.sectionId=courseSection.sectionNumber
where student.studentId=$studentId";
$getSignUpResult=$conn->query($getSignUpSQL);
