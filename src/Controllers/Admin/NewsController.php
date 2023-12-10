<?php

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Category;
use Ductong\BaseMvc\Models\Comment;
use Ductong\BaseMvc\Models\Favorite;
use Ductong\BaseMvc\Models\News;
use Ductong\BaseMvc\Models\Note;
use Ductong\BaseMvc\Models\Status;
use Ductong\BaseMvc\Models\User;
use Ductong\BaseMvc\Models\Writing;

class NewsController extends Controller
{
    public function index()
        {
            $news = (new News)->all();
            $users = (new User)->all();
            $categorys = (new Category)->all();
            $status = (new Status)->all();
            $writing = (new Writing)->all();
            $this->renderAdmin('news/index', ['news' => $news, 'users' => $users, 'categorys' => $categorys, 'status' => $status, 'writing' => $writing]);
        }

    //Hoàn thiện
    public function create()
        {
            if (isset($_POST['btn-submit'])) {
                $file = $_FILES['avatar'];
                $img_1 = $_FILES['img_1'];
                $img_2 = $_FILES['img_2'];
                $img_3 = $_FILES['img_3'];
                $img_4 = $_FILES['img_4'];
                $avatar = $file['name'];
                $date = date("Y-m-d");
                move_uploaded_file($file['tmp_name'], './img_file/' . $file['name']);
                if (isset($img_1)) {
                    move_uploaded_file($img_1['tmp_name'], './img_file/' . $img_1['name']);
                }
                if (isset($img_2)) {
                    move_uploaded_file($img_2['tmp_name'], './img_file/' . $img_2['name']);
                }
                if (isset($img_3)) {
                    move_uploaded_file($img_3['tmp_name'], './img_file/' . $img_3['name']);
                }
                if (isset($img_4)) {
                    move_uploaded_file($img_4['tmp_name'], './img_file/' . $img_4['name']);
                }
                $data = [
                    'avatar' => $avatar,
                    'title' => $_POST['title'],
                    'subtitle' => $_POST['subtitle'],
                    'img_1'=>$img_1['name'],
                    'img_2'=>$img_2['name'],
                    'img_3'=>$img_3['name'],
                    'img_4'=>$img_4['name'],
                    'date' => $date,
                    'views' => 0,
                    'id_status' => '2',
                    'id_category' => $_POST['category'],
                    'id_display' => $_POST['display'],
                    'title_1'=>$_POST['title_1'],
                    'content_1'=>$_POST['content_1'],
                    'title_2'=>$_POST['title_2'],
                    'content_2'=>$_POST['content_2'],
                ];

                // echo "<pre>";    
                // print_r($data );die;
                (new News)->insert($data);
                header('Location: /admin/news');
            }
            $categorys = (new Category)->all();
            $this->renderAdmin('news/create',['categorys'=>$categorys]);
        }
    //HOÀN THÀNH
    public function delete()
        {
            $id_new = $_GET['id'];
            $writing = (new Writing)->all();
            $comments =  (new Comment)->all();
            $notes = (new Note)->all();
            $favorites = (new Favorite)->all();
            foreach ($writing as $write) {
                if ($write['id_news']==$id_new) {       //Kiểm tra điều kiện của bảng writing với bảng giá trị id news được xóa
                    $conditions = [
                        ['id_news','=',$id_new]
                    ];
                    echo "Kiểm tra điều kiện của bảng writing với bảng giá trị id news được xóa" . var_dump($conditions);
                    (new Writing)->delete($conditions);
                }
            }
            foreach ($comments as $comment) {
                if ($comment['id_news']==$id_new) {        //Kiểm tra điều kiện của bảng comment với bảng giá trị id news được xóa
                    $conditions = [
                        ['id_news', '=',$id_new]
                    ];
                    echo "Kiểm tra điều kiện của bảng comment với bảng giá trị id news được xóa". var_dump($conditions);
                    (new Comment)->delete($conditions);
                }
            }
            foreach ($notes as $note ) {
                if ($note['id_news']==$id_new) {        //Kiểm tra điều kiện của bảng comment với bảng giá trị id news được xóa
                    $conditions = [
                        ['id_news', '=',$id_new]
                    ];
                    echo "Kiểm tra điều kiện của bảng note với bảng giá trị id news được xóa". var_dump($conditions);
                    (new Note)->delete($conditions);
                }
            }
            foreach ($favorites as $favorite) {
                if ($favorite['id_news']==$id_new) {        //Kiểm tra điều kiện của bảng comment với bảng giá trị id news được xóa
                    $conditions = [
                        ['id_news', '=',$id_new]
                    ];
                    echo "Kiểm tra điều kiện của bảng favorite với bảng giá trị id news được xóa". var_dump($conditions);
                    (new Favorite)->delete($conditions);
                }
            }

            $conditions = [
                ['id', '=', $_GET['id']]
            ];
            (new News)->delete($conditions);    
            header('Location: /admin/news');
        }

    //CHƯA HOÀN THIỆN
    public function update()
        {
            if (isset($_POST['btn-submit'])) {
                $date = date("Y-m-d");
                $avatar = $_POST['old-img'];
                if ($_FILES['avatar']['name']!="") {
                    $file = $_FILES['avatar'];
                    $avatar = $file['name'];
                    move_uploaded_file($file['tmp_name'], './img_file/' . $file['name']);
                }
                $img_1 = $_POST['old_img1'];

                if ($_FILES['img_1']['name']!="") {
                    $file = $_FILES['img_1'];
                    $img_1 = $file['name'];
                    move_uploaded_file($file['tmp_name'], './img_file/' . $file['name']);
                }
                $img_2 = $_POST['old_img2'];
                if ($_FILES['img_2']['name']!="") {
                    $file = $_FILES['img_2'];
                    $img_2 = $file['name'];
                    move_uploaded_file($file['tmp_name'], './img_file/' . $file['name']);
                }
                $img_3 = $_POST['old_img3'];
                if ($_FILES['img_3']['name']!="") {
                    $file = $_FILES['img_3'];
                    $img_3 = $file['name'];
                    move_uploaded_file($file['tmp_name'], './img_file/' . $file['name']);
                }
                $img_4 = $_POST['old_img4'];
                if ($_FILES['img_4']['name']!="") {
                    $file = $_FILES['img_4'];
                    $img_4 = $file['name'];
                    move_uploaded_file($file['tmp_name'], './img_file/' . $file['name']);
                }
                $data = [
                    'avatar' => $avatar,
                    'title' => $_POST['title'],
                    'subtitle' => $_POST['subtitle'],
                    'img_1'=>$img_1,
                    'img_2'=>$img_2,
                    'img_3'=>$img_3,
                    'img_4'=>$img_4,
                    'date' => $date,
                    'views' => 0,
                    'id_status' => '2',
                    'id_category' => $_POST['category'],
                    'id_display' => $_POST['display'],
                    'title_1'=>$_POST['title_1'],
                    'content_1'=>$_POST['content_1'],
                    'title_2'=>$_POST['title_2'],
                    'content_2'=>$_POST['content_2'],
                ];
                $conditions = [
                    ['id', '=', $_GET['id']]
                ];

                (new News)->update($data, $conditions);
            }

            $new = (new News)->findOne($_GET['id']);
            $categorys = (new Category)->all();
            $this->renderAdmin('news/update', ['new' => $new, 'categorys'=>$categorys]);
        }

    //CHƯA HOÀN THIỆN
    public function more()
        {
            $categorys = (new Category)->all();
            if (isset($_GET['id'])) {
                $new = (new News)->findOne($_GET['id']);
                $this->renderAdmin('news/more', ['new' => $new,'categorys'=>$categorys]);
            }
        }
}