<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\TestJob;
class JobsController extends Controller
{
    public function setJobs(){
        TestJob::dispatch();
    }
}
