<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersImport extends Model
{
    use HasFactory;
    protected $table="users_imports";

    protected $fillable=['name','email','phone'];
}
