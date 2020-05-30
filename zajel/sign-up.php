<?php
ob_start();
session_start();
$studentId=$_SESSION['studentId'];
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <title>edit of Student</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sign-up.css">
    <link rel="icon" href="https://static.canva.com/static/images/android-192x192.png" sizes="192x192">

</head>

<body>

    <div class="container">

        <div class="main">

            <h1>زاجل - البرنامج الأكاديمي لجامعة النجاح الوطنية</h1>

            <div class="navbar">
                <ul>
                    <li><a href="index.php">الصفحة الرئيسية</a></li>
                    <li><a href="#">العلامات اليومية</a></li>
                    <li><a href="#">البرنامج</a></li>
                    <li><a href="grades.php">كشف العلامات</a></li>
                    <li><a href="study-plan.html">الخطة الدراسية</a></li>
                    <li><a href="#">خطط المساقات</a></li>
                    <li><a href="attendance.html">الحضور والغياب</a></li>
                    <li><a href="#">نماذج الكترونية</a></li>
                    <li><a href="#">مراسلة الدائرة المالية</a></li>
                    <li><a href="#">الأعمال الفصلية</a></li>
                    <li><a href="sign-up.php">التسجيل</a></li>
                    <li><a href="#">ملتقى القران الكريم</a></li>
                    <li><a href="#">الكتب المستعارة</a></li>
                    <li><a href="setting.php"><i class="fa fa-cogs"></i></a></li>
                </ul>
            </div>

            <img class="right-img" src="images/s.png" alt="najah" width="150" height="150">
            <a href="https://moodle.najah.edu/"><img class="left-img" src="images/moodle.png" alt="moodle" width="150"
                    height="92"></a>

            <div class="info sign-up">
                <ul>
                    <li>مجموع الساعات المدفوعة:18</li>
                    <li>الساعات المسجلة:#</li>
                    <li>الساعات المتبقية:#</li>
                </ul>

                <table class="one">
                    <caption>
                        <h3>البرنامج</h3>
                        <a href="sign-up.php?deleteAll"><img class="trash" src="images/trash.png" width="35" height="35" alt="trash">
</a>
                    </caption>
                    <thead>
                        <tr>
                            <td>الحالة</td>
                            <td>اسم المساق</td>
                            <td>س.م</td>
                            <td><img src="images/2020-05-02_011340.png" width="30" height="30" alt="pointer"></td>
                            <td>اليوم</td>
                            <td>من</td>
                            <td>الى</td>
                            <td>القاعة</td>
                            <td>المدرس</td>
                            <td>رقم المساق حسب الخطة</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once('getSignUpCourse.php');
                        while ($signUp=$getSignUpResult->fetch_assoc()) {
                            ?>
                        <tr>
                            <td>
                            <input type='checkbox' for='c' />
                            <a  href="sign-up.php?delete=<?php echo $signUp['courseId']; ?>">
حذف
                        </a>
                            </td>
                            <td><?php echo $signUp['courseName']; ?></td>
                            <td><?php echo $signUp['courseClock']?></td>
                            <td><?php echo $signUp['campus']; ?></td>
                            <td><?php echo $signUp['courseDay']; ?></td>
                            <td><?php echo $signUp['courseFrom']; ?></td>
                            <td><?php echo $signUp['CourseTo']; ?></td>
                            <td><?php echo $signUp['room']; ?></td>
                            <td><?php echo $signUp['courseTeacher']; ?></td>
                            <td><?php echo $signUp['courseId']; ?></td>
                        </tr>
                        <?php
                        } ?>
                       
                    </tbody>
                </table>

                <table class="two">
                    <tbody>
                        <tr>
                            <td onclick='getMand()'>اجباري جامعة</td>
                            <td colspan='2'>مطلوب 18 س.م</td>
                            <td>منجز#س.م</td>
                        </tr>
                        <?php
                            require_once('getCourse.php');
                            while ($course=$getCourseResult->fetch_assoc()) { ?>
                        
                         <tr class='display-none xx'> 
                            <td><?php echo $course['courseId'];?>
                        </td>
                            <td><?php echo $course['courseClock'];?></td>
                            <td><img src='images/wonder.png'></td>
                            <td><a href="sign-up.php?det&courseId=<?php echo $course['courseId']?>"><?php echo $course['courseName'];?> </a> 
                            <img  onclick='getinsideTable()' src='images/pen.png' />
                            <?php
                                require_once('getDepends.php'); ?>  
                                <table class='inside-table'>
                                    <?php while ($courseD=$getDepResult->fetch_assoc()) {
                                    $CourseDId=$courseD['courseDepends'];
                                    $getSignleCourse="SELECT * FROM course 
                                        where courseId='$CourseDId'";
                                    $singleResult=$conn->query($getSignleCourse);
                                    while ($signCourse=$singleResult->fetch_assoc()) {
                                        ?>
                                <tr class="tr">
                                    <td><?php echo $signCourse['courseId']; ?></td>
                                    <td><?php echo $signCourse['courseClock']; ?></td>
                                    <td><?php echo $signCourse['courseName']; ?></td>

                                </tr>
                                    <?php
                                    }
                                }?>
                                </table>                         
                        </td>
                        </tr>
                            <?php } ?>
                      

                        <tr>
                            <td>اجباري تخصص</td>
                            <td>مطلوب ## س.م</td>
                            <td>منجز#س.م</td>
                        </tr>
                        <tr>
                            <td>اختياري تخصص</td>
                            <td>مطلوب ## س.م</td>
                            <td>منجز#س.م</td>
                        </tr>

                    </tbody>
                </table>
<?php
if (isset($_GET['add'])) {
                                    $courseId=$_GET['add'];
                                    $section=$_GET['section'];
                                    require_once('addCourse.php');
                                    header("location:sign-up.php");
                                }

if (isset($_GET['delete'])) {
    $courseId=$_GET['delete'];
    require_once('deleteCourse.php');
    header("location:sign-up.php");
}
if (isset($_GET['deleteAll'])) {
    require_once('deleteAll.php');
    header("location:sign-up.php");
}
?>

<?php
if (isset($_GET['det'])) {
    $courseId=$_GET['courseId'];
    require_once('getSection.php'); ?>

<style>

    .three{display:table-row;}
    .xx{display:table-row;}

</style>
            <table class="three">
                    <thead>
                        <tr>
                            <td>اسم المدرس</td>
                            <td>شعبة</td>
                            <td><img src="images/2020-05-02_015553.png" width="30" height="30" alt="pointer"></td>
                            <td>اليوم</td>
                            <td>من</td>
                            <td>الى</td>
                            <td>عدد</td>
                        </tr>
                    </thead>
                    <tbody>
    <?php
    while ($sections=$getSectionResult->fetch_assoc()) {
        ?>
                        <tr>
                        <td><?php echo $sections['courseTeacher']; ?></td>
                            <td><?php echo $sections['sectionNumber']; ?>
                            <a href="sign-up.php?section=<?php echo $sections['sectionNumber']; ?>&add=<?php echo $sections['courseId']; ?>">
                                <img src="images/black.png" width="20" height="20" alt="black">
    </a></td>
                            <td><?php echo $sections['campus']; ?></td>
                            <td><?php echo $sections['courseDay']; ?></td>
                            <td><?php echo $sections['courseFrom']; ?></td>
                            <td><?php echo $sections['CourseTo']; ?></td>
                            <td><?php echo $sections['capacity']; ?></td>
                        </tr>
    <?php
    }
}?>
                       
                    </tbody>
                </table> 

            </div>

        </div>

    </div>
    <script>
        function getDetails()
        {
            var detecount = document.getElementsByClassName("three").length;
    for (var i = 0; i < detecount; i++) {
        if (document.getElementsByClassName("three")[i].style.display == 'none') {
            document.getElementsByClassName("three")[i].style.display = 'table-row';
        } else {
            document.getElementsByClassName("three")[i].style.display = 'none';
        }
    }

        }
        </script>
    <script>
        function getinsideTable()
         {
            var Insidecount = document.getElementsByClassName("inside-table").length;
    for (var i = 0; i < Insidecount; i++) {
        if (document.getElementsByClassName("inside-table")[i].style.display == 'none') {
            document.getElementsByClassName("inside-table")[i].style.display = 'table-row';
        } else {
            document.getElementsByClassName("inside-table")[i].style.display = 'none';
        }
    }
             
        }

</script>
<script src='script.js'></script>
</body>

</html>