<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campaigns extends Model
{
    protected $fillable = ['user_id', 'name', 'budget'];

    public function user()
    {
        return $this->belongsTo('App\Models\Users', 'user_id');
    }

    public function adwords()
    {
        return $this->hasOne('App\Models\AdwordsCampaigns', 'campaign_id');
    }
}