

<div class="td-ss-main-content">

<article id="post-12641"
    class="post-12641 post type-post status-publish format-standard has-post-thumbnail category-diem-tam tag-che"
    itemscope itemtype="https://schema.org/Article">
    <div class="td-post-header">

        <ul class="td-category">
            <li class="entry-category">
                <a href="#"><?php 
                foreach ($categorys as $category) {
                        if ($news['id_category']==$category['id']) {
                                echo $category['name'];
                        }
                }
                ?></a>
            </li>
        </ul>

        <div class="td-post-title">
            <h1 class="entry-title"><?=$news['title']?></h1><!-- TITLE -->

            <div class="td-module-meta-info">
                <div class="td-post-comments"><a href="#"><i class="td-icon-comments"></i></a></div>
                <div class="td-post-views"><i class="td-icon-views"></i><span class="td-nr-views-12641"></span>
                </div>
            </div>
        </div>
    </div>



    <div class="td-post-content">

        <!-- SUBTITLE -->
        <p><em><span style="font-weight: 400;"><?=$news['subtitle']?></span></em></p>
        <p><img class="size-full wp-image-12643 aligncenter" src="/img_file/<?=$news['img_1']?>" /></p>

        <h2><span id="1_Cach_nau_che_hat_ke_dau_xanh_thom_ngon_de_lam"><b>1. <?=$news['title_1']?></b></span></h2>

        <p><span style="font-weight: 400;"> - <?=$news['content_1']?>.</span></p>

                <p><img class="size-full wp-image-12643 aligncenter" src="/img_file/<?=$news['img_2']?>" /></p>
        <h2><span id="1_Cach_nau_che_hat_ke_dau_xanh_thom_ngon_de_lam"><b>1. <?=$news['title_2']?> </b></span></h2>                    
 
        <p><span style="font-weight: 400;"> - <?=$news['content_2']?>.</span></p>

        <p><img class="size-full wp-image-12644 aligncenter" src="/img_file/<?=$news['img_3']?>"/></p>
        </div>
</article>
</div>