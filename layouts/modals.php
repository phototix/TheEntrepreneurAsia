<!-- Search block popup -->
<div id="search-block" class="pp-search-block mfp-hide">
    <div class="search">
        <div class="search-btn">
            <button><i class="li_search"></i></button>
        </div>
        <div class="search-input">
            <input type="search" placeholder="Search">
        </div>
    </div>
</div>

<!-- Login popup -->
<div id="login" class="sp-popup login mfp-hide">
    <div class="btns">
        <a href="#signin" class="js-popups">Registration</a>
        <a href="#login" class="active js-popups">Login</a>
    </div>

    <?php if($_SESSION["systemError"]<>""&&$form==""){ ?>
        <?php include("includes/error.php"); ?>
    <?php } ?>

    <?php $useSocialConnect="";if($useSocialConnect=="yes"){ ?>
    <div class="social">
        <div>Sign in with social account</div>
        <ul class="pp-social-list">
            <li class="tw">
                <a href=""><i class="fa fa-twitter"></i></a></li>
            <li class="fb">
                <a href=""><i class="fa fa-facebook"></i></a></li>
            <li class="gp">
                <a href=""><i class="fa fa-google-plus"></i></a></li>
            <li class="vk">
                <a href=""><i class="fa fa-vk"></i></a></li>
        </ul>
    </div>
    <div class="pp-title"><span>or</span></div>
    <?php } ?>

    <form method="post" actio="">
    <input type="hidden" name="token" value="<?=$Token?>">
    <input type="hidden" name="form" value="member_login">
    <div class="form">
        <input type="text" placeholder="Username">
        <input type="password" placeholder="Password">
        <button class="btn-8">login</button>
        <a href="#recentpass" class="js-popups">Lost your Password?</a>
    </div>
    </form>

</div>

<!-- Sign in popup -->
<div id="signin" class="sp-popup signin mfp-hide">
    <div class="btns">
        <a href="#signin" class="active js-popups">Registration</a>
        <a href="#login" class="js-popups">Login</a>
    </div>

    <?php if($_SESSION["systemError"]<>""&&$form==""){ ?>
        <?php include("includes/error.php"); ?>
    <?php } ?>

    <?php $useSocialConnect="";if($useSocialConnect=="yes"){ ?>
    <div class="social">
        <div>Sign in with social account</div>
        <ul class="pp-social-list">
            <li class="tw">
                <a href=""><i class="fa fa-twitter"></i></a></li>
            <li class="fb">
                <a href=""><i class="fa fa-facebook"></i></a></li>
            <li class="gp">
                <a href=""><i class="fa fa-google-plus"></i></a></li>
            <li class="vk">
                <a href=""><i class="fa fa-vk"></i></a></li>
        </ul>
    </div>
    <div class="pp-title"><span>or</span></div>
    <?php } ?>

    <form method="post" actio="">
    <input type="hidden" name="token" value="<?=$Token?>">
    <input type="hidden" name="form" value="member_register">
    <div class="form not-valid">
        <input type="text" placeholder="Username">
        <input type="email" placeholder="Email">
        <input type="password" placeholder="Password">
        <button class="btn-8">Registration</button>
        <span>A password will be send on your post</span>
    </div>
    </form>

</div>

<!-- Recent pass popup -->
<div id="recentpass" class="sp-popup recentpass mfp-hide">
    <div class="btns">
        <a href="#signin" class="js-popups">Registration</a>
        <a href="#login" class="active js-popups">Login</a>
    </div>


    <form method="post" actio="">
    <input type="hidden" name="token" value="<?=$Token?>">
    <input type="hidden" name="form" value="member_reset_password">
    <div class="form">
        <input type="email" placeholder="Enter Your Email Adress">
        <button class="btn-8">Get new password</button>
        <a href="#signin" class="js-popups"><i class="popup-arr-left-ic"></i> Registration</a>
    </div>
    </form>

</div>

<!-- Mobile menu -->
<div id="mb-menu" class="mb-menu mfp-hide">
    <div class="container">
        <nav class="mobile-nav">
            <ul class="mobile-nav-list">

                <?php
                $result=getTable("db_blog_post_category", "WHERE cate_stat<>'3' AND cate_sub='2'");
                foreach ($result as $row) {
                ?>
                <li class="mn-item"><a href="/<?=$row["cate_slug_url"]?>"><?=$row["cate_name"]?></a></li>
                <?php } ?>

                <li class="mn-item"><a href="index.html">news</a></li>
                <li class="mn-item"><a href="javascript:void(0)">events & activities</a></li>
                <li class="mn-item"><a href="category_style_four.html">Entreprenuers Life</a></li>
                <li class="mn-item"><a href="reviews_stars_style.html">subscribe</a></li>
                <li class="mn-item"><a href="products.html">merchandise</a></li>
                <li class="mn-item"><a href="contact_page_style_1.html">contacts</a></li>
            </ul>
        </nav>
    </div>
</div>

<!-- Aside menu -->
<div id="aside-menu" class="aside-menu mfp-hide">
    <div class="am-container">
        <nav class="am-menu">
            <ul class="am-list">
                <?php
                $result=getTable("db_blog_post_category", "WHERE cate_stat<>'3' AND cate_sub='2'");
                foreach ($result as $row) {
                ?>
                <li class="am-item"><a href="/<?=$row["cate_slug_url"]?>"><?=$row["cate_name"]?></a></li>
                <?php } ?>

                <li class="am-item">
                    <a href="index.html">news</a>
                </li>
                <li class="am-item">
                    <a href="javascript:void(0)">events & activities</a>
                </li>
                <li class="am-item">
                    <a href="category_style_four.html">Entreprenuers Life</a>
                </li>
                <li class="am-item">
                    <a href="reviews_stars_style.html">subscribe</a>
                </li>
                <li class="am-item">
                    <a href="products.html">merchandise</a>
                </li>
                <li class="am-item">
                    <a href="contact_page_style_1.html">Contacts</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="am-container">
        <div class="twitter-posts">
            <ul class="tp-list">
                <li class="tp-list-item">
                    <div class="icon"><i class="fa fa-twitter"></i></div>
                    Show your web design in a web browser! Check out new awesome tool <a href="">http://www.symu.co  https://www.symu.co</a> 
                </li>
                <li class="tp-list-item">
                    <div class="icon"><i class="fa fa-twitter"></i></div>
                    Show your web design in a web browser! Check out new awesome tool <a href="">http://www.symu.co  https://www.symu.co</a> 
                </li>
            </ul>
            <a href="" class="tp-all">View All Tweets</a>
        </div>
    </div>
</div>