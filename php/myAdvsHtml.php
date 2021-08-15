<?php
include "myAdvs.php";

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>اعلاناتى</title>
        <link rel="stylesheet" href="../css/myAdvs.css" type="text/css">

    </head>
    <body>
        <header>
            <section class="navbar">
                <div><a href="mainHtml.php">الصفحه الرئيسيه</a></div>
                <div><a href="registerAdvertisementHtml.php">سجل اعلانك</a></div>
                <div><a href="allAdsHtml.php">كل الاعلانات</a></div>
            </section>

        </header>
        <h1 class="head">عقاراتى</h1>

        <main>      
        <?php while($r=mysqli_fetch_array($result)):;?>       
            <section class="adv">
              <?php echo "<a href='oneAdvsUserHtml.php?title=".$r['id']."'>"?>
                    <div class="overlay"></div>
                 <section class="img">
                         <?php  echo '<img src="data:image/jpeg;base64,'.base64_encode($r['img']).'" />' ?>
        
                    </section>
                    <section  class="info">
                        <div>
                             <b class="AdsType"><?php echo $r['typee']?></b>
                             <b class="estateType"><?php echo $r['real_state_type']?></b>
                        </div>
                         <div>
                            <strong class="city"><?php echo $r['city']?></strong>
                            <strong> <?php echo $r['numberoffloors']?> : عدد الطوابق </strong>
                        </div>
                        <div>
                        <strong class="space"><?php echo$r['spacee']?> : المساحه</strong>
                            <strong class="rooms"><?php echo $r['numberofrooms']?>: عدد الغرف</strong>
                        </div>
                        <div class="priceDiv">
                            <em class="price"><?php echo $r['price']?>: السعر</em>
                        </div>
                                                
                            
                            
                            <p ></p>
                      
        
                    </section>

                </a>
            </section>
            <?php endwhile;?>
         


        </main>
        <footer>
        
        </footer>

    </body>
</html>