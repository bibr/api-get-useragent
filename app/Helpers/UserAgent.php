<?php

namespace App\Helpers;

use App\Helpers\Contracts\UserAgentContract;
use phpbrowscap\Browscap;

class UserAgent implements UserAgentContract {

    private static $cacheDir = 'cache';
    public $browscap;

    public function __construct() {
        $this->browscap = new Browscap(self::$cacheDir);
        $this->browscap->doAutoUpdate = false;
    }

}
