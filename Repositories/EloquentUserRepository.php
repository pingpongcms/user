<?php

namespace Pingpong\Cms\User\Repositories;

use Pingpong\Cms\User\Entities\User;
use Pingpong\Cms\User\Repositories\UserRepository;
use Prettus\Repository\Eloquent\BaseRepository;

class EloquentUserRepository extends BaseRepository implements UserRepository
{
    /**
     * @return string
     */
    public function model()
    {
        return User::class;
    }
}