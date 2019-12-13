<?php

namespace App\Http\Controllers;

use App\PartsAuthority\Requests\RequestData;
use Illuminate\Http\Request;

class OrderEntryController extends Controller {
    public function handle(Request $request) {
        /* @var $reqData RequestData */
        $reqData = RequestData::getFromJson($request->get('reqData'));
        
        return $reqData->handleAction();
    }
}
