<?php

namespace Ductong\BaseMvc;

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
    // Render ra giao diện Admin
    protected function renderAdmin($view, $data = []) {
        $data['view'] = $view;

        extract($data);
        //kiểm tra admin
        if (isset($_SESSION['name_account']) && isset($_SESSION['id_admin'])) {
            include "Views/admin/master.php";
        }
        else {
            header('location: /admin/logins');
        }
    }
}