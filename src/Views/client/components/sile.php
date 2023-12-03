<div class="vc_row td_uid_4_655dbc191f706_rand  wpb_row td-pb-row">
    <div class="vc_column td_uid_5_655dbc191f859_rand  wpb_column vc_column_container tdc-column td-pb-span12">
        <div class="wpb_wrapper">
            <div
                class="td_block_wrap td_block_big_grid_3 td_uid_6_655dbc191fa71_rand td-grid-style-1 td-hover-1 td-big-grids td-pb-border-top td_block_template_1">
                <div id=td_uid_6_655dbc191fa71 class="td_block_inner">
                    <div class="td-big-grid-wrapper">
                        <div class="td_module_mx5 td-animation-stack td-big-grid-post-0 td-big-grid-post td-big-thumb">
                            <?php foreach ($newTop as $newTop) :?>
                            <div class="td-module-thumb"><a href="/client/list/news?id=<?=$newTop['id']?>"
                                    rel="bookmark" class="td-image-wrap" title="<?=$newTop['title']?>"><img width="534"
                                        height="462" class="entry-thumb" src="/img_file/<?=$newTop['avatar']?>"
                                        alt="<?=$newTop['title']?>" title="<?=$newTop['title']?>" /></a>
                            </div>
                            <div class="td-meta-info-container">
                                <div class="td-meta-align">
                                    <div class="td-big-grid-meta">
                                        <a href="/client/list/category?id=<?=$newTop['id_category']?>"
                                            class="td-post-category">
                                            <?php foreach ($categorys as $category) {
                                            if ($category['id']==$newTop['id_category']) {
                                                echo $category['name'];
                                            }
                                        }?>
                                        </a>
                                        <h3 class="entry-title td-module-title"><a
                                                href="/client/list/news?id=<?=$newTop['id']?>" rel="bookmark"
                                                title="<?=$newTop['title']?>"><?=$newTop['title']?></a></h3>
                                    </div>
                                    <div class="td-module-meta-info">
                                    </div>
                                </div>
                            </div>
                            <?php endforeach?>
                        </div>

                        <div class="td-big-grid-scroll">
                            <div
                                class="td_module_mx11 td-animation-stack td-big-grid-post-1 td-big-grid-post td-medium-thumb">
                                <?php foreach ($newTop2 as $newTop) :?>
                                <div class="td-module-thumb">
                                    <a href="/client/list/news?id=<?=$newTop['id']?>" rel="bookmark"
                                        class="td-image-wrap" title="<?=$newTop['title']?>">
                                        <img width="533" height="261" class="entry-thumb"
                                            src="/img_file/<?=$newTop['avatar']?>"
                                            sizes="(max-width: 533px) 100vw, 533px" alt="<?=$newTop['title']?>"
                                            title="<?=$newTop['title']?>" /></a>
                                </div>
                                <div class="td-meta-info-container">
                                    <div class="td-meta-align">
                                        <div class="td-big-grid-meta">
                                            <a href="/client/list/category?id=<?=$newTop['id_category']?>"
                                                class="td-post-category">
                                                <?php foreach ($categorys as $category) {
                                                if ($category['id']==$newTop['id_category']) {
                                                    echo $category['name'];
                                                }
                                            }?></a>
                                            <h3 class="entry-title td-module-title"><a
                                                    href="/client/list/news?id=<?=$newTop['id']?>" rel="bookmark"
                                                    title="<?=$newTop['title']?>"><?=$newTop['title']?></a></h3>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach?>
                            </div>
                            <div>
                                <?php foreach ($newTop3 as $newTop) :?>
                                <div
                                    class="td_module_mx6 td-animation-stack td-big-grid-post-2 td-big-grid-post td-small-thumb">
                                    <div class="td-module-thumb">
                                        <a href="/client/list/news?id=<?=$newTop['id']?>" rel="bookmark"
                                            class="td-image-wrap" title="<?=$newTop['title']?>">
                                            <img width="533" height="261" class="entry-thumb"
                                                src="/img_file/<?=$newTop['avatar']?>"
                                                sizes="(max-width: 533px) 100vw, 533px" alt="<?=$newTop['title']?>"
                                                title="<?=$newTop['title']?>" /></a>
                                    </div>
                                    <div class="td-meta-info-container">
                                        <div class="td-meta-align">
                                            <div class="td-big-grid-meta">
                                                <a href="/client/list/category?id=<?=$newTop['id_category']?>"
                                                    class="td-post-category">
                                                    <?php foreach ($categorys as $category) {
                                                    if ($category['id']==$newTop['id_category']) {
                                                        echo $category['name'];
                                                    }
                                                }?></a>
                                                <h3 class="entry-title td-module-title"><a
                                                        href="/client/list/news?id=<?=$newTop['id']?>" rel="bookmark"
                                                        title="<?=$newTop['title']?>"><?=$newTop['title']?></a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach?>
                                <?php foreach ($newTop4 as $newTop) :?>
                                <div
                                    class="td_module_mx6 td-animation-stack td-big-grid-post-2 td-big-grid-post td-small-thumb" style="margin-left: 3px;">
                                    <div class="td-module-thumb">
                                        <a href="/client/list/news?id=<?=$newTop['id']?>" rel="bookmark"
                                            class="td-image-wrap" title="<?=$newTop['title']?>">
                                            <img width="533" height="261" class="entry-thumb"
                                                src="/img_file/<?=$newTop['avatar']?>"
                                                sizes="(max-width: 533px) 100vw, 533px" alt="<?=$newTop['title']?>"
                                                title="<?=$newTop['title']?>" /></a>
                                    </div>
                                    <div class="td-meta-info-container">
                                        <div class="td-meta-align">
                                            <div class="td-big-grid-meta">
                                                <a href="/client/list/category?id=<?=$newTop['id_category']?>"
                                                    class="td-post-category">
                                                    <?php foreach ($categorys as $category) {
                                                    if ($category['id']==$newTop['id_category']) {
                                                        echo $category['name'];
                                                    }
                                                }?></a>
                                                <h3 class="entry-title td-module-title"><a
                                                        href="/client/list/news?id=<?=$newTop['id']?>" rel="bookmark"
                                                        title="<?=$newTop['title']?>"><?=$newTop['title']?></a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach?>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>