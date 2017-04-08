<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;

class Admin extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
	use Authenticatable;
	
	protected $primaryKey = 'admin_id';

	public static function getAdmin() {

		$adm = Admin::all();
        return $adm;

	}
}

