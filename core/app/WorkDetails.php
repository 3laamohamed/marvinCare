<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkDetails extends Model
{
    protected $table = 'work_details';
    protected $guarded = [];

    public function bcategory()
    {
        return $this->belongsTo('App\WorkCategory');
    }
}
