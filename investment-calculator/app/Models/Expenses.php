<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{
    protected $table = "expenses";

    protected $guarded = [];

    public function report()
    {
        return $this->belongsTo('App\Models\Report');
    }
}
