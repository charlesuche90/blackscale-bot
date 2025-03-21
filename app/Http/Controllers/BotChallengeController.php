<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\BotChallengeJob;

class BotChallengeController extends Controller
{
    public function runJob()
    {
        BotChallengeJob::dispatch();
        return response()->json(['message' => 'Job has been dispatched!']);
    }
}
