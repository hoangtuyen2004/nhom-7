<?php

namespace Ductong\BaseMvc;

use Ductong\BaseMvc\Models\News;
use Ductong\BaseMvc\Models\Note;

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
        include "Views/client/user/index.php";
    }
    // Render ra giao diện Writer
    protected function renderWriter($view, $data = []){
        $data['view'] = $view;

        extract($data);
        if (isset($_SESSION['name_account']) && isset($_SESSION['id_user']) && isset($_SESSION['id_role'])) {
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