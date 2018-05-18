<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    protected $fillable = [
      'user_id',
      'client_id',
      'domain_purchased_through',
      'domain_years_paid',
      'domain_expire_date',
      'domain_ssl',
      'domain_ssl_expire_date',
      'domain_email',
      'domain_notes'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function client() {
        return $this->belongsTo(Client::class, 'client_id');
    }
}
