<?php

namespace App\Event;

use App\Model\Contract\User;

class NewUserSaved
{
    /** @var User */
    private $user;

    /**
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }
}