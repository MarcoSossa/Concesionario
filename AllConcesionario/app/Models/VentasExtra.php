<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VentasExtra
 * 
 * @property int $id_venta
 * @property int $id_extra
 * @property float $precio_extra
 * 
 * @property Venta $venta
 * @property EquipamientoExtra $equipamiento_extra
 *
 * @package App\Models
 */
class VentasExtra extends Model
{
	protected $table = 'ventas_extras';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_venta' => 'int',
		'id_extra' => 'int',
		'precio_extra' => 'float'
	];

	protected $fillable = [
		'precio_extra'
	];

	public function venta()
	{
		return $this->belongsTo(Venta::class, 'id_venta');
	}

	public function equipamiento_extra()
	{
		return $this->belongsTo(EquipamientoExtra::class, 'id_extra');
	}
}
