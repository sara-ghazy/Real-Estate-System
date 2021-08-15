<?php
include "login.php";
?>

<html !Doctype>
    <head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
        <title>virtual Realator</title>
        <link rel="stylesheet" href=" ../css/login.css" type="text/css"> 


    </head>
    <body>
        <div class="header">
            <h1 class="head">الوسيط العقارى</h1>
        </div>

        <div class="logindiv">
            <h1>تسجيل الدخول</h1>
            <div class="clear"></div>

            <form class="login" action="LoginHtml.php" method="post">
                <ul>
                    <li>
                       <input  class="input" type="text" name="userName"  placeholder="user name" required >

                       <label><p class="pr">اسم المستخدم</p>  </label>
                       
                    </li>
                    <li>
                        <input class="input" type="password" name="password"    required>

                       <label><p class="pr">كلمه المرور</p> </label>

                    </li>
                    <li >
                        <input class="mylog"   type="submit" name="login" value="تسجيل الدخول" >

                    </li>
                </ul>
                
                    
                    
            </form>
        </div>
        
        <div class="createAcountdiv">
            <h1>قم بانشا حساب جديد  وسجل الدخول </h1>
            <div class="clear"></div>

            <form  class="createAccount" method="post" action="LoginHtml.php">
                <ul>
                    <li>
                        <input  class="input" type="text" name="fullName"  width="200px" height="50px" required>
                       <label >full name </label>
                    </li>
                    <li>
                        <select class="gender" name="gender"> 
                            <option value="male">male</option>
                            <option value="female">female</option>
                        </select>
                        <label>gender</label>
                      

                    </li>
                    <li>
                        <input class="input"  type="text" name="email" placeholder="example@example.com" width="200px" height="50px" required>
                       <label name="email">email</label>
                    </li>
                    <li> 
                        <input class="input" type="text" name="username" placeholder="enter valid user name" width="200px" height="50px" required>
                       <label name="user name">user name</label>

                    </li>
                    <li> 
                      <input  class="input" type="password" name="password"  width="200px" height="50px" required>
  
                      <label name="password">password</label>
                    </li>
                    <li>
                        <input class="submition"  type="submit" name="submit" value="انشا حساب"  ' >
                    </li>
                </ul> 
                <div class="clear"></div>  
            </form>
        </div>
        <div class="footer">
            <p>قم بانشا جسابك الان    لتصل الى اكبر عدد من الاعلانات للعقارات فى جميع المدن والمحافظات</p>
            <p> اذا كنت تمتلك عقار وتريد بيعه بكل سئئوله وبدون اى سماسرة سجل  فموقع الوسيط العقارى هو الحل الانسب لديك </p>
            <p> معنا سوف يصل اعلانك الى اكبر عدد من الزبائن فى كل المدنن والمحافظات </p>
            <p> سوف يتم تقييم عقارك من  عامه الناس , سوف تعرف اراهم عن عقارك ومن ثم اتخاذ القرار المناسب   </p>
        </div>

    </body>
</html>