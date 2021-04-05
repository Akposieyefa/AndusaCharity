<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Concerns\UsesUuid;

class Trustee extends Model
{
    use HasFactory, SoftDeletes, UsesUuid;

    protected $fillable = [
        'name','email','phone','address','occupation','bio','passport'
    ];
}
