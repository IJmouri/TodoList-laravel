<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['Task_Name','Completion_Date','Completion_Status'];

   	public function user()
    {
        return $this->belongsTo(User::class);
    }
	public function scopeActive($query)
    {
        return $query->where('Completion_Status', 1);
    }
    
}
