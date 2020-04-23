<?php

namespace App\Models;

use App\Traits\BootTrait;
use App\Traits\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class AclPermission extends Model
{
    use SoftDeletes, BootTrait;

    protected $fillable = ['name', 'label'];

    protected $hidden = ['id', 'deleted_at', 'pivot'];

    public function roles()
    {
        return $this->belongsToMany(AclRole::class);
    }
}
