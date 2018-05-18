<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
      'contact_first_name',
      'contact_last_name',
      'contact_phone',
      'contact_email',
      'contact_notes'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function client() {
        return $this->belongsTo(Client::class, 'client_id');
    }
}
