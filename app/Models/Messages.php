<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Messages extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'message';
    protected $guarded = ['id'];
    protected $fillable = [
        'sender_id', 'reciver_id', 'body'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */


}
