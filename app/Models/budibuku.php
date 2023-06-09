<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class budibuku extends Model
{
    use HasFactory;
    protected $table = 'budibuku';
    protected $guarded =[];
    protected $primaryKey = 'IDBuku';
}
