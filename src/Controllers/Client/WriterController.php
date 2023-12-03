<?php 
    namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\User;

    class WriterController extends Controller {
        public function index(){
            if (isset($_SESSION['name_account']) && isset($_SESSION['id_user']) && ($_SESSION['id_role'])==2) {
                $writer = (new User)->findOne($_SESSION['id_user']);

                $this->renderWriter('dashboard',['writer'=>$writer]);
            }
        }
    }
?>