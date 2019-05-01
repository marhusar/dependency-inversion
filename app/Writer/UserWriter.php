<?php

namespace App\Writer;

use App\Event\NewUserSavedEvent;
use App\Model\Contract\User;
use App\Repository\Contract\UserRepository;

class UserWriter
{
    /** @var UserRepository */
    private $userRepository;

    /** @var \App\Event\Dispatcher */
    private $eventDispatcher;

    /**
     * @param UserRepository        $userRepository
     * @param \App\Event\Dispatcher $eventDispatcher
     */
    public function __construct(UserRepository $userRepository, \App\Event\Dispatcher $eventDispatcher)
    {
        $this->userRepository  = $userRepository;
        $this->eventDispatcher = $eventDispatcher;
    }

    /**
     * @param User $user
     *
     * @return bool
     */
    public function addUser(User $user)
    {
        $result = $this->saveUser($user);
        $event  = new NewUserSavedEvent($user);

        $this->eventDispatcher->dispatch($event,[$user]);

        return $result;
    }

    /**
     * @param User $user
     *
     * @return bool
     */
    public function saveUser(User $user)
    {
        return $this->userRepository->create($user->toArray());
    }
}


