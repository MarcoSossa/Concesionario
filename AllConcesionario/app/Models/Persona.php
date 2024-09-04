<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Persona
 * 
 * @property int $id_persona
 * @property string $nombre
 * @property string $nif
 * @property string|null $direccion
 * @property string|null $telefono
 * @property string|null $email
 * 
 * @property Collection|Role[] $roles
 * @property Collection|Venta[] $ventas
 *
 * @package App\Models
 */
class Persona extends Model
{
	protected $table = 'personas';
	protected $primaryKey = 'id_persona';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'nif',
		'direccion',
		'telefono',
		'email'
	];

	public function roles()
	{
		return $this->belongsToMany(Role::class, 'personas_roles', 'id_persona', 'id_rol');
	}

	public function ventas()
	{
		return $this->hasMany(Venta::class, 'id_persona_vendedor');
	}
}
