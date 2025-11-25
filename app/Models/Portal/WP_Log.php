<?php

namespace App\Models\Portal;

use Illuminate\Database\Eloquent\Model;

class WP_Log extends Model
{
    protected $table = 'wp_log';

    protected $fillable = [
        'data',
    ];
}
