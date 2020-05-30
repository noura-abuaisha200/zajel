<?php
require_once('login/functions/connect.php');
$getSectionsSQL="SELECT * FROM course 
INNER JOIN courseSection 
on course.courseId=courseSection.courseId 
where course.courseId=$courseId";

$getSectionResult=$conn->query($getSectionsSQL);
