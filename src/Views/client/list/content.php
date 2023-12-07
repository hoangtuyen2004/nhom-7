<div id="td-outer-wrap" class="td-theme-wrap">
    <div class="td-main-content-wrap td-main-page-wrap td-container-wrap">
        <div class="tdc-content-wrap">

            <!-- content -->
            <div id="td_uid_5_655dbc192232b" class="tdc-row">
                <div class="vc_row td_uid_7_655dbc192232f_rand td-ss-row wpb_row td-pb-row">
                    <!-- Section   -->

                    <div class="vc_column td_uid_8_655dbc1922458_rand  wpb_column vc_column_container tdc-column td-pb-span8">

                        <?php
                        if (isset($news['id_display'])) {
                            if ($news['id_display'] == 1) {
                                include_once '/laragon/www/nhom_7/src/Views/client/list/display/display1.php';
                            } elseif ($news['id_display'] == 2) {
                                include_once '/laragon/www/nhom_7/src/Views/client/list/display/display2.php';
                            } elseif ($news['id_display'] == 3) {
                                include_once '/laragon/www/nhom_7/src/Views/client/list/display/display3.php';
                            }
                        } ?>

                        <div class="td_block_wrap td_block_15 td_uid_28_655dbc1936fe2_rand td-pb-border-top td_block_template_1 td-column-2 td_block_padding" data-td-block-uid="td_uid_28_655dbc1936fe2">


                            <?php foreach ($newx3 as $news) : ?>
                                <div id="comment-form">
                                    <h4>Bình luận</h4>
                                    <?php include_once '/laragon/www/nhom_7/src/Views/client/list/comment.php'; ?>
                                </div>


                                <div class="td-block-title-wrap">
                                    <h4 class="block-title td-block-title"><span class="td-pulldown-size">TIN KHÁC</span></h4>
                                </div>
                                <div id=td_uid_28_655dbc1936fe2 class="td_block_inner td-column-2">
                                    <div class="td-block-row">
                                        <div class="td-block-span4">
                                            <div class="td_module_mx4 td_module_wrap td-animation-stack">
                                                <div class="td-module-image">
                                                    <div class="td-module-thumb">
                                                        <a href="/client/list/news?id=<?= $news['id'] ?>" rel="bookmark" class="td-image-wrap" title="<?= $news['title'] ?>">
                                                            <img width="218" style="max-width: 100%;max-height: 150px;object-fit: cover;" height="150" class="entry-thumb" src="/img_file/<?= $news['avatar'] ?>" srcset="/img_file/<?= $news['avatar'] ?> 218w, /img_file/<?= $news['avatar'] ?> 100w" sizes="(max-width: 218px) 100vw, 218px" alt="<?= $news['title'] ?>" title="<?= $news['title'] ?>" />
                                                        </a>
                                                    </div>
                                                    <a href="/client/list/category?id=<?= $news['id_category'] ?>" class="td-post-category">
                                                        <?php foreach ($categorys as $category) {
                                                            if ($category['id'] == $news['id_category']) {
                                                                echo $category['name'];
                                                            }
                                                        } ?>
                                                    </a>
                                                </div>
                                                <h3 class="entry-title td-module-title">
                                                    <a href="/client/list/news?id=<?= $news['id'] ?>" rel="bookmark" title="<?= $news['title'] ?>"><?= $news['title'] ?>
                                                    </a>
                                                </h3>
                                            </div>


                                        </div>
                                    <?php endforeach ?>
                                    </div>

                                </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Asile    -->

                    <div class="vc_column td_uid_29_655dbc193a095_rand  wpb_column vc_column_container tdc-column td-pb-span4">
                        <?php include_once '/laragon/www/nhom_7/src/Views/client/components/asile.php'; ?>
                    </div>

                </div>
            </div>
        </div>
    </div>