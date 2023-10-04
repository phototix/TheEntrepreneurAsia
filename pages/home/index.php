<div class="inner-wrapper">

    <?php $floatLeftBar=""; if($floatLeftBar=="yes"){ ?>
        <div class="left-sticky-bar js-lsb">
            <ul class="lsb-list">
                <li>
                    <a href="category_style_six.html" class="active">
                        <i class="lsb-icon-1"></i>news</a>
                </li>
                <li>
                    <a href="products.html">
                        <i class="lsb-icon-2"></i>popular</a>
                </li>
                <li>
                    <a href="video.html">
                        <i class="lsb-icon-3"></i>saved</a>
                </li>
                <li>
                    <a href="product.html">
                        <i class="lsb-icon-4"></i>latest</a>
                </li>
                <li>
                    <a href="search_results.html">
                        <i class="lsb-icon-5"></i>search</a>
                </li>
                <li>
                    <a href="#signin" class="js-popups">
                        <i class="lsb-icon-6"></i>login</a>
                </li>
            </ul>
        </div>
    <?php } ?>

    <div class="main">
        <!-- Content -->
        <div class="main-content">

            <?php
            $result=getTable("db_annoucement_post", "WHERE post_stat<>'3' AND post_display='1' ORDER BY post_id DESC LIMIT 3");
            if(count($result)>0){
            ?>
            <!-- Trending line -->
            <div class="trending-posts-line">
                <div class="container">
                    <div class="trending-line">
                        <div class="trending-now"><strong>Trending</strong> Now</div>
                        <div class="tl-slider">
                            <?php
                            foreach ($result as $row) {
                                /* PHP Strings */
                                $postCover="/assets/img/760x471/1.jpg";
                                if($row["post_cover"]<>""){
                                    $postCover=$row["post_cover"];
                                }
                                $postURL="/annoucement/".$row["post_token"]."?title=".makeURL(strip_tags($row["post_title"]));
                                $cateName=getPostCategory($row["cate_id"], "cate_name");
                                $cateSlug=getPostCategory($row["cate_id"], "cate_slug_url");
                                $postDateRaw=new DateTime($row["post_date"]);
                                $postDate=$postDateRaw->format('d F Y');
                                $postLast=$row["post_id"];
                                $postContents=$row["post_contents"];
                                $postShortContents=mb_substr(strip_tags($row["post_contents"]),0,95,"utf-8");
                                $postSubStrCheck=mb_substr(strip_tags($row["post_contents"]),95,95,"utf-8");
                                $postDot="";
                                if($postSubStrCheck<>""){$postDot="...";}
                                ?>
                                    <div><a href="<?=$postURL?>"><?=$postShortContents?><?=$postDot?></a></div>
                            <?php } ?>

                        </div>
                        <div class="tl-slider-control"></div>
                    </div>
                </div>
            </div>
            <!-- Trending line END -->
            <?php }else{ ?><br><br><? } ?>

            <!-- Main posts -->
            <div class="main-posts-1">
                <div class="mp-section">
                    <div class="two-thirds sm-full">
                        <div class="main-slider-2">
                            <div class="js-main-slider-2">
                                
                                <?php
                                $result=getTable("db_blog_post", "WHERE post_stat<>'3' AND post_display='1' ORDER BY post_id DESC LIMIT 3");
                                foreach ($result as $row) {
                                    /* PHP Strings */
                                    $postCover="/assets/img/760x471/1.jpg";
                                    if($row["post_cover"]<>""){
                                        $postCover=$row["post_cover"];
                                    }
                                    $postURL="/post/".$row["post_token"]."?title=".makeURL(strip_tags($row["post_title"]));
                                    $cateName=getPostCategory($row["cate_id"], "cate_name");
                                    $cateSlug=getPostCategory($row["cate_id"], "cate_slug_url");
                                    $postDateRaw=new DateTime($row["post_date"]);
                                    $postDate=$postDateRaw->format('d F Y');
                                    $postLast=$row["post_id"];
                                ?>
                                <div class="slide">
                                    <article class="post post-tp-1">
                                        <figure>
                                            <a href="<?=$postURL?>">
                                            <img src="<?=$postCover?>" height="471" width="760" alt="<?=$postTitle?>">
                                            </a>
                                        </figure>
                                        <div class="ptp-1-overlay">
                                            <div class="ptp-1-data">
                                                <a href="/<?=$cateSlug?>" class="category-tp-1"><?=$cateName?></a>
                                                <h3 class="title-1">
                                                    <a href="<?=$postURL?>"><?=strip_tags($row["post_title"])?></a>
                                                </h3>
                                                <div class="meta-tp-1">
                                                    <div class="ptp-1-date"><a href="<?=$postURL?>"><?=$postDate?></a></div>
                                                </div>
                                                <a href="<?=$postURL?>" class="read-tp-1">
                                                <span>Read more</span> <span class="arr-right-light-ic"><i></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <?php } ?>

                            </div>
                            <div class="ms-navs">
                                <div class="slide-count">
                                    <span class="current"></span> of
                                    <span class="total"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="one-third sm-hide">
                        <div class="trend-pst-slider">
                            <div class="trpst-block">
                                <div class="trpst-block-head">
                                    <h2 class="title-4"><strong>Trending</strong> Posts</h2>
                                    <div class="js-sbr-pagination"></div>
                                </div>
                                <div class="trpst-block-main">
                                    <div class="js-trend-pst-slider">
                                        <div>
                                            
                                            <?php
                                            $result=getTable("db_blog_post", "WHERE post_stat<>'3' AND post_display='1' ORDER BY post_id DESC LIMIT 3");
                                            foreach ($result as $row) {
                                                /* PHP Strings */
                                                $postCover="/assets/img/126x98/1.jpg";
                                                if($row["post_cover"]<>""){
                                                    $postCover=$row["post_cover"];
                                                }
                                                $postURL="/post/".$row["post_token"]."?title=".makeURL(strip_tags($row["post_title"]));
                                                $cateName=getPostCategory($row["cate_id"], "cate_name");
                                                $cateSlug=getPostCategory($row["cate_id"], "cate_slug_url");
                                                $postDateRaw=new DateTime($row["post_date"]);
                                                $postDate=$postDateRaw->format('d F Y');
                                                $postLast=$row["post_id"];
                                                $postTitle=strip_tags($row["post_title"]);
                                            ?>
                                            <article class="post post-tp-3">
                                                <figure>
                                                    <a href="<?=$postURL?>">
                                                    <img src="<?=$postCover?>" height="98" width="126" alt="<?=$postTitle?>">
                                                    </a>
                                                </figure>
                                                <a href="/<?=$cateSlug?>" class="category-tp-2"><?=$cateName?></a>
                                                <h3 class="title-3">
                                                <a href="<?=$postURL?>"><?=$postTitle?></a>
                                                </h3>
                                                <div class="date-tp-2"><?=$postDate?></div>
                                            </article>
                                            <?php } ?>

                                        </div>
                                        <div>
                                            <?php
                                            $result=getTable("db_blog_post", "WHERE post_stat<>'3' AND post_display='1' ORDER BY post_id DESC LIMIT 3, 3");
                                            foreach ($result as $row) {
                                                /* PHP Strings */
                                                $postCover="/assets/img/126x98/1.jpg";
                                                if($row["post_cover"]<>""){
                                                    $postCover=$row["post_cover"];
                                                }
                                                $postURL="/post/".$row["post_token"]."?title=".makeURL(strip_tags($row["post_title"]));
                                                $cateName=getPostCategory($row["cate_id"], "cate_name");
                                                $cateSlug=getPostCategory($row["cate_id"], "cate_slug_url");
                                                $postDateRaw=new DateTime($row["post_date"]);
                                                $postDate=$postDateRaw->format('d F Y');
                                                $postLast=$row["post_id"];
                                                $postTitle=strip_tags($row["post_title"]);
                                            ?>
                                            <article class="post post-tp-3">
                                                <figure>
                                                    <a href="<?=$postURL?>">
                                                    <img src="<?=$postCover?>" height="98px" width="126px" alt="<?=$postTitle?>">
                                                    </a>
                                                </figure>
                                                <a href="/<?=$cateSlug?>" class="category-tp-2"><?=$cateName?></a>
                                                <h3 class="title-3">
                                                <a href="<?=$postURL?>"><?=$postTitle?></a>
                                                </h3>
                                                <div class="date-tp-2"><?=$postDate?></div>
                                            </article>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="trpst-block-foot">
                                    <a href=""><span class="more-txt">More trending posts</span><span class="arr-right-dark-ic"><i></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="section">
                <div class="row">
                	
                    <div class="content">
                		
                        <div class="popular-pst">
                		    <div class="pst-block">
                		        <div class="pst-block-head">
                		            <h2 class="title-4"><strong>Popular</strong> Posts</h2>

                		            <div class="filters">
                		                <ul class="filters-list-1 xs-hide">
                		                    <li><a href="" class="active">all</a></li>.
                                            <?php
                                            $result=getTable("db_blog_post_category", "WHERE cate_stat<>'3' AND cate_feature='1'");
                                            foreach ($result as $row) {
                                            ?>
                                            <li><a href="/<?=$row["cate_slug_url"]?>"><?=$row["cate_name"]?></a></li>
                                            <?php } ?>
                		                </ul>
                		            </div>
                		        </div>
                		        <div class="pst-block-main">
                		            <div class="col-row">

                                        <?php
                                        $result=getTable("db_blog_post", "WHERE post_stat<>'3' AND post_display='1' ORDER BY post_view DESC, post_id DESC LIMIT 1");
                                        foreach ($result as $row) {
                                            /* PHP Strings */
                                            $postCover="/assets/img/345x242/1.jpg";
                                            if($row["post_cover"]<>""){
                                                $postCover=$row["post_cover"];
                                            }
                                            $postURL="/post/".$row["post_token"]."?title=".makeURL(strip_tags($row["post_title"]));
                                            $cateName=getPostCategory($row["cate_id"], "cate_name");
                                            $cateSlug=getPostCategory($row["cate_id"], "cate_slug_url");
                                            $postDateRaw=new DateTime($row["post_date"]);
                                            $postDate=$postDateRaw->format('d F Y');
                                            $postLast=$row["post_id"];
                                            $postTitle=strip_tags($row["post_title"]);
                                            $postShortTitle=mb_substr(strip_tags($postTitle),0,35,"utf-8");
                                            $postTitleSubStrCheck=mb_substr(strip_tags($postTitle),35,35,"utf-8");
                                            $postTitleDot="";
                                            if($postTitleSubStrCheck<>""){$postTitleDot="...";}
                                            $postAuthor=getDataTable("db_admin", "admin_id", $row["admin_id"], "admin_name");
                                            $postContents=$row["post_contents"];
                                            $postShortContents=mb_substr(strip_tags($row["post_contents"]),0,100,"utf-8");
                                            $postSubStrCheck=mb_substr(strip_tags($row["post_contents"]),100,100,"utf-8");
                                            $postDot="";
                                            if($postSubStrCheck<>""){$postDot="...";}
                                        ?>
                		                <div class="col-half">
                		                    <article class="post post-tp-5">
                		                        <figure>
                		                            <a href="">
                		                                <img src="<?=$postCover?>" height="242" width="345" alt="<?=$postTitle?>">
                		                            </a>
                		                        </figure>
                		                        <h3 class="title-5">
                                                <a href="<?=$postURL?>"><?=$postShortTitle?><?=$postTitleDot?></a>
                                                </h3>
                		                        <div class="meta-tp-2">
                		                            <div class="date"><span><?=$postDate?></span></div>
                		                            <div class="category">
                                                        <a href=""><span><?=$cateName?></span></a>
                		                                <a href=""><i class="li_user"></i><span><?=$postAuthor?></span></a>
                		                            </div>
                		                        </div>
                		                        <p class="p"><?=$postShortContents?><?=$postDot?></p>
                		                    </article>
                		                </div>
                                        <?php } ?>


                		                <div class="col-half">
                                            <?php
                                            $result=getTable("db_blog_post", "WHERE post_stat<>'3' AND post_display='1' ORDER BY post_view DESC, post_id DESC LIMIT 1, 3");
                                            foreach ($result as $row) {
                                                /* PHP Strings */
                                                $postCover="/assets/img/115x85/1.jpg";
                                                if($row["post_cover"]<>""){
                                                    $postCover=$row["post_cover"];
                                                }
                                                $postURL="/post/".$row["post_token"]."?title=".makeURL(strip_tags($row["post_title"]));
                                                $cateName=getPostCategory($row["cate_id"], "cate_name");
                                                $cateSlug=getPostCategory($row["cate_id"], "cate_slug_url");
                                                $postDateRaw=new DateTime($row["post_date"]);
                                                $postDate=$postDateRaw->format('d F Y');
                                                $postLast=$row["post_id"];
                                                $postTitle=strip_tags($row["post_title"]);
                                            ?>
                		                    <article class="post post-tp-6">
                		                        <figure>
                		                            <a href="<?=$postURL?>">
                		                                <img src="<?=$postCover?>" height="85px" width="115px" alt="<?=$postTitle?>">
                		                            </a>
                		                        </figure>
                		                        <h3 class="title-6"><a href="<?=$postURL?>"><?=$postTitle?></a></h3>
                		                        <div class="date-tp-2"><?=$postDate?></div>
                		                    </article>
                		                    <?php } ?>

                		                </div>
                		            </div>
                		        </div>
                		        <div class="pst-block-foot">
                		            <a href="">More popular posts</a>
                		        </div>
                		    </div>
                		</div>

                	</div>

                    <?php include_once("layouts/aside.php") ?>

                </div>
            </div>
        </div>
    </div>
</div>