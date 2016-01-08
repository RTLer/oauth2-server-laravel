<?php

namespace LucaDegasperi\OAuth2Server\Models;

use Illuminate\Database\Eloquent\Model;

class OauthAuthCode extends Model
{

    /**
     * The collection associated with the model.
     *
     * @var string
     */
    protected $collection = 'oauth_auth_codes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['*'];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
//    protected $guarded = ['*'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
//    protected $hidden = ['*'];
}
