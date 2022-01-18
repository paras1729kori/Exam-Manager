<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartmentNotices extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'department',
        'user_id',
    ];

    // Table Name
    protected $table = 'department_notices';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
