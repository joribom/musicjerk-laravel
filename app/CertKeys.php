<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class CertKeys extends Model
{
    use Notifiable;

    protected $primaryKey = 'key';
    public $incrementing = false;
}
