<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class User extends Model {
    protected $table = 'users';
    protected $columns = [
        'name',
        'name_account',
        'password',
        'birthday',
        'img',
        'email',
        'id_role',
    ];
}
