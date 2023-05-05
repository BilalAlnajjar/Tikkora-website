<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = FALSE;

    public function links(){
        return $this->hasMany(Link::class);
    }

    public function getPartydateAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date);
    }
}
