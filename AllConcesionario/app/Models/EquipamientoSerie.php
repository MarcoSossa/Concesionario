<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EquipamientoSerie
 * 
 * @property int $id_equipamiento
 * @property int|null $id_modelo
 * @property string $descripcion
 * 
 * @property Modelo|null $modelo
 *
 * @package App\Models
 */
class EquipamientoSerie extends Model
{
	protected $table = 'equipamiento_serie';
	protected $primaryKey = 'id_equipamiento';
	public $timestamps = false;

	protected $casts = [
		'id_modelo' => 'int'
	];

	protected $fillable = [
		'id_modelo',
		'descripcion'
	];

	public function modelo()
	{
		return $this->belongsTo(Modelo::class, 'id_modelo');
	}
}
