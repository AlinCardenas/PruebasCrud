<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FillReport extends Model
{
    use HasFactory;
    protected $fillable = [ 'name','amount','payment_concept','payment_date','invoice'];
}
