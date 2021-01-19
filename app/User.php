<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function movies()
    {
        return $this->hasMany(Movie::class);
    }

    public function followings()
    {
        return $this->belongsToMany(User::class, 'user_follow', 'user_id', 'follow_id')->withTimestamps();
    }

    public function followers()
    {
        return $this->belongsToMany(User::class, 'user_follow', 'follow_id', 'user_id')->withTimestamps();
    }


    public function is_following($userId)
    {
        return $this->followings()->where('follow_id', $userId)->exists();
    }

    public function follow($userId)
    {
        // すでにフォロー済みではないか？
        $exist = $this->is_following($userId);
        // フォローする相手がユーザ自身ではないか？
        $myself = $this->id == $userId;

        // フォロー済みではない、かつフォロー相手がユーザ自身ではない場合、フォロー
        if (!$exist && !$myself) {
            $this->followings()->attach($userId);
        }
    }

    public function unfollow($userId)
    {
        // すでにフォロー済みではないか？
        $exist = $this->is_following($userId);
        // フォローを外す相手がユーザ自身ではないか？
        $myself = $this->id == $userId;

        // すでにフォロー済み、かつフォロー相手がユーザ自身ではない場合、フォローを外す
        if ($exist && !$myself) {
            $this->followings()->detach($userId);
        }
    }
}
