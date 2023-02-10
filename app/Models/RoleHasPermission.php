<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleHasPermission extends Model
{
    use HasFactory;

    public $table = 'role_has_permission';

    protected $fillable = [
        'permission_id',
        'role_id',
    ];

    public function permissions(){
        return $this->belongsTo(Permission::class,'permission_id');
    }
}
