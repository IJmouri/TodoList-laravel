<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Item extends Model
{
    protected $fillable = ['Task_Name','Completion_Date','Completion_Status'];

   	public function user()
    {
        return $this->belongsTo(User::class);
    }
	
    
}
