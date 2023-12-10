<?php 
    namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Category;
use Ductong\BaseMvc\Models\News;
use Ductong\BaseMvc\Models\Note;
use Ductong\BaseMvc\Models\Status;
use Ductong\BaseMvc\Models\User;
use Ductong\BaseMvc\Models\Writing;

    class WriterController extends Controller {
        public function index(){
            if (isset($_SESSION['name_account']) && isset($_SESSION['id_user']) && ($_SESSION['id_role'])==2) {
                $writer = (new User)->findOne($_SESSION['id_user']);

                $this->renderWriter('dashboard',['writer'=>$writer]);
            }
        }
        public function writing(){
            if (isset($_SESSION['name_account']) && isset($_SESSION['id_user']) && ($_SESSION['id_role'])==2) {
                $writer = (new User)->findOne($_SESSION['id_user']);
                $conditions = [
                    ['id_user', '=', $_SESSION['id_user']]
                ];
                $status = (new Status)->all();
                $writing = (new Writing)->findColumns($conditions);
                $news = (new News)->all();
                $user = (new News)->findOne($_SESSION['id_user']);
                $categorys = (new Category)->all();
                $this->renderWriter('writing/index',['writer'=>$writer,'categorys'=>$categorys,'status'=>$status,'writing'=>$writing,'news'=>$news,'user'=>$user]);
            }
        }
        public function comment(){
            $id_user = $_SESSION['id_user'];
            $conditions = [
                ['id_user', '=', $id_user]
            ];
            $news = (new News)->all();
            $writing = (new Writing)->findColumns($conditions);
            $categorys = (new Category)->all();
            $this->renderWriter('comment/index',['news'=>$news,'categorys'=>$categorys,'writing'=>$writing]);
        }
        public function notify(){
                $conditions = [
                    ['id_user', '=', $_SESSION['id_user']],
                ];
            $notifys = (new Note)->findColumns($conditions);
            $this->renderWriter('notify/index',['notifys'=>$notifys]);
        }
    }   
?>