<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class Status extends Model {
    protected $table = 'status';
    protected $columns = [
        'name',
    ];
}