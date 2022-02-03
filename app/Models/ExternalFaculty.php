<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExternalFaculty extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'fullname',
        'experience',
        'college',
        'phone_no',
        'exEmail',
        'user_id',
    ];

    // Table Name
    protected $table = 'external_faculty';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
