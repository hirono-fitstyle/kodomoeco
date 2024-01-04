<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;

class Operator extends BaseModel
{
    use HasFactory;

    protected $table = 'operators';
    protected $primarykey = 'operatorNumber';

}
