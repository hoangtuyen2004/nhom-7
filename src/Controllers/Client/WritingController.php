<?php 
    namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Category;
use Ductong\BaseMvc\Models\Comment;
use Ductong\BaseMvc\Models\News;
use Ductong\BaseMvc\Models\Note;
use Ductong\BaseMvc\Models\Status;
use Ductong\BaseMvc\Models\User;
use Ductong\BaseMvc\Models\Writing;

class WritingController extends Controller {
        public function writing(){
            $writer = (new User)->findOne($_SESSION['id_user']);
            $categorys = (new Category)->all();

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
                    'id_status' => '1',
                    'id_category' => $_POST['category'],
                    'id_display' => $_POST['display'],
                    'title_1'=>$_POST['title_1'],
                    'content_1'=>$_POST['content_1'],
                    'title_2'=>$_POST['title_2'],
                    'content_2'=>$_POST['content_2'],
                ];
                (new News)->insert($data);
                $news = (new News)->all();
                $id = 0;
                foreach ($news as $new) {
                    if ($new['id']>$id) {
                        $id = $new['id'];
                    }
                }
                $commit = "";
                if ($_POST['commit'] == "") {
                    $commit = "Tôi là ".$_SESSION['name_account']." tôi đã viết một bài viết mới bạn có thể xem sét và chấp thuận cho tôi không!";
                }
                if ($_POST['commit'] == "not null") {
                    $commit = $_POST['note'];
                }
                $data = [
                    'commit'=>$commit,
                    'reply'=>"",
                    'id_news'=>$id,
                    'id_user'=>$_SESSION['id_user'],
                    'id_list'=>2,
                ];
                (new Note)->insert($data);
                $data = [
                    'id_user'=>$_SESSION['id_user'],
                    'id_news'=>$id,
                ];
                (new Writing)->insert($data);
                header('Location: /client/writer/news');
            }
            $this->renderWriter('writing/create',['writer'=>$writer,'categorys'=>$categorys]);
        }
        public function list(){
            $id_news = $_GET['id'];
            $news = (new News)->findOne($id_news);
            $conditions = [
                ['id_news', '=', $id_news]
            ];
            $comments = (new Comment)->findColumns($conditions);
            $conditions = "id_status = 2";
            $categorys = (new Category)->all();
            $newsDate = (new News)->selectTop('date',5,0,$conditions);
            $users = (new User)->all();
            $status = (new Status)->all();
            $this->renderWriter('writing/list',['news'=>$news,'status'=>$status,'users'=>$users,'comments'=>$comments,'categorys'=>$categorys,'newsDate'=>$newsDate]);
        }
        public function update(){

        }
        public function delete(){

        }
    }
?>