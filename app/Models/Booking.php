<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Booking
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property int $travel_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Travel $travel
 *
 * @package App\Models
 */
class Booking extends Model
{
	protected $table = 'booking';

	protected $casts = [
		'travel_id' => 'int'
	];

	protected $fillable = [
		'name',
		'email',
		'phone',
		'travel_id'
	];

	public function travel()
	{
		return $this->belongsTo(Travel::class);
	}
}
