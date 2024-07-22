<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tintuc extends Model
{
    protected $table = 'tintuc';
    protected $primaryKey = 'id';
    protected $date = ['ngaydang'];
    protected $fillable = [
        'tieude',
        'noidung',
        'hinhanh',
        'ngaydang',
        'luotxem',
        'idLT',
        'idUS',
    ];
    use HasFactory;
}
