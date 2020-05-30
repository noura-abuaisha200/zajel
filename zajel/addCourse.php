<?php
require_once('login/functions/connect.php');
$addCourseSQL="INSERT INTO signup(studentId,courseId,sectionId)
VALUES('$studentId','$courseId','$section')";
if ($conn->query($addCourseSQL)) {?>
<?php
}
