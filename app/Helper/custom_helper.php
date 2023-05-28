<?php

namespace App\Helper;

use Illuminate\Http\Request;
use App\User;

class custom_helper
{
    public function writeToLog(Request $request) {
        if(empty($request)) return;
        $msg = array_shift($request);
        $logtype="LOG";
        $level=1;

        $today = date('Y-m-d');
        if(empty($this->logfile)) {
            $logfileName = $this->name . '-' . $this->params['action'] . '-' . $today . ".log";
        } else {
            $logfileName = $this->logfile . '-' . $today . ".log";
        }
    }
}
