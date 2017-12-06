<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TambahUser extends Model
{
    protected $fillabel = ['name', 'email', 'password', 'role', 'supervisor'];
}
