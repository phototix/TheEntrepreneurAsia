<!-- Header -->
<header class="header-mb">
    <div class="container">

        <?php $useMobileToggleLeftMenu="yes";$useDesktopToggleLeftMenu=""; ?>
        <?php if($useMobileToggleLeftMenu=="yes"){ ?>
        <div class="hdm-menu">
            <a href="#mb-menu" class="c-hamburger htx js-mb-menu">
                <span>toggle menu</span>
            </a>
        </div>
        <?php } ?>

        <div class="hdm-logo">
            <h1><a href="/"><img src="/assets/img/logo-top-center-mobile.png" height="40" width="140" alt="The Entrepreneur Asia" class="adaptive" /></a></h1>
        </div>
        <div class="hdm-search-user">
            <div class="hd-search">
                <a href="#search-block" class="st-btn-1 fa-flip-horizontal js-hd-search">
                    <i class="li_search"></i>
                </a>
                <div class="hd-search-block js-hd-search-block">
                    <div class="search">
                        <div class="search-input">
                            <input type="search" placeholder="Type keywords">
                        </div>
                        <div class="search-btn">
                            <button>Search</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="user">
                <a href="#login" class="js-popups"><i class="li_user"></i></a>
            </div>
        </div>
    </div>
</header>
<div class="sticky-header js-sticky-header">
    <div class="container">
        <div class="main-nav-wrap">
            <div class="row">
                <nav class="main-nav">

                    <?php if($useDesktopToggleLeftMenu=="yes"){ ?>
                    <a href="#aside-menu" class="c-hamburger htx js-asd-menu">
                        <span>toggle menu</span>
                    </a>
                    <?php } ?>

                    <?php include("layouts/menu.php") ?>
                </nav>
                <div class="hd-search">
                    <a href="#search-block" class="st-btn-1 fa-flip-horizontal js-hd-search">
                        <i class="li_search"></i>
                    </a>
                    <div class="hd-search-block js-hd-search-block">
                        <div class="search">
                            <div class="search-input">
                                <input type="search" placeholder="Type keywords">
                            </div>
                            <div class="search-btn">
                                <button>Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<header class="header-tp-4">
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-inner">
                <div class="row">
                    <nav class="tb-nav">
                        <ul class="tb-nav-list">
                            <li><a href="/about-tea">ABOUT</a></li>
                            <li><a href="/contact-us">CONTACTS</a></li>
                        </ul>
                    </nav>
                    
                    <div class="tb-date">
                        <i class="li_calendar"></i> <?=$DayText?>, <?=$MonthText?> <?=$Day?>, <?=$Year?>
                    </div>

                    <div class="tb-social">
                        <ul class="tb-social-list">
                            <li class="tw">
                                <a href="">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="fb">
                                <a href="">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tb-sing-login">
                        <a href="#login" class="js-popups" id="btnPopRegister">Sign in</a> / 
                        <a href="#signin" class="js-popups">Join</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-header">
        <div class="mh-top">
            <div class="container">
                <div class="row">
                    <center>
                        <a href="/">
                            <img src="/assets/img/logo-top-center.png" width="460" alt="The Entrepreneur Asia"/>
                        </a>
                    </center>

                    <div class="mh-banner" style="display: none;">

                        <?php
                        $advert_type="top_728x90";
                        $result=getTable("db_advert", "WHERE advert_stat<>'3' AND advert_display='1' AND advert_type='$advert_type'");
                        foreach ($result as $row) {
                            $adsURL="/redirect.php?ad=".$row["advert_id"];
                            $adsImage=$row["advert_image"];
                            $adsName=$row["advert_name"];
                        ?>
                        <a href="<?=$adsURL?>" target="_blank">
                            <img src="<?=$adsImage?>" height="90" width="728" alt="<?=$adsName?>">
                        </a>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="mh-bottom">
            <div class="container">
                <div class="main-nav-wrap">
                    <div class="row">
                        <nav class="main-nav">

                            <?php if($useDesktopToggleLeftMenu=="yes"){ ?>
                            <a href="#aside-menu" class="c-hamburger htx js-asd-menu">
                                <span>toggle menu</span>
                            </a>
                            <?php } ?>

                            <?php include("layouts/menu.php") ?>
                        </nav>
                        <div class="hd-search">
                            <a href="#search-block" class="st-btn-1 fa-flip-horizontal js-hd-search">
                                <i class="li_search"></i>
                            </a>
                            <div class="hd-search-block js-hd-search-block">
                                <div class="search">
                                    <div class="search-input">
                                        <input type="search" placeholder="Type keywords">
                                    </div>
                                    <div class="search-btn">
                                        <button>Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header END -->