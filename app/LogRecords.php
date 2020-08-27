<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogRecords extends Model
{
    public $table= 'log_records';

    protected $dates = [
        'created_at',
        'updated_at'
    ];
}


