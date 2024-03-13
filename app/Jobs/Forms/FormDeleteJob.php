<?php

namespace App\Jobs\Forms;

use App\Models\Users\User;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Exceptions\Users\UserNotFoundException;

class FormDeleteJob implements ShouldQueue
{
    use Dispatchable, SerializesModels;

    private $inputs;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($inputs)
    {
        $this->inputs = $inputs;

    }

    /**
     * @return mixed
     * @throws UserNotFoundException
     */
    public function handle(): mixed
    {
        $user = User::showOrFail( $this->inputs[ 'id' ] );

        $user->delete();

        return $user;
    }
}
