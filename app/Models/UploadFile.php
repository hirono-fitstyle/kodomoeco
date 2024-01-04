<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class UploadFile extends Model
{
    use HasFactory;

    protected $table = 'upload_files';
//    protected $primarykey = 'operatorId';

    protected $guarded = [''];
//    protected $fillable = ['*']; 
}
