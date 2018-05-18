<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'user_id',
        'client_name',
        'client_website',
        'client_status',
        'client_address',
        'client_city',
        'client_state',
        'client_zip',
        'client_phone',
        'client_notes'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function contact() {
        return $this->hasOne(Contact::class);
    }

    public function domain() {
        return $this->hasOne(Domain::class);
    }

    public function server() {
        return $this->hasOne(Server::class);
    }
}
