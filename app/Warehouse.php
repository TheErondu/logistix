<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Warehouse extends Model
{
  use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'business_name', 'capacity', 'address', 'description',
    ];

     /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'warehouse_added_at' => 'datetime',
    ];

    public function Warehouser()
    {
        return $this->belongsTo('App\User');
    }

}
