<?php
include "registerAdvertisement.php";
?>

<!Doctype html>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
        <title>virtual Realator</title>
        <link rel="stylesheet" href="../css/regesterAdvertisement.css" type="text/css"> 


    </head>
    <body>
        <header>
            <!-----
                
            -->
            <section class="navbar">
                <div><a href="mainHtml.php">الصفحه الرئيسيه</a></div>
                <div><a href="allAdsHtml.php">كل الاعلانات</a></div>
                <div><a href="myAdvsHtml.php">اعلاناتى</a></div>
            </section>

        </header>
       <br>
       <br>
        <main>
            <h1>سجل اعلانك</h1>
            <h2> قم  بادخال كل المعلومات عن عقارك ومعلومات الاتصال بك </h2>
            <div class="clear"></div>

            <form class="regAds" action="registerAdvertisementHtml.php"  method="post" enctype="multipart/form-data" >
                <ul>
                    <li>
                        <label>نوع االاعلان</label>
                        <select name="advType">
                            <option value="بيع">
                            بيع</option>
                            <option value="ايجار">
                            ايجار</option>
                        </select>
                        

                    </li>
                    <li>
                        <label>المدينه</label>
                        <input type="text" name="city" required>
                    </li>
                    <li>
                        <label>الاقليم او القريه</label>
                        <input type="text" name="region" required>

                    </li>
                                           <li>
                        <label>نوع العقار</label>
                        <select name="estateType"> 
                            <option value="مبنى">
                            مبنى</option>
                            <option value="فيلا">
                            فيلا</option>
                            <option value="ارض زراعيه">
                            ارض زراعيه</option>
                            <option value="شقه">
                            شقه</option>
                        </select> 

                    </li>
                    
                    <li>
                        <label>العنوان</label>
                        <input type="text" name="address" required>

                    </li>
                    <li>
                        <label>المساحه</label>
                        <input type="text" name="space" required>
                    </li>
                    <li>
                        <label>عدد الطوابق</label>
                        <input type="text" name="floors">


                    </li>
                    <li>
                        <label>الوصف</label>
                        <textarea name="detail" required></textarea>
                    </li>

                    <li>
                        <label>عدد الغرف لكل طابق</label>
                        <input type="text" name="rooms">
                    </li>
                    <li>
                        <label>السعر</label>
                        <input type="text" name="price" required>
                    </li>
                    <li>
                        <label>اسم المالك</label>
                        <input type="text" name="owner" required>
                    </li>
                    <li>
                        <label>رقم التليفون</label>
                        <input type="text" name="phone" required>
                    </li>
                    <li>
                        <label>الايميل</label>
                        <input type="text" name="email" required>
                    </li>
                    <li>
                        <label>صورة للعقار</label>
                        <input type="file" name="image" required>
                    </li>
                    <li class="register">
                        
                        <input type="submit"  name="register" value="register">
                    </li>
                   
                </ul>
                
            </form>

        </main>
        <footer>
           <p>سجل اعلانك ودعنا نجلب لك اكبر عدد من المشتريين لعقارك </p> 
           <p> سجل اعلانك واترك لنا مسئوليه التسويق له</p> 

        </footer>
    </body>