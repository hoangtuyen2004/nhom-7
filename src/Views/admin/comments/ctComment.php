<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Comment</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/addmin/dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Comment</a> </li>
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
                                <div class="card-header">
                                    <h5>Chi tiết Comment bài viết</h5>
                                </div>
                                <div class="card-block">
                                    <?php
                                    $newsId = $_GET['id'];
                                    $commentsForNewsId = array();

                                    // Tổng hợp bình luận cho ID theo bài viết
                                    if (isset($comment)) {
                                        foreach ($comment as $commen) {
                                            if ($commen['id_news'] == $newsId) {
                                                $commentsId[] = $commen['comment'];
                                            }
                                        }
                                    }

                                    // Hiển thị bình luận trong một bảng duy nhất
                                    if (!empty($commentsId)) {
                                        echo '<table id="simpletable" class="table table-striped table-bordered nowrap">';
                                        echo '<tbody>';

                                        foreach ($commentsId as $comment) {
                                            echo '<tr><td>' . $comment . '</td></tr>';
                                        }

                                        echo '</tbody></table>';
                                    } else {
                                        echo '<p>Không có comment nào cho bài viết này</p>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
