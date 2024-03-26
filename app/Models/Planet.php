<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    use HasFactory;

    protected $table = 'planets';

    protected $primaryKey = 'index';

    public $incrementing = false;

    protected $fillable = [
        'index',
        'owner',
        'health',
        'regenPerSecond',
        'players',
        'created_at'
    ];

    public function history() {
        return $this->hasMany(PlanetHistory::class, 'index', 'index');
    }
}