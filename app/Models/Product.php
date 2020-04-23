<?php

namespace App\Models;

use App\Traits\BootTrait;
use App\Traits\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use SoftDeletes, BootTrait;

    protected $fillable = ['name'];

    protected $hidden = ['id', 'deleted_at'];
}
