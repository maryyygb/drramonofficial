<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;

use App\Http\Controllers\AwardController;

class Award extends Model
{
    use HasFactory;

    protected $table = 'awards';

    protected $fillable = [
        // 'award_photo',
        'award_name',
        'award_date',
        'award_description'
    ];

    // public $timestamp  = true;
}
