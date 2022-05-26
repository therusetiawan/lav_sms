<?php

namespace App\Models;

use Eloquent;

class Yudisium extends Eloquent
{
    
    protected $table = 'yudisiums';

    protected $fillable = [
        'student_id',
        'title',
        'title',
        'intisari',
        'abstract',
        'keyword',
        'pembimbing',
        'jenis_karya',
        'tahun',
        'file',
        'catatan',
        'is_approved'
    ];
}