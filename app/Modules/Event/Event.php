<?php

namespace App\Modules\Event;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Event extends Model
{
     protected $table = 'events';


      public function creator()
      {

        return $this->belongsTo(User::class, 'user_id');
      }
}
