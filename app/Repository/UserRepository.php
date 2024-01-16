<?php

namespace App\Repository;

use App\Model\User;
use App\Repository\Contract\UserRepository as UserWriterRepository;

class UserRepository implements UserWriterRepository
{
    /**
     * @var  User
     */
    private $model;

    /**
     * @param User $model
     */
    public function __construct(User $model)
    {
        $this->model = $model;
    }


    /**
     * @param array $data
     *
     * @return bool
     */
    public function create(array $data)
    {
        //$instance = $this->model->newInstance($data);

        //return $instance->saveOrFail();

        return true;
    }
}