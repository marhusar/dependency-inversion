<?php

namespace App\Repository\Contract;

interface UserRepository
{
    /**
     * @param array $data
     *
     * @return bool
     */
    public function create(array $data);
}