<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Contracts\UserAgentContract;

class UserAgentController extends Controller 
{


    public function __construct()
    {
    }
    
    public function index(UserAgentContract $userAgent) 
    {
        $info = $userAgent->browscap->getBrowser();
        return response()->json($info);
    }
    
    public function getUserData(Request $request, UserAgentContract $userAgent)
    {
        $info = $userAgent->browscap->getBrowser($request->input('useragent'));
        return response()->json($info);
    }
    
    public function update(UserAgentContract $userAgent)
    {
        $userAgent->browscap->updateCache();
    }

}
