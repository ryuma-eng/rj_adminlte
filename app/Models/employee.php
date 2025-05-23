<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $table = 'employee_tb_table__';
    protected $fillable = [
        'fname',
        'Midname',
        'lname',
        'age',
        'add',
        'zip'
    ];
}