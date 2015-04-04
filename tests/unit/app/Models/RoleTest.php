<?php

namespace App\Models;


use App\Testing\LaravelTestCate;

/**
 * Class RoleTest
 * @package App\Models
 */
class RoleTest extends LaravelTestCate
{
    protected $role;

    public function setUp()
    {
        parent::setUp();
        $this->role = Role::find(1);
    }

}