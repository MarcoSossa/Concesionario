<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Automovile
 * 
 * @property int $id_automovil
 * @property int|null $id_modelo
 * @property string $ubicacion
 * @property bool $es_stock
 * 
 * @property Modelo|null $modelo
 * @property Collection|Venta[] $ventas
 *
 * @package App\Models
 */
class Automovile extends Model
{
	protected $table = 'automoviles';
	protected $primaryKey = 'id_automovil';
	public $timestamps = false;

	protected $casts = [
		'id_modelo' => 'int',
		'es_stock' => 'bool'
	];

	protected $fillable = [
		'id_modelo',
		'ubicacion',
		'es_stock'
	];

	public function modelo()
	{
		return $this->belongsTo(Modelo::class, 'id_modelo');
	}

	public function ventas()
	{
		return $this->hasMany(Venta::class, 'id_automovil');
	}
}
