<?php

use munkireport\models\MRModel as Eloquent;

class Quarantined_model extends Eloquent
{
    protected $table = 'Quarantined';

    protected $fillable = [
      'serial_number',
      'item1',
      'item2',
    ];

    public $timestamps = false;

}
