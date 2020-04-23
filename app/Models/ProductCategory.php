<?php

namespace App\Models;

use App\Traits\BootTrait;
use App\Traits\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use SoftDeletes, BootTrait;

    protected $fillable = ['name', 'color'];

    protected $hidden = ['id', 'deleted_at'];
}
