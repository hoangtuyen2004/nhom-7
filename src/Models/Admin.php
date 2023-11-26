<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class Admin extends Model {
    protected $table = 'admin';
    protected $columns = [
        'name',
        'name-account',
        'img',
        'password',
    ];
}
