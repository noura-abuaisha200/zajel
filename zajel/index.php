<?php
session_start();
if (!isset($_SESSION['studentId'])) {
    header('location:login/new_user.php');
} else {
    require_once('login/functions/getStudentData.php'); ?>
<!DOCTYPE html>
<html>

  <head>
    
    <meta charset="UTF-8">
    <title>edit of Student</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">  
    <link rel="stylesheet" href="css/main.css">  
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
                      <li><a href="logout.php">تسجيل الخروج</a></li>
                      <li><a href="setting.php"><i class="fa fa-cogs"></i></a></li>
                  </ul>
              </div>
              
              <img class="right-img" src="images/s.png" alt="najah" width="150" height="150">
              <a href="https://moodle.najah.edu/"><img class="left-img" src="images/moodle.png" alt="moodle" width="150" height="92"></a>
              
              <div class="info">
                <img class="messages" onclick='v_hidden1()' src="images/messages.png" alt="messages" width="70" height="70">  
                <img class="wifi" src="images/wifi.png" alt="wifi" width="120" height="90">
                <img class="messages-block" onclick="v_hidden2()" src="images/messages-block.png" alt="messages-block" width="85" height="85">
                <img class="hand v_hidden1" src="images/hand.png" alt="hand" width="100" height="80">
                <div class='advertising'>
                    <ul>
                        <li>اعلانات اداريه</li>
                        <li>اعلانات تدريبيه</li>
                        <li>اعلانات ندوات</li>
                    </ul>
                </div>
                  <div class="section">
                      <div class="right">
                          <img src="images/account.png" alt="account" width="100" height="185">
                          <i class="fa fa-plus"></i>
                      </div>
                      <div class="left">
                          <form>
                              
                              <div class="group">
                                 <label>اسم الطالب :</label><input type="text"  placeholder="<?php echo $studentData['studentName']; ?>">
                              </div>   
                              
                              <div class="group">
                                 <label>رقم الطالب :</label><input type="text" placeholder="<?php echo $studentData['studentId']; ?>">
                              </div>
                              
                              <div class="group">
                                 <label>اسم المرشد :</label><input type="text"  placeholder="<?php echo $studentData['superviserName']; ?>">
                              </div>
                              
                          </form>
                          <p>المعدل التراكمي : </p> <p><?php echo $studentData['avg']; ?></p>
                      </div>
                  </div> 
                  
              </div>    
              
          </div>
          
          <!--  Div-2  -->
          
                  <div class="text-area" id='text-area'>
                      <textarea placeholder="نص الرسالة"></textarea>
                      <img src="images/account.png" width="40" height="40">
                      <label>اسم الطالب :</label> <?php echo $studentData['studentName']; ?> <br />
                      <label>رقم الطالب :</label><?php echo $studentData['studentId']; ?>
                      <textarea placeholder="نص الرسالة"></textarea>
                      <img class="img-two" src="images/account.png" width="40" height="40">
                      <label>اسم المدرس :</label><input type="text">
                  </div>
                  
              
          
<?php
} ?>
<script src='script.js'></script>
  </body>
  
</html>