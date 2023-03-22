<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Travel
 * 
 * @property int $id
 * @property string $judul
 * @property string $deskripsi
 * @property string $harga
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|Booking[] $bookings
 *
 * @package App\Models
 */
class Travel extends Model
{
	use SoftDeletes;
	protected $table = 'travel';

	protected $fillable = [
		'judul',
		'deskripsi',
		'harga'
	];

	public function bookings()
	{
		return $this->hasMany(Booking::class);
	}
}
