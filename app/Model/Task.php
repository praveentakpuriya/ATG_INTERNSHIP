<?php

namespace App\Model;

use App\Http\Traits\TasksTrait;
use App\Http\Traits\TimestampsTrait;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use TimestampsTrait;
	//use TasksTrait;

    protected $table='tasks';
}
