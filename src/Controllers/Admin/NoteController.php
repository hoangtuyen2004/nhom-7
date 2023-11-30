<?php 
namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\News;
use Ductong\BaseMvc\Models\Note;
use Ductong\BaseMvc\Models\Status;
use Ductong\BaseMvc\Models\User;

class NoteController extends Controller {
    public function index() {
        $commits = (new Note)->all();
        $users = (new User)->all();
        $news = (new News)->all();

        //Thuật toán filter

        $this->renderAdmin('commit/index', ['commits'=>$commits, 'users'=>$users, 'news'=>$news]);
    }
    public function list() {
        $id_commit = $_GET['id'];
        $commit = (new Note)->findOne($id_commit);
        $news = (new News)->all();
        foreach ($news as $new) {
            if ($new['id']==$commit['id_news']) {
                $conditions = "id=".$new['id'];
                $column = 'id_status';
                $value = '2';
                (new News)->updateColumn($column,$value,$conditions);
            }            
        }
        if (isset($commit['reply'])) {
            $conditions = "id = ".$id_commit;
            $column = 'reply';
            $value = "Bài viết của bạn đã hiển thị";
            (new Note)->updateColumn($column,$value,$conditions);
        }
        header('location: /admin/commit');
    }
    public function unlist() {
        $id_commit = $_GET['id'];
        $commit = (new Note)->findOne($id_commit);
        $news = (new News)->all();
        foreach ($news as $new) {
            if ($new['id']==$commit['id_news']) {
                $conditions = "id=".$new['id'];
                $column = 'id_status';
                $value = '3';
                (new News)->updateColumn($column,$value,$conditions);
            }            
        }
        if (isset($commit['reply'])) {
            $conditions = "id = ".$id_commit;
            $column = 'reply';
            $value = "Bài viết của bạn bị từ chối";
            (new Note)->updateColumn($column,$value,$conditions);
        }
        header('location: /admin/commit');
    }
    public function update(){
        $id_commit = $_GET['id'];
        $commits = (new Note)->all();   
        foreach ($commits as $commitc) {
            if ($commitc['id']!=$id_commit) {
                //Chuyền thông báo tới người dùng rằng giá trị này ngoài vùng commit
                header('location: /admin/commit');
            }
            else{
                $status = (new Status)->all();
                $commit = (new Note)->findOne($id_commit);
                $user = (new User)->findOne($commit['id_user']);
                $new = (new News)->findOne($commit['id_news']);
            }
        }
        if (isset($_POST['btm-submit'])) {
            $reply = $_POST['reply'];
            $status;
            if ($_POST['status']=="") {
                $status = 3;
            }
            else {
                $status = $_POST['status'];
            }
            //Reply for user
            $conditions = "id = ".$id_commit;
            $column = 'reply';
            (new Note)->updateColumn($column,$reply,$conditions);

            //UPDATE news status
            $column = "id_status";
            $conditions = "id=".$commit['id_news'];
            (new News)->updateColumn($column,$status,$conditions);
            header('location: /admin/commit');
        }

        if (isset($status) && isset($user) && isset($commit)) {
            $this->renderAdmin('commit/update',['commit'=>$commit, 'status'=>$status, 'user'=>$user, 'new'=>$new]);
        }
    }
}
?>
