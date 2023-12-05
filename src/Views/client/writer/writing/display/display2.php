<style>
        .box-img-3{
            display: flex;
            gap: 40px;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }
        .product-img{
            height: 800px;
            width: 30%;
        }
    </style>

<div class="td-ss-main-content">
        <article id="post-12641" class="post-12641 post type-post status-publish format-standard has-post-thumbnail category-diem-tam tag-che">
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
                        <br><br>
                <!-- IMG 3 -->
                <div class="td-pb-span8 td-main-content" style="width: 100%;">
                    <div class="td-ss-main-content">
                        <div class="td-category-grid td-container-wrap">
                            <div class="" style="display: flex;justify-content: center;">
                                <div style="width: 80%;" class="td-pb-row">
                                    <div class="td-pb-span12">
                                                    <div class="box-img-3">
                                                        <img src="/img_file/<?=$news['img_1']?>" alt="sản phẩm"
                                                            class="product-img">
                                                        <img style="margin-top: 70px;"
                                                            src="/img_file/<?=$news['img_2']?>" alt="sản phẩm"
                                                            class="product-img">
                                                        <img src="/img_file/<?=$news['img_3']?>" alt="sản phẩm"
                                                            class="product-img">
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