<?php require_once('login/functions/connect.php');
    $deleteCourse="DELETE 
    FROM signup where studentId=$studentId and courseId=$courseId";
    if ($conn->query($deleteCourse)) {
        {?>
            <script>alert('تم حذف المساق بنجاح');</script>
        <?php
        header("Refresh:0;url=sign-up.php");
        }
    }
?>
