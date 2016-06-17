<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use phpbrowscap\Browscap;

class UserAgentController extends Controller 
{

    private static $cacheDir = 'cache';
    private $browscap;

    public function __construct()
    {
         $this->browscap = new Browscap(self::$cacheDir);
         $this->browscap->doAutoUpdate = false;
    }
    
    public function index() 
    {
        $info = $this->browscap->getBrowser();
        return response()->json($info);
    }
    
    public function getUserData(Request $request)
    {
        $info = $this->browscap->getBrowser($request->input('useragent'));
        return response()->json($info);
    }
    
    public function update()
    {
        $this->browscap->updateCache();
    }

}
