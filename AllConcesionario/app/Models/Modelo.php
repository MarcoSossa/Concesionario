<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Modelo
 * 
 * @property int $id_modelo
 * @property int|null $id_marca
 * @property string $nombre_modelo
 * @property float $precio_base
 * @property float|null $descuento
 * @property float|null $potencia_fiscal
 * @property int|null $cilindrada
 * 
 * @property Marca|null $marca
 * @property Collection|Automovile[] $automoviles
 * @property Collection|EquipamientoSerie[] $equipamiento_series
 * @property Collection|ModelosExtra[] $modelos_extras
 *
 * @package App\Models
 */
class Modelo extends Model
{
	protected $table = 'modelos';
	protected $primaryKey = 'id_modelo';
	public $timestamps = false;

	protected $casts = [
		'id_marca' => 'int',
		'precio_base' => 'float',
		'descuento' => 'float',
		'potencia_fiscal' => 'float',
		'cilindrada' => 'int'
	];

	protected $fillable = [
		'id_marca',
		'nombre_modelo',
		'precio_base',
		'descuento',
		'potencia_fiscal',
		'cilindrada'
	];

	public function marca()
	{
		return $this->belongsTo(Marca::class, 'id_marca');
	}

	public function automoviles()
	{
		return $this->hasMany(Automovile::class, 'id_modelo');
	}

	public function equipamiento_series()
	{
		return $this->hasMany(EquipamientoSerie::class, 'id_modelo');
	}

	public function modelos_extras()
	{
		return $this->hasMany(ModelosExtra::class, 'id_modelo');
	}
}
