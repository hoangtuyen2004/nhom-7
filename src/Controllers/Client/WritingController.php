<?php 
    namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\News;
use Ductong\BaseMvc\Models\User;
use Ductong\BaseMvc\Models\Writing;

class WritingController extends Controller {
        public function index(){
            if (isset($_SESSION['name_account']) && isset($_SESSION['id_user']) && ($_SESSION['id_role'])==2) {
                $writer = (new User)->findOne($_SESSION['id_user']);
                $writing = (new Writing)->all();
                $news = (new News)->all();


                $this->renderWriter('writing/index',['writer'=>$writer]);
            }
        }
    }
?>