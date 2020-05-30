<?php require_once('login/functions/connect.php');
    $deleteAllCourse="DELETE 
    FROM signup where studentId=$studentId";
    if ($conn->query($deleteAllCourse)) {
        {?>
            <script>alert('تم حذف المساق بنجاح');</script>
        <?php
        header("Refresh:0;url=sign-up.php");
        }
    }
?>
