<?php

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\User;

class UserController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function index() {
        $users = (new User)->all();
        $count = (new User)->countColumn("id_role");
        $this->renderAdmin('users/index', ['users' => $users, 'count' => $count]);
        }

    public function create() {
        if (isset($_POST['btn-submit'])) { 
            $file = $_FILES['img'];
            $img = $file['name'];
            move_uploaded_file($file['tmp_name'], './img_file/'.$file['name']);
            $data = [
                'name' => $_POST['name'],
                'name_account' => $_POST['name_account'],
                'password' => $_POST['password'],
                'birthday' => $_POST['birthday'],
                'img' => $img,
                'email' => $_POST['email'],
                'id_role' => $_POST['id_role']
            ];

            (new User)->insert($data);

            header('Location: /admin/users');
        }

        $this->renderAdmin('users/create');
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

    public function delete() {
        $conditions = [
            ['id', '=', $_GET['id']]
        ];

        (new User)->delete($conditions);

        header('Location: /admin/users');
    }
    public function blocked(){
            $conditions = "id = " .$_GET['id'];
            $column = "id_role";
            $value = 3;
        (new User)->updateColumn($column,$value, $conditions);
        header('Location: /admin/users');
    }
    public function unblocked(){
            $conditions = "id = " .$_GET['id'];
            $column = "id_role";
            $value = 1;
        (new User)->updateColumn($column,$value, $conditions);
        header('Location: /admin/users');
    }

    



}