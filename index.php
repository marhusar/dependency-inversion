<?php

require 'autoload.php';

$writer = new \App\Writer\UserWriter(
    new \App\Repository\UserRepository(new \App\Model\User()),
    new \App\Event\LaravelDispatcherAdapter(new \Illuminate\Events\Dispatcher())
);

echo $writer->addUser(new \App\Model\User(['email' => 'example@email.com']));