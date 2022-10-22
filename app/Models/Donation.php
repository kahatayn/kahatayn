<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
<<<<<<< HEAD
    protected $table = 'donations';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'email','card_num', 'amount',
	];
}
=======
    use HasFactory;
}
>>>>>>> c53e042863812bee9e4eeb422bbdb167a6f92db8
