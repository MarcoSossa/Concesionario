<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Venta
 * 
 * @property int $id_venta
 * @property int|null $id_automovil
 * @property int|null $id_persona_vendedor
 * @property int|null $id_servicio
 * @property float $precio_cobrado
 * @property string $modo_pago
 * @property Carbon|null $fecha_entrega
 * @property string|null $matricula
 * 
 * @property Automovile|null $automovile
 * @property Persona|null $persona
 * @property ServiciosOficiale|null $servicios_oficiale
 * @property Collection|VentasExtra[] $ventas_extras
 *
 * @package App\Models
 */
class Venta extends Model
{
	protected $table = 'ventas';
	protected $primaryKey = 'id_venta';
	public $timestamps = false;

	protected $casts = [
		'id_automovil' => 'int',
		'id_persona_vendedor' => 'int',
		'id_servicio' => 'int',
		'precio_cobrado' => 'float',
		'fecha_entrega' => 'datetime'
	];

	protected $fillable = [
		'id_automovil',
		'id_persona_vendedor',
		'id_servicio',
		'precio_cobrado',
		'modo_pago',
		'fecha_entrega',
		'matricula'
	];

	public function automovile()
	{
		return $this->belongsTo(Automovile::class, 'id_automovil');
	}

	public function persona()
	{
		return $this->belongsTo(Persona::class, 'id_persona_vendedor');
	}

	public function servicios_oficiale()
	{
		return $this->belongsTo(ServiciosOficiale::class, 'id_servicio');
	}

	public function ventas_extras()
	{
		return $this->hasMany(VentasExtra::class, 'id_venta');
	}
}
