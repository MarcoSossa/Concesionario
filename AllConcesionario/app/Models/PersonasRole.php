<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PersonasRole
 * 
 * @property int $id_persona
 * @property int $id_rol
 * 
 * @property Persona $persona
 * @property Role $role
 *
 * @package App\Models
 */
class PersonasRole extends Model
{
	protected $table = 'personas_roles';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_persona' => 'int',
		'id_rol' => 'int'
	];

	public function persona()
	{
		return $this->belongsTo(Persona::class, 'id_persona');
	}

	public function role()
	{
		return $this->belongsTo(Role::class, 'id_rol');
	}
}
