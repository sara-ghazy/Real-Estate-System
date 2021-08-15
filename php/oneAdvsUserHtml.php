<?php

include "update.php";
include "registerasSold.php";
include "oneAdvsUser.php";
$r=mysqli_fetch_array($result);


?>

<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
        <title>الوسيط العقارى</title>
        <link rel="stylesheet" type="text/css" href="../css/oneAdvUser.css">
        <script src="../js/oneAdvsUser.js">
            
        </script>

    </head>
    <body>
        <header>
            <section class="navbar">
             <div><a href="mainHtml.php">الصفحه الرئيسيه</a></div>
             <div><a href="registerAdvertisementHtml.php">سجل اعلانك</a></div>
             <div><a href="myAdvsHtml.php">اعلاناتى</a></div>
             <div><a href="myAdvsHtml.php">الرجوع</a></div>      
            </section>
        </header>
        <main id="main">
            <section class="image">
            <?php  echo '<img src="data:image/jpeg;base64,'.base64_encode($r['img']).'" />' ?>
            </section>
            <section class="infoAndReviews">
                <sction class="info">
                    <section class="Edit">
                     
                <button class="editButton"  onclick="openEditingForm()" type="button" name="editForm" value="editForm">تعديل الاعلان</button> 
                <button class="regesterAsSoldButton" onclick="showSoldForm()">تسجيل كمباع</button>  
                        
                    </section>
                    <h1 class="head">Details</h1>
                    <div>
                        <strong><?php echo $r['real_state_type']?></strong>
                        <strong><?php echo $r['typee'] ?></strong>
                        <strong><?php echo $r['city']?></strong>
                        <strong><?php echo $r['region']?></strong>
                    </div>
                    <div>
                        <strong><?php echo $r['spacee']?> :المساحه</strong>
                        <strong><?php echo $r['numberoffloors'] ?> :عدد الطوابق</strong>
                        <strong><?php echo $r['numberofrooms'] ?> :عدد الغرف لكل طابق</strong>
                    </div>
                    <div>
                        <strong><?php echo $r['price']?> :السعر</strong>
                        <strong><?php echo $r['dateAn']?>:تاريخ الاعلان</strong>
                    </div>
                    <div>
                        <strong>  العنوان:<?php echo $r['address']?></strong>
                    </div>
                    <div>
                        <strong> الوصف:<?php echo $r['detail']?> </strong>
                    </div>
                    <div class="owner">
                        <h1>معلومات المالك</h1>
                    </div>
                    <div>
                        <strong>الاسم:<?php echo $r['ownername'] ?></strong>
                    </div>
                    <div>
                        <strong> <?php echo $r['email'] ?> :الايميل</strong>
                    </div>
                    <div>
                        <strong> <?php echo$r['phonenumber']?>:رقم التليفون</strong>
                    </div>
                </sction>
                <section class="reviews">
                    <h1 class="head">reviews</h1>

                    <?php while ($rr=mysqli_fetch_array($resultt)):;?>
                   <section class="review">
                        <div class="headOfReview">
                            <h1><?php echo $rr['username']?></h1>
                        </div>
                       <div>
                          <strong> تقييم السعر : <?php echo $rr['valuation']?> </strong>
                          <strong><?php echo $rr['suggestion']?> :السعر المقترح</strong>
                      </div>
                      <div>
                          <strong> التعليق : <?php echo $rr['commentt']?> </strong>
                      </div>

                    </section>
                    <?php endwhile;?>

            
                   
                </section>
            </section>
        </main>
        <section id="overlay" class="overlay"></section>
        <form id="editForm" class="editAdv" action="oneAdvsUserHtml.php?title=<?php echo $_GET['title'];?>"  method="post" enctype="multipart/form-data" >
            <ul>
                <li>
                    <label>نوع االاعلان</label>
                    <select name="advType">
                    <option value=""></option>
                        <option value="بيع">
                        بيع</option>
                        <option value="ايجار">
                        ايجار</option>
                    </select>
                    

                </li>
                <li>
                    <label>المدينه</label>
                    <input type="text" name="city" >
                </li>
                <li>
                    <label>الاقليم او القريه</label>
                    <input type="text" name="region" >

                </li>
                                       <li>
                    <label>نوع العقار</label>
                    <select name="estateType"> 
                    <option value=""></option>
                        <option value="مبنى">
                        مبنى</option>
                        <option value="فيلا">
                        فيلا</option>
                        <option value="ارض زراعيه">
                        ارض زراعيه</option>
                    </select> 

                </li>
                
                <li>
                    <label>العنوان</label>
                    <input type="text" name="address" >

                </li>
                <li>
                    <label>المساحه</label>
                    <input type="text" name="space" >
                </li>
                <li>
                    <label>عدد الطوابق</label>
                    <input type="text" name="floors">


                </li>
                <li>
                    <label>الوصف</label>
                    <textarea name="detail" ></textarea>
                </li>

                <li>
                    <label>عدد الغرف لكل طابق</label>
                    <input type="text" name="rooms">
                </li>
                <li>
                    <label>السعر</label>
                    <input type="text" name="price" >
                </li>
                <li>
                    <label>اسم المالك</label>
                    <input type="text" name="owner" >
                </li>
                <li>
                    <label>رقم التليفون</label>
                    <input type="text" name="phone" >
                </li>
                <li>
                    <label>الايميل</label>
                    <input type="text" name="email" >
                </li>
                <li>
                    <label>صورة للعقار</label>
                    <input type="file" name="image" >
                </li>
                <li class="register">
                    
                    <input type="submit"   onclick="closeEditingForm()"  name="register" value="حفظ التعديلات">
                    <button onclick="closeEditingForm()">خروج</button>
                </li>
               
            </ul>
            
        </form>

        <form class="markingAsSoldForm" id="soldForm"   method="post">
            <div>        
               <label>تعيينه كمباع او  مستاجر</label>
               <input type="checkbox" name="sold" id="sold" value="sold">
            </div>
            <div>
               <label>اسم المستخدم للمشترى او المستاجر</label>
               <input type="text" name="buyerId"  id="buyerId">
            </div>
            <div>
                <input type=submit name="regesterAsSold" value="تسجيل كمباع">
                <button id="exit" onclick="exitSoldFrom()">خروج</button>

            </div>
            

        </form>
       

    </body>

</html>