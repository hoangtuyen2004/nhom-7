<div class="pcoded-content">
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Viết bài</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/client/writer/news"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href=""></a> Bài đăng</li>
                        <li class="breadcrumb-item"><a href=""></a> Viết bài</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card table-card">
                                <div class="card-header">
                                    <h5>Sửa bài viết: <?=$news['id']?></h5>
                                    <div class="card-header-right">
                                        <a href="/client/writer/news" style="color: #ffffff;"
                                            class="btn waves-effect waves-light btn-danger btn-square"><i
                                                class="fa-solid fa-ban" style="color: #ffffff;"></i> Hủy</a>
                                    </div>
                                </div>
                                <div class="card-block p-b-0">
                                    <div class="table-responsive">
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <div class="card-header">
                                            </div>
                                            <div class="card-block">
                                                <div class="col-sm-12 col-xl-3 m-b-30 mw-100">
                                                    <h4 class="sub-title">Giao diện</h4>
                                                    <select name="display" class="form-control form-control-default">
                                                        <!-- DISPLAY -->
                                                        <option <?php if($news['id_display']==1){echo "selected";}?> value="1">Mặc định</option>
                                                        <option <?php if($news['id_display']==2){echo "selected";}?> value="2">From 1</option>
                                                        <option <?php if($news['id_display']==3){echo "selected";}?> value="3">From 2</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-12 col-xl-3 m-b-30 mw-100">
                                                    <label class="col-sm-2 col-form-label" for="avatar">Ảnh đại diện cho
                                                        bài viết</label>
                                                    <div class="col-sm-12">
                                                        <input type="file" title="Ảnh bài viết" name="avatar" class="form-control p-1">
                                                        <input type="text" name="avatar_old" value="<?=$news['avatar']?>" id="" readonly hidden>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-xl-3 m-b-30 mw-100">
                                                    <label class="col-sm-2 col-form-label" for="title">TIÊU ĐỀ</label>
                                                    <div class="col-sm-12">
                                        <!-- TITLE --> <input type="text" name="title" title="Tiêu đề" value="<?=$news['title']?>"
                                                            class="form-control form-control-lg"
                                                            placeholder="Nội dung tiêu đề">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-xl-3 m-b-30 mw-100">
                                    <!-- SUBTITLE --> <label class="col-sm-2 col-form-label"
                                                        for="subtitle">PHỤ ĐỀ</label>
                                                    <div class="col-sm-12">
                                                        <textarea rows="5" cols="5" name="subtitle" title="Phụ đề"
                                                            class="form-control"
                                                            placeholder="Nội dung phụ đề"><?=$news['subtitle']?></textarea>
                                                    </div>
                                                </div>
                                                <!-- IMG 1 -->
                                                <div class="col-sm-12 col-xl-3 m-b-30 mw-100">
                                                    <label class="col-sm-2 col-form-label" for="avatar">Ảnh nội
                                                        dung</label>
                                                    <div class="col-sm-12">
                                                        <input type="file" name="img_1" title="Ảnh 1"
                                                            class="form-control p-1">
                                                            <input type="text" name="img_1_old" value="<?=$news['img_1']?>" id="" readonly hidden>
                                                    </div>
                                                </div>
                                                <!-- IMG 2 -->
                                                <div class="col-sm-12 col-xl-3 m-b-30 mw-100">
                                                    <label class="col-sm-2 col-form-label" for="avatar">Ảnh nội
                                                        dung</label>
                                                    <div class="col-sm-12">
                                                        <input type="file" name="img_2" title="Ảnh 2"
                                                            class="form-control p-1">
                                                            <input type="text" name="img_2_old" value="<?=$news['img_2']?>" id="" readonly hidden>
                                                    </div>
                                                </div>
                                                <!-- IMG 3 -->
                                                <div class="col-sm-12 col-xl-3 m-b-30 mw-100">
                                                    <label class="col-sm-2 col-form-label" for="avatar">Ảnh nội
                                                        dung</label>
                                                    <div class="col-sm-12">
                                                        <input type="file" name="img_3" title="Ảnh 3"
                                                            class="form-control p-1">
                                                            <input type="text" name="img_3_old" value="<?=$news['img_3']?>" id="" readonly hidden>
                                                    </div>
                                                </div>
                                                <!-- IMG 4 -->
                                                <div class="col-sm-12 col-xl-3 m-b-30 mw-100">
                                                    <label class="col-sm-2 col-form-label" for="avatar">Ảnh nội
                                                        dung</label>
                                                    <div class="col-sm-12">
                                                        <input type="file" name="img_4" title="Ảnh 4"
                                                            class="form-control p-1">
                                                            <input type="text" name="img_4_old" value="<?=$news['img_4']?>" id="" readonly hidden>
                                                    </div>
                                                </div>
                                                <!-- TITLE 1 -->
                                                <div class="col-sm-12 col-xl-3 m-b-30 mw-100">
                                                    <label class="col-sm-2 col-form-label" for="title">TIÊU ĐỀ 1</label>
                                                    <div class="col-sm-12">
                                                        <!-- TITLE --> <input type="text" name="title_1" value="<?=$news['title_1']?>"
                                                            title="Đề mục 1" class="form-control form-control-lg"
                                                            placeholder="Nội dung tiêu đề">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-xl-3 m-b-30 mw-100">
                                                    <!-- CONTENT --> <label class="col-sm-2 col-form-label"
                                                        for="subtitle">Nội dung 1</label>
                                                    <div class="col-sm-12">
                                                        <textarea rows="5" cols="5" title="Nội dung" name="content_1" 
                                                            class="form-control"
                                                            placeholder="Nội dung phụ đề"><?=$news['content_1']?></textarea>
                                                    </div>
                                                </div>
                                                <!-- TITLE 2 -->
                                                <div class="col-sm-12 col-xl-3 m-b-30 mw-100">
                                                    <label class="col-sm-2 col-form-label" for="title">TIÊU ĐỀ 2</label>
                                                    <div class="col-sm-12">
                                                        <!-- TITLE --> <input type="text" name="title_2" value="<?=$news['title_2']?>"
                                                            title="Đề mục 2" class="form-control form-control-lg"
                                                            placeholder="Nội dung tiêu đề">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-xl-3 m-b-30 mw-100">
                                                    <!-- SUBTITLE --> <label class="col-sm-2 col-form-label"
                                                        for="subtitle">NỘI DUNG 2</label>
                                                    <div class="col-sm-12">
                                                        <textarea rows="5" cols="5" name="content_2" title="Nội dung"
                                                            class="form-control"
                                                            placeholder="Nội dung phụ đề"><?=$news['content_2']?></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12 col-xl-3 m-b-30 mw-100">
                                                    <div class="col-sm-12">
                                                        <label class="ol-sm-2 col-form-label"
                                                            for="category">Category</label>

                                                        <select name="category" class="form-control">
                                                            <?php foreach ($categorys as $category) :?>
                                                                <option value="<?= $category['id']?>" <?php if($news['id_category']==$category['id']){echo "selected";}?>> <?= $category['name']?></option>
                                                            <?php endforeach?>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-sm-12 col-xl-3 m-b-30 mw-100">
                                                <div class="col-sm-12">
                                                    <button type="submit" name="btn-submit"
                                                        class="btn ml-1 btn-success alert-success-msg m-b-10">CREATE</button>
                                                    <button type="reset"
                                                        class="btn ml-1 btn-danger alert-success-cancel m-b-10">Reset</button>
                                                    <a href="/client/writer/news"
                                                        class="btn ml-1 btn-primary alert-prompt m-b-10">Cancel</a>
                                                </div>
                                            </div>
                                    </div>
                                    </form>
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