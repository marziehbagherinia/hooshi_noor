<?php

namespace App\Jobs\Forms;

use App\Models\Users\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Exceptions\Users\UserNotFoundException;

class FormUpdateJob implements ShouldQueue
{

    use Dispatchable, SerializesModels;

    /**
     * @var
     */
    private $id;

    /**
     * @var
     */
    private $data;


    private $columns = [
        'phone_number',
        'password',
        'first_name',
        'last_name',
        'email',
    ];

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct( $id, $data )
    {
        $this->id   = $id;
        $this->data = $data;
    }

    /**
     * @return mixed
     * @throws UserNotFoundException
     */
    public function handle(): mixed
    {
        $user = User::where( 'id', $this->id )->first();

        if ( !isset( $user ) )
        {
            throw new UserNotFoundException();
        }

        if ( isset( $this->data[ 'password' ] ) )
        {
            $this->data[ 'password' ] = Hash::make( $this->data[ 'password' ] );
        }

        $user->update( Arr::only($this->data, $this->columns ) );

        return $user;
    }

}
