<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

/**
 * The main controller
 * @return Response
 */
class Controller extends BaseController
{
    $this->nothing = 0;
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
