<?php

namespace App\Writer;

use App\Event\NewUserSaved;
use App\Model\Contract\User;
use App\Repository\UserRepository;
use Illuminate\Events\Dispatcher;

class UserWriter
{
    /** @var UserRepository */
    private $userRepository;

    /** @var Dispatcher */
    private $eventDispatcher;

    /**
     * @param UserRepository $userRepository
     * @param Dispatcher     $eventDispatcher
     */
    public function __construct(UserRepository $userRepository, Dispatcher $eventDispatcher)
    {
        $this->userRepository  = $userRepository;
        $this->eventDispatcher = $eventDispatcher;
    }

    /**
     * @param User $user
     */
    public function addUser(User $user)
    {
        $result = $this->saveUser($user);
        $event  = new NewUserSaved($user);

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


