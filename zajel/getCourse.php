<?php
require_once('login/functions/connect.php');
$getCourseSQL="SELECT * FROM course where courseType=1";
$getCourseResult=$conn->query($getCourseSQL);
