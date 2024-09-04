<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EquipamientoExtra
 * 
 * @property int $id_extra
 * @property string $descripcion
 * @property float $precio_extra
 * 
 * @property Collection|ModelosExtra[] $modelos_extras
 * @property Collection|VentasExtra[] $ventas_extras
 *
 * @package App\Models
 */
class EquipamientoExtra extends Model
{
	protected $table = 'equipamiento_extra';
	protected $primaryKey = 'id_extra';
	public $timestamps = false;

	protected $casts = [
		'precio_extra' => 'float'
	];

	protected $fillable = [
		'descripcion',
		'precio_extra'
	];

	public function modelos_extras()
	{
		return $this->hasMany(ModelosExtra::class, 'id_extra');
	}

	public function ventas_extras()
	{
		return $this->hasMany(VentasExtra::class, 'id_extra');
	}
}
