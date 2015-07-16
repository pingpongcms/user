<?php namespace Pingpong\Cms\User\Entities;
   
use Illuminate\Database\Eloquent\Model;

class User extends Model {

    protected $fillable = [
    	'name',
    	'username',
    	'email',
    	'password',
    	'confirmed'
    ];

}