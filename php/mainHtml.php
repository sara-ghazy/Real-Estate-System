<?php
include "search.php";
session_start();
$user=$_SESSION['LoggedUser'];
?>


<!Doctype html>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
        <title>virtual Realator</title>
        <link rel="stylesheet" href="../css/main.css" type="text/css"> 

        

    </head>
    <body>
        <header>
            <h1 class="head">الوسيط العقارى</h1>
            <h2><?php echo $user?></h2>
        </header>
        <main>
            <section class="navbar">
                <span>
                    <a href="myAdvsHtml.php">اعلاناتى</a>
                </span>
                <span>
                    <a href="allAdsHtml.php">كل الاعلانات</a>
                </span>                
                <span>
                    <a href="registerAdvertisementHtml.php">تسجيل اعلان</a>
                </span>
                <span>
                    <a href="LoginHtml.php">تسجيل الخروج</a>
                </span>
                
            
            </section>
           
            <section class="headOfsearch">
                <h3>اختار مواصفات  العقار الذى تريد شرائه  وابدا البحث  الان</h3>
            </section>

            <section class="search">
            <form action="allAdsHtml.php" method="post">
                <section class="searchAttributes">
                
                    
                    <span>
                        <input type="text" name="price1">
                        <label>   السعر</label>
                        <label> من </label>
                        <input type="text" name="price2">

                        <label>  الى   </label>
                     
                        
                        
                        
                    </span>
                    <span>
                        <select name="etype">
                            <option value="">جميع العقارات</option>
                            <option value="مبنى">
                            مبنى</option>
                            <option value="ارض زراعيه">
                            ارض زراعيه</option>
                            <option value="فيلا">
                            فيلا</option>
                        </select>
                        <label>نوع العقار </label>
                       
                    </span>
                    <span>
                        <select name="type">
                            <option value="">ايجار وبيع</option>
                            <option value="ايجار">
                             ايجار فقط</option>
                            <option value="بيع">
                            بيع فقط</option>
                        </select>
                        <label>نوع الاعلان</label>
                       
                    </span>
                   
                  
                                 
                    
                </section>
                <input class="searchButton" type="submit" name="search" value="بحث">
</form>
            </section>

                
        </main>
        <footer></footer>

    </body>
</html>