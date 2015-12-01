<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use DB;

class Users extends Model implements AuthenticatableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, CanResetPassword, EntrustUserTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * Get user condition depends user role
     *
     * @return string condition
     */
    public function userIdCondition()
    {
        if ($this->hasRole('administrator')) {
            return 'user_id IS NOT NULL';
        }

        if ($this->hasRole('manager')) {
            $userIds = $this->newQuery()->where('manager_id', '=', $this->id)->lists('id');

            if ($userIds->count() > 0) {
                return 'user_id IN('.$userIds->implode(',').')';
            }

            return 'user_id=0';
        }

        return 'user_id = '.$this->id;
    }
}
