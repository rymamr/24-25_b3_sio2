<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Gender
 * 
 * @property string $code
 * @property string $label
 * 
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class Gender extends Model
{
	protected $table = 'PFX_genders';
	protected $primaryKey = 'code';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'label'
	];

	public function users()
	{
		return $this->hasMany(User::class, 'code_gender');
	}
}
