<?php

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Category;
use Ductong\BaseMvc\Models\Comment;
use Ductong\BaseMvc\Models\Content;
use Ductong\BaseMvc\Models\Favorite;
use Ductong\BaseMvc\Models\News;
use Ductong\BaseMvc\Models\Note;
use Ductong\BaseMvc\Models\Status;
use Ductong\BaseMvc\Models\Title_1;
use Ductong\BaseMvc\Models\Title_2;
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
                $avatar = $file['name'];
                move_uploaded_file($file['tmp_name'], './img_file/' . $file['name']);
                $data = [
                    'avatar' => $avatar,
                    'title' => $_POST['title'],
                    'subtitle' => $_POST['subtitle'],
                    'date' => "2023-11-02",
                    'views' => 0,
                    'id_status' => '2',
                    'id_category' => $_POST['category'],
                    'id_display' => $_POST['display'],
                ];

                // echo "<pre>";    
                // print_r($data );die;

                (new News)->insert($data);
                header('Location: /admin/news/createContent');
            }
            $categorys = (new Category)->all();
            $this->renderAdmin('news/create',['categorys'=>$categorys]);
        }
    //HOÀN THIỆN
    public function createContent(){
        $writing = (new Writing)->all();
        $news = (new News)->all();
        
        $id_news = 0;
        //Thuật toán last insert
        foreach ($news as $new) {
            if (!isset($writing)) {
                echo "có dữ liệu";
                die;
                foreach ($writing as $write) {
                    if ($new['id'] != $write['id_news']) {
                        if ($new['id'] > $id_news) {
                            $id_news = $new['id'];
                        }
                    }
                }
            }
            else{
                if ($new['id']>$id_news) {
                    $id_news = $new['id'];
                }
            }
        }
        $new = (new News)->findOne($id_news);
        if (isset($_POST['btn-submit'])) {
            // echo "btn-submit";
            // die;
            $new = (new News)->findOne($id_news);
            $data = [
                'title_1'=>$_POST['title_1'],
                'id_news'=>$new['id'],
            ];
            
            (new Title_1)->insert($data);
            //Thuật toán last insert
            $id = 0;
            $title_1s = (new Title_1)->all();
            foreach ($title_1s as $title) {
                if ($title['id_news']==$new['id']) {
                    if($title['id']>$id){
                        $id = $title['id'];
                    }
                }
            }
            $title_1 = (new Title_1)->findOne($id);         /*Mã mới nhập*/
            $data = [
                'title_2'=>$_POST['title_1_1'],
                'id_title_1'=>$title_1['id'],
            ];
            (new Title_2)->insert($data);
            if($new['id_display']!=1){
                $title_1 = (new Title_1)->findOne($id);
                    $img_1 = $_FILES['img_1_1'];
                    $img_2 = $_FILES['img_1_2'];
                    $img_3 = $_FILES['img_1_3'];
                    $data = [
                        'content'=>$_POST['content_1'],
                        'img_1'=>$img_1['name'],
                        'img_2'=>$img_2['name'],
                        'img_3'=>$img_3['name'],
                        'id_title_1'=>$title_1['id'],
                    ];
                    (new Content)->insert($data);
                }
            else if($new['id_display']==1){
                $title_1 = (new Title_1)->findOne($id);
                $img_1 = $_FILES['img_1'];
                $data = [
                    'content'=>$_POST['content_1'],
                    'img_1'=>$img_1['name'],
                    'img_2'=>"đ",
                    'img_3'=>"đ",
                    'id_title_1'=>$title_1['id'],
                ];
                (new Content)->insert($data);
            }
                header('Location: /admin/news/createContent');
        }
        if (isset($_POST['btn-save'])) {
            // echo "btn-save";
            // die;
            $new = (new News)->findOne($id_news);
            $data = [
                'title_1'=>$_POST['title_1'],
                'id_news'=>$new['id'],
            ];
            
            (new Title_1)->insert($data);
            //Thuật toán last insert
            $id = 0;
            $title_1s = (new Title_1)->all();
            foreach ($title_1s as $title) {
                if ($title['id_news']==$new['id']) {
                    if($title['id']>$id){
                        $id = $title['id'];
                    }
                }
            }
            $title_1 = (new Title_1)->findOne($id);         /*Mã mới nhập*/
            $data = [
                'title_2'=>$_POST['title_1_1'],
                'id_title_1'=>$title_1['id'],
            ];
            (new Title_2)->insert($data);
            if($new['id_display']!=1){
                $title_1 = (new Title_1)->findOne($id);
                    $img_1 = $_FILES['img_1_1'];
                    $img_2 = $_FILES['img_1_2'];
                    $img_3 = $_FILES['img_1_3'];
                    $data = [
                        'content'=>$_POST['content_1'],
                        'img_1'=>$img_1['name'],
                        'img_2'=>$img_2['name'],
                        'img_3'=>$img_3['name'],
                        'id_title_1'=>$title_1['id'],
                    ];
                    (new Content)->insert($data);
                }
            else if($new['id_display']==1){
                $title_1 = (new Title_1)->findOne($id);
                $img_1 = $_FILES['img_1'];
                $data = [
                    'content'=>$_POST['content_1'],
                    'img_1'=>$img_1['name'],
                    'img_2'=>"đ",
                    'img_3'=>"đ",
                    'id_title_1'=>$title_1['id'],
                ];
                (new Content)->insert($data);
            }
            header('Location: /admin/news');
        }
        $this->renderAdmin('news/createContent',['new'=>$new]);
    }
    //HOÀN THÀNH
    public function delete()
        {
            $id_new = $_GET['id'];
            $title_1s = (new Title_1)->all();
            $title_2s = (new Title_2)->all();
            $contens = (new Content)->all();
            $writing = (new Writing)->all();
            $comments =  (new Comment)->all();
            $notes = (new Note)->all();
            $favorites = (new Favorite)->all();
            foreach ($title_1s as $title_1) {            //Xóa bảng title
                foreach ($title_2s as $title_2) {                   //Title_2 delete
                    if ($title_1['id']==$title_2['id_title_1']) {
                        $conditions = [
                            ['id_title_1', '=', $title_1['id']]
                        ];
                        (new Title_2)->delete($conditions);
                    }
                }
                foreach ($contens as $conten) {                     //Content delete
                    if ($title_1['id']==$conten['id_title_1']) {
                        $conditions = [
                            ['id_title_1', '=', $title_1['id']]
                        ];
                        (new Content)->delete($conditions);
                    }
                }
                $conditions = [
                    ['id_news', '=', $id_new]
                ];
                (new Title_1)->delete($conditions);
                
            }
            foreach ($writing as $write) {              //Xóa bảng viết
                if ($write['id_news']==$id_new) {
                    $conditions = [
                        ['id_news', '=', $id_new]
                    ];
                    (new Writing)->delete($conditions);
                }
            }
            foreach ($comments as $comment) {           //Xóa Bảng comment
                if ($comment['id_news']=$id_new) {
                    $conditions = [
                        ['id_news', '=', $id_new]
                    ];
                    (new Comment)->delete($conditions);
                }
            }
            foreach ($notes as $note) {                 //Xóa bảng note
                if ($note['id_news']==$id_new) {
                    $conditions = [
                        ['id_news', '=', $id_new]
                    ];
                    (new Note)->delete($conditions);
                }
            }
            foreach ($favorites as $favorite) {         //Xóa bảng favorite
                if ($favorite['id_news']==$id_new) {
                    $conditions = [
                        ['id_news', '=', $id_new]
                    ];
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
                $img = $_POST['old-img'];
                $file = $_FILES['img'];
                if ($file['name'] != "") {
                    $img = $file['name'];
                    move_uploaded_file($file['tmp_name'], './img_file/' . $file['name']);
                }
                $data = [
                    'name' => $_POST['name'],
                    'name_account' => $_POST['name_account'],
                    'password' => $_POST['password'],
                    'birthday' => $_POST['birthday'],
                    'img' => $img,
                    'email' => $_POST['email'],
                    'id_role' => $_POST['id_role']
                ];
                $conditions = [
                    ['id', '=', $_GET['id']]
                ];

                (new User)->update($data, $conditions);
            }

            $user = (new User)->findOne($_GET['id']);

            $this->renderAdmin('users/update', ['user' => $user]);
        }

    //CHƯA HOÀN THIỆN
    public function more()
        {
            if (isset($_GET['id'])) {
                $news = (new News)->findOne($_GET['id']);
                $this->renderAdmin('news/more', ['news' => $news]);
            }
        }
}
