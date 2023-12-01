<?php

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Comment;
use Ductong\BaseMvc\Models\News;
use Ductong\BaseMvc\Models\User;
use Ductong\BaseMvc\Models\Writing;

class CommentController extends Controller
{
   
    public function index() {        
        $Comment = (new Comment)->all();
        $news = (new News)->all();
        $users = (new User)->all();
        $writing = (new Writing)->all();
        $this->renderAdmin('comments/index', ['comment'=> $Comment, 'news'=> $news, 'users'=> $users, 'writing'=> $writing]);
    }


    public function ctComment() {        
        $Comment = (new Comment)->all();
        $news = (new News)->all();
        $users = (new User)->all();
        $writing = (new Writing)->all();
        $this->renderAdmin('comments/ctComment', ['comment'=> $Comment, 'news'=> $news, 'users'=> $users, 'writing'=> $writing]);
    }
    
    

}
