<?php

namespace Dell\Nhom7\Models;

use Dell\Nhom7\Model;

class User extends Model {
    protected $table = 'users';
    protected $columns = [
        'name',
        'email',
        'address',
        'password',
    ];
}