<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Order extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'Foodname','Qty', 'Unit','Amount','Userid',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
         'remember_token',
    ];
    public function item()
      {
           return $this->hasMany('App\Item');
      }
      public function users()
      {
           return $this->belongsTo('App\User','Userid');
      }
}