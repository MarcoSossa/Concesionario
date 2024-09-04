<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ServiciosOficiale
 * 
 * @property int $id_servicio
 * @property int|null $id_concesionario
 * @property string $nombre_servicio
 * @property string|null $direccion
 * @property string $nif
 * 
 * @property Concesionario|null $concesionario
 * @property Collection|Venta[] $ventas
 *
 * @package App\Models
 */
class ServiciosOficiale extends Model
{
	protected $table = 'servicios_oficiales';
	protected $primaryKey = 'id_servicio';
	public $timestamps = false;

	protected $casts = [
		'id_concesionario' => 'int'
	];

	protected $fillable = [
		'id_concesionario',
		'nombre_servicio',
		'direccion',
		'nif'
	];

	public function concesionario()
	{
		return $this->belongsTo(Concesionario::class, 'id_concesionario');
	}

	public function ventas()
	{
		return $this->hasMany(Venta::class, 'id_servicio');
	}
}
