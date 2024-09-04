<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Marca
 * 
 * @property int $id_marca
 * @property string $nombre_marca
 * 
 * @property Collection|Modelo[] $modelos
 *
 * @package App\Models
 */
class Marca extends Model
{
	protected $table = 'marcas';
	protected $primaryKey = 'id_marca';
	public $timestamps = false;

	protected $fillable = [
		'nombre_marca'
	];

	public function modelos()
	{
		return $this->hasMany(Modelo::class, 'id_marca');
	}
}
