<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $fillable = [
        'one_title',
        'one_index',
        'one_street',
        'one_phone',
        'one_email',
        'two_title',
        'two_prodazi_1_phone',
        'two_prodazi_2_phone',
        'two_snabzenie_1_phone',
        'two_technologi_1_phone',
        'tri_title',
        'tri_phone',
        'four_title',
        'four_phone',
    ];
}
