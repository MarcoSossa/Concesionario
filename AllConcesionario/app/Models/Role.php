<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 * 
 * @property int $id_rol
 * @property string $nombre_rol
 * 
 * @property Collection|Persona[] $personas
 *
 * @package App\Models
 */
class Role extends Model
{
	protected $table = 'roles';
	protected $primaryKey = 'id_rol';
	public $timestamps = false;

	protected $fillable = [
		'nombre_rol'
	];

	public function personas()
	{
		return $this->belongsToMany(Persona::class, 'personas_roles', 'id_rol', 'id_persona');
	}
}
