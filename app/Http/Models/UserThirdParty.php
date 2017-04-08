<?php
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class UserThirdParty extends Model
{
    protected $fillable = [
        'nickname','third_party_id','third_party_email', 'user_id','third_party_type','avatar',
    ];
    public $timestamps = false;
    protected $table = 'users_third_party';
    protected $primaryKey = 'user_third_party_id';
}