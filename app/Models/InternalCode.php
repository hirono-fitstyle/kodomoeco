<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class InternalCode extends Model
{
    use HasFactory;

    protected $table = 'internal_codes';
//    protected $primarykey = 'operatorId';

//    protected $guarded = [''];
    protected $fillable = ['*'];
}
