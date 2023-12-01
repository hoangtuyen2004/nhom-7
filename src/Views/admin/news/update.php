<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Create news</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/addmin/dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">News</a> </li>
                        <li class="breadcrumb-item"><a href="#!">create</a> </li>
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
                        <div class="col-sm-12">
                            <div class="card">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="card-header">
                                        <h5>Tạo bài viết</h5>
                                        <span>Add class of <code>.form-control</code> with
                                            <code>&lt;input&gt;</code> tag</span>
                                    </div>
                                    <div class="card-block">
                                        <div class="col-sm-12 col-xl-3 m-b-30 mw-100">
                                            <h4 class="sub-title">Giao diện</h4>
                                            <select name="display" class="form-control form-control-default">
                     <!-- DISPLAY -->           <option <?php if($new['id_display']==1){echo"selected";}?> value="1">Mặc định</option>
                                                <option <?php if($new['id_display']==2){echo"selected";}?> value="2">From 1</option>
                                                <option <?php if($new['id_display']==3){echo"selected";}?> value="3">From 2</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 col-xl-3 m-b-30 mw-100">
                                                <label class="col-sm-2 col-form-label" for="avatar">Ảnh đại diện cho bài viết</label>
                                                <div class="col-sm-12">
                                                    <input type="file" name="avatar" class="form-control p-1">
                                                    <input type="text" name="old-img" value="<?= $new['avatar']?>" hidden>
                                                </div>
                                        </div>
                                        <div class="col-sm-12 col-xl-3 m-b-30 mw-100">
                                            <label class="col-sm-2 col-form-label" for="title">TIÊU ĐỀ</label>
                                            <div class="col-sm-12">
                    <!-- TITLE -->               <input type="text" name="title" class="form-control form-control-lg" value="<?= $new['title']?>" placeholder="Nội dung tiêu đề">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-xl-3 m-b-30 mw-100">
                    <!-- SUBTITLE -->       <label class="col-sm-2 col-form-label" for="subtitle">PHỤ ĐỀ</label>
                                            <div class="col-sm-12">
                                            <textarea rows="5" cols="5" name="subtitle" class="form-control"placeholder="Nội dung phụ đề"><?= $new['subtitle']?></textarea>
                                            </div>
                                        </div>
                                        <!-- IMG 1 -->
                                        <div class="col-sm-12 col-xl-3 m-b-30 mw-100">
                                                <label class="col-sm-2 col-form-label" for="img_1">Ảnh nội dung</label>
                                                <div class="col-sm-12">
                                                    <input type="file" name="img_1" class="form-control p-1">
                                                    <input type="text" name="old_img1" hidden value="<?=$new['img_1']?>">
                                                </div>
                                        </div>
                                        <!-- IMG 2 -->
                                        <div class="col-sm-12 col-xl-3 m-b-30 mw-100">
                                                <label class="col-sm-2 col-form-label" for="img_2">Ảnh nội dung</label>
                                                <div class="col-sm-12">
                                                    <input type="file" name="img_2" class="form-control p-1">
                                                    <input type="text" name="old_img2" hidden value="<?=$new['img_2']?>">
                                                </div>
                                        </div>
                                        <!-- IMG 3 -->
                                        <div class="col-sm-12 col-xl-3 m-b-30 mw-100">
                                                <label class="col-sm-2 col-form-label" for="img_3">Ảnh nội dung</label>
                                                <div class="col-sm-12">
                                                    <input type="file" name="img_3" class="form-control p-1">
                                                    <input type="text" name="old_img3" hidden value="<?=$new['img_3']?>">
                                                </div>
                                        </div>
                                        <!-- IMG 4 -->
                                        <div class="col-sm-12 col-xl-3 m-b-30 mw-100">
                                                <label class="col-sm-2 col-form-label" for="img_4">Ảnh nội dung</label>
                                                <div class="col-sm-12">
                                                    <input type="file" name="img_4" class="form-control p-1">
                                                    <input type="text" name="old_img4" hidden value="<?=$new['img_4']?>">
                                                </div>
                                        </div>
                                        <!-- TITLE 1 -->
                                        <div class="col-sm-12 col-xl-3 m-b-30 mw-100">
                                            <label class="col-sm-2 col-form-label" for="title">TIÊU ĐỀ 1</label>
                                            <div class="col-sm-12">
                    <!-- TITLE -->               <input type="text" name="title_1" class="form-control form-control-lg" value="<?=$new['title_1']?>" placeholder="Nội dung tiêu đề">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-xl-3 m-b-30 mw-100">
                    <!-- CONTENT -->       <label class="col-sm-2 col-form-label" for="subtitle">Nội dung 1</label>
                                            <div class="col-sm-12">
                                            <textarea rows="5" cols="5" name="content_1" class="form-control" placeholder="Nội dung phụ đề"><?=$new['content_1']?></textarea>
                                            </div>
                                        </div>
                                        <!-- TITLE 2 -->
                                        <div class="col-sm-12 col-xl-3 m-b-30 mw-100">
                                            <label class="col-sm-2 col-form-label" for="title">TIÊU ĐỀ 2</label>
                                            <div class="col-sm-12">
                    <!-- TITLE -->               <input type="text" name="title_2" class="form-control form-control-lg" value="<?=$new['title_2']?>" placeholder="Nội dung tiêu đề">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-xl-3 m-b-30 mw-100">
                    <!-- SUBTITLE -->       <label class="col-sm-2 col-form-label" for="subtitle">NỘI DUNG 2</label>
                                            <div class="col-sm-12">
                                            <textarea rows="5" cols="5" name="content_2" class="form-control" placeholder="Nội dung phụ đề"><?=$new['content_2']?></textarea>
                                            </div>
                                        </div>
                            
                                        <div class="col-sm-12 col-xl-3 m-b-30 mw-100">
                                            <div class="col-sm-12">
                                                <label class="ol-sm-2 col-form-label" for="category">Category</label>
                                                    <select name="category" class="form-control" >
                                                        <?php foreach ($categorys as $category) :?>
                                                            <option <?php if($new['id_category']==$category['id']){echo "selected";}?> value="<?=$category['id']?>"><?=$category['name']?></option>
                                                            <?php endforeach?>
                                                    </select>
                                                </div>
                                        </div>

                                        <div class="col-sm-12 col-xl-3 m-b-30 mw-100">
                                            <div class="col-sm-12">
                                                <button type="submit" name="btn-submit" class="btn ml-1 btn-success alert-success-msg m-b-10">CREATE</button>
                                                <a href="/admin/news" class="btn ml-1 btn-primary alert-prompt m-b-10">Cancel</a>
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