<?php
namespace App\Models;


use App\Testing\LaravelTestCate;


class UserTest extends LaravelTestCate
{
    protected $user;

    public function setUp()
    {
        parent::setUp();
        $this->user = User::find(1);
    }

    /**
     *
     */
    public function testRoles()
    {
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Relations\BelongsToMany', $this->user->roles());
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $this->user->roles);
    }

    /**
     * Test hasRole
     */
    public function testHasRole()
    {
        $this->assertFalse($this->user->hasRole(null));
        $this->assertTrue($this->user->hasRole('admin'));
    }


}