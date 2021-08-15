<?php

include "oneAdv.php";
$r=mysqli_fetch_array($result);


?>

<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
        <title>الوسيط العقارى</title>
        <link rel="stylesheet" type="text/css" href="../css/oneAdv.css">
        <script src="../js/oneAdvs.js">
            
        </script>

    </head>
    <body>
        <header >
            <section class="navbar">
             <div><a href="mainHtml.php">الصفحه الرئيسيه</a></div>
             <div><a href="registerAdvertisementHtml.php">سجل اعلانك</a></div>
             <div><a href="myAdvsHtml.php">اعلاناتى</a></div>
             <div><a href="allAdsHtml.php">الرجوع</a></div>      
            </section>
        </header>
        <main>
            <section class="image">
            <?php  echo '<img src="data:image/jpeg;base64,'.base64_encode($r['img']).'" />' ?>
            </section>
            <section class="infoAndReviews">
                <sction class="info">
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
                     <section class="registerReview">
                     
                         
                     <button class="addReviewButton"  onclick="openForm()" type="button" name="addReview" value="addReview">اضافه تقييم</button>
                     <form class="addReviewform" id="reviewForm" method="post" action="oneAdvHtml.php?title=<?php echo $_GET['title'];?>">
                                <label> تقييم السعر</label>
                                <select name="val" required>
                                <option value=""></option>
                                    <option value="جيد">
                                    جيد</option>
                                    <option value="غالى">
                                    غالى</option>
                                    <option value="ممتاز">
                                    ممتاز</option>
                                </select>
                                <label>اقتراح سعر</label>
                                <input type="text" name="suggestPrice" required> 
                                <label>تعليق</label>
                                <textarea class="comment" name="commentt" required></textarea>
                                <div>
                                    <input class="registerAdv" type="submit" name="add"  onclick="closeForm()" value="تسجيل التقييم">
                                    <input class="registerAdv" type="submit" name="close"  onclick="closeForm()" value="خروج">
                                </div>
                               
                      </form>
                        
                        <h1 class="head">reviews</h1>
                    </section>
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

    </body>

</html>