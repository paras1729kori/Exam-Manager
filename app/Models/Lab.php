<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'semester',
        'lab_code',
        'lab_name',
        'department',
    ];

    // Table Name
    protected $table = 'labs';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
