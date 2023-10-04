<ul class="main-nav-list sf-menu">
    <li>
        <a href="javascript:void(0)">main stories <i class="fa fa-angle-down"></i></a>
        <ul class="sub">
            
            <?php
            $result=getTable("db_blog_post_category", "WHERE cate_stat<>'3' AND cate_sub='1'");
            foreach ($result as $row) {
            ?>
            <li><a href="/<?=$row["cate_slug_url"]?>"><?=$row["cate_name"]?></a></li>
            <?php } ?>
            
        </ul>
    </li>

    <li>
        <a href="javascript:void(0)">browse <i class="fa fa-angle-down"></i></a>
        <ul class="sub">

            <?php
            $result=getTable("db_blog_post_category", "WHERE cate_stat<>'3' AND cate_sub='2'");
            foreach ($result as $row) {
            ?>
            <li><a href="/<?=$row["cate_slug_url"]?>"><?=$row["cate_name"]?></a></li>
            <?php } ?>

        </ul>
    </li>

    <li class="mf">
        <a href="">Featured Stories <i class="fa fa-angle-down"></i></a>
        <ul class="sub">
            <li>
                <div class="mega-menu">
                    <div class="col-row">
                        <div class="col-one-fifth sm-col-one-fifth cats">
                            <ul>
                                <li><a href="">Investment & Funding</a></li>
                                <li><a href="">Academy</a></li>
                                <li><a href="">Start-Up & Programs</a></li>
                                <li><a href="">Events</a></li>
                            </ul>
                        </div>
                        <div class="col-four-fifths sm-col-four-fifths">
                            <div class="mm-life-st-pst">
                                <div class="mm-life-st-title">
                                    <span>Stories</span>
                                    <a href="" class="all">all posts</a>
                                </div>
                                <div class="col-row">
                                    <div class="col-one-quarter">
                                        <article class="post">
                                            <figure>
                                                <a href="">
                                                    <img src="/assets/img/203x136/1.jpg" height="136" width="203" alt="Spectr News Theme" class="adaptive" />
                                                </a>
                                            </figure>
                                            <h6 class="title-12"><a href="">But I must explain to you how all this mistaken</a></h6>
                                        </article>
                                    </div>
                                    <div class="col-one-quarter">
                                        <article class="post">
                                            <figure>
                                                <a href="">
                                                    <img src="/assets/img/203x136/2.jpg" height="136" width="203" alt="Spectr News Theme" class="adaptive" />
                                                </a>
                                            </figure>
                                            <h6 class="title-12"><a href="">You how all this mistaken idea of denouncing</a></h6>
                                        </article>
                                    </div>
                                    <div class="col-one-quarter">
                                        <article class="post">
                                            <figure>
                                                <a href="">
                                                    <img src="/assets/img/203x136/3.jpg" height="136" width="203" alt="Spectr News Theme" class="adaptive" />
                                                </a>
                                            </figure>
                                            <h6 class="title-12"><a href="">Midea of denouncing pleas ure and praising</a></h6>
                                        </article>
                                    </div>
                                    <div class="col-one-quarter">
                                        <article class="post">
                                            <figure>
                                                <a href="">
                                                    <img src="/assets/img/203x136/4.jpg" height="136" width="203" alt="Spectr News Theme" class="adaptive" />
                                                </a>
                                            </figure>
                                            <h6 class="title-12"><a href="">Denouncing pleasure and praising pain was born</a></h6>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </li>

    <li>
        <a href="">subscribe <i class="fa fa-angle-down"></i></a>
        <ul class="sub">
            <li><a href="/subscribe-online">Online Newsletter</a></li>
            <li><a href="/subscribe-hardcopy">Hardcopy Newsletter</a></li>
        </ul>
    </li>
    
    <li><a href="/contact-us">contacts</a></li>
</ul>