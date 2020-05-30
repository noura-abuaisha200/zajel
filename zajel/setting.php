<?php
ob_start();
session_start();
$studentId=$_SESSION['studentId'];
require_once('login/functions/getStudentData.php'); ?>

?>
<!DOCTYPE html>
<html>

  <head>
    
    <meta charset="UTF-8">
    <title>edit of Student</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">  
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/setting.css">  
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
                      <li><a href="study-plan.php">الخطة الدراسية</a></li>
                      <li><a href="#">خطط المساقات</a></li>
                      <li><a href="attendance.php">الحضور والغياب</a></li>
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
              <a href="https://moodle.najah.edu/"><img class="left-img" src="images/moodle.png" alt="moodle" width="150" height="92"></a>
              
              <div class="info">
                <div class="setting">  
                
                  
                  <div class="section">
                      <div class="right">
                          <img src="images/account.png" alt="account" width="100" height="185">
                          <i class="fa fa-plus"></i>
                      </div>
                      <div class="left">
                          <form action='updatePassword.php' method='post'>
                              
                              <div class="group">
                                 <label> كلمه المرور الحالية  :</label> <span><?php echo $studentData['studentPassword'];?></span>
                              </div>   
                              
                              <div class="group">
                                 <label>كلمه المرور الجديده :</label><input name='newPassword' type="password" placeholder="ادخل كلمه المرور الجديده">
                              </div>
                              
                              <div class="group">
                               <input type="submit" value="تعديل كلمه المرور">
                              </div>
                              
                          </form>
                      </div>
                  </div> 
                    
                    <div class="position">
                      <button class="one">المعلومات الشخصية</button><img src="images/pepole.png" width="45" height="45">
                        <button class="two">كلمة المرور</button><img src="images/lock.png" width="45" height="45">
                    </div>    
                  
              </div>    
              </div>  
          </div>
      </div>
      
  </body>
  
</html>