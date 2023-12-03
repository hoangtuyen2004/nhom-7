<div class="td-footer-wrapper td-container-wrap td-footer-template-9 ">
    <div class="td-container">

        <div class="td-pb-row">
            <div class="td-pb-span12">
            </div>
        </div>

        <div class="td-pb-row">

            <div class="td-pb-span4">
                <aside class="td_block_template_1 widget widget_media_image">
                    <a href="/"><img class="image" src="/asset-client/Image/N.png" alt="" width="300" height="112" /></a>
                </aside>
                <aside class="td_block_template_1 widget widget_text">
                    <h4 class="block-title"><span><a href="/">Food news</a></span></h4>
                </aside>
            </div>

            <div class="td-pb-span4">
                <div class="td_block_wrap td_block_popular_categories td_block_widget td_uid_32_655dbc195788b_rand widget widget_categories td-pb-border-top td_block_template_1"
                    data-td-block-uid="td_uid_32_655dbc195788b">
                    <div class="td-block-title-wrap">
                        <h4 class="block-title td-block-title"><span class="td-pulldown-size">Chuyên mục Category</span></h4>
                    </div>
                    <ul class="td-pb-padding-side">
                        <?php foreach ($categorys as $category) :?>
                            <li><a href="/client/list/category?id=<?=$category['id']?>"><span class="td-cat-name"><?=$category['name']?></span><span class="td-cat-no"><?=$category['id']?></span></a></li>
                        <?php endforeach?>
                    </ul>
                </div>
            </div>

            <div class="td-pb-span4">
                <aside class="td_block_template_1 widget widget_recent_entries">
                    <h4 class="block-title"><span>Bài viết gần đây</span></h4>
                    <ul>
                        <?php foreach ($newsDate as $news) :?>
                        <li>
                            <a href="/client/list/news?id=<?=$news['id']?>"><?=$news['title']?></a>
                        </li>
                        <?php endforeach?>
                    </ul>
                </aside>
            </div>

        </div>
    </div>
</div>