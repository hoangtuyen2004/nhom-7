<?php

use Ductong\BaseMvc\Controllers\Admin\AdminController;
use Ductong\BaseMvc\Controllers\Admin\UserController;
use Ductong\BaseMvc\Controllers\Admin\CategoryController;
use Ductong\BaseMvc\Controllers\Admin\CommentController;
use Ductong\BaseMvc\Controllers\Admin\DashboardController;
use Ductong\BaseMvc\Controllers\Admin\NewsController;
use Ductong\BaseMvc\Controllers\Admin\NoteController;
use Ductong\BaseMvc\Controllers\Client\HomeController;
use Ductong\BaseMvc\Controllers\Client\LoginController;
use Ductong\BaseMvc\Router;

$router = new Router();

$router->addRoute('/', HomeController::class, 'index');
$router->addRoute('/client/user', HomeController::class, 'user');

$router->addRoute('/client/login', LoginController::class, 'login');
$router->addRoute('/client/logout', LoginController::class, 'logout');




$router->addRoute('/admin/dashboard', DashboardController::class, 'index');



$router->addRoute('/admin/users', UserController::class, 'index');
$router->addRoute('/admin/users/create', UserController::class, 'create');
$router->addRoute('/admin/users/update', UserController::class, 'update');
$router->addRoute('/admin/users/delete', UserController::class, 'delete');
$router->addRoute('/admin/users/blocked', UserController::class, 'blocked');
$router->addRoute('/admin/users/Unblocked', UserController::class, 'unblocked');

$router->addRoute('/admin/categories', CategoryController::class, 'index');
$router->addRoute('/admin/categories/create', CategoryController::class, 'create');
$router->addRoute('/admin/categories/update', CategoryController::class, 'update');
$router->addRoute('/admin/categories/delete', CategoryController::class, 'delete');

$router->addRoute('/admin/news', NewsController::class, 'index');
$router->addRoute('/admin/news/create', NewsController::class, 'create');
$router->addRoute('/admin/news/createContent', NewsController::class, 'createContent');
$router->addRoute('/admin/news/update', NewsController::class, 'update');
$router->addRoute('/admin/news/delete', NewsController::class, 'delete');
$router->addRoute('/admin/news/more', NewsController::class, 'more');

$router->addRoute('/admin/comments', CommentController::class, 'index');
$router->addRoute('/admin/comments/create', CommentController::class, 'create');
$router->addRoute('/admin/comments/update', CommentController::class, 'update');
$router->addRoute('/admin/comments/delete', CommentController::class, 'delete');

$router->addRoute('/admin/logins', AdminController::class, 'index');
$router->addRoute('/admin/logins/index', AdminController::class, 'login');
$router->addRoute('/admin/logins/logout', AdminController::class, 'logout');

$router->addRoute('/admin/commit', NoteController::class, 'index');
$router->addRoute('/admin/commit/list', NoteController::class, 'list');
$router->addRoute('/admin/commit/unlist', NoteController::class, 'unlist');
$router->addRoute('/admin/commit/update', NoteController::class, 'update');




