<?php

namespace LucaDegasperi\OAuth2Server\Models;

use Illuminate\Database\Eloquent\Model;

class OauthAccessTokenScope extends Model
{

    /**
     * The collection associated with the model.
     *
     * @var string
     */
    protected $collection = 'oauth_access_token_scopes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'access_token_id',
        'scope_id',
    ];

    /**
     * oauthScope.
     */
    public function oauthScope()
    {
        return $this->belongsTo('LucaDegasperi\OAuth2Server\Models\OauthScope');
    }

}
