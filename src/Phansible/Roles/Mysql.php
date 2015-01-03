<?php

namespace Phansible\Roles;

use Phansible\BaseRole;

class Mysql extends BaseRole
{
    protected $name = 'MySQL';
    protected $slug = 'mysql';
    protected $role = 'mysql';

    public function getInitialValues()
    {
        return [
            'install' => 1,
            'root_password' => 123,
            'databases' => [
                'name' => 'dbname',
                'user' => 'name',
                'password' => 123,
            ]
        ];
    }
}
