<?php 
    namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\News;
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

                $this->renderWriter('writing/index',['writer'=>$writer,'status'=>$status,'writing'=>$writing,'news'=>$news,'user'=>$user]);
            }
        }
        public function comment(){
            $this->renderWriter('comment/index');
        }
    }   
?>