<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestCall extends Model
{
    use HasFactory;

    protected $table = "request_calls";

    protected $guarded=[];
}
