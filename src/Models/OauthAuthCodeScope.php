<?php

namespace LucaDegasperi\OAuth2Server\Models;

use Illuminate\Database\Eloquent\Model;

class OauthAuthCodeScope extends Model
{

    /**
     * The collection associated with the model.
     *
     * @var string
     */
    protected $collection = 'oauth_auth_code_scopes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'auth_code_id',
        'scope_id'
    ];
}
