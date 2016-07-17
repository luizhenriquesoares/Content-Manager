<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * @package App
 */
class User extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['login', 'password'];

    /**
     * @var string
     */
    protected $table = "users";


}
