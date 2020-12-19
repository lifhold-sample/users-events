<?php

declare(strict_types=1);

namespace Lifhold\Users\Events;

use Illuminate\Queue\SerializesModels;
use Lifhold\Users\Contracts\User;

abstract class UserAggregateEvent
{
    use SerializesModels;

    protected User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public final function getUser(): User
    {
        return $this->user;
    }
}
