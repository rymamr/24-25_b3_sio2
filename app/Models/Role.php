<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

/**
 * Class Role
 * 
 * @property int $id
 * @property string $label
 * 
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class Role extends Model
{
	use HasFactory, Notifiable;

	#protected $table = 'PFX_roles';
	public $timestamps = false;

	protected $fillable = [
		'label'
	];

	public function users()
	{
		return $this->hasMany(User::class, 'id_role');
	}
}
