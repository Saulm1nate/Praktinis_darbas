<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['assign_to', 'task', 'due', 'desc'];

    protected $table = 'tasks';

    use HasFactory;
}
