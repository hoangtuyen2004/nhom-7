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
                //Chuyền thông báo tới người dùng
                header('location: /admin/commit');
            }
            else{
                $status = (new Status)->all();
                $users = (new User)->all();
                $commit = (new Note)->findOne($id_commit);
                $this->renderAdmin('commit/update',['commit'=>$commit, 'status'=>$status, 'users'=>$users]);
            }
        }
    }
}
?>
