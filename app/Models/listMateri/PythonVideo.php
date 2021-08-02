<?php

namespace App\Models\listMateri;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PythonVideo extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'link'];
}
