<?php

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Comment;
use Ductong\BaseMvc\Models\User;

class CommentController extends Controller
{
   
    public function index() {        
        $Comment = (new Comment)->all();
        $news = (new User)->all();
        $this->renderAdmin('comments/index', ['comment'=> $Comment, 'news'=> $news]);
    }
}
