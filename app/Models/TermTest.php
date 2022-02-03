<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TermTest extends Model
{
    use HasFactory;

    protected $fillable = [
        'semester',
        'subName',
        'examDate',
        'startTime',
        'endTime',
        'user_id'
    ];

    // Table Name
    protected $table = 'term_test';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
