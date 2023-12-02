<div class="wpb_wrapper">
    <div class="td_block_wrap td_block_7 td_uid_30_655dbc193a262_rand td-pb-border-top td_block_template_1 td-column-1 td_block_padding"
        data-td-block-uid="td_uid_30_655dbc193a262">

        <div class="td-block-title-wrap">
            <h4 class="block-title td-block-title"><span class="td-pulldown-size">BÀI VIẾT MỚI NHẤT</span></h4>
        </div>
        <?php foreach ($newsDate as $news) :?>
        <div id=td_uid_30_655dbc193a262 class="td_block_inner">
            <div class="td-block-span12">
                <div class="td_module_6 td_module_wrap td-animation-stack" style="margin-bottom: 26px;">
                    <div class="td-module-thumb">
                        <a href="/client/list/news?id=<?=$news['id']?>" rel="bookmark" class="td-image-wrap"
                            title="<?=$news['title']?>">
                            <img style="max-width: 100%;max-height: 70px;object-fit: cover;" width="100" height="70"
                                class="entry-thumb" src="/img_file/<?=$news['avatar']?>"
                                srcset="/img_file/<?=$news['avatar']?> 100w, /img_file/<?=$news['avatar']?> 218w"
                                sizes="(max-width: 100px) 100vw, 100px" alt="<?=$news['title']?>" /></a>
                    </div>
                    <div class="item-details">
                        <h3 class="entry-title td-module-title"><a href="/client/list/news?id=<?=$news['id']?>"
                                rel="bookmark" title="<?$news['title']?>"><?=$news['title']?></a></h3>
                        <div class="td-module-meta-info">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach?>
    </div> <!-- ./block -->
    <div class="td_block_wrap td_block_7 td_uid_30_655dbc193a262_rand td-pb-border-top td_block_template_1 td-column-1 td_block_padding"
        data-td-block-uid="td_uid_30_655dbc193a262">
        <div class="td-block-title-wrap">
            <h4 class="block-title td-block-title"><span class="td-pulldown-size">Danh mục</span></h4>
        </div>
        <?php foreach ($categorys as $category) :?>
        <div class="" style="padding-left: 10px;">
            <div class="item-details">
                <h3 class="entry-title td-module-title"><a href="/client/list/category?id=<?=$category['id']?>" rel="bookmark"
                        title="<?=$category['name']?>"><i class="fa-solid fa-folder-open" style="margin-right: 5px;"></i><?=$category['name']?></a></h3>
                <div class="td-module-meta-info">
                </div>
            </div>
        </div>
        <?php endforeach?>
    </div>
</div>