<?php

namespace App\Models;

use App\Traits\BootTrait;
use App\Traits\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class AclRole extends Model
{
    use SoftDeletes, BootTrait;

    protected $fillable = ['name', 'label'];

    protected $hidden = ['id', 'deleted_at', 'pivot'];

    public function aclPermissions()
    {
        return $this->belongsToMany(AclPermission::class);
    }
}
