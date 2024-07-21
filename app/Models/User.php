<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

use App\Models\Scopes\UserScope;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'title',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    ############# relationships

    public function phone(){
        return $this->hasone(Phone::class,'user_id');
    }

   public function posts():HasMany{
    return $this->hasMany(Posts::class);
   }

   public function comments():HasManyThrough
   {
    return  $this->hasManyThrough(Comments::class, posts::class,'user_id','post_id','id','id');
   }

   public function comment():HasOneThrough
   {
    return  $this->HasOneThrough(Comments::class, posts::class,'user_id','post_id','id','id');
   }


   public function group():BelongsToMany
   {
    return $this->BelongsToMany(group::class,'Usergroup','user_id','group_id')
    ->as("community")
    ->withPivot('active')
    ->withTimestamps();
   }


   ################ start scope

  ////local scope
   public function scopevalid($q){
        $q->where("id",">",'55')->where("expire",1);
   }

   // global scope

   protected static function booted(): void
   {
       static::addGlobalScope(new UserScope);
   }

   ################ end scopes

}
