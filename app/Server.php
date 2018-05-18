<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    protected $fillable = [
      'user_id',
      'client_id',
      'server_company_name',
        'server_due_date',
        'server_past_due',
        'server_notes'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function client() {
        return $this->belongsTo(Client::class, 'client_id');
    }
}
