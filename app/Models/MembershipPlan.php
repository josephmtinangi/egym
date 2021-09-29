<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembershipPlan extends Model
{
    use HasFactory;

    public function member()
    {
        return $this->belongsToMany(Member::class)->withPivot('start_date', 'end_date', 'active');
    }
}
