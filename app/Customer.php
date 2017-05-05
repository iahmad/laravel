<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Model
{
  use Notifiable;

  protected $fillable = [
      'name', 'email', 'password', 'api_token',
  ];
 
  protected $hidden = [
      'password', 'remember_token',
  ];

}
