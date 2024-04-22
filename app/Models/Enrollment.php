<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_year',
        'grade_to_enroll',
        'with_lrn',
        'balik_aral',
        'track',
        'strand',
        'specialization',
        'psa_no',
        'lrn',
        'name',
        'birthdate',
        'age',
        'sex',
        'birth_place',
        'mother_tongue',
        'house_no',
        'street',
        'brngy',
        'mun_city',
        'province',
        'country',
        'zip_code',
        'f_lastname',
        'f_firstname',
        'f_midname',
        'f_contact_no',
        'm_lastname',
        'm_firstname',
        'm_midname',
        'm_contact_no',
        'g_lastname',
        'g_firstname',
        'g_midname',
        'g_contact_no',
    ];
}
