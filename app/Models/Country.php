<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Country extends Model
{
    use HasFactory, HasUuids;

    public $primaryKey = 'country_id';

    public $timestamps = false;

    protected $fillable = [
        'country_name',
    ];
}
