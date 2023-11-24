<?php 
namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Category;
use Ductong\BaseMvc\Models\News;
use Ductong\BaseMvc\Models\Status;
use Ductong\BaseMvc\Models\User;

    class NewsController extends Controller
    {
        public function index() {
            $news = (new News)->all();
            $users = (new User)->all();
            $categorys = (new Category)->all();
            $status = (new Status)->all();
            $this->renderAdmin('news/index', ['news' => $news, 'users'=>$users, 'categorys' => $categorys, 'status' => $status]);
            }
        // public function create(){

        // }

        public function delete() {
            $conditions = [
                ['id', '=', $_GET['id']]
            ];
    
            (new News)->delete($conditions);
    
            header('Location: /admin/news');
        }
        public function update() {
            if (isset($_POST['btn-submit'])) { 
                $img = $_POST['old-img'];
                $file = $_FILES['img'];
                if ($file['name']!="") {
                    $img = $file['name'];
                    move_uploaded_file($file['tmp_name'], './img_file/'.$file['name']);
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
    }
?>