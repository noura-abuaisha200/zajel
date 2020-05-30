<?php
require_once('connect.php'); # الاتصال بقاعده البيانات
# جلب التخصصات المتاحه من قاعده البيانات
$getMajorSQL="SELECT * FROM major";
$getMajorResult=$conn->query($getMajorSQL);
