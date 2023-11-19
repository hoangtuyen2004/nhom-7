<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class Role extends Model {
    protected $table = 'role';
    protected $columns = [
        'name',
    ];
}