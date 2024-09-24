<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobList extends Model
{
    use HasFactory, HasUuids;

    public $primaryKey = 'job_id';

    public $timestamps = false;

    protected $fillable = [
        'job_no',
        'job_details',
        'keywords',
        'currency_id',
        'country_id',
        'industry_id',
        'min_salary',
        'max_salary',
        'applicable_visa',
    ];
}
