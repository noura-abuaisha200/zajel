<!DOCTYPE html>
<html>
    <head>
        <script src="Script.js"></script>

        <link rel="stylesheet" href="تسجيل الدخول.css">
        <title>zajle</title>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <style>
 body 
 {
   margin-top:8px;
   overflow:auto !important;
 }
 .card-header 
 {
     margin-top:68px;
 }

 .card 
 {
     margin-top:101px;
 }
            </style>
    </head>

        <body>
        <div id="container">

            <!-- header -->
            <div id="header">

                <div id="Head1">Zajel- An Najah National University<a href="#"></a></div> 
            <div id="logo" >
            
             <img src="image logo.png" width="100" height="100" align="right" />
                <header>
                    <h1>زاجل - البرنامج الأكاديمي لجامعة النجاح الوطنية</h1> </header>
                    
                </div>
                <div id="header2">
                 <a   id="Head2" href="روابط جامعه.html">روابط من موقع الجامعة www.najah.edu </a> 
    
               
                    <a id="help" href="help.html">?</a>
                </div>
                
                
            </div>  
            <body  style="overflow: hidden;">
           
                <div id="menu" >
                            <li>
                                 <a id="hd" href="تسجيل الدخول.php"><font color="black">تسجيل الدخول</font></a>
</li>
                     </div>
                
                     <div id="s">

                       <form action="#" method='post' class="search-form">
                        <div class="form-group has-feedback">
                                <span class="glyphicon glyphicon-search form-control-feedback"></span>
    
                            <label for="search" class="sr-only"></label>
                            <input  oninput="doSearch();"  type="text" class="form-control"style="font-size:15px;color:black" name="search" id="search" placeholder="بحث">
                          </div>
                          </form>
                </div> 
        
        <div class="container1">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6 pb-5">
        
        
                            <!--Form with header-->
        
                            <form action="functions/new_user.php" method="post">
                                <div class="card border-primary rounded-0">
                                    <br>
                                    <div class="card-header p-0">
                                            <h1><i class="fa fa-envelope"></i> مستخدم جديد</h1>
                                        </div>
                                    </div>
                                    <div class="card-body p-3">
        
                                        <!--Body-->
                                        
                                        <div class="form-group">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fas fa-user icon"></i></div>
                                                </div>
                                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="رقم المستخدم" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fas fa-user icon"></i></div>
                                                </div>
                                                <input type="text" class="form-control" id="nombre" name="userName" placeholder="اسم المستخدم" required>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fas fa-key icon"></i></div>
                                                </div>
                                                <input type="password" class="form-control" id="nombre" name="password" placeholder="الرقم السري" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <input type="password" class="form-control" id="nombre" name='conPass' name="password_confirmation" placeholder="تأكيد كلمة السر الجديدة"required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                                </div>
                                                <input type="email" class="form-control" id="nombre" name="email" placeholder="ejemplo@gmail.com" required>
                                            </div>
                                        </div>
        
                                        <div class="form-group">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fas fa-id-card icon"></i></div>
                                                <input type="text" class="form-control" name='ide' placeholder="رقم الهوية /جواز السفر" required>
                                        </div>
                                        <div class="form-group input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                                            </div>
                                            <select name='phone_intro' class="custom-select" style="max-width: 120px;">
                                                <option value='1'>+971</option>
                                                <option value="2">+972</option>
                                                <option value="3">+198</option>
                                                <option value="4">+701</option>
                                            </select>
                                            <input name="phoneNumber" class="form-control" placeholder="Phone number" type="text">
                                        </div>
                                        <label>التخصص</label>

                                        <div class='form-group'>
                                        <select name='major' class="custom-select" style="max-width: 120px;">
                                        <?php
                                            require_once('functions/getMajor.php');
                                            while ($MajorData=$getMajorResult->fetch_assoc()) {
                                                ?>
                                                <option value="<?php echo $MajorData['majorId']; ?>"><?php echo $MajorData['majorName']; ?></option>
                                            <?php
                                            } ?>
                                            </select>


        </div>

        
                                        <button type="submit" value="Add" name="submit">تسجيل</button>


                                    </div>
        
                                </div>
                            </form>
                            <!--Form with header-->
        
        
                        </div>
            </div>
        </div>
        <footer> An-Najah National University - Computer Center, all rights reserved, Nablus - Palestine ©2004 - 2020</footer>


</body></html>