<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Concesionario
 * 
 * @property int $id_concesionario
 * @property string $nombre_concesionario
 * @property string|null $direccion
 * @property string $nif
 * 
 * @property Collection|ServiciosOficiale[] $servicios_oficiales
 *
 * @package App\Models
 */
class Concesionario extends Model
{
	protected $table = 'concesionarios';
	protected $primaryKey = 'id_concesionario';
	public $timestamps = false;

	protected $fillable = [
		'nombre_concesionario',
		'direccion',
		'nif'
	];

	public function servicios_oficiales()
	{
		return $this->hasMany(ServiciosOficiale::class, 'id_concesionario');
	}
}
