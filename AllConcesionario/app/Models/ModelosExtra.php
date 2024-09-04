<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ModelosExtra
 * 
 * @property int $id_modelo
 * @property int $id_extra
 * 
 * @property Modelo $modelo
 * @property EquipamientoExtra $equipamiento_extra
 *
 * @package App\Models
 */
class ModelosExtra extends Model
{
	protected $table = 'modelos_extras';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_modelo' => 'int',
		'id_extra' => 'int'
	];

	public function modelo()
	{
		return $this->belongsTo(Modelo::class, 'id_modelo');
	}

	public function equipamiento_extra()
	{
		return $this->belongsTo(EquipamientoExtra::class, 'id_extra');
	}
}
