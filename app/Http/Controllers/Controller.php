<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function execute_api($url, $params, $keyword) {
        $query = http_build_query($params, "", "&");
        $search_url = $url . '?' . $query . '&keyword=' . $keyword;
        dd($search_url);

        return file_get_contents($search_url);
    }
}
