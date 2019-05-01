<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model implements \App\Model\Contract\User
{
    /** @var string */
    private $email;

    protected $fillable = ['email'];

    /**
     * @return string
     */
    public function email(): string
    {
        return $this->email;
    }

    /**
     * @return int
     */
    public function id(): int
    {
        return $this->attributes[$this->getKeyName()];
    }
}