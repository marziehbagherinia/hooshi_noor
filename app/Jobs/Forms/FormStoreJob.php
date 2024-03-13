<?php

namespace App\Jobs\Forms;

use App\Models\Forms\Form;
use Illuminate\Support\Arr;
use App\Models\FormSkills\FormSkill;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Models\FormEducations\FormEducation;

class FormStoreJob implements ShouldQueue
{
    use Dispatchable, SerializesModels;

    /**
     * @var
     */
    private $data;

    private $columns = [
        'user_name',
        'filler_name',
        'age',
        'gender',
        'job',
        'preferred_learning_format',
        'learning_goal',
    ];

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct( $data )
    {
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function handle(): mixed
    {
        $form = Form::create( Arr::only( $this->data, $this->columns ) );

        if ( isset( $this->data[ 'educations' ] ) )
        {
            for ( $i = 0; $i < count( $this->data[ 'educations' ] ); $i += 2 )
            {
                FormEducation::create( array_merge( $this->data[ 'educations' ][ $i ], $this->data[ 'educations' ][ $i + 1 ] ), [ 'form_id' => $form->id ] );
            }
        }

        if ( isset( $this->data[ 'skills' ] ) )
        {
            for ( $i = 0; $i < count( $this->data[ 'skills' ] ); $i += 2 )
            {
                FormSkill::create( array_merge( $this->data[ 'skills' ][ $i ], $this->data[ 'skills' ][ $i + 1 ] ), [ 'form_id' => $form->id ] );
            }
        }

        return $form;
    }
}
