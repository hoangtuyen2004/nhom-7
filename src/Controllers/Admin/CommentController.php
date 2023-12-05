<?php

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Comment;
use Ductong\BaseMvc\Models\News;
use Ductong\BaseMvc\Models\Status;
use Ductong\BaseMvc\Models\User;
use Ductong\BaseMvc\Models\Writing;

class CommentController extends Controller
{

    public function index()
    {
        $comment = (new Comment)->all();
        $news = (new News)->all();
        $users = (new User)->all();
        $writing = (new Writing)->all();
        $this->renderAdmin('comments/index', ['comment' => $comment, 'news' => $news, 'users' => $users, 'writing' => $writing]);
    }


    public function ctComment()
    {
        $comment = (new Comment)->all();
        $news = (new News)->all();
        $users = (new User)->all();
        $writing = (new Writing)->all();
        $status = (new Status)->all();
        $this->renderAdmin('comments/ctComment', ['comment' => $comment, 'news' => $news, 'users' => $users, 'writing' => $writing, 'status' => $status]);
    }

    public function delete()
    {
        $conditions = [
            ['id', '=', $_GET['id']],
        ];

        (new Comment())->delete($conditions);

        header('Location: /admin/comments');
    }

    public function update()
    {
        if (isset($_POST["btn-submit"])) {
            $data = [
                'comment' => $_POST['comment'],
                'id_user' => $_POST['id_user'],
                'id_news' => $_POST['id_news'],
                'note' => '',
                'id_status' => 2,
            ];

            $conditions = [
                ['id', '=', $_GET['id']],
            ];

            (new Comment)->update($data, $conditions);
        }

        $comments = (new Comment())->findOne($_GET["id"]);

        $this->renderAdmin("comments/update", ["comments" => $comments]);
    }

    public function list()
    {
        $conditions = "id = " . $_GET['id'];
        $column = "id_status";
        $value = 2; // Giá trị 2 là không hiển thị
        (new Comment())->updateColumn($column, $value, $conditions);
        header('Location: /admin/comments');
    }

    public function unlist()
    {
        $conditions = "id = " . $_GET['id'];
        $column = "id_status";
        $value = 3; // Giá trị 3 là được hiển thị
        (new Comment())->updateColumn($column, $value, $conditions);
        header('Location: /admin/comments');
    }
}
