<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HouseholdLocation extends Model
{
    use HasFactory;

    protected $table = "household_locations";
    protected $fillable = ['sub_group_id', 'household_name'];

    public function subgroup()
    {
        return $this->belongsTo(SubGroup::class, 'sub_group_id');
    }
}
