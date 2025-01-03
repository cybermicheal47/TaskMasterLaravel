<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Todotask extends Model
{
    //

    protected $table = 'todotask';


    protected $fillable = [
        'title',        // Add title
        'description',  // Add description
        'file_path',    // Add file_path if needed
        'status',    //Page status
        'due_date',

    ];
}

