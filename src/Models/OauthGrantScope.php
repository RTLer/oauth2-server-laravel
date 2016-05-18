<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OauthGrantScope extends Model
{

    /**
     * The collection associated with the model.
     *
     * @var string
     */
    protected $collection = 'oauth_grant_scopes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'grant_id',
        'scope_id'
    ];
}
