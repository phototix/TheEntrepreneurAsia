<!-- Footer -->
<footer class="main-footer">
    <div class="container">
        <div class="top-part">
            <div class="row">
                <div class="one-third sm-full">
                    <div class="ft-widget">
                        <h4 class="ft-title-1"><strong>Editors</strong> Choise</h4>
                        <ul class="ft-list-1">

                            <?php
                            $result=getTable("db_blog_post", "WHERE post_stat<>'3' AND post_display='1' AND editor_choice='1' ORDER BY post_view DESC, post_id DESC LIMIT 4");
                            foreach ($result as $row) {
                                /* PHP Strings */
                                $postCover="/assets/img/126x98/1.jpg";
                                if($row["post_cover"]<>""){
                                    $postCover=$row["post_cover"];
                                }
                                $postURL="/post/".$row["post_token"]."?title=".strip_tags($row["post_title"]);
                                $cateName=getPostCategory($row["cate_id"], "cate_name");
                                $cateSlug=getPostCategory($row["cate_id"], "cate_slug_url");
                                $postDateRaw=new DateTime($row["post_date"]);
                                $postDate=$postDateRaw->format('d F Y');
                                $postLast=$row["post_id"];
                                $postTitle=strip_tags($row["post_title"]);
                            ?>
                            <li>
                                <h5 class="ft-title-2"><a href="<?=$postURL?>"><?=$postTitle?></a></h5>
                                <div class="date"><?=$postDate?></div>
                            </li>
                            <?php } ?>

                        </ul>
                    </div>
                </div>
                <div class="one-third sm-full">
                    <div class="ft-widget">
                        <h4 class="ft-title-1"><strong>Recent</strong> News</h4>
                        <ul class="ft-list-2">

                            <?php
                            $result=getTable("db_blog_post", "WHERE post_stat<>'3' AND post_display='1' AND cate_id='18' ORDER BY post_view DESC, post_id DESC LIMIT 3");
                            foreach ($result as $row) {
                                /* PHP Strings */
                                $postCover="/assets/img/126x98/1.jpg";
                                if($row["post_cover"]<>""){
                                    $postCover=$row["post_cover"];
                                }
                                $postURL="/post/".$row["post_token"]."?title=".strip_tags($row["post_title"]);
                                $cateName=getPostCategory($row["cate_id"], "cate_name");
                                $cateSlug=getPostCategory($row["cate_id"], "cate_slug_url");
                                $postDateRaw=new DateTime($row["post_date"]);
                                $postDate=$postDateRaw->format('d F Y');
                                $postLast=$row["post_id"];
                                $postTitle=strip_tags($row["post_title"]);
                            ?>
                            <li>
                                <figure>
                                    <a href="<?=$postURL?>">
                                    <img src="<?=$postCover?>" height="85" width="115" alt="<?=$postTitle?>">
                                    </a>
                                </figure>
                                <h5 class="ft-title-2"><a href="<?=$postURL?>"><?=$postTitle?></a></h5>
                                <div class="date"><?=$postDate?></div>
                            </li>
                            <?php } ?>

                        </ul>
                    </div>
                </div>
                <div class="one-third sm-full">
                    
                </div>
            </div>
        </div>
        <div class="bottom-part">
            <div class="row">
                <div class="ft-logo">
                    <a href=""><img src="/assets/img/main-logo.png" height="30" width="105" alt="Spectr News Theme"></a>
                </div>
                <div class="ft-about">
                    <article>
                        <h4 class="ft-title-1"><strong>About</strong> Our Magazine</h4>
                        <p class="p">The Entreprenuer Asia (TEA) is the community of Smart Entreprenuers in Asia. You can find advice on how to grow market and scale your business. <br> The best thing is that our advice is promptly practical.</p>
                    </article>
                </div>
                <div class="ft-social">
                    <ul class="ft-social-list pull-right">
                        <li class="fb">
                            <a href=""><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="tw">
                            <a href=""><i class="fa fa-twitter"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-bar">
        <div class="container">
            <div class="row">
                <div class="three-quarters">
                    <div class="ft-menu">
                        <ul class="ft-menu-list">
                            <li><a href="/about-tea">About the site</a></li>
                            <li><a href="/contact-us">Contacts</a></li>
                            <li><a href="/terms-policy">privacy policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="one-quarter sm-full">
                    <div class="copyright">© Copyright <?=$Year?></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer END -->