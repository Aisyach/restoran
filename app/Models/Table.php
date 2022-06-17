<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $table = 'menu';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_makanan','harga'];
}