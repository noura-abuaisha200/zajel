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
    <link rel="stylesheet" href="css/study-plan.css">  
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
                  
                  <div class="study-plan">
                     
                      <ul>
                          <li>مجموع الساعات التي درسها الطالب:##</li>
                          <li>مجموع الساعات التي اتمها بنجاح:##</li>
                          <li>مجموع الساعات المطلوبة:133</li>
                      </ul>
                      
                      <table>
                          
                          <thead>
                              <tr>
                                  <td>مساقات</td>
                                  <td>س,م</td>
                                  <td><img src="images/true.png" alt="true" width="35" height="35"></td>
                              </tr>
                          </thead>
                          
                          <tbody>
                              <tr>
                                  <td class="one must" onclick="getMust()">اجباري جامعة</td>
                                  <td>18</td>
                                  <td>###</td>
                              </tr>
                              <tr>
                                  <td class="one">اجباري تخصص</td>
                                  <td>**</td>
                                  <td>###</td>
                              </tr>
                              <tr>
                                  <td class="one">اختياري تخصص</td>
                                  <td></td>
                                  <td></td>
                              </tr>
                               <tr>
                                  <td class="one">مساقات يمنع دراستها</td>
                                  <td></td>
                                  <td></td>
                              </tr>
                          </tbody>
                          
                      </table>
                  
                      <button class="one">مساقات درست في فصول سابقة</button>
                      
                  </div>
                   
              </div>    
              
          </div>
          
          <!--  DIV 2 -->
          
                  
                  <div class="study-plan-1">
                     
                      <ul class="one">
                          <li>مجموع الساعات التي درسها الطالب:##</li>
                          <li>مجموع الساعات التي اتمها بنجاح:##</li>
                          <li>مجموع الساعات المطلوبة:133</li>
                      </ul>
                      
                      <ul class="two">
                          <li><img src="images/true.png" width="30" height="30" alt="li">أتمه بنجاح</li>
                          <li><img src="images/error.png" width="30" height="30" alt="li">راسب,يجب اعادة المساق</li>
                          <li><img src="images/wonder.png" width="30" height="30" alt="li">لم يدرسه او يسجله</li>
                          <li><img src="images/time.png" width="30" height="30" alt="li">يدرس/مستمر</li>
                          <li><img src="images/question.png" width="30" height="30" alt="li">يدرسه في فصل سابق ولم تظهر النتيجة بعد</li>
                          <li><img src="images/pen.png" width="30" height="30" alt="li">متطلب سابق</li>
                      </ul>
                      
                      <table>
                          <thead>
                              <tr>
                                  <td><img src="images/text.png" width="30" height="30"></td>
                                  <td>رقم المساق</td>
                                  <td>ع.س</td>
                                  <td>اسم المساق</td>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                <td><img src="images/error.png" width="30" height="30"></td>
                                  <td>### ###</td>
                                  <td>3</td>
                                  <td>ثقافة اسلامية</td>
                              </tr>
                              <tr>
                                <td><img src="images/true.png" width="30" height="30"></td>
                                  <td>### ###</td>
                                  <td>3</td>
                                  <td onclick='getD()'>انجليزي استدراكي<img src="images/pen.png" width="30" height="30"></td>
                              </tr>
                          </tbody>
                      </table>
                      
                      <!-- Table-2   -->
                      
                       <table class="two">
                          <thead>
                              <tr>
                                  <td><img src="images/text.png" width="30" height="30"></td>
                                  <td>رقم المساق</td>
                                  <td>ع.س</td>
                                  <td>اسم المساق</td>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                <td><img src="images/wonder.png" width="30" height="30"></td>
                                  <td>### ###</td>
                                  <td>3</td>
                                  <td>اللغة الانجليزية 1</td>
                              </tr>
                              <tr>
                                <td><img src="images/time.png" width="30" height="30"></td>
                                  <td>### ###</td>
                                  <td>3</td>
                                  <td>اللغة الانجليزية 2</td>
                              </tr>
                          </tbody>
                      </table>
                      
                      
                          
                     
                      
                  </div>
                   
              </div>    
              
          
            <!--  DIV 3 -->
          
          <!--  DIV 4 -->
          
          
          
      </div>

      <script>
          function getMust()
          {
            var hiddenMain=document.getElementsByClassName('study-plan')[0];
            hiddenMain.style.display="none";
            var showPlan1=document.getElementsByClassName('study-plan-1')[0];
            showPlan1.style.display="block";


            
          }

          function getD()
              {
                 var dTable=document.querySelectorAll('table.two')[0];
                 dTable.style.display="block";

              }
          
          </script>
      
  </body>
  
</html>