<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class CertKeys extends Model
{
    use Notifiable;

    protected $primaryKey = 'key';
    public $incrementing = false;
}
