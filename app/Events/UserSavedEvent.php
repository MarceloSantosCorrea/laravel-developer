<?php

namespace App\Events;

use App\Models\User;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserSavedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var User
     */
    public $user;
    /**
     * @var array
     */
    public $data;

    /**
     * UserSavedEvent constructor.
     * @param  User  $user
     * @param  array  $data
     */
    public function __construct(User $user, array $data = [])
    {
        $this->user = $user;
        $this->data = $data;
    }
}
