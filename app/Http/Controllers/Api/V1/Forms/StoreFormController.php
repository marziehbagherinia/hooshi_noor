<?php

namespace App\Http\Controllers\Api\V1\Forms;

use App\Jobs\Forms\FormStoreJob;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class StoreFormController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke( Request $request ): JsonResponse
    {
        $fillerName = $request->input('filler_name');
        $userName = $request->input('user_name');
        $age = $request->input('age');
        $gender = $request->input('gender');
        $educations = $request->input('educations');
        $job = $request->input('job');
        $preferredLearningFormat = $request->input('preferred_learning_format');
        $learningGoal = $request->input('learning_goal');
        $skills = $request->input('skills');
//        $inputs = $request->validated();


        FormStoreJob::dispatchSync( $request );

        return response()->json( [ 'result' => 'ok' ], 222 );
    }
}
