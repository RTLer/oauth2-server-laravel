<?php

namespace LucaDegasperi\OAuth2Server\Models;

use Illuminate\Database\Eloquent\Model;

class OauthClientScope extends Model
{

    /**
     * The collection associated with the model.
     *
     * @var string
     */
    protected $collection = 'oauth_client_scopes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'client_id',
        'scope_id'
    ];
}
