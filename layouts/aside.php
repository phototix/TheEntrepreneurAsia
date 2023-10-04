<aside class="side-bar">
    <div class="pst-block">
        <div class="pst-block-head">
            <h2 class="title-4"><strong>Stay</strong> Connected</h2>
        </div>
        <div class="pst-block-main">
            <div class="social-tp-1">
                <ul class="social-list">
                    <li class="fb">
                        <a href="http://www.facebook.com" target="_blank">
                            <span class="soc-ic">
                                <i class="fa fa-facebook"></i>
                            </span> The Entreprenuer Asia Page
                            <span class="soc-btn">Like It</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="sb-banner">
        <div class="banner-inner">
            
            <?php
            $advert_type="aside_320x270";
            $result=getTable("db_advert", "WHERE advert_stat<>'3' AND advert_display='1' AND advert_type='$advert_type' LIMIT 1");
            foreach ($result as $row) {
                $adsURL="/redirect.php?ad=".$row["advert_id"];
                $adsImage=$row["advert_image"];
                $adsName=$row["advert_name"];
            ?>
            <a href="<?=$adsURL?>" target="_blank">
            <img src="<?=$adsImage?>" height="270" width="320" alt="<?=$adsName?>" class="adaptive" />
            <div class="banner-overlay">
                <h5 class="title-11"><?=$adsName?></h5>
            </div>
            </a>
            <?php } ?>

        </div>
    </div>

</aside>