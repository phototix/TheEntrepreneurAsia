<?php
$postDateRaw=new DateTime($row["post_date"]);
$postDate=$postDateRaw->format('d F Y');
$post_display=getPostToken($cate, "post_display");
?>

<?php if($post_display=='1'||$function=="preview"){ ?>
<!-- Content -->
<div class="main-content">
   
<!-- Page head tile END -->
<div class="section">
    <div class="row">
        <div class="content">
            <div class="pst-block">
                <div class="pst-block-main">
                    <div class="post-content">
                        <article>
                            <div class="post-main-img">
                                <?php if(getPostToken($cate, "post_cover")<>""){ ?>
                                    <img src="<?=getPostToken($cate, "post_cover")?>" height="442" width="750" alt="The Entrepreneur Asia" class="adaptive" />
                                <?php } ?>
                            </div>
                            <a href="" class="category-tp-1" tabindex="0"><?=getPostCategory(getPostToken($cate, "cate_id"))?></a>
                            <h2 class="title-21"><?=getPostToken($cate, "post_title")?></h2>
                            <div class="meta-tp-5">
                                <div class="author-tp-2">
                                    <span class="photo">
                                        <img src="/assets/img/author-img.png" height="18" width="18" alt="Spectr News Theme">
                                    </span><?=getAdmin(getPostToken($cate, "admin_id"))?>
                                </div>
                                <div class="date-tp-4"><i class="li_clock"></i><?=$postDate?></div>
                                <div class="ptp-1-views">
                                    <a href=""><i class="li_eye"></i><span>187</span></a>
                                </div>
                            </div>
                            <div class="post-sharing-tp-1">
                                <ul>
                                    <li class="fb"><a href=""><i class="fa fa-facebook"></i><span class="mb-pt-hide">Facebook</span></a></li>
                                    <li class="tw"><a href=""><i class="fa fa-twitter"></i><span class="mb-pt-hide">Twitter</span></a></li>
                                    <li class="vk"><a href=""><i class="fa fa-vk"></i><span class="mb-pt-hide">Vkontacte</span></a></li>
                                    <li class="gp"><a href=""><i class="fa fa-google-plus"></i><span class="mb-pt-hide">Google+</span></a></li>
                                </ul>
                            </div>
                            <p><?=getPostToken($cate, "post_contents")?></p>
                        </article>
                        <div class="post-tags">
                            <ul class="post-tags-list">
                                <li><a href="">Apple</a></li>
                                <li><a href="">news</a></li>
                                <li><a href="">clear</a></li>
                                <li><a href="">design</a></li>
                            </ul>
                        </div>
                        <div class="sharing-block">
                            <div class="sharing-title">You can tell friends this post!</div>
                            <div class="post-sharing-tp-2">
                                <ul>
                                    <li class="fb"><a href=""><i class="fa fa-facebook"></i><span class="mb-pt-hide">Facebook</span></a></li>
                                    <li class="tw"><a href=""><i class="fa fa-twitter"></i><span class="mb-pt-hide">Twitter</span></a></li>
                                    <li class="vk"><a href=""><i class="fa fa-vk"></i><span class="mb-pt-hide">Vkontacte</span></a></li>
                                    <li class="gp"><a href=""><i class="fa fa-google-plus"></i><span class="mb-pt-hide">Google+</span></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="author-box-1">
                            <div class="author-photo">
                                <img src="/assets/img/author-photo.png" height="95" width="95" alt="Spectr News Theme">
                            </div>
                            <div class="author-name"><?=getAdmin(getPostToken($cate, "admin_id"))?></div>
                            <div class="author-profession">Journalist</div>
                            <div class="author-description">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totamrem aperiam, eaque ipsa quae ab illo inventore veritatis</div>
                            <div class="author-social">
                                <ul>
                                    <li class="tw"><a href="">
                                        <i class="fa fa-twitter"></i>
                                    </a></li>
                                    <li class="fb"><a href="">
                                        <i class="fa fa-facebook"></i>
                                    </a></li>
                                    <li class="gp"><a href="">
                                        <i class="fa fa-google-plus"></i>
                                    </a></li>
                                    <li class="in"><a href="">
                                        <i class="fa fa-instagram"></i>
                                    </a></li>
                                    <li class="dr"><a href="">
                                        <i class="fa fa-dribbble"></i>
                                    </a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="comments-block">
                            <div class="title-blc-2">
                                <div class="title-blc-inner">
                                    <h4>Comments</h4>
                                </div>
                            </div>
                            <div class="comments">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include_once("layouts/aside.php") ?>
    </div>
</div>

</div>
<!-- Content END -->
<?php }else{ ?>

<!-- Content -->
<div class="main-content">
    <div class="section">
        <div class="text-center" style="padding-top: 50px;">
            <div class="large-404"><i class="fa fa-file"></i></div>
            <h2>Post Not Found</h2>
            <p>Hey, This post page you are looking is unavailable.</p>
        </div>
    </div>
</div>
<!-- Content END -->

<?php } ?>