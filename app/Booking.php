<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class booking extends Model
{
  use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'user_id', 'location', 'cargo_type', 'e_t_a', 'e_t_d', 'capacity',
    ];
     /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
      'added_at' => 'datetime',
    ];

    public function User()
    {
        return $this->belongsTo('App\User');
    }
}