<?php

namespace Ductong\BaseMvc;

use Ductong\BaseMvc\Models\News;
use Ductong\BaseMvc\Models\Note;
use Ductong\BaseMvc\Models\User;

class Controller {
    // Render ra giao diện client
    protected function render($view, $data = []) {
        extract($data);

        include "Views/$view.php";
    }
    //Render user
    protected function renderUser($view, $data = []){
        $data['view'] = $view;

        extract($data);
        if (isset($_SESSION['name_account']) && isset($_SESSION['id_user'])) {
            $user = (new User)->findOne($_SESSION['id_user']);
            $_SESSION['id_role'] = $user['id_role'];
            $_SESSION['name_account'] = $user['name_account'];
        }
        include "Views/client/user/index.php";
    }
    // Render ra giao diện Writer
    protected function renderWriter($view, $data = []){
        $data['view'] = $view;

        extract($data);
        $conditions = [
            ['id_user', '=', $_SESSION['id_user']],
        ];
        $commit = (new Note)->findColumns($conditions);
        $count = 0;
        foreach ($commit as $keke) {
            if ($keke['id_list']==1) {
                $count = $count +1;
            }
        }
        $_SESSION['notify'] = $count;
        if (isset($_SESSION['name_account']) && isset($_SESSION['id_user']) && isset($_SESSION['id_role'])) {
            $writer = (new User)->findOne($_SESSION['id_user']);
            if ($_SESSION['id_role']==2) {
                include "Views/client/writer/master.php";
            }
            else {
                include "Views/client/user/index.php";
            }
        }
        else {
            header('location: /client/login');
        }
    }
    // Render ra giao diện Admin
    protected function renderAdmin($view, $data = []) {
        $data['view'] = $view;

        extract($data);
        $conditions = [
            ['id_list', '=', 2],
        ];
        $commit = (new Note)->findColumns($conditions);
        $_SESSION['commit'] = count($commit);
        //kiểm tra admin
        if (isset($_SESSION['name_account']) && isset($_SESSION['id_admin'])) {
            include "Views/admin/master.php";
        }

        else {
            header('location: /admin/logins');
        }
    }
    protected function renderClient($view, $data = []) {
        $data['view'] = $view;

        extract($data);
        $conditions = [
            ['id_list', '=', 2],
        ];
        $commit = (new Note)->findColumns($conditions);
        $_SESSION['commit'] = count($commit);
        //kiểm tra admin
        if (isset($_SESSION['name_account']) && isset($_SESSION['id_user'])) {
            include "Views/client/master.php";
        }

        else {
            header('location: /client/login');
        }
    }
}