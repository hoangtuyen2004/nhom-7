<div class="td-ss-main-content">
        <style>
            .mb{
                width: 534px;
                height: 400px;
                object-fit: cover;
            }
            .ma{
                width: 265px;
                height: 198px;
                object-fit: cover;
            }
        </style>
        <article id="post-12641"
            class="post-12641 post type-post status-publish format-standard has-post-thumbnail category-diem-tam tag-che"
            itemscope itemtype="https://schema.org/Article">
            <div class="td-post-header">

                <!-- Category -->
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

                <!-- Entry-Title -->
                <div class="td-post-title">
                    <h1 class="entry-title"><?=$news['title']?></h1>

                    <div class="td-module-meta-info">
                        <div class="td-post-comments"><a href="#"><i class="td-icon-comments"></i></a></div>
                        <div class="td-post-views"><i class="td-icon-views"></i><span class="td-nr-views-12641"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="td-post-content">


                <p><em><span style="font-weight: 400;"><?=$news['subtitle']?></span></em></p>
                <!-- IMG 3 -->
                <div class="td-pb-span8 td-main-content" style="width: 100%;">
                    <div class="td-ss-main-content">
                        <div class="td-category-grid td-container-wrap">
                            <div class="" style="display: flex;justify-content: center;">
                                <div style="width: 100%;" class="td-pb-row">
                                    <div class="td-pb-span12">
                                        <div class="aligncenter size-full">
                                            <div id=td_uid_8_655dbcad501ed class="td_block_inner">
                                                <div  class="td-big-grid-wrapper">
                                                    <div
                                                        class="td_module_mx5 td-animation-stack td-big-grid-post-0 td-big-grid-post td-big-thumb">
                                                        <div>
                                                            <img class="mb" style="margin: 0;" src="/img_file/<?=$news['img_1']?>"/>
                                                        </div>
                                                    </div>

                                                    <div class="td-big-grid-scroll" style=" display: flex; gap: 4px;margin-top: 4px;">
                                                        <div style="width: 100%;" class="td_module_mx6 td-animation-stack td-big-grid-post-1 td-big-grid-post td-small-thumb">
                                                            <div style="margin-bottom: 0px;">
                                                                <img style="max-height: 326px;" class="entry-thumb mb" src="/img_file/<?=$news['img_2']?>"/>
                                                            </div>
                                                        </div>
                                                        <div style="width: 100%;" class="td_module_mx6 td-animation-stack td-big-grid-post-3 td-big-grid-post td-small-thumb">
                                                            <div>
                                                                <img style="max-height: 326px;" class="mb" src="/img_file/<?=$news['img_3']?>"/>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<!-- TITLE_1 -->
                <h2><span id="1_Cach_nau_che_hat_ke_dau_xanh_thom_ngon_de_lam"><b>1. <?=$news['title_1']?></b></span></h2>
<!-- CONTENT -->
                <p><span style="font-weight: 400;">- <?=$news['content_1']?>.</span></p>
<!-- IMG -->
                <p><img style="width: 50%;object-fit: cover;" class="size-full wp-image-12643 aligncenter" src="/img_file/<?=$news['img_4']?>"/></p>
<!-- TITLE_2 -->
                <h2><span id="1_Cach_nau_che_hat_ke_dau_xanh_thom_ngon_de_lam"><b>1. <?=$news['title_2']?></b></span></h2>
<!-- CONTENT -->                
                <p><span style="font-weight: 400;">- <?=$news['content_1']?>.</span></p>

            </div>


        </article>
    </div>