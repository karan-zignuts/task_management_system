<?php

namespace App\Models;
use App\Model\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';
    protected $primarykey = 'id';
    protected $fillable = ['title', 'description', 'due_date',];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}