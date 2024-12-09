<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Subscription extends Model
{
        use Notifiable;  // <-- Ensure the model uses the Notifiable trait

    public function users()
    {
        return $this->hasMany(User::class);
    }
         protected $table = 'subscriptions';


     protected $fillable = [
       'name',
        'email',
        'coachprefer',
        'phone_number',
        'sessiontrain',
        'paymentmethod',
        'status',
        'userid'
    ];
}