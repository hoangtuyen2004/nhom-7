<div class="wpb_wrapper">
    <div class="td_block_wrap td_block_2 td_uid_26_655dbc1931b48_rand td-pb-border-top td_block_template_1 td-column-2 td_block_padding"
        data-td-block-uid="td_uid_26_655dbc1931b48">
        <div class="td-block-title-wrap">
            <h4 class="block-title td-block-title"><span class="td-pulldown-size">TIN PHỔ BIẾN</span></h4>
        </div>
        <div id=td_uid_26_655dbc1931b48 class="td_block_inner">

            <div class="td-block-row">
                <?php foreach ($newCategorys as $news) : ?>
                <div class="td-block-span6">

                    <div class="td_module_2 td_module_wrap td-animation-stack">
                        <div class="td-module-image">
                            <div class="td-module-thumb"><a href="/client/list/news?id=<?= $news['id'] ?>"
                                    rel="bookmark" class="td-image-wrap" title="<?= $news['title'] ?>"><img
                                        style=" max-width: 100%; max-height: 260px; object-fit: cover;" width="324"
                                        height="160" class="entry-thumb" src="/img_file/<?= $news['avatar'] ?>"
                                        srcset="/img_file/<?= $news['avatar'] ?> 324w, /img_file/<?= $news['avatar'] ?> 533w"
                                        sizes="(max-width: 324px) 100vw, 324px" title="<?= $news['title'] ?>" /></a>
                            </div> <a href="/client/list/category?id=<?= $newTop['id_category'] ?>"
                                class="td-post-category">
                                <?php foreach ($categorys as $category) {
                                        if ($category['id'] == $newTop['id_category']) {
                                            echo $category['name'];
                                        }
                                    } ?></a>
                        </div>
                        <h3 class="entry-title td-module-title"><a href="/client/list/news?id=<?= $news['id'] ?>"
                                rel="bookmark" title="<?= $news['title'] ?>"><?= $news['title'] ?></a></h3>
                    </div>
                </div>
                <?php endforeach ?>
            </div>

            <div class="td-block-row">
                    <?php foreach ($newCategory2 as $news) :?>
                    <div class="td-block-span6 mt-3">

                        <div class="td_module_6 td_module_wrap td-animation-stack">

                            <div class="td-module-thumb">
                                <a href="/client/list/news?id=<?= $news['id'] ?>" rel="bookmark" class="td-image-wrap"
                                    title="<?=$news['title']?>">
                                    <img width="100" height="70"
                                        style="max-width: 100%;max-height: 70px;object-fit: cover;" class="entry-thumb"
                                        src="/img_file/<?=$news['avatar']?>"
                                        srcset="/img_file/<?=$news['avatar']?> 100w, /img_file/<?=$news['avatar']?> 218w"
                                        sizes="(max-width: 100px) 100vw, 100px" alt="<?=$news['title']?>"
                                        title="<?=$news['title']?>" /></a>
                            </div>
                            <div class="item-details">
                                <h3 class="entry-title td-module-title"><a
                                        href="/client/list/news?id=<?= $news['id'] ?>" rel="bookmark"
                                        title="<?=$news['title']?>"><?=$news['title']?></a></h3>
                                <div class="td-module-meta-info">
                                </div>
                            </div>

                        </div>


                    </div> <!-- ./td-block-span6 -->
                    <?php endforeach?>
            </div>
        </div>
    </div> <!-- ./block -->

    <div class="td_block_wrap td_block_1 td_uid_27_655dbc1934325_rand td-pb-border-top td_block_template_1 td-column-2" data-td-block-uid="td_uid_27_655dbc1934325">
        <div class="td-block-title-wrap">
            <h4 class="block-title td-block-title"><span class="td-pulldown-size">DANH MỤC</span></h4>
        </div>
        <div id=td_uid_27_655dbc1934325 class="td_block_inner">
            <div class="td-block-row">
                <div class="td-block-span6">
                    <?php foreach ($newsCatary as $news) :?>
                        <div class="td_module_4 td_module_wrap td-animation-stack">
                            <div class="td-module-image">
                                <div class="td-module-thumb">
                                    <a href="/client/list/news?id=<?=$news['id']?>" rel="bookmark" class="td-image-wrap" title="<?=$news['title']?>">
                                        <img style="width: 100%;max-height: 235px;object-fit: cover;" width="324" height="235" class="entry-thumb"
                                            src="/img_file/<?=$news['avatar']?>"
                                            srcset="/img_file/<?=$news['avatar']?> 324w, /img_file/<?=$news['avatar']?> 800w"
                                            sizes="(max-width: 324px) 100vw, 324px" alt="<?=$news['title']?>"
                                            title="<?=$news['title']?>" /></a>
                                </div> <a href="/client/list/category?id=<?=$news['id_category']?>" class="td-post-category">
                                    <?php foreach ($categorys as $category) {
                                        if ($category['id']==$news['id_category']) {
                                            echo $category['name'];
                                        }
                                    }?>
                                </a>
                            </div>

                            <h3 class="entry-title td-module-title"><a
                                    href="/client/list/news?id=<?=$news['id']?>"
                                    rel="bookmark" title="<?=$news['title']?>"><?=$news['title']?></a></h3>
                        </div>
                    <?php endforeach?>

                </div>

                <div class="td-block-span6">
                    <?php foreach ($newsTT as $new) :?>
                        <div class="td_module_6 td_module_wrap td-animation-stack">

                            <div class="td-module-thumb">
                                <a href="/client/list/news?id=<?=$new['id']?>" rel="bookmark" class="td-image-wrap" title="<?=$new['title']?>">
                                    <img style="max-width: 100%;max-height: 70px;object-fit: cover;"width="100" height="70" class="entry-thumb" src="/img_file/<?=$new['avatar']?>" srcset="/img_file/<?=$new['avatar']?> 100w, /img_file/<?=$new['avatar']?> 218w" sizes="(max-width: 100px) 100vw, 100px" alt="" title="<?=$new['title']?>" />
                                </a>
                            </div>
                            <div class="item-details">
                                <h3 class="entry-title td-module-title"><a
                                        href="/client/list/news?id=<?=$new['id']?>"
                                        rel="bookmark"
                                        title="<?=$new['title']?>"><?=$new['title']?></a></h3>
                                <div class="td-module-meta-info">
                                </div>
                            </div>

                        </div>
                    <?php endforeach?>
                </div> 
            </div>
        </div>
    </div> 

    <div class="td_block_wrap td_block_15 td_uid_28_655dbc1936fe2_rand td-pb-border-top td_block_template_1 td-column-2 td_block_padding"
        data-td-block-uid="td_uid_28_655dbc1936fe2">

        <div class="td-block-title-wrap">
            <h4 class="block-title td-block-title"><span class="td-pulldown-size">TIN
                    KHÁC</span></h4>
        </div>
        <div id=td_uid_28_655dbc1936fe2 class="td_block_inner td-column-2">

            <div class="td-block-row">
                <?php foreach ($newx3 as $news) :?>
                <div class="td-block-span4">

                    <div class="td_module_mx4 td_module_wrap td-animation-stack">
                        <div class="td-module-image">
                            <div class="td-module-thumb"><a
                                    href="/client/list/news?id=<?=$news['id']?>"
                                    rel="bookmark" class="td-image-wrap"
                                    title="<?=$news['title']?>">
                                    <img width="218" style="max-width: 100%;max-height: 150px;object-fit: cover;"
                                        height="150" class="entry-thumb"
                                        src="/img_file/<?=$news['avatar']?>"
                                        srcset="/img_file/<?=$news['avatar']?> 218w, /img_file/<?=$news['avatar']?> 100w"
                                        sizes="(max-width: 218px) 100vw, 218px" alt="<?=$news['title']?>"
                                        title="<?=$news['title']?>" /></a>
                            </div> <a href="/client/list/category?id=<?=$news['id_category']?>" class="td-post-category">
                                <?php foreach ($categorys as $category) {
                                        if ($category['id']==$news['id_category']) {
                                            echo $category['name'];
                                        }
                                    }?></a>
                        </div>

                        <h3 class="entry-title td-module-title"><a
                                href="/client/list/news?id=<?=$news['id']?>" rel="bookmark"
                                title="<?=$news['title']?>"><?=$news['title']?></a></h3>
                    </div>


                </div> 
                <?php endforeach?>
            </div>

        </div>
    </div> <!-- ./block -->

    <div class="clearfix"></div>
</div>


